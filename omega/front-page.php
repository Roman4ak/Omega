<!DOCTYPE html>
<html lang="en">



<body>

<?php $baner = get_field('baner') ?>
    <div class="top_wrapper" style="background-image: url(<?php echo esc_url($baner['background']['url']) ?>)">

        <?php get_header() ?>



        <section class="page_title">


            <div class="container">
                <div class="main_post">
                    <h1><?php echo $baner['title'] ?></h1>
                    <p> <?php echo $baner['text'] ?></p>

                    <div class="button-container-1">
                        <span class="mas"><?php echo $baner['button']['title'] ?></span>
                        <a id='work' type="button" name="Hover" href="<?php echo $baner['button']['url'] ?> ">
                        	<?php echo $baner['button']['title'] ?> 
                        </a>
                    </div>
                </div>
            </div>

        </section>

    </div>

    <?php $posts = get_posts() ?>
    <?php if($posts){ ?>
	    <section class="posts">
	        <div class="container">
	        	<?php foreach ($posts as $post) { ?>
	        	<?php setup_postdata($post) ?>
		            <div class="post">

		            	

		                <img src="<?php echo esc_url(get_the_post_thumbnail_url($post)) ?>" alt="<?php echo esc_attr(get_the_post_thumbnail_caption($post)) ?>">

		                <h5><?php echo get_the_title($post) ?></h5>

		                <p><?php echo get_the_content() ?></p>

		                <a class="show_more" href="javascript:void(0)"> 
		                	<?php echo __('Show more') ?>
		                </a>

		            </div>
	        	<?php } ?>
	        	<?php wp_reset_postdata() ?>
	            
	        </div>


	    </section>
	<?php } ?>



    <?php get_footer() ?>

    
</body>


</html>