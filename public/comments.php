<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
function generate_string($strength = 5) {
    $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = 26;
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

$page = intval($_GET['page']);
$comments = [];

for ($i = 0; $i < 10; $i++) {
    $comments[$i]['name'] = generate_string(mt_rand(4,7));
    $message = generate_string(mt_rand(1,7));
    for ($k = 0; $k < rand(10, 30); $k++) {
        $message .= ' ' . generate_string(mt_rand(1,8));
    }
    $comments[$i]['message'] = $message;
    $comments[$i]['date'] = (30 - $page) . '.05.2020 12:00';
    $comments[$i]['mark'] = mt_rand(1,5);
    $comments[$i]['confirmed'] = mt_rand(0,1);
}

echo json_encode($comments);
