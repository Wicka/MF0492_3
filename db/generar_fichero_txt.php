<?php

      function genera_fichero_txt($_items_compra){

    
        $_archivo = "files/lista_compra.txt";

       // if (!file_exists($_archivo) ){
            //BORRO
      //  }

      

        $fp = fopen("files/lista_compra.txt", "w");


        for ($i=0; $i < count($_items_compra); $i++){

            $indice=$i+1;

            $fila = $indice." .- ".$_items_compra[$i]['item']." - ".$_items_compra[$i]['stock']." unidades.";
        //    echo "Fila : ".$fila."<hr>";
            fwrite($fp, $fila.PHP_EOL);

        }

        fclose($fp);


      

        return "<a href=".$_archivo.">Descargar</a>";
      }
  //    header("Location: ..");

 ?>
