<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc26a7820f4a8b776ad2a7dad9dac9d1b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc26a7820f4a8b776ad2a7dad9dac9d1b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc26a7820f4a8b776ad2a7dad9dac9d1b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
