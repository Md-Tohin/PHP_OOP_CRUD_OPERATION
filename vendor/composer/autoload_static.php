<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd46cd094fb13cf4a8d3489163d11f981
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd46cd094fb13cf4a8d3489163d11f981::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd46cd094fb13cf4a8d3489163d11f981::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd46cd094fb13cf4a8d3489163d11f981::$classMap;

        }, null, ClassLoader::class);
    }
}
