<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd270b04e11db66fdebf3b6714ccf6749
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $classMap = array (
        'Codebird\\Codebird' => __DIR__ . '/..' . '/jublonet/codebird-php/src/codebird.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd270b04e11db66fdebf3b6714ccf6749::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd270b04e11db66fdebf3b6714ccf6749::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd270b04e11db66fdebf3b6714ccf6749::$classMap;

        }, null, ClassLoader::class);
    }
}
