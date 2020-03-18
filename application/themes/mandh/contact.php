<?php include 'elements/header.php';?>

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

                    <form>

                        <h2>Want to know more?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint esse ullam, repudiandae animi consequuntur</p>

                        <div class="field">
                            <label>First name*</label>
                            <input type="text" />
                        </div>

                        <div class="field">
                            <label>Last name*</label>
                            <input type="text" />
                        </div>

                        <div class="field">
                            <label>Email address*</label>
                            <input type="email" />
                        </div>

                        <div class="field">
                            <label>Phone number*</label>
                            <input type="text" />
                        </div>
                        
                        <div class="field-long">
                            <label>Message*</label>
                            <textarea name="" id=""></textarea>
                        </div>

                        <div class="field-long">
                            <button class="button black">Send message</button>
                        </div>
                        
                    </form>

                </div>

            </div>

            <div class="col-12 col-md-3 offset-md-1">

                <h2 style="text-align: center;">Meet the team</h2>

                <div class="team-member"> 
                    <?php $a = new Area('Team member photo'); $a->display($c); ?> 
                    <?php $a = new Area('Team Member Name'); $a->display($c); ?>
                    <?php $a = new Area('Team Member Number'); $a->display($c); ?>
                    <?php $a = new Area('Team Member Email'); $a->display($c); ?> 
                </div>

                <div class="team-member"> 
                    <?php $a = new Area('Team member photo 2'); $a->display($c); ?> 
                    <h3><?php $a = new Area('Team Member Name 2'); $a->display($c); ?></h3>
                    <?php $a = new Area('Team Member Number 2'); $a->display($c); ?>
                    <?php $a = new Area('Team Member Email 2'); $a->display($c); ?> 
                </div>

            </div>

        </div>

    </div>

</div>


<?php include 'elements/footer.php';?>