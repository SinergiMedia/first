<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sinergi Media, Inc. - contact</title>
<link rel="stylesheet" href="global2.css" type="text/css">


<SCRIPT LANGUAGE="JavaScript">
<!--

function checkfields(){
	if(validate() == 0){
		document.emailform.submit();
	}
}

function validate(){
	if(document.emailform.NAME.value == ""){
		alert("Please fill in your NAME before sending your note.");
		return 1;
	}

		
	if(document.emailform.COMMENTS.value == ""){
		alert("Please enter a MESSAGE before sending!");
		return 1;
	}
    return 0;
}

//-->
</SCRIPT>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onLoad="MM_preloadImages('images/blueGrassTiny.gif')">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="75" valign="bottom"><img src="images/clear.gif" name="bigspace" width="475" height="1" border="0" id="bigspace"></td>
	<TD height="75" align="right"><div align="right"><!-- NAV TABLE --><table width="275" border="0">
      <tr>
        <td width="209"><div align="right"><a href="why.php" class="nav" onMouseOver="MM_swapImage('blank1','','images/blueGrassTiny.gif',1)" onMouseOut="MM_swapImgRestore()">why
            us</a></div></td>
        <td width="56"><img src="images/blank.gif" name="blank1" width="35" height="30" id="blank1"></td>
      </tr>
      <tr>
        <td><div align="right" class="nav"><a href="smart.php" class="nav" onMouseOver="MM_swapImage('blank2','','images/blueGrassTiny.gif',1)" onMouseOut="MM_swapImgRestore()">get
            smart</a></div></td>
        <td><img src="images/blank.gif" name="blank2" width="35" height="30" id="blank2"></td>
      </tr>
      <tr>
        <td><div align="right" class="nav"><a href="niche.php" class="nav" onMouseOver="MM_swapImage('blank3','','images/blueGrassTiny.gif',1)" onMouseOut="MM_swapImgRestore()"> meet
            the niche</a></div></td>
        <td><img src="images/blank.gif" name="blank3" width="35" height="30" id="blank3"></td>
      </tr>
      <tr>
        <td><div align="right" class="nav"><a href="_contact.php" class="nav" onMouseOver="MM_swapImage('blank4','','images/blueGrassTiny.gif',1)" onMouseOut="MM_swapImgRestore()">contact</a></div></td>
        <td><img src="images/blank.gif" name="blank4" width="35" height="30" id="blank4"></td>
      </tr>
    </table>
	<!-- /end NAV TABLE --></DIV></td>
  </tr>
  <tr>
    <td valign="middle"><table border="0" cellpadding="0" cellspacing="0">

   <tr>
        <td valign="top">
<!-- INNER FORM TABLE -->
<!--- SO BEGINS PRIMARY CONTENT SPACE --->
<!-- this is all about sending email. 
     the html and form code starts afterwards  -->
<?php

