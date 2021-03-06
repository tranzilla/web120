<?php
	include 'includes/header.php';
?>

<div class="bgimg-1" id="home">
    <div class="caption"><span class="border">WYATT SCHREPEL PROFESSIONAL PILOT SERVICES</span></div>
</div>

<div class="contact-form">
    <h3 class="pageID"><?=$pageID?></h3>
    <h4>Want to schedule a flight? Contact Wyatt through this form.</h4>
    <div class="contact-input">
        <?php include "includes/simple.php";?>
        <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
            <div>
                <label>
                    <input type="text" name="Name" required="required" placeholder="Name (required)" title="Name is required" tabindex="10" size="37" autofocus />
                </label>
            </div>
            <div>	
                <label>
                    <input type="email" name="Email" required="required" placeholder="Email Address (required)" title="A valid email is required" tabindex="20" size="37" />
                </label>
            </div>
            <!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
            <div>	
                <label>
                    <textarea name="Comments" cols="36" rows="4" placeholder="Message" tabindex="30"></textarea>
                </label>
            </div>	
            <div><?=$feedback?></div>
            <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
            <div>
                <input type="submit" value="Message Me" />
            </div>
        </form>
    </div>
</div>
<!-- END HTML FORM -->
<script src="https://www.google.com/recaptcha/api.js?hl=en">
</script>

<?php
	include 'includes/footer.php';
?>