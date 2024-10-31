<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4bf7f54f17fc62dac8545202e8555dd
{
    public static $files = array (
        'aeb9dbae972bed1708021f3040d225cc' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Premmerce\\SDK\\' => 14,
            'Premmerce\\Brands\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Premmerce\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/premmerce/wordpress-sdk/src',
        ),
        'Premmerce\\Brands\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4bf7f54f17fc62dac8545202e8555dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4bf7f54f17fc62dac8545202e8555dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4bf7f54f17fc62dac8545202e8555dd::$classMap;

        }, null, ClassLoader::class);
    }
}