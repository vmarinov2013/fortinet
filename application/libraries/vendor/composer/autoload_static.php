<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit504debedd2ec9e322489915334778c68
{
    public static $classMap = array (
        'CurlWrapper' => __DIR__ . '/..' . '/svyatov/curlwrapper/CurlWrapper.php',
        'CurlWrapperCurlException' => __DIR__ . '/..' . '/svyatov/curlwrapper/CurlWrapper.php',
        'CurlWrapperException' => __DIR__ . '/..' . '/svyatov/curlwrapper/CurlWrapper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit504debedd2ec9e322489915334778c68::$classMap;

        }, null, ClassLoader::class);
    }
}
