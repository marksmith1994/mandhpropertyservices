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

            <div class="col-12 col-md-8">

                <div class="contact-form">

                    <form method="post" action="<?=$controller->action('submit')?>">

                        <h2>Want to know more?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint esse ullam, repudiandae animi consequuntur</p>

                        <div class="field">
                            <label>First name*</label>
                            <input name="firstName" type="text" />
                        </div>

                        <div class="field">
                            <label>Last name*</label>
                            <input name="lastName" type="text" />
                        </div>

                        <div class="field">
                            <label>Email address*</label>
                            <input name="email" type="email" />
                        </div>

                        <div class="field">
                            <label>Phone number*</label>
                            <input name="number" type="text" />
                        </div>

                        <div class="field-long">
                            <label for="">Subject</label>
                            <input name="subject" type="text">
                        </div>
                        
                        <div class="field-long">
                            <label>Message*</label>
                            <textarea name="message" id=""></textarea>
                        </div>

                        <div class="field-long">
                            <button type="submit" class="button black">Send message</button>
                        </div>
                        
                    </form>

                </div>

            </div>
        </div>

        <div id="meettheteam" class="meet-team">

            <div class="row justify-content-md-center">
            
                <div class="col-12">

                    <h2>Meet the team</h2>

                    <div class="team-container"> 

                        <div class="team-member"> 
                            <?php $a = new Area('Team member photo'); $a->display($c); ?> 
                            <?php $a = new Area('Team Member Name'); $a->display($c); ?>
                            <?php $a = new Area('Team Member Number'); $a->display($c); ?>
                            <?php $a = new Area('Team Member Email'); $a->display($c); ?> 
                        </div>

                        <div class="team-member"> 
                            <?php $a = new Area('Team member photo 2'); $a->display($c); ?> 
                            <?php $a = new Area('Team Member Name 2'); $a->display($c); ?>
                            <?php $a = new Area('Team Member Number 2'); $a->display($c); ?>
                            <?php $a = new Area('Team Member Email 2'); $a->display($c); ?> 
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>