<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fbb3dc103e98505adda090e80361ecc
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gbleijenberg\\SetJob\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gbleijenberg\\SetJob\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fbb3dc103e98505adda090e80361ecc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fbb3dc103e98505adda090e80361ecc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fbb3dc103e98505adda090e80361ecc::$classMap;

        }, null, ClassLoader::class);
    }
}
