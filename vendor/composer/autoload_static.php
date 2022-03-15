<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadd2ff63b5b99763bfeddc7f933b9a0e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitadd2ff63b5b99763bfeddc7f933b9a0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadd2ff63b5b99763bfeddc7f933b9a0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadd2ff63b5b99763bfeddc7f933b9a0e::$classMap;

        }, null, ClassLoader::class);
    }
}
