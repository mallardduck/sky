<?php

return [
    /**
     * set the default path for the blogs homepage.
     */
    'path' => 'blog',

    /**
     * the middleware you want to apply on all the blogs routes
     * for example if you want to make your blog for users only, add the middleware 'auth'.
     */
    'middleware' => ['web'],

    'uri_prefix' => [
        'post' => 'post',
        'page' => 'page',
        'library' => 'library',
        'faq' => 'faq',
    ],

    /**
     * css class to apply on found search result, e.g. `bg-yellow-400`.
     */
    'search_result_highlight_css_class' => 'highlight',

    /**
     * supply a list of terms that will disable the search highlight to not
     * destroy html structure.
     */
    'skip_highlighting_terms' => ['iframe'],

    /**
     * default featured image, set to null to disable it.
     * ex: https://placehold.co/600x400
     */
    'default_featured_image' => null,

    /**
     * parse the content
     * you can add any parser to do str_replace or any other operation:
     *
     * to render Blot form by it slug: \LaraZeus\Sky\Classes\BoltParser::class,
     */
    'parsers' => [
        \LaraZeus\Sky\Classes\BoltParser::class,
    ],
];
