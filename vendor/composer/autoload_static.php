<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f7e28336645ed972aa0779a978a8832
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YoussefErremili\\LaravelAlert\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YoussefErremili\\LaravelAlert\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f7e28336645ed972aa0779a978a8832::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f7e28336645ed972aa0779a978a8832::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f7e28336645ed972aa0779a978a8832::$classMap;

        }, null, ClassLoader::class);
    }
}
