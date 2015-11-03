</div> <!--/page-->
<div class="footer">
	---<br><br>
<!-- 	<form id="emailForm" method="POST" >
	<label>I want free wimp stuff: </label><input id="email" name="email" placeholder="me@email.com" valid type="email"><button id="mailingList">submit</button></form> -->

	<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    <label>I want free wimp stuff: </label> 
    <input name="email" type="text" value="" placeholder="me@email.com" valid type="email" size="30"/> 
    <button type="submit" value="Send email"/>submit</button>
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $email=$_REQUEST['email']; 
    $message='send me wimpy emails'; 
    if (($email=="")) 
        { 
        echo "An email is required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $email\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("wimpsmail@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 

	<p>&copy; Wimps, <?php echo date("Y") ?></p>
</div><!--/footer-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/wimps.js"></script>



</body>
</html>
