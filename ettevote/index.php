<?php get_header(); ?>

        <h1 class="worker-title"> MEIE TÖÖTAJAD</h1>
        <?php 
            if (have_posts()) {
                while(have_posts()) {
                    echo '<section class="info-window">';

                    the_post();
                    echo '<div  class="img-zoom">';
                    the_post_thumbnail('thumbnail');
                    echo '</div>';
                    $email = get_post_meta(get_the_ID(),$key="WORKEMAIL",$single=true);
                    $position = get_post_meta(get_the_ID(),$key="POSITION",$single=true);

                    echo '<h2 class="worker-name-text">';
                    the_title();
                    echo '</h2> <h3 class="position-text">' .$position .'</h3> ';
                    the_content();
                    echo ' <p class="email-text">' .$email. '</p>';

                    

                    
                    echo "</section>";
                }
            }
        ?>
        

<?php get_footer(); ?>