<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit395908999eff63b813ffa88ea9d5389e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Avoce\\Okanaboy\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Avoce\\Okanaboy\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit395908999eff63b813ffa88ea9d5389e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit395908999eff63b813ffa88ea9d5389e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit395908999eff63b813ffa88ea9d5389e::$classMap;

        }, null, ClassLoader::class);
    }
}
