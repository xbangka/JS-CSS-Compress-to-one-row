<html>
    <head>
        <title>tes</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>input kode : <textarea name="input" id="input" cols="45" rows="5"></textarea></label><br/>
            <input type="submit" name="button" id="button" value="Submit" />
        </form>
        <br/>
<?php
    if(isset($_POST['button'])){
        function ob_html_compress($kompress){
            $kompress=str_replace(array("\n","\r","\t"," ","  ","   ","    "),' ',$kompress);
            $kompress = str_replace(array(" ")," ",$kompress);
            $space = "";
            for ($i=0; $i < 10 ; $i++) { 
                $space .= " ";
                $cc = ">".$space."<" ;
                $kompress = str_replace($cc,'><',$kompress);
            }
            
        return $kompress;
        }
        ob_start("ob_html_compress");
?>
            <textarea name="output" cols="100" rows="20"><?php echo $_POST['input']; ?></textarea>
<?php
        ob_end_flush();
    }
    highlight_string('
<?php
    phpinfo();
    echo \'dicoba\';
?>
    ');
?>
        
    </body>
</html>
