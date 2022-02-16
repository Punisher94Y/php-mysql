<!DOCTYPE html>
<html>    
    <body>
        <div>
            
            <form action="" method="post">
 
                <h2>Veuillez insérez un chiffre </h2>
                <input type="number" value="" name="nombre"  />
 
            </form>
        </div>
 
        <?php
            if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                for($i = 0; $i<=10; $i++){
                    echo $nombre . "*" . $i . "=" . $nombre * $i . " </br> </br> ";
                }
            }
        ?>
 
    </body>
</html>