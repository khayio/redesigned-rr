<?php
/*
Template Name: Contact Template
*/
?>
<?php
if(isset($_POST['submitted']))
					{

	$ipaddress = $_SERVER['REMOTE_ADDR'];  
    $date = date('d/m/Y');  
    $time = date('H:i:s');  
	
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = "From: info@rafaelrubio.co" . "\r\n"; 
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
     
          
    $emailbody = "<p>You have received a new message from the enquiries form on your website.</p> 
                      <p><strong>Name: </strong> {$name} </p> 
                      <p><strong>Email Address: </strong> {$email} </p> 
                      <p><strong>Subject: </strong> {$subject} </p> 
                      <p><strong>Message: </strong> {$message} </p> 
                      <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";  
          
        wp_mail('info@rafaelrubio.co',$subject,$emailbody,$headers);
		header('Location: http://www.rafaelrubio.co');
		exit();
	}
?>
<section class="contact">
	<div>
		<h1>Say hi and get in touch</h1>
		<span class="sub-contact">Fill your details in the form below or, if you’d prefer to chat another way,
		 feel free to contact me by any of the social networks I’m on.</span>  
	</div>
	<div class="row my-form">
		<div class="col-sm-4 my-details">
			Rafael Ricardo Rubio
			<br>
			London, United Kingdom
			<br>
		</div>
		<div class="col-sm-8">
			<form method="post" action="<?php the_permalink();?>" role="form">
				<div class="row">
				  <div class="form-group col-sm-6">
				    <label class="control-label"><i class="glyphicon glyphicon-user"></i> Full Name</label>
				    <div>
				    	<input type="text" class="form-control" name="nombre" id="" placeholder="Enter your Name" autofocus required>
				    </div>
				  </div>
				  <div class="form-group col-sm-6">
			   	    <label class="control-label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
				    <div>
				    	<input type="email" class="form-control" name="email" placeholder="your e-mail" required>
				    </div>	
				  </div>
				</div>  
				<div class="row">
				  <div class=" form-group col-sm-12">
				    <label for="your-subject"><i class="glyphicon glyphicon-question-sign"></i> Subject</label>
				    <div>
				    	<input type="text" name="subject" class="form-control" placeholder="Subject">
				    </div>	
				  </div>
				</div>  
				<div class="row">
				  <div class=" form-group col-sm-12">
					<div>
					  <label class="control-label"><i class="glyphicon glyphicon-pencil"></i> Message</label>
				  	  <textarea name="message" class="form-control " rows="5" data-minlength="20"></textarea>
				  	</div>
				  </div>
				</div>  
				<div class="row">
				  <div class=" form-group col-sm-12">
				   <button type="submit" class="btn btn-default btn-contact">Send</button>
				  </div> 
				</div>  
			  <input type="hidden" name="submitted" value="true">
			</form>
		</div>	
	</div>
</section>