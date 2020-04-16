<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfd2b44f7b0db5b04575dbde1811c302
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Util',
        ),
    );

    public static $classMap = array (
        'Util\\Date' => __DIR__ . '/../..' . '/src/Util/Date.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfd2b44f7b0db5b04575dbde1811c302::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfd2b44f7b0db5b04575dbde1811c302::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfd2b44f7b0db5b04575dbde1811c302::$classMap;

        }, null, ClassLoader::class);
    }
}