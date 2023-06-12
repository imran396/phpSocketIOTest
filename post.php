<?php
/**
 * @author Imran Rahman
 * Dhaka, Bangladesh.
 * Phone: +880-109075,
 * Email: imran3968@gmail.com
 * Skype: imran.rahman29
 * Linkedin: https://www.linkedin.com/in/imran-rahman-7850313a/
 */

// post.php ???
// This all was here before  ;)
$entryData = array(
    'category' => "kittensCategory"
, 'title'    => "ddd"
, 'article'  => "dfdfd"
, 'when'     => time()
);

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');


$socket->connect("tcp://localhost:5555");

$socket->send(json_encode($entryData));