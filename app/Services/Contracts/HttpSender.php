<?php


namespace App\Services\Contracts;


interface HttpSender
{
    /**
     * @param $link
     * @return bool|string
     */
    public static function curlGet($link);

    /**
     * @param $link
     * @param string $post
     * @param array $custom_headers
     * @return bool|string
     */
    public static function curlPost($link, $post = '', array $custom_headers = []);
}
