<?php
      include ("conexion_bbdd.php");

      if(!isset($_GET['id'])){
        echo "HO HI HA RES ...NO ID .<hr>";

        header("Location: ..");
        die();

      }else{

        //SANEJAR CAMPS
        //CAMPS NUMERICS
        $_id =  filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        echo "ID A ELIMINAR ES : ".$_id;

        $_Sql_Delete ="DELETE FROM `items_compra`
                      WHERE `items_compra`.`id` = $_id;";

        $conn=Connect_BBDD();



        if ($conn->query($_Sql_Delete) === TRUE) {
          echo "Item Elimiado de la lista.";
          header("Location: ..");
          die();

        } else {
          echo "Error: " . $_Sql_Delete . "<hr>" . $conn->error;
        }


        $conn->close(); //tanquem la connexió amb la base de dades




    }
 ?>
