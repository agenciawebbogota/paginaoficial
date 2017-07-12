<?php 
	function enviaEmail($nombre, $apellido, $telefono, $correo,$mensaje)
	{
		$html = '<table border="0" cellspacing="0" cellpadding="0" style="max-width:600px">
		<tbody><tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tbody><tr><td align="left"></td></tr></tbody></table></td></tr><tr height="16">
		</tr><tr><td><table bgcolor="#1795c5" width="100%" border="0" cellspacing="0" cellpadding="0"
		style="min-width:332px;max-width:600px;border:1px solid #e0e0e0;border-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px">
		<tbody style="padding:10px;"><tr><td height="72px" colspan="3"></td></tr><tr><td width="32px"></td>
		<td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:20px;color:#ffffff;line-height:1.25">Correo Automático</td><td width="32px"></td></tr><tr><td height="18px" colspan="3">
		</td></tr></tbody></table></td></tr><tr><td>
		<table bgcolor="#FAFAFA" width="100%" border="0" cellspacing="0" cellpadding="0"
		style="min-width:332px;max-width:600px;border:1px solid #f0f0f0;border-bottom:1px solid #c0c0c0;border-top:0;
		border-bottom-left-radius:3px;border-bottom-right-radius:3px">
		<tbody><tr height="16px"><td width="32px" rowspan="3"></td><td></td><td width="32px" rowspan="3"></td></tr><tr>
		<td><table style="min-width:300px" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
		<td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-bottom:4px">
		<h3>Cliente</h3></td></tr><tr><td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;
		color:#202020;line-height:1.5;padding:4px 0">
		Los datos ingresados son los siguinetes:<br><br>
		<p>Nombre: '.$nombre.'</p>
		<p>Apellido: '.$apellido.'</p>
		<p>Teléfono '.$telefono.'</p>
		<p>Correo: '.$correo.'</p>

		<p>Mensaje: '.$mensaje.'</p>
		Nota: Este email fue creado de forma autómatica por Agencia Web Bogotá
		</td></tr><tr><td style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:13px;color:#202020;line-height:1.5;padding-top:28px">
		<br><tr><td><table style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:12px;color:#b9b9b9;line-height:1.5"><tbody>
		<tr><td>
		Atte.<br>Agencia Web Bogotá</td></tr><tr height="16px">
		</td></tr></tbody>
		<img src="http://drive.google.com/uc?export=view&id=0B90Lde1p9VqqbUJpZ3JwRHFySkk"alt="Logo Agencia Web Bogotá" width="120" height="100">
		</table></td></tr></tbody></table></td></tr><tr height="32px"></tr></tbody></table>
		</td></tr><td style="max-width:600px;font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#bcbcbc;line-height:1.5">
		</td></tr><tr><td><table style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:10px;color:#666666;line-height:18px;
		padding-bottom:10px"><tbody><tr><td></tr><tr><td>
		<div style="direction:ltr;text-align:left">© 2017 Agencia Web Bogotá, Todos los derechos reservado.
		<br>Plantilla tomada de Gloogle</div></td></tr></tbody></table></td></tr></tbody></table>';
		///////// Enviar email ///////
		require '../correo/PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host = 'mail.agenciawebbogota.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'lraga@agenciawebbogota.com';
		$mail->Password = '1077444356';  //Contraseña del correo alectrónico
		$mail->SMTPSecure = 'ssl';     
		$mail->Port = 465;
		/////////////Remitente/////////////////////////
		$mail->setFrom('lraga@agenciawebbogota.com', 'Luis Fernando Raga -Desarrollador AWB'); ///Remitente
		////////////////Destinatarios ///////////////
		// $mail->addAddress('whary11@gmail.com', 'Raga-Desarrollador Web');     // El nombre es opcional
		$mail->addAddress('agenciawebbogota@gmail.com', 'Agencia Web');     // El nombre es opcional
		$mail->addReplyTo('lraga@agenciawebbogota.com', 'Respuestas Agencia Web Bogotá');   ////Dirección de respuesta es opcional
		/////copias de correo electrónico/////
		// $mail->addCC('cc@example.com');
		$mail->addBCC('whary11@gmail.com', 'Raga-Desarrollador Web');	 ///Copia oculta
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Agregar archivos adjuntos
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // El nombre es opcional 
		$mail->isHTML(true);                                  // Establecer el formato de correo electrónico en HTML

		/////Últimas configuraciones 
		$mail->Subject = 'Nuevo Cliente - Contactar !!!';   ////Establecer un asusnto
		$mail->Body    = $html;  ////Correo en formato HTML
		$mail->AltBody = 'Nada de HTMl'; //Texto plano para los servicios de correo que no admiten HTML
		$envio = $mail->send();   ///Se envia el correo electrónico

		///Validar encío de correo electrónico
		if(!$envio) {
		    return false;
		    echo 'Error: ' . $mail->ErrorInfo;
		} else {
		    return true;
		}
	}
 ?>
