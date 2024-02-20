<html>
<body>
    
<?php
    if(isset($_POST['enviar'])){
        $formatosPermitids = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        if(in_array($extensao, $formatosPermitids)){
            echo "Existe";
        }
    }

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" name="Enviar">
    </form>

</body>
</html>