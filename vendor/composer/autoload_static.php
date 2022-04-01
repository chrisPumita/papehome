<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b4e10e1f1859f63b8faea9f4b2089df
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b4e10e1f1859f63b8faea9f4b2089df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b4e10e1f1859f63b8faea9f4b2089df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b4e10e1f1859f63b8faea9f4b2089df::$classMap;

        }, null, ClassLoader::class);
    }
}
