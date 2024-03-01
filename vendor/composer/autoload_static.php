<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit883971ab0e3babccbb5f21ee182f2c02
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahmodigit\\HtmlQuerySelector\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahmodigit\\HtmlQuerySelector\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit883971ab0e3babccbb5f21ee182f2c02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit883971ab0e3babccbb5f21ee182f2c02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit883971ab0e3babccbb5f21ee182f2c02::$classMap;

        }, null, ClassLoader::class);
    }
}
