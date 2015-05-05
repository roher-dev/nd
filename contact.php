<?php 
if ($_POST["typeToldo"]=='invisible') { 
    $ToEmail = 'duyoseugenio@gmail.com'; 
    $EmailSubject = 'Presupuesto de Brazo Invisible'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Nombre: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comentarios: ".nl2br($_POST["comment"])."";
    $MESSAGE_BODY .= "Largo: ".$_POST["large"]."";
    $MESSAGE_BODY .= "Ancho: ".$_POST["width"]."";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

} else { 
	if ($_POST["typeToldo"]=='vertical') { 
	    $ToEmail = 'duyoseugenio@gmail.com'; 
	    $EmailSubject = 'Presupuesto de Toldo Vertical'; 
	    $mailheader = "From: ".$_POST["email"]."\r\n"; 
	    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
	    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	    $MESSAGE_BODY = "Nombre: ".$_POST["name"].""; 
	    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
	    $MESSAGE_BODY .= "Comentarios: ".nl2br($_POST["comment"])."";
	    $MESSAGE_BODY .= "Largo: ".$_POST["large"]."";
	    $MESSAGE_BODY .= "Saliente: ".$_POST["width"]."";
	    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
	
	} else { 
		if ($_POST["typeToldo"]=='recto') { 
		    $ToEmail = 'duyoseugenio@gmail.com'; 
		    $EmailSubject = 'Presupuesto de Punto Recto'; 
		    $mailheader = "From: ".$_POST["email"]."\r\n"; 
		    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
		    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		    $MESSAGE_BODY = "Nombre: ".$_POST["name"].""; 
		    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
		    $MESSAGE_BODY .= "Comentarios: ".nl2br($_POST["comment"])."";
		    $MESSAGE_BODY .= "Largo: ".$_POST["large"]."";
		    $MESSAGE_BODY .= "Saliente: ".$_POST["width"]."";
		    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
		
		} else { 
		
		};
	};
};

echo 'Su comentario ha sido envíado con éxito y será respondido a la brevedad. Muchas gracias!!! ';

echo '<META HTTP-EQUIV="Refresh" Content="5; URL=http://www.toldosnd.com.ar/presupuesto.html">';

?>