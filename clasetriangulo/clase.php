<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <table style="text-align: center; margin: 0px auto; width: 600px" >
            <tr>
                <td style="color: black"><h2>Resultado: Área del triangulo</h2></td>
            <p>
                </tr>   
            <tr style="color: black">        
        <?php
         extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario
            $result = ($base * $altura) /2;
             
            print "<html> <td>$result </td> <br></html";
            
        ?>
            </tr>

        </table>
        </div>
        
        <div>
            <table style="text-align: center; margin: 0px auto; width: 600px" >
            <tr>
                <td style="color: black"><h2>Resultado: Perimetro del triangulo</h2></td>
            <p>
                </tr>   
            <tr style="color: black">        
        <?php
         extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario
            $result = ($altura * 2)+ $base;
             
            print "<html> <td>$result </td> <br></html";
            
        ?>
            </tr>

        </table>
        </div>
    </body>
</html>