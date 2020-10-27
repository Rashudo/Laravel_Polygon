<?php


namespace App\Services;


class HttpSender implements Contracts\HttpSender
{
    CONST USERAGENT = 'Site Poligon';

    /**
     * @param $link
     * @return bool|string
     */
    public static function curlGet($link)
    {
        $resp = false;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $link,
            CURLOPT_USERAGENT => self::USERAGENT
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
//        error_log('-------------------------');
//        error_log('GET');
//        error_log($link);
//        error_log('Answer:' . $resp);
//        error_log('-------------------------');

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
        $resp = false;
        $curl = curl_init();
        $headers = $custom_headers;
        curl_setopt_array($curl, array(
            CURLOPT_CONNECTTIMEOUT => 3,
            CURLOPT_TIMEOUT => 3,
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
            logger()->error('core/model/HttpGetter -> ERROR curlPost -> ' . $link);
        }
        return $resp;
    }
}
