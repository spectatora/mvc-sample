<?php
class Post {

    public static function all() {
        return array(
            'title' => 'Welcome to fortune cookie',
            'content' => 'Extremely interesting sample'
        );
    }

    public static function find() {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://www.yerkee.com/api/fortune");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        $repsonse = json_decode($response, true);

        return $repsonse;
    }
}