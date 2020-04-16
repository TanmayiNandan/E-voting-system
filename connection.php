<?php

error_reporting( 1 );
mysqli_connect( 'localhost', 'root', '','e-voting' ) or die( mysqli_error() );
mysqli_select_db( 'e-voting' ) or die( mysqli_error() );

?>