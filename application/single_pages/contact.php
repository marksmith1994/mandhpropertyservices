<?php 
defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="hero">

    <div class="hero-content">
        <?php
            echo '<h1>' . $c->getCollectionName() . '</h1>';
        ?>
    </div>

</div>

<div class="contact-area">

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-12 col-lg-8">

                <div class="contact-form">

                    <form method="post" action="<?=$controller->action('submit')?>">

                        <h2>Want to know more?</h2>
                        <p>Please fill out the form with your contact details and how we can help and a member of the team will get in touch as soon as we are able.</p>

                        <div class="field">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" required/>
                            <span><?php echo $nameErr; ?></span>
                        </div>

                        <div class="field">
                            <label for="email">Email address</label>
                            <input id="email" name="email" type="email" />
                        </div>

                        <div class="field">
                            <label for="number">Phone number</label>
                            <input id="number" name="number" type="text" required/>
                        </div>

                        <div class="field">
                            <label for="subject">Subject</label>
                            <input id="subject" name="subject" type="text" required/>
                            <span><?php echo $captchaError; ?></span>
                        </div>
                        
                        <div class="field-long">
                            <label for="message">Message</label>
                            <textarea name="message" id="message"></textarea>
                        </div>

                        <div class="field-long">
                            <div class="g-recaptcha" data-sitekey="6Lev1aIZAAAAAAZQOa-pcDEuiv7olvVbTd26ionJ"></div>
                        </div>

                        <div class="field-long">
                            <button type="submit" class="button black">Send message</button>
                        </div>
                        
                    </form>

                </div>

            </div>

            <div class="col-12 col-lg-4">
                <h3>Contact Us</h3>
                <p>Mark - <u><a href="tel:07552810326">0755 281 0326</a></u><br />
                Huw - <u><a href="tel:07437924553">0743 792 4553</a></u><br />
                <u><a href="mailto:mhpropertyservices101@gmail.com">mhpropertyservices101@gmail.com</a></u></p>

                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/mandhpropertyservices/"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
                    <a href="https://www.instagram.com/mandhpropertyservices/"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a>
                </div>
            </div>

        </div>

    </div>

</div>
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- <script>
function initMap() {
    var uluru = {lat: 51.5026997, lng: -3.5982323};
    var map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: uluru});
    var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9SW87bN9ec8POB8zKNy4drDnjJpvN-WY&callback=initMap"></script> -->