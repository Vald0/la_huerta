<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Huerta</title>
</head>
<body>
<?php
   $productos = ($_GET["objectTicket"]);
   $obj = json_decode($productos, true);
   echo(count($obj));
   echo($obj[7]['nombre']);
   
//  for ($i = 1; $i <= count($obj); $i++) {
//   echo($obj[i]['nombre'].$obj[i]['precio'].$obj[i]['unidad']);
//  }


    $amigos = array (array("nombre"=>"Pedro Torres", "direccion" =>"CL Mayor, 37","telefono"=>"8787907229"),
    array("nombre"=>"fernando pascal", "direccion" =>"Enrique segoviano","telefono"=>"5807445"),
    array("nombre"=>"edlein vaszques", "direccion" =>"Mar del norte","telefono"=>"8787907229"),
    array("nombre"=>"edlein vaszques", "direccion" =>"Mar del norte","telefono"=>"8787907229"));

    echo ("<table border='2' cellpadding='2' cellspacing='0'>");
    echo("<tr>");
    echo("<th>Numero</th>");
    echo("<th>Nombre</th>");
    echo("<th>Direccion</th>");
    echo("<th>Telefono</th>");
    echo("</tr>");
    echo("<tr>");
    echo("<td>0</td>");
    echo("<td>".$amigos[0]["nombre"]."</td>");
    echo("<td>".$amigos[0]["direccion"]."</td>");
    echo("<td>".$amigos[0]["telefono"]."</td>");
    echo("</tr>");
    echo("<tr>");
    echo("<td>1</td>");
    echo("<td>".$amigos[1]["nombre"]."</td>");
    echo("<td>".$amigos[1]["direccion"]."</td>");
    echo("<td>".$amigos[1]["telefono"]."</td>");
    echo("</tr>");echo("<tr>");
    echo("<td>1</td>");
    echo("<td>".$amigos[2]["nombre"]."</td>");
    echo("<td>".$amigos[2]["direccion"]."</td>");
    echo("<td>".$amigos[2]["telefono"]."</td>");
    echo("</tr>");
    echo("<tr>");
    echo("<td>1</td>");
    echo("<td>".$amigos[3]["nombre"]."</td>");
    echo("<td>".$amigos[3]["direccion"]."</td>");
    echo("<td>".$amigos[3]["telefono"]."</td>");
    echo("</tr>");
    echo("</table>");
?>    
</body>
</html>