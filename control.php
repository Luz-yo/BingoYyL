<?PHP
/*
    require("conexion.php");

    $nick=$_POST['usuario'];
    $pass=$_POST['contrasena'];

    $sql=mysql_query("SELECT * FROM usuarios WHERE nick='$nick'");
        if($f=mysql_fetch_array($sql)){
            if($pass==$f['contrasena']){
                header("Location: bingo.html");
            }else{
                echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

                echo "<script>location.href='index.html'</script>";
            }
        } else{

            echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

            echo "<script>location.href='index.html'</script>";
        }


*/
if($_POST['usuario']=="LuzYovanna" and $_POST['contrasena']=="12345678"){
            header("location:bingo.html");
        } else {
            header("location:index.html");
        }
?>