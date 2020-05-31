<?php 
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if(isset($_POST['login-admin'])){
    include_once 'funciones/funciones.php';
    try{
        $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($id_admin, $usuario_admin, $nombre_admin, $password_admin, $editado, $nivel);
        if($stmt->affected_rows){
            $existe = $stmt->fetch();
            if($existe){
                if(password_verify($password, $password_admin)){
                    //mantener la sesion iniciada
                    session_start();
                    $_SESSION['usuario'] = $usuario_admin;
                    $_SESSION['nombre'] = $nombre_admin;
                    $_SESSION['nivel'] = $nivel;
                    $_SESSION['id'] = $id_admin;

                    $respuesta = array(
                        'respuesta' => 'exito',
                        'usuario' => $nombre_admin
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
            } else{
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    die(json_encode($respuesta));
}