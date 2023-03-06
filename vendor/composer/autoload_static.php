<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07ddf25c30e99c74e75c077ce2cf70cc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpMqtt\\Client\\' => 15,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PhpMqtt\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-mqtt/client/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/myclabs/php-enum/stubs/Stringable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07ddf25c30e99c74e75c077ce2cf70cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07ddf25c30e99c74e75c077ce2cf70cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07ddf25c30e99c74e75c077ce2cf70cc::$classMap;

        }, null, ClassLoader::class);
    }
}
