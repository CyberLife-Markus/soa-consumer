<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75e3d9414ab03e4dbbdb994e0239b44a
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mysoa\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mysoa\\' => 
        array (
            0 => __DIR__ . '/..' . '/mysoa/php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75e3d9414ab03e4dbbdb994e0239b44a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75e3d9414ab03e4dbbdb994e0239b44a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
