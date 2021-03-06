<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fe7b970a3bdc1c107fac717d3c76bbe
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MessageBird\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MessageBird\\' => 
        array (
            0 => __DIR__ . '/..' . '/messagebird/php-rest-api/src/MessageBird',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fe7b970a3bdc1c107fac717d3c76bbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fe7b970a3bdc1c107fac717d3c76bbe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
