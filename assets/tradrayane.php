<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="" method="post">
            <p>Le chiffre : <input type="text" name="c" /></p>
            <p>al raqm : <input type="text" name="d" /></p>
            <p><input type="submit" value="Subbmit"></p>
        </form>
        <?php 
            $final = "";
            if (strlen($_POST['c'])>0 and strlen($_POST['d'])==0) {
                 $input = $_POST['c'];
                 $chiffres = array("?", "?", "?", "?", "?", "?", "?", "?", "?", "?");
                for ($i=0; $i < strlen($input); $i++) { 
                    $final = $final.$chiffres[$input[$i]];
                 }} 
            elseif (mb_strlen($_POST['d'])>0 and strlen($_POST['c'])==0) {
                $input = $_POST['d'];
                $chiffre = array("?"=>"0", "?"=>"1", "?"=>"2", "?"=>"3", "?"=>"4", "?"=>"5", "?"=>"6", "?"=>"7", "?"=>"8", "?"=>"9");
                for ($i=0; $i < mb_strlen($input); $i++) { 
                    $final = $final.$chiffre[mb_substr($input, $i, 1)];
                }
            }
            echo $final;
        ?>    
    </body>
</html>