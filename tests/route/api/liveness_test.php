<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace local_health\route\api;

use core\tests\router\route_testcase;

/**
 * Tests for the liveness endpoint.
 *
 * @package    local_health
 * @category   test
 * @copyright  2026 Roberto Bravo
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_health\route\api\liveness
 */
final class liveness_test extends route_testcase {
    /**
     * Test the liveness response.
     */
    public function test_get_liveness(): void {
        $this->add_class_routes_to_route_loader(liveness::class);

        $response = $this->process_api_request('GET', '/live');

        $this->assert_valid_response($response);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('application/json; charset=utf-8', $response->getHeaderLine('Content-Type'));
        $this->assertSame('no-store', $response->getHeaderLine('Cache-Control'));
        $this->assertSame(['status' => 'UP'], $this->decode_response($response, true));
    }
}
