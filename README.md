# local_health

`local_health` is a Moodle local plugin that will provide a platform-independent HTTP API for reporting the operational state of a Moodle instance.

The initial implementation supports Moodle 5.1 through 5.3. The plugin is currently an alpha scaffold and exposes no endpoints yet.

## Installation for development

This repository is already located at Moodle's expected path:

```text
<moodle-dir>/local/health
```

Visit **Site administration > Notifications** to install or upgrade the plugin after adding it to a Moodle installation.

## Scope

The plugin will discover and execute probes, aggregate their results, and expose a stable HTTP API. It does not define a universal health policy or include direct integrations with Kubernetes, OpenShift, or other platforms.

The response contract, probe model, and extension mechanism are intentionally not part of this initial scaffold.
