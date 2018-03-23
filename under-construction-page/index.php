<!DOCTYPE html>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design
                
  Contact:      robert@evergreenwebdesign.com
                (303) WEBSITE
                that's (303) 932.7483

  Comments:     You look very nice today! :)
-->
<head>
	<meta charset="UTF-8">
	<title>Wild Sage Myofascial Release Therapy, LLC</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="_scripts/custom-modernizr.js?<?php echo time(); ?>"></script>
	<link rel="stylesheet" href="styles.css?<?php echo time(); ?>">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">

</head>
<body onload="document.forms[0].name.focus();">
<div id="bg-div-one">
  <img src="_images/under-construction-opacity.png" alt="Under Construction">
</div>
<div id="wrapper">
<header>
	<h1>Wild Sage Myofascial Release Therapy, LLC</h1>
	<img src="_images/under-construction.png" alt="Under Construction">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    function recaptchaCallback() {
        $('#confirm').addClass('display');
        $('#send').removeAttr('disabled');
        $('#send').removeClass('display');
    };
  </script>
</header>
<section id="left-side">

<h2>What is myofascial release?</h2>
  <p>Myofascial release is manual soft tissue technique that involves sustained manual pressure combined with gentle stretching to tight or fascially restricted areas of the body. This highly specialized treatment technique is different from standard occupation and/or physical therapy, massage, and chiropractic therapy. May patients seek out myofascial release therapy when standard therapy has failed to completely address their pain and/or structural limitations that are contributing to their pain and/or pain patterns. Wild Sage Myofascial Release Therapy follows the myofascial release technique developed by John Barnes, a physical therapist, to address his own pain and limitations following and accident he sustained in his late teens. For more information on John Barnes and myofascial release you can go to his website www.myofascialrelease.com</p>

</section>
<section id="right-side">
	<p>While our Website is under construction please feel free to contact us for more information.</p>
    <form action="mail-to-me.php" method="post" id="contactForm">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" required tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" required tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" required tabindex="30"></textarea>
        </li>
        <li>
          <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Ld0qkQUAAAAAH8Fxs7nVvpUXmb_WIzv6EsStX2J"></div>
        </li>
        <li>
            <button id="confirm" disabled>Check Captcha above to enable Send</button>
            <button id="send" class="display" disabled>Send</button>
            <!-- <input id="send" type="submit" value="Send" tabindex="40" disabled /> -->
        </li>
        
    </ul> 
    
    </form>

</section>

<?php include '_includes/footer.php' ?>

</div><!-- #wrapper -->

<script type="text/javascript" src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>