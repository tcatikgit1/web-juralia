<?php
/**
 * Copyright (c) 2017 - present
 * LaravelGoogleRecaptcha - recaptcha.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 12/9/2018
 * MIT license: https://github.com/biscolab/laravel-recaptcha/blob/master/LICENSE
 */

/**
 * To configure correctly please visit https://developers.google.com/recaptcha/docs/start
 */
return [

    /**
     *
     * The site key
     * get site key @ www.google.com/recaptcha/admin
     *
     */
    'api_site_key'                 => env('RECAPTCHA_SITE_KEY', '6LetM_EaAAAAAAPLtG9Q1oNAWTEuvqTfQNRgytiD'),

    /**
     *
     * The secret key
     * get secret key @ www.google.com/recaptcha/admin
     *
     */
    'api_secret_key'               => env('RECAPTCHA_SECRET_KEY', '6LetM_EaAAAAAJrOEp1YTmlBkRlP6NRrxBXLKS_U'),

    /**
     *
     * ReCATCHA version
     * Supported: "v2", "invisible", "v3",
     *
     * get more info @ https://developers.google.com/recaptcha/docs/versions
     *
     */
    'version'                      => 'v3',

    /**
     *
     * The curl timout in seconds to validate a recaptcha token
     * @since v3.5.0
     *
     */
    'curl_timeout'                 => 10,

    /**
     *
     * IP addresses for which validation will be skipped
     *
     */
    'skip_ip'                      => [],

    /**
     *
     * Default route called to check the Google reCAPTCHA token
     * @since v3.2.0
     *
     */
    'default_validation_route'     => 'biscolab-recaptcha/validate',

    /**
     *
     * The name of the parameter used to send Google reCAPTCHA token to verify route
     * @since v3.2.0
     *
     */
    'default_token_parameter_name' => 'token',

    /**
     *
     * The default Google reCAPTCHA language code
     * It has no effect with v3
     * @see   https://developers.google.com/recaptcha/docs/language
     * @since v3.6.0
     *
     */
    'default_language'             => null,

    /**
     *
     * The default form ID. Only for "invisible" reCAPTCHA
     * @since v4.0.0
     *
     */
    'default_form_id'              => 'biscolab-recaptcha-invisible-form',

    /**
     *
     * Deferring the render can be achieved by specifying your onload callback function and adding parameters to the JavaScript resource.
     * It has no effect with v3 and invisible
     * @see   https://developers.google.com/recaptcha/docs/display#explicit_render
     * @since v4.0.0
     * Supported true, false
     *
     */
    'explicit'                     => false,

    /**
     *
     * Set API domain. You can use "www.recaptcha.net" in case "www.google.com" is not accessible.
     * (no check will be made on the entered value)
     * @see   https://developers.google.com/recaptcha/docs/faq#can-i-use-recaptcha-globally
     * @since v4.3.0
     * Default 'www.google.com' (ReCaptchaBuilder::DEFAULT_RECAPTCHA_API_DOMAIN)
     *
     */
    'api_domain'                   => 'www.google.com',

    /**
     *
     * g-recaptcha tag attributes and grecaptcha.render parameters (v2 only)
     * @see   https://developers.google.com/recaptcha/docs/display#render_param
     * @since v4.0.0
     */
    'tag_attributes'               => [

        /**
         * The color theme of the widget.
         * Supported "light", "dark"
         */
        'theme'            => 'light',

        /**
         * The size of the widget.
         * Supported "normal", "compact"
         */
        'size'             => 'normal',

        /**
         * The tabindex of the widget and challenge.
         * If other elements in your page use tabindex, it should be set to make user navigation easier.
         */
        'tabindex'         => 0,

        /**
         * The name of your callback function, executed when the user submits a successful response.
         * The g-recaptcha-response token is passed to your callback.
         * DO NOT SET "biscolabOnloadCallback"
         */
        'callback'         => null,

        /**
         * The name of your callback function, executed when the reCAPTCHA response expires and the user needs to re-verify.
         * DO NOT SET "biscolabOnloadCallback"
         */
        'expired-callback' => null,

        /**
         * The name of your callback function, executed when reCAPTCHA encounters an error (usually network connectivity) and cannot continue until connectivity is restored.
         * If you specify a function here, you are responsible for informing the user that they should retry.
         * DO NOT SET "biscolabOnloadCallback"
         */
        'error-callback'   => null,
    ]
];
