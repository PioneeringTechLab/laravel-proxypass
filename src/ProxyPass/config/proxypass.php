<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Proxy Active?
    |--------------------------------------------------------------------------
    |
    | Determines whether the rewriting of the URLs is active. Default is true.
    |
    */
    'proxy_active' => env("PROXY_ACTIVE", true),

    /*
    |--------------------------------------------------------------------------
    | Public Absolute URL Override
    |--------------------------------------------------------------------------
    |
    | Overrides the root of the path generated by various methods to be the value
    | specified here when resolving the "public" directory. Methods include
    | asset(), url(), etc.
    |
    | I.E. A value of "http://localhost/someotherpath/public" would make the
    | methods start with "http://localhost/someotherpath/public" instead
    | of the typical "http://[domain]/[application path]/public" prefix.
    |
    */
    'public_url_override' => "",

    /*
    |--------------------------------------------------------------------------
    | Public URL Schema Override
    |--------------------------------------------------------------------------
    |
    | Overrides the schema (http|https) that will be prefixed to all URLs.
    |
    */
    'public_schema_override' => "",

    /*
    |--------------------------------------------------------------------------
    | Proxied Path Header
    |--------------------------------------------------------------------------
    |
    | The PHP-transformed name of the header that is passing along the rewritten
    | base URL from the proxy. Defaults to "HTTP_X_FORWARDED_PATH".
    |
    */
    'proxy_path_header' => env("PROXY_PATH_HEADER", "HTTP_X_FORWARDED_PATH"),

];
