<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f80a685904dcac7d99974b163dfd8a0
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
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f80a685904dcac7d99974b163dfd8a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f80a685904dcac7d99974b163dfd8a0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
