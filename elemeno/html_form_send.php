<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "larkin.71@osu.edu";
     
    $email_subject = "Comment from elemenopillows.com";
     
     
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
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Comment:\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- place your own success html below -->
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

<title>ElemenOPillows&trade; | Contact Me | Karen Larkin</title>
	<link rel="shortcut icon" href="Images/FavoriteTag.jpg">
	<link href="Styles.css" rel="stylesheet" type="text/css">
    
</head>

<body>


<table width="1000px" class="center">
	<tr>
    	<td width="175px"><BR></td>
        <td><a href="Home.html"><img src="Images/elemeno_pillows_heading.jpg" alt="ElemenOPillows" width="650px" height="90px" title="ElemenOPillows Home"/></a></td>
        <td width="175px"><BR></td>
	</tr>
</table>

<table width="1000px" class="center">
	<tr>
		<td width="220px"></td>
		<td width="19"></td>
		<td align="center" width="45"><a href="Home.html"><font face="Century Gothic" color="AC553C" size="3" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Home Page">home</font></a></td>
		<td width="19"></td>
		<td align="center" width="60"><a href="Standard.html"><font face="Century Gothic" color="#AC553C" size="3" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Standard Pillow for Sale">standard</font></a></td>
		<td width="19"></td>
		<td align="center" width="55"><a href="Lumbar.html"><font face="Century Gothic" color="#AC553C" size="3" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Lambar Pillows for Sale">lumbar</font></a></td>
		<td width="19"></td>
		<td align="center" width="78"><a href="About_Me.html"><font face="Century Gothic" color="#AC553C" size="3" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="About myself!">about me</font></a></td>
		<td width="19" align="right"><img src="Images/Bullet_Point.jpg" width="8" height="8"></td>
		<td align="center" width="135"><a href="Customer_Service.html"><font face="Century Gothic" color="#AC553C" size="3" onmouseover="color='#978d11';" title="Customer Service Page"
        onmouseout="color='#AC553C';">customer service</font></a></td>
		<td width="220px"></td>
	</tr>
</table>

<div class="links">
<a href="http://www.facebook.com/pages/ElemenOPillows/236067173127603"><img src="Images/Light_Facebook.png" class="links" height="18px" width="18px" title="Facebook" onMouseOver="src='Images/Facebook_icon.png';" onmouseout="src='Images/Light_Facebook.png';"></a>
<a href="https://twitter.com/ElemenoPillows"><img src="Images/Light_twitter.png" class="links" height="19px" width="19px" title="Twitter" onMouseOver="src='Images/Twitter_Button.png';" onmouseout="src='Images/Light_twitter.png';"></a> 
<a href="http://www.etsy.com/shop/ElemenOPillows?ref=shop_sugg"><img src="Images/Light_etsy.png" class="links" height="19px" width="40px" title="Etsy Store" onMouseOver="src='Images/Etsy_Button.png';" onmouseout="src='Images/Light_etsy.png';"></a>
</div>



<table width="1000px" style="position:relative; margin-left:auto; margin-right:auto; bottom:13px;">
	<tr>
    	<td width="130"><BR></td>
		<td><hr  color="#AC553C" width="100" size="3"/></td>
		<td><img src="Images/Small_Pillow.jpg" height="25" width="30"/></td>
		<td><hr color="#AC553C" width="600" size="3" align="center"/></td>
        <td width="130"><BR></td>
	</tr>
</table>


<table class="TopOfPage" border="0">
	<tr>
    	<td width="300px"><BR></td>
		<td width="400px"><font face="Zapfino" color="#999999">Contact Me</font></td>
        <td width="300px"><BR></td>
	</tr>
</table>

