<?php
if (isset($_POST['btn_enviar'])) 
{
	//variables
	$sumaerrores = 0;
	$errores  = "--*Formulario validado por PHP, los Errores son: *--";
	$validaciones = "--*Formulario validado correctamente con PHP
						las validaciones realizadas son:--";
	//validaciones de errores
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{	
		$errores .= "<br />";
		$errores .= "<br />";
		$errores .= "*El Email: $email NO es valido";
		$sumaerrores += 1;		    
	}
	if (!filter_var($url, FILTER_VALIDATE_URL)) 
	{
		$errores .= "<br />";
		$errores .= "*La URL: $url NO es valida por favor revisar" ;
		$sumaerrores += 1;		    
	}
	if(strlen($dni) < 9)
	{
		$errores .= "<br />";
	    $errores .= "*El ID debe tener al menos 9 caracteres";
	    $sumaerrores += 1;  	
   	}
	if(strlen($dni) > 9)
	{
	   	$errores .= "<br />";
	    $errores .= "*El ID no puede tener más de 9 caracteres";
	    $sumaerrores += 1;  	
	}
	if(strlen($contraseña) < 5)
	{
		$errores .= "<br />";
	    $errores .= "*La contraseña debe tener al menos 5 caracteres";
	    $sumaerrores += 1;  	
   	}
	if(strlen($contraseña) > 8)
	{
	   	$errores .= "<br />";
	    $errores .= "*La contraseña no puede tener más de 8 caracteres";
	    $sumaerrores += 1;  	
	}
	if (!preg_match('`[a-z]`',$contraseña))
	{
	   	$errores .= "<br />";
	    $errores .= "*La contraseña debe tener al menos una letra minúscula";
	    $sumaerrores += 1;  	
	}
	if (!preg_match('`[A-Z]`',$contraseña))
	{
	   	$errores .= "<br />";
	    $errores .= "*La contraseña debe tener al menos una letra mayúscula";
	    $sumaerrores += 1;  	
	}
	if (!preg_match('`[0-9]`',$contraseña))
	{
	   	$errores .= "<br />";
	    $errores .= "*La contraseña debe tener al menos un caracter numérico";
	    $sumaerrores += 1;  	
	}

	// consulta si no hubieron errores para mostar las validaciones realizadas 
	if ($sumaerrores == 0) 
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$validaciones .= "<br />";
			$validaciones .= "<br />";
			$validaciones.= " *El Email: $email se valido y cumple con el formato correcto" ;	    
		}
		if (filter_var($url, FILTER_VALIDATE_URL)) 
		{
			$validaciones .= "<br />";
			$validaciones .= "*La URL: $url  se valido y cumple como una URL valida" ;		
				   
		}
		$validaciones .= "<br />";
		$validaciones .= "*Se valido correctamente que el campo nombre no contenga caracteres especiales";
		$validaciones .= "<br />";
		$validaciones .= "*Se valida correctamente que el DNI contenga unicamente numeros y que tenga 9 digitos";
		$validaciones .= "<br />";
		$validaciones .= "*Se valido correctamente que el telefono contenga unicamente numeros";
		$validaciones .= "<br />";
		$validaciones .= "*Se valido correctamente que la fecha sea una fecha valida";
		
		if (!empty($nombre) && !empty($dni) && !empty($email) && !empty($telefono) && !empty($contraseña)&& !empty($fecha) && !empty($url)) 
		{
			$validaciones .= "<br />";
			$validaciones .= "*Se valiuda correctamente que ningun campo este vacio" ;
			$validaciones .= "<br />";			
			echo "<p class='error'>$validaciones</p>";
		}
	}
	else
	{
		$errores .= "<br />";
		$errores .= "--*Por favor verifique los campos con errores*--" ;
		echo "<p class='error'>$errores</p>";
	}
		
}

?>