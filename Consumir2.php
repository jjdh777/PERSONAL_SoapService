<?php
$location = "http://127.0.0.1/InsertCategoria2.php?wsdl";

$request= "
<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ins=\"InsertCategoria2SOAP\">
   <soapenv:Header/>
   <soapenv:Body>
      <ins:InsertCategoria2Service soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">
         <InsertCategoria2 xsi:type=\"ins:InsertCategoria2\">
            <!--You may enter the following 3 items in any order-->
            <usu_nom xsi:type=\"xsd:string\">?</usu_nom>
         </InsertCategoria2>
      </ins:InsertCategoria2Service>
   </soapenv:Body>
</soapenv:Envelope>
";


print("Resquest : <br>");
print("<pre>".htmlentities($request)."</pre>");

$action = "InsertCategoria2Service";
$headers = [
    'Method: POST',
    'Connection: Keep-Alive',
    'User-Agent: PHP-SOAP-CURL',
    'Content-Type: text/xml; charset=utf-8',
    'SOAPAction: InsertCategoria2Service',
];

//Segun Documentacion
$ch = curl_init($location);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

$response = curl_exec($ch);
$err_status = curl_errno($ch);

print("Resquest : <br>");
print("<pre>".$response."</pre>");

?>