

<?php
   if( isset( $_POST ) ) {
      $dataFrom = file_get_contents( "php://input" );
      $data = json_decode( $dataFrom, true );   // return list
      // $data = json_decode( $dataFrom );   // return objct
      echo json_encode( $data );
   }
?>