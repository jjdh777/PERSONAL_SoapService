<?php
//Ruta de la clase econea/nusoap
require_once "vendor/econea/nusoap/src/nusoap.php";
//Nombre del servicio
$namespace = "InsertCategoria2SOAP";
$server = new soap_server();
$server->configureWSDL("InsertCategoria2",$namespace);
$server->wsdl->schemaTargetNamespace = $namespace;

//Estructura del servicio
$server->wsdl->addComplexType(
    'InsertCategoria2',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'usu_nom' => array('name' => 'usu_nom', 'type' => 'xsd:string')
    )
);

//Estructura de la Respuesta del Servicio
$server->wsdl->addComplexType(
    'response',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'Resultado' => array('name' => 'Resultado', 'type' => 'xsd:boolean'),
    )
);

$server->register(
    "InsertCategoria2Service",
    array("InsertCategoria2" => "tns:InsertCategoria2"),
    array("InsertCategoria2" => "tns:response"),
    $namespace,
    false,
    "rpc",
    "encoded",
    "Inserta una categoria"
);

function InsertCategoria2Service($request){
    require_once "config/conexion.php";
    require_once "models/Usuario.php";

    $usuario = new Usuario();
    $usuario->insert_usuario($request["usu_nom"],"","");

    return array(
        "Resultado" => true
    );
}

$POST_DATA = file_get_contents("php://input");
$server->service($POST_DATA);
exit();
?>