<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class bwdebComposerStaticInit436dde7e0f1934379908945c1062d46f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = bwdebComposerStaticInit436dde7e0f1934379908945c1062d46f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = bwdebComposerStaticInit436dde7e0f1934379908945c1062d46f::$prefixDirsPsr4;
            $loader->classMap = bwdebComposerStaticInit436dde7e0f1934379908945c1062d46f::$classMap;

        }, null, ClassLoader::class);
    }
}