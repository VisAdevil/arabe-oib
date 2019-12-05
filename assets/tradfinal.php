<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="" method="post">
            <p>الرقم: <input type="text" name="c" /></p>
            <p><input type="submit" value="ترجم"></p>
        </form>
        <?php 
            $final = "";
            if (strlen($_POST['c'])>0 ) {
                 $input = $_POST['c'];
                 $chiffres = array("٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩");
                for ($i=0; $i < strlen($input); $i++) { 
                    $final = $final.$chiffres[$input[$i]];
                 }} 
            
            echo $final;
        ?>    
    </body>
</html>