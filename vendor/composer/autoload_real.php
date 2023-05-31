<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdbdcb1cc311adffe5912ad5632dcde40
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitdbdcb1cc311adffe5912ad5632dcde40', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdbdcb1cc311adffe5912ad5632dcde40', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdbdcb1cc311adffe5912ad5632dcde40::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
