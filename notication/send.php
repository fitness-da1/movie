<?php
require_once(__DIR__."/Pusher.php");
$options = array(
    'encrypted' => true
);
$pusher = new Pusher(
        '10d5ea7e7b632db09c72', 'a496a6f084ba9c65fffb', '234217', $options
);
$dulieuv2['type'] = 'success';
$dulieuv2['title'] = 'Thông Báo';
$dulieuv2['message'] = "xin chào";
$pusher->trigger('user', 'realtime', $dulieuv2);