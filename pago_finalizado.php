<?php include_once 'includes/templates/header.php';
use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Payment;
require 'includes/paypal.php'; ?>

    <section class="seccion contenedor">
        <h2>Registro de Usuarios</h2>
        <?php
            $paymentId=$_GET['paymentId'];
            $id_pago = (int) $_GET['id_pago'];

            //Peticion a REST API
            //Verificar que se haya pagado correctamente
            $pago = Payment::get($paymentId, $apiContext);
            $execution = new PaymentExecution();
            $execution->setPayerId($_GET['PayerID']);

            //resultado tiene la informacion de la transaccion
            $resultado = $pago->execute($execution, $apiContext);

            $respuesta = $resultado->transactions[0]->related_resources[0]->sale->state;
            //var_dump($respuesta);


            if($respuesta == "completed") {
                echo "<div class='resultado correcto'>";
                echo "El pago se realizó correctamente <br/>";
                echo "El ID es {$paymentId}";
                echo "</div>";

                require_once('includes/funciones/bd_conexion.php');
                $stmt = $conn->prepare('UPDATE registrados SET pagado = ? WHERE id_registrado = ? ');
                $pagado = 1;
                $stmt->bind_param('ii', $pagado, $id_pago);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            } else {
                echo "<div class='resultado error'>";
                echo "El pago no se realizó";
                echo "</div>";
            }
        ?>
        

    </section>

<?php include_once 'includes/templates/footer.php'; ?>