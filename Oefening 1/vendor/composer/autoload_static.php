<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f1cb5d802c808a543d17fe10fc8a91c
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'worker\\' => 7,
        ),
        't' => 
        array (
            'tool\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'worker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/worker',
        ),
        'tool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/tool',
        ),
    );

    public static $classMap = array (
        'tool\\Broom' => __DIR__ . '/../..' . '/src/tool/Broom.php',
        'tool\\Tool' => __DIR__ . '/../..' . '/src/tool/Tool.php',
        'worker\\Handyman' => __DIR__ . '/../..' . '/src/worker/Handyman.php',
        'worker\\Worker' => __DIR__ . '/../..' . '/src/worker/Worker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f1cb5d802c808a543d17fe10fc8a91c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f1cb5d802c808a543d17fe10fc8a91c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f1cb5d802c808a543d17fe10fc8a91c::$classMap;

        }, null, ClassLoader::class);
    }
}