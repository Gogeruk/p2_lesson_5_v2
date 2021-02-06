<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit145d62aad5786f9ec322901116dc7791
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nick\\Ven\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nick\\Ven\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit145d62aad5786f9ec322901116dc7791::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit145d62aad5786f9ec322901116dc7791::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit145d62aad5786f9ec322901116dc7791::$classMap;

        }, null, ClassLoader::class);
    }
}