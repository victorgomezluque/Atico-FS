<?php 
    $title = get_sub_field('title');
    $logos = get_sub_field('logos');
?>

<div class="section__logos">
    <div class="container">

        <div class="cont__title">
            <?php echo $title; ?>
        </div>

        <div class="cont__logos">
            <?php if( $logos ): ?>
                <ul>
                    <?php foreach( $logos as $logo ): ?>
                        <li>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo $logo['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>     
        </div>
        
    </div> <!-- container -->
</div> <!-- section -->
