<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2957378b495501ff7f9c788929c28587
{
    public static $files = array (
        '395c2f9f5c554d4b535abefe80e49613' => __DIR__ . '/..' . '/nusoap/nusoap/src/Common/files/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NuSoap\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NuSoap\\' => 
        array (
            0 => __DIR__ . '/..' . '/nusoap/nusoap/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'XMLSchema' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_base' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_client' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_client_mime' => __DIR__ . '/..' . '/econea/nusoap/src/nusoapmime.php',
        'nusoap_fault' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_parser' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_server' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_server_mime' => __DIR__ . '/..' . '/econea/nusoap/src/nusoapmime.php',
        'nusoap_wsdlcache' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoap_xmlschema' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'nusoapservermime' => __DIR__ . '/..' . '/econea/nusoap/src/nusoapmime.php',
        'soap_fault' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_parser' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_server' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soap_transport_http' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soapclient' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'soapclientmime' => __DIR__ . '/..' . '/econea/nusoap/src/nusoapmime.php',
        'soapval' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'wsdl' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
        'wsdlcache' => __DIR__ . '/..' . '/econea/nusoap/src/nusoap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2957378b495501ff7f9c788929c28587::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2957378b495501ff7f9c788929c28587::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2957378b495501ff7f9c788929c28587::$classMap;

        }, null, ClassLoader::class);
    }
}
