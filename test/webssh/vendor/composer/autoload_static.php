<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2eb1d12f3fb0fc41e2e6d9338593f4d9
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2eb1d12f3fb0fc41e2e6d9338593f4d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2eb1d12f3fb0fc41e2e6d9338593f4d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}