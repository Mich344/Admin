<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../lib/DataTables.php" );


// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
include_once("../Basedata.php");
Editor::inst( $db, 'productos' )
	->fields(
		Field::inst( 'Nombre' )
		// validar 
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Por favor ingresa el nombre del producto' )	
			) ),
		Field::inst( 'Precio' )
			->validator( Validate::numeric() )
			->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'Cantidad' )
			->validator( Validate::numeric() )
			->setFormatter( Format::ifEmpty(null) )
	)
	->process( $_POST )
	->json();
?>
