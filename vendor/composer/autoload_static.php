<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit357cbcb94fd4aa2dc1fcab92b2fdefd8
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
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/niuz/slideverifycodestatic/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit357cbcb94fd4aa2dc1fcab92b2fdefd8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit357cbcb94fd4aa2dc1fcab92b2fdefd8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit357cbcb94fd4aa2dc1fcab92b2fdefd8::$classMap;

        }, null, ClassLoader::class);
    }
}
