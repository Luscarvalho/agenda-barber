<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ae8aecb30049ebcd1ddad8789f0912d
{
    public static $files = array (
        '187b7c4b0e689d9c45842848c6db9d2f' => __DIR__ . '/../..' . '/Source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Source',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ae8aecb30049ebcd1ddad8789f0912d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ae8aecb30049ebcd1ddad8789f0912d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ae8aecb30049ebcd1ddad8789f0912d::$classMap;

        }, null, ClassLoader::class);
    }
}
