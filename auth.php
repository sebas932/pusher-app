<?php
  require __DIR__ . '/vendor/autoload.php';

  session_start();

  $pusher = new Pusher( 'ee7ac924cbb8ba399d47','050a76bbe0b9f77fbe24','224477');

  $presence_data = array('name' => "Sebastian Amariles");
  echo $pusher->presence_auth($_POST['channel_name'], $_POST['socket_id'], session_id() , $presence_data);

?>