<table class="center" width="1000px" cellpadding="0" cellspacing="0" border="0" height="600px">
	<tr>
		<td width="235px" valign="top" align="right"><a href="Customer_Service_Contact.html"><font face="Handwriting - Dakota" color="#999999" onmouseover="color='#CC9900';" 
        onmouseout="color='#999999';" title="Contact Me Directly">Contact Me</font></a>
        <br/><br/>
        <a href="Customer_Service_FAQ.html"><font face="Handwriting - Dakota" color="#999999" onmouseover="color='#CC9900';" onmouseout="color='#999999';" 
        title="Frequently Asked Questions">FAQ</font></a>
        <br/>
        <br/>
		<a href="http://www.facebook.com/pages/ElemenOPillows/236067173127603"><font face="Handwriting - Dakota" color="#999999" onmouseover="color='#CC9900';"
    	onmouseout="color='#999999';" title="Like Our Facebook Page">Like us on Facebook</font></a>
        <br/>
        <iframe src=	"http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FElemenOPillows%2F236067173127603&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" 
        scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:21px;" allowTransparency="true"></iframe>
        <br/>
		<a href="https://twitter.com/ElemenoPillows"><font face="Handwriting - Dakota" color="#999999" onmouseover="color='#CC9900';" onmouseout="color='#999999';" 
        title="Follow Us On Twitter">Follow us on Twitter  </font> </a>
        <br/>
        <a href="https://twitter.com/ElemenoPillows" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @ElemenoPillows</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<br/>
        <br/>
        <a href="http://www.etsy.com/shop/ElemenOPillows?ref=shop_sugg"><font face="Handwriting - Dakota" color="#999999" onmouseover="color='#CC9900';" title="Visit the Etsy Store" 
        onmouseout="color='#999999';">Visit the Etsy Site  </font></a>
        <br/>
        <a href="http://www.etsy.com/shop/ElemenOPillows?ref=shop_sugg"><img src="Images/Etsy_Button.png" width="23%" height="23%" title="Visit the Etsy Store"></a>
        </td>
        <td width="12px"><BR></td>
        <td width="1px" bgcolor="#999999"><BR></td>
        <td width="20px"><BR></td>
        <td class="Content" width="534px">
			<table border="0" style="position:relative; margin-left:auto; margin-right:auto; top:45px; right:0px;" width="230px">
				<tr>
					<td align="center"><font face="monotype corsiva" size="4" color="#999999">Thank you for your submission. I'll get back to you as soon as I can.<br/><br/>Karen.</font></td>
				</tr>
			</table>

        </td>
        <td width="200px"><BR></td>
	</tr>
    	
</table>


       
       
       
       
       
       
       
<table width="1000px" style="margin-right:auto; margin-left:auto; position:relative; top:40px; font-size:9px;">
	<tr>
    	<td width="125px"><BR></td>
		<td align="left" width="380px"><font face="Century Gothic" color="AC553C">&copy; 2012 ElemenOPillows &trade;</font></td>
		<td width="12"></td>
		<td align="center" width="35"><a href="Home.html"><font face="Century Gothic" color="AC553C"  onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Home Page">home</font></a></td>
		<td width="12" valign="middle" align="center">.</td>
		<td align="center" width="40"><a href="Standard.html"><font face="Century Gothic" color="#AC553C" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Standard Pillows for Sale">standard</font></a></td>
		<td width="12" valign="middle" align="center">.</td>
		<td align="center" width="35"><a href="Lumbar.html"><font face="Century Gothic" color="#AC553C" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Lumbar Pillows for Sale">lumbar</font></a></td>
		<td width="12" valign="middle" align="center">.</td>
		<td align="center" width="48"><a href="About_Me.html"><font face="Century Gothic" color="#AC553C" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="About Myself!">about me</font></a></td>
		<td width="12" valign="middle" align="center">.</td>
		<td align="center" width="80"><a href="Customer_Service.html"><font face="Century Gothic" color="#AC553C" onmouseover="color='#978d11';" onmouseout="color='#AC553C';" 
        title="Customer Service Page">customer service</font></a></td>
        <td width="125px"><BR></td>
	</tr>
</table>
</body>






</html>
 
<?php
}
die();
?>