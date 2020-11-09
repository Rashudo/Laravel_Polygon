<?php


namespace App\Services;

/**
 * Class HttpSender
 * @package App\Services
 */
class HttpSender implements Contracts\HttpSender
{
    const USERAGENT = 'Site Poligon';
    const CONNECT_TIMEOUT = 5;
    const RUNTIME_TIMEOUT = 3;

    /**
     * @param $link
     * @return bool|string
     */
    public static function curlGet($link)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_CONNECTTIMEOUT => self::CONNECT_TIMEOUT,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $link,
            CURLOPT_USERAGENT => self::USERAGENT
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        if (!empty($err) || $resp === false || empty($resp)) {
            logger()->error(__CLASS__ . ' -> ERROR in ' . __METHOD__ . ' -> ' . $link);
        }
        return $resp;
    }


    /**
     * @param $link
     * @param string $post
     * @param array $custom_headers
     * @return bool|string
     */
    public static function curlPost($link, $post = '', array $custom_headers = [])
    {
        $curl = curl_init();
        $headers = $custom_headers;
        curl_setopt_array($curl, array(
            CURLOPT_CONNECTTIMEOUT => self::CONNECT_TIMEOUT,
            CURLOPT_TIMEOUT => self::RUNTIME_TIMEOUT,
            CURLOPT_FAILONERROR => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_URL => $link,
            CURLOPT_USERAGENT => self::USERAGENT,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $post,
        ));
        $resp = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if (!empty($err) || $resp === false || empty($resp)) {
            logger()->error(__CLASS__ . ' -> ERROR in ' . __METHOD__ . ' -> ' . $link);
        }
        return $resp;
    }
}
