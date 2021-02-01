<?php include 'elements/header.php';?>

<div class="hero">

    <div class="hero-content">
        <?php
            echo '<h1>' . $c->getCollectionName() . '</h1>';
        ?>
    </div>

</div>

<div id="loading-image" style="text-align: center;">
    <img src="<?= $view->getThemePath() ?>/images/spinner.gif" />
</div>

<div id="failed-load" style="text-align: center;display:none">
    <h3>Gallery could not be loaded at this time. Please go to our instagram page for more.</h3>
</div>

<div class="gallery-container posts">

    
</div>


<script>
  function nFormatter(num){
    if(num >= 1000000000){
      return (num/1000000000).toFixed(1).replace(/\.0$/,'') + 'G';
    }
    if(num >= 1000000){
      return (num/1000000).toFixed(1).replace(/\.0$/,'') + 'M';
    }
    if(num >= 1000){
      return (num/1000).toFixed(1).replace(/\.0$/,'') + 'K';
    }
    return num;
  }
  $.ajax({
    url:"https://www.instagram.com/mandhpropertyservices?__a=1",
    type:'get',
    success:function(response){
      posts = response.graphql.user.edge_owner_to_timeline_media.edges;
      posts_html = '';
      for(var i=0;i<posts.length;i++){
        url = posts[i].node.display_url;
        title = posts[i].node.edge_media_to_caption.edges[0].node.text;
        posts_html += '<div class="image-container grid-item"><img style="min-height:50px;background-color:#fff;width:100%" src="'+url+'"><div class="title-overlay"><div class="title-overlay--inner"><p>'+title+'</p></div></div></div>';
      }
      $(".posts").html(posts_html);
    },
    complete: function(){
        $('#loading-image').hide();
    },
    fail: function(){
        $('#failed-load').show();
    }
  });

</script>

<div class="contact-box">

    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-12 col-md-10 col-lg-8">

                <div class="contact-box-container">

                    <h2>Follow us on Instagram!</h2>
                    <p>Click the link below to view our instagram page and see all our work. Feel free to get in contact with us if you would love what you see.</p>
                    <a href="https://www.instagram.com/mandhpropertyservices" target="_blank" class="button white no-hover">Follow Us</a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'elements/footer.php';?>