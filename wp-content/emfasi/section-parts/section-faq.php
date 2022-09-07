<?php 
    $title = get_sub_field('title');
    $text = get_sub_field('text');
?>

<div class="section__faq">
    <div class="container">

        <div class="cont__header">
            <div class="cont__text">
                <?php echo $text; ?>
            </div>
        </div>

        <?php 
        // check for rows (parent repeater)
        if( have_rows('questions') ): ?>
            <div class="cont__questions">
            <?php 

            // loop through rows (parent repeater) 
            while( have_rows('questions') ): the_row(); ?>
                <div class="cont__question">
                    <?php 
                        $q_title = get_sub_field('title');
                        $q_description = get_sub_field('description');
                    ?>

                    <div class="cont__info">
                        <h3 class="entry-title"><?php echo $q_title; ?><span class="cont__icon"></span></h3>
                        <div class="block_cont__info">
                            <?php echo $q_description; ?>
                        </div>

                    </div>

                </div>	

            <?php endwhile; // while( has_sub_field('columns') ): ?>
            </div>
        <?php endif; // if( get_field('columns') ): ?>
    </div> <!-- container -->
</div> <!-- section -->
