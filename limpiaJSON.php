<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $todoElFichero = file_get_contents("JSONparaLimpiar");
        
           // quita la parte inicial del archivo que es el div
        $todoElFichero = str_replace('<div id="jsonData" datajson="', "", $todoElFichero);
        $todoElFichero = str_replace('"></div>', "", $todoElFichero);
        
        $todoElFichero = str_replace("&quot;", '"', $todoElFichero);
        
        $todoElFichero = str_replace("&amp;#8212;", "_", $todoElFichero);
        $todoElFichero = str_replace("&amp;#8211;", "-", $todoElFichero);
        $todoElFichero = str_replace("&amp;#160;", " ", $todoElFichero);
        $todoElFichero = str_replace("&amp;#60;", "<", $todoElFichero);
        $todoElFichero = str_replace("&amp;#62;", ">", $todoElFichero);
        $todoElFichero = str_replace("&amp;#133;", "...", $todoElFichero);
        
        
        
        //escribe el fichero al disco
        $fp = fopen('JSON_LIMPIO.json', 'w');
        fwrite($fp, $todoElFichero);
        fclose($fp);
        
        
        
        
        
        
        
        
        /*lista de códigos a cambiar:
        
&amp;#8212;         _
&amp;#8211;         –
&amp;#160;         espacio en blanco         
&quot;        "


         */
        ?>
    </body>
</html>