if ($task == 'send') {

if ($email !== '') {
    $from= "From: $email\r\n";
  } else {
  	$from = "From: tech@sinergi.com\r\n";
	}

// constants

 
	$recipient = "mark@SinergiMedia.com";
//    $headers .= "CC: mobile@sinergi.com\r\n";

     $headers .= "$from\n";
//    $headers .= "MIME-Version: 1.0\n";
//    $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
//    $headers .= "Content-Transfer-Encoding: 7bit\n";
//    $headers .= "X-Mailer: PHP\n"; //mailer

	// make sure the input doesn't blow up the web server
	
	escapeshellcmd($NAME);
	escapeshellcmd($phone);
	escapeshellcmd($email);
	escapeshellcmd($COMMENTS);
	escapeshellcmd($web);
	

	// compile the body of the message
       
	   	

	   
 	$subject = "S! Buzz: $NAME";
	$body .= $COMMENTS . "  \n\r\n";
	$body .= " name:    " . $NAME . "\n";
	$body .= "email:   " . $email . "\n";
	$body .= "phone:   " . $phone . "\n";
if ($web !== '') {
    $body .= "web:     " . $web . "\n";
    }
if ($street !== '') {
	$body .= "address: " . $street . "\n";
	}
if ($street2 !== '') {
    $body .= "         " . $street2 . "\n";
    }
if ($city !== '') {
	$body .= "city:    " . $city . "\n";
    }
if ($state !== '') {
    $body .= "state:   " . $state . "\n";
	}
if ($zip !== '') {
	$body .= "zip:     " . $zip . "\n";
	}
	$body .= "-------\n\n";
	$body .= "IP Address is: " . $REMOTE_ADDR . "\n";


	// send the message, show results page. 
	// First making sure all the required fields are supplied

	if ($name !== '') {

		mail ($recipient,$subject,$body,$headers);

		echo "<span class=\"headline1\">Contact Us</SPAN><span class=content1><BR><BR>
		<B>Your Message Has Been Sent!</B><BR>";
		echo "Someone at Sinergi Media will be notified as soon as possible.</B></span><span class=content1><BR><BR>";
		echo "<p>&laquo; <a href=\"/\">Return to the main page</a></p></DIV><br></Span><BR><BR><BR><BR>";
//     echo "<i>Here is what you sent:</i><BR>
//		$body<P>.\r\n";
	} else {
		echo "<span class=\"headline1\">Contact Us</SPAN><span class=content1><BR><BR><div align=\"center\" ><font color=#000000><b>OOPS!</b> We need you to at least enter your <B>name!</b></font><br><br>";
		echo "</span></DIV><BR><BR><BR><BR>\n";		
	}
	
} else {
?>
<!-- 	this is the they see the first time they hit the page -->
<span class="headline1">Contact Us</span> 
	    <span class="content1"><BR>
	  In addition to welcoming new clients, large and small, we
	  are always interested in adding new successful  media partners to our portfolio.<br>
	  <br>
	    </span><span class="content1">Please contact us and discover what working
	    with Sinergi Media will allow you to do.</span>    
	        </p>
		       <!-- FORM TABLE -->
	<br>
<br>
<table border=0 cellpadding=0 cellspacing="0" width="470">

                   <tr>
				   <TD valign="top"><p align="center" class="style1">
				    
</P>
  <FORM action="<?php echo $PHP_SELF; ?>" method="post" name="emailform">
   <input type="hidden" name="task" value="send">    
    <table width="300" border=0 cellpadding=2 cellspacing="0">  
                      <tr class="style1">
                      <td width="138"><b>Name</b>
						<br>
						<input tabindex="1" size="20" name="NAME"></td>
						<TD width="144" rowspan=4 valign="top"><b>Message</b>
                          <br>					    
                        <textarea  tabindex="5" name="COMMENTS" cols="16" rows="8" wrap="VIRTUAL"></textarea></td>
					  </tr>
					                     
                       <tr class="style1">
                         <td><b>E-Mail</b>
                           <br>
                         <input  tabindex="2"  size="20" name="email"></td>
                      </tr> <tr class="style1">
                        <td><b>Phone</b>
                          <br>
                          <input  tabindex="3" size="20" name="phone"></td></tr>
                     
                      <tr class="style1">
                        <td><b>Web</b><br>
                        <input  tabindex="4"  size="20" name="web"></td>
                      </tr>
					
					  <tr class="style1">
					<td colspan=2 valign="top" align="right">
                      	<SCRIPT LANGUAGE="javascript">
	<!--
	document.write("<INPUT TYPE='button'  tabindex='5'  CLASS='style1' ONCLICK='checkfields()' VALUE='Send Your Note'>\n");
	// end javascript -->
	</SCRIPT>

    <noscript><input  tabindex=5 name="Submit2" type="submit2" class="style1" value="Send Note"></Noscript>
              </TD>   </TR>
                    </table>  
     	</form>
					<!-- /END inner FORM TABLE -->
					</td>
				   
				    <TD valign="top"><div align="right">
				      <p class="style1">
					  (312) 944.0032 &nbsp;&nbsp;main<BR>
                      (773) 442.0190 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fax<br>
                      <br>
Sinergi Media Inc.<br>
3501 N. Southport Ave<br>
 Suite 280<br>
Chicago, IL 60657<br>
<br>
<br>
<br>
Submit An Online Payment<br>
				      </P>
				      </DIV>
                      <DIV align="right" class="style1">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but02.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form></span></DIV></TD>

      </tr>
  <tr>
       <td><img src="images/clear.gif" width="300" height="1"></td>
	    <td><img src="images/clear.gif" width="160" height="1"></td>

  </tr> 
	  </table>
					<!-- /END outer FORM TABLE -->
					<?php
} 
?>
		  </td>
      </tr></table>
    </td>
    <td valign="top" align="right"><img src="images/clear.gif" width="2" height="70"><br>
	<a href="index.php"><img src="images/logo-16c.gif" alt="logo" width="262" height="112" hspace="0" vspace="0" border="0"></a></td>
  </tr>

<!--- SPACER ROW HOLDS IT TOGETHA -->
<tr>
    <td><img src="images/clear.gif" width="475" height="1"></td>
    <td><img src="images/clear.gif" width="275" height="1"></td>
  </tr>
  <tr>
    <td colspan="2" valign="bottom"><img src="images/phone.gif" width="750" height="100"></td>
  </tr>
  
  
</table>
</body>
</html>
