<?php 
$message_sent = false;
if(isset($_POST['email'] && $_POST['email']) != ''){
 
 if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

  //submit the form
 $userEmail = $_POST['email'];
 $messageSubject= $_POST['subject'];
 $message = $_POST['message'];
 

 $to = "sergiucoltan@gmail.com";
 $body = "";

 $body .="From: ".$userEmail. "\r\n";
 $body .="Message: ".$message. "\r\n";
 
 mail($to, $messageSubject, $body)

 $message_sent = true;
 }

}
?>

<?php
 if($message_sent):
?> 
  <h3>Thanks, I'll be in touch!</h3>
<?php
else:
 ?>
<div class="card">
 <div class="card-block">
  <h2>Contact</h2>
  <form action="mailto:sergiucoltan@gmail.com" method="POST" class="form">
    <div class="form-group">
      <input
        type="email"
        class="form-control"
        id="email"
        name="email"
        placeholder="Email"
      />
    </div>
    <div class="form-group">
      <input
        type="text"
        class="form-control"
        id="subject"
        name="subject"
        placeholder="Subject"
      />
    </div>
    <div class="form-group">
      <textarea
        class="form-control"
        rows="5"
        id="message"
        name="message"
        placeholder="Enter your message"
      ></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">
        Send message
      </button>
    </div>
  </form>
   </div>
 </div>