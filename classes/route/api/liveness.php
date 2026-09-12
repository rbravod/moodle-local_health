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

use core\param;
use core\router\route;
use core\router\schema\header_object;
use core\router\schema\objects\scalar_type;
use core\router\schema\objects\schema_object;
use core\router\schema\response\content\json_media_type;
use core\router\schema\response\payload_response;
use core\router\schema\response\response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Liveness endpoint controller.
 *
 * @package    local_health
 * @copyright  2026 Roberto Bravo
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class liveness {
    /**
     * Report that the PHP process and health route can respond.
     *
     * @param ServerRequestInterface $request The HTTP request.
     * @param ResponseInterface $response The HTTP response.
     * @return payload_response The liveness response.
     */
    #[route(
        path: '/live',
        method: ['GET'],
        title: 'Liveness',
        summary: 'Report that the health endpoint can respond.',
        security: [],
        cookies: false,
        abortafterconfig: true,
        responses: [
            new response(
                statuscode: 200,
                description: 'The endpoint is available.',
                headers: [
                    new header_object(
                        name: 'Cache-Control',
                        description: 'Disables storage of the response.',
                        type: param::RAW,
                        required: true,
                    ),
                ],
                content: [
                    new json_media_type(
                        schema: new schema_object(
                            content: [
                                'status' => new scalar_type(
                                    type: param::ALPHANUM,
                                    required: true,
                                ),
                            ],
                        ),
                    ),
                ],
            ),
        ],
    )]
    public function get_liveness(
        ServerRequestInterface $request,
        ResponseInterface $response,
    ): payload_response {
        return new payload_response(
            payload: ['status' => 'UP'],
            request: $request,
            response: $response->withHeader('Cache-Control', 'no-store'),
        );
    }
}
