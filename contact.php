<?php
if(isset($_POST['email'])) {
     
    // EMAIL ADDRESS TO SENT TO
    $email_to = "morneau_julia@wheatoncollege.edu";
     
    $email_subject = "Contacting you from webpage";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('Please fill in all required part of the form.');       
    }
    echo "here";
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     

    $email_message = "Form details below.\n\n";
     
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Comments: ".$comments."\n";
     
 create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
mail($email_to, $email_subject, $email_message, $headers);  
 { ?><script language="javascript" type="text/javascript">
    window.location = 'contact_page.html';
</script>
<?php
}

<?php
}
die();
?>