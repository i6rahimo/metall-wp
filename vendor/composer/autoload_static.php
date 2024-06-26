<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb871c8fac96fa1eebd74a18fca753b19
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb871c8fac96fa1eebd74a18fca753b19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb871c8fac96fa1eebd74a18fca753b19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb871c8fac96fa1eebd74a18fca753b19::$classMap;

        }, null, ClassLoader::class);
    }
}
