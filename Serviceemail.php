

<!doctype html>
<html lang="en">
  <head>
	<title>TATA</title>
	<link rel = "icon" href =  "Logo\title.png " 
        type = "image/x-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>TATA</title>
  </head>
  <body>
        <?php
include("header.php");
?>
         

    <div class='my-5 d-flex' style="color: black; margin-left:100px; font-size: 20px;">

            
   

          <form class="contact-form"  action="https://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" onsubmit="return ValidateForm(this);" target="_top">
              
              <script type="text/javascript">
function ValidateForm(frm) {
if (frm.fnm.value == "") {alert('Name is required.');frm.fnm.focus();return false;}

if (frm.no.value == "") {alert('Last Name is required.');frm.no.focus();return false;}

if (frm.city.value == "") {alert('City is required.');frm.City.focus();return false;}

if (frm.msg.value == "") {alert('State is required.');frm.msg.focus();return false;}

if (frm.email.value == "") {alert('Email address is required.');frm.email.focus();return false;}

if (frm.car.value == "") {alert('Car Name is required.');frm.car.focus();return false;}

if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.FromEmailAddress.focus();return false;}

if (frm.skip_CaptchaCode.value == "") {alert('Enter web form code.');frm.skip_CaptchaCode.focus();return false;}


return true; }
function ReloadCaptchaImage(captchaImageId) {
var obj = document.getElementById(captchaImageId);
var src = '' + obj.src;
obj.src = '';
var date = new Date();
var pos = src.indexOf('&rad=');
if (pos >= 0) { src = src.substr(0, pos); }
obj.src = src + '&rad=' + date.getTime();
return false; }
</script>

      <div class="form-group mx-5">
    <label for="exampleInputEmail1">Enter Your Full Name</label>
    <input type="text" name="fnm" class="form-control" style="width: 800PX;" pattern="([A-Za-z])+( [A-Za-z]+)" id="exampleInputEmail1" required aria-describedby="emailHelp">
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Enter Your Mobile No</label>
    <input type="text" name="no" class="form-control" id="exampleInputEmail1" pattern="[0-9]{10}" required aria-describedby="emailHelp">
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Enter Your City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Enter Your Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Select Your car</label>
    
	<select name="car">
		
			<option name = "car">Tiago XE Rs 4,69,000</option>
            <option name = "car">Tiago XT Rs 5,33,000</option>
            <option name = "car">Tiago XZ Rs 5,83,000</option>
            <option name = "car">Tiago XZ+ Rs 6,12,000</option>
            <option name = "car">Tiago XZ+ DT NEW Rs 6,23,000</option>
            <option name = "car">Tiago XZA  NEW Rs 6,33,000</option>
            <option name = "car">Tiago XZA+NEW Rs 6,62,000</option>
            <option name = "car">Tiago XZA+DT New 6,73,000</option>
            
			<option name = "car">Tigor XE New 5,39,00</option>
            <option name = "car">Tigor XM New 5,99,00+</option>
            <option name = "car">Tigor XZ New 6,40,00</option>
            <option name = "car">Tigor XZ+ New 6,99,00</option>
            <option name = "car">Tigor XMA New 6,49,00</option>
            <option name = "car">Tigor XZA+ New 7,49,00</option>
            
			<option name = "car">Tigor EV XE + 15.01 lakh</option>
            <option name = "car">Tigor EV XM + 15.26 lakh</option>
            <option name = "car">Tigor EV XT + 15.40 lakh</option>
           
		   <option name = "car">
