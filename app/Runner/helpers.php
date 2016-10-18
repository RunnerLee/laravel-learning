<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/17 0017
 * Time: 下午 12:04
 */

if (! function_exists('convert_markdown_to_html')) {
    function convert_markdown_to_html($markdown)
    {
        return app('markdown')->convertToHtml($markdown);
    }
}

if (! function_exists('convert_markdown_to_pure')) {
    function convert_markdown_to_pure($markdown, $length = 255)
    {
        return mb_substr(strip_tags(app('markdown')->convertToHtml($markdown)), 0, $length);
    }
}