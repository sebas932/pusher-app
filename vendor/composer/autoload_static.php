<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc9a2220fc1a945cf08d8ea1293d5b33
{
    public static $classMap = array (
        'Pusher' => __DIR__ . '/..' . '/pusher/pusher-php-server/lib/Pusher.php',
        'PusherException' => __DIR__ . '/..' . '/pusher/pusher-php-server/lib/Pusher.php',
        'PusherInstance' => __DIR__ . '/..' . '/pusher/pusher-php-server/lib/Pusher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbc9a2220fc1a945cf08d8ea1293d5b33::$classMap;

        }, null, ClassLoader::class);
    }
}