Altroz XE 5,44,000</option>
            <option name = "car">Altroz XE RHYTM 5,70,000</option>
            <option name = "car">Altroz XM 6,30,000</option>
            <option name = "car">Altroz XM Style 6,64,000</option>
            <option name = "car">Altroz XM Rhytm 6,69,000</option>
            <option name = "car">Altroz XM RHYTM+STYLE 6,94,000</option>
            <option name = "car">Altroz XT  6,99,000</option>
            <option name = "car">Altroz XT LUXE 7,38,000</option>
            <option name = "car">Altroz XZ 7,59,000</option>
            <option name = "car">Altroz XZ(0)  7,75,000</option>
            <option name = "car">Altroz XZ URBAN  7,89,000</option>
           
		   <option name = "car">Diesel Altroz XE 1.5D 6,99,000</option>
            <option name = "car">Diesel Altroz XE 1.5D RHYTM 7,27,000</option>
            <option name = "car">Diesel Altroz XM 1.5D 7,90,000</option>
            <option name = "car">Diesel Altroz XM 1.5D STYLE 8,24,000</option>
            <option name = "car">Diesel Altroz XM 1.5D RHYTM 8,29,000</option>
            <option name = "car">Diesel Altroz XM 1.5D RHYTM+STYLE 8,54,000</option>
            <option name = "car"> Altroz XT 1.5D RHYTM+STYLE 8,59,000</option>
            <option name = "car"> Altroz XT 1.5D Luxe 8,98,000</option>
            <option name = "car">Altroz XZ 1.5D  9,19,000</option>
            <option name = "car"> Altroz XZ(o) 1.5D  9,35,000</option>
            <option name = "car">Diesel Altroz XZ 1.5D  9,49,000</option>
            
			<option name = "car">Nexon XE 6,99,900</option>
            <option name = "car">Nexon Xm 7,84,500</option>
            <option name = "car">Nexon XM(S) 8,36,500</option>
            <option name = "car">Nexon XZ 8,84,500</option>
            <option name = "car">Nexon XZ+ 9,64,500</option>
            <option name = "car">Nexon XZ+DT9,84,500</option>
            <option name = "car">Nexon XZ+(S) 10,24,500</option>
            <option name = "car">Nexon XZ+DT(o) 10,74,500</option>
           
		   <option name = "car">Diesel Nexon XE 8,45,000</option>
            <option name = "car">Diesel Nexon XM 9,20,000</option>
            <option name = "car">Diesel Nexon XM (s) 9,70,000</option>
            <option name = "car">Diesel Nexon XZ 10,20,000</option>
            <option name = "car">Diesel Nexon XZ+ 11,00,000</option>
            <option name = "car">Diesel Nexon XZ+DT 11,20,000</option>
            <option name = "car">Diesel Nexon XZ+(s) 11,60,000</option>
            <option name = "car">Diesel Nexon XZ+DT(s) 11,80,000</option>
            <option name = "car">Diesel Nexon XZ(o) 11,90,000</option>
            <option name = "car">Diesel Nexon XZ+DT(o) 12,10,000</option>
            
			<option name = "car">Nexon AMT XMA 8,44,500</option>
            <option name = "car">Nexon AMT XMA(s) 8,96,500</option>
            <option name = "car">Nexon AMT XMA 9,80,000</option>
            <option name = "car">Nexon AMT XZA+ 10,24,500</option>
            <option name = "car">Nexon AMT XMA(s) 10,30,000</option>
            <option name = "car">Nexon AMT XZA+DT 10,44,500</option>
            <option name = "car">Nexon AMT XZA+(s) 10,84,500</option>
            <option name = "car">Nexon AMT XZA+DT(s) 11,04,500</option>
            <option name = "car">Nexon AMT XZA+(o) 11,14,500</option>
            <option name = "car">Nexon AMT XZA+DT(o) 11,34,500</option>
            <option name = "car">Nexon AMT XZA+ 11,60,000</option>
            <option name = "car">Nexon AMT XZA+DT 11,80,000</option>
            <option name = "car">Nexon AMT XZA+(S) 12,20,000</option>
            <option name = "car">Nexon AMT XZA+DT(s) 12,40,000</option>
            <option name = "car">Nexon AMT XZA+(o) 12,50,000</option>
            <option name = "car">Nexon AMT XZA+DT(o) 12,70,000</option>
            
			<option name = "car">Nexon EV XM 13,99 Lakh</option>
            <option name = "car">Nexon EV XZ Plus 14,99  Lakh</option>
            <option name = "car">Nexon EV XZ Plus 15,99 Lakh</option>
           
		   <option name = "car">Harrier XE 13,84,000</option>
            <option name = "car">Harrier XM 15,15,000</option>
            <option name = "car">Harrier XT 16,40,000</option>
            <option name = "car">Harrier XT+ 16,99,000</option>
            <option name = "car">Harrier XZ 17,65,000</option>
            <option name = "car">Harrier XZ DT 17,75,000</option>
            <option name = "car">Harrier XZ DARK EDITION 17,85,000</option>
            <option name = "car">Harrier XZ+ 18,90,000</option>
            <option name = "car">Harrier XZ+DT 19,00,000</option>
            <option name = "car">Harrier XZ+DARK EDITION 19,10,000</option>
           
		   <option name = "car">Harrier AMT XMA 16,40,000</option>
            <option name = "car">Harrier AMT XZA 18,95,000</option>
            <option name = "car">Harrier AMT XZA DT 19,05,000</option>
            <option name = "car">Harrier AMT XZA DARK EDITION 19,15,000</option>
            <option name = "car">Harrier AMT XZA+ 19,99,500</option>
            <option name = "car">Harrier AMT XZA+DT 20,20,000</option>
            <option name = "car">Harrier AMT XZA+ DARK EDITION 20,30,000option></option>
	</select>
  </div>
   <div class="form-group mx-5">
    <label for="exampleInputEmail1">Enter Your Messges</label>
    <input type="text" name='msg' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Enter Captcha Code</label>
    <input type="text" name='skip_CaptchaCode' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="form-group mx-5">
<a href="https://www.snaphost.com/captcha/ReadyForms/ContactUsForm.aspx"><img alt="Contact Us form" id="CaptchaImage" src="https://www.SnapHost.com/captcha/CaptchaImage.aspx?id=9LUZYUSGWFX3&amp;ImgType=1" style="margin-left: 20px;" title="HTML code for Contact Us form" /></a>
</div>
  <div class="form-group mx-5">  
  <button type="submit" name="skip_Submit"  value="Submit" class="btn btn-primary">Submit</button>

</div>
                <input name="skip_WhereToSend" type="hidden" value="njgoswami15@gmail.com" />
                <input name="skip_SnapHostID" type="hidden" value="9LUZYUSGWFX3" />
                <input name="skip_WhereToReturn" type="hidden" value="localhost/ATATA/Email.php" />
                <input name="skip_Subject" type="hidden" value="Contact Us Form" />
                <input name="skip_ShowUsersIp" type="hidden" value="1" />
                <input name="skip_SendCopyToUser" type="hidden" value="1" />              
</div>
              
            </div>
          </form>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
