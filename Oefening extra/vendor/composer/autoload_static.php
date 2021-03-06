<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit358f77960bbb845ec54c151e6813b897
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'util\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/util',
        ),
    );

    public static $classMap = array (
        'util\\Color' => __DIR__ . '/../..' . '/src/util/Color.php',
        'util\\ColorPoint' => __DIR__ . '/../..' . '/src/util/ColorPoint.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit358f77960bbb845ec54c151e6813b897::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit358f77960bbb845ec54c151e6813b897::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit358f77960bbb845ec54c151e6813b897::$classMap;

        }, null, ClassLoader::class);
    }
}
