<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite08015a4df1e2c8f252bcfada7dadda8
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
            0 => __DIR__ . '/../..' . '/Sistema/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite08015a4df1e2c8f252bcfada7dadda8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite08015a4df1e2c8f252bcfada7dadda8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
