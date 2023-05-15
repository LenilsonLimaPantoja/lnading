<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72e7203789e9bb2e5489a54158c83611
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit72e7203789e9bb2e5489a54158c83611::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72e7203789e9bb2e5489a54158c83611::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72e7203789e9bb2e5489a54158c83611::$classMap;

        }, null, ClassLoader::class);
    }
}
