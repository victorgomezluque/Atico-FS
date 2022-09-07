<?php 
    $xxx = get_sub_field('xxx');
?>

<div class="section__xxx">
    <div class="container">
        <div class="row">
            <?php 
            // check for rows (parent repeater)
            if( have_rows('columns') ): ?>
                <div class="cont__columns">
                <?php 

                // loop through rows (parent repeater)
                while( have_rows('columns') ): the_row(); ?>
                    <div class="cont__column">
                        <?php 
                            $xxx = get_sub_field('xxx');
                            $link = get_sub_field('xxx');
                        ?>

                        <div class="cont__xxx">
                            <h3><?php echo $xxx; ?></h3>
                        </div>
                        
                        <?php if($link): ?>
                            <a class="button" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
                        
                    </div>	

                <?php endwhile; // while( has_sub_field('columns') ): ?>
                </div>
            <?php endif; // if( get_field('columns') ): ?>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- section -->
