<?php 
 $to = 'info@aplawn.com' ; 
 $from = $_REQUEST['Email'] ; 
 $name = $_REQUEST['Name'] ; 
 $headers = "From: $from"; 
 $subject = "Email from APLAWN Website"; 
 $fields = array(); 


 $fields{"Name"} = "Name";  
 $fields{"Email"} = "Email"; 
 $fields{"Telephone"} = "Telephone"; 
 $fields{"Message"} = "Message"; 

 $body = "We have received the following information:\r\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\r\n",$b,$_REQUEST[$a]); } 

 $send = mail($to, $subject, $body, $headers); 

 if($send) 
 {header( "Location: http://www.aplawn.com/contactus.html" );} 
 ?>