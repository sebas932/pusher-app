<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'encrypted' => true
  );
  $pusher = new Pusher(
    'ee7ac924cbb8ba399d47',
    '050a76bbe0b9f77fbe24',
    '224477',
    $options
  );

  $data['sessionID'] = $_GET['sessionID'];
  $data['x'] = $_GET['x'];
  $data['y'] = $_GET['y'];
  //print_r($data);
  $pusher->trigger('presence-mousemoves', 'mouse-moved', $data);
?>