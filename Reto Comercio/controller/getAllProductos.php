<?php

	include_once ('../model/productoModel.php');
	
	$modeloProducto = new productoModel();
	
	$response['answer'] = $modeloProducto->getAll();
	
	echo json_encode( $response );