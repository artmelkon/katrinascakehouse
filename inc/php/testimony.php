<section class="testimonials">
        <div class="subtitle testimony hd1"><?php echo $SUBTITLE; ?></div>
        <?php include $file_testimonials_lib; ?> 
        <?php
                foreach ($testimony as $value) {
                        $output = '<div class="testimony-container txt"><div class="testimonial"><q>'.$value['testimony'].'</q>';
                        $output.= '</div><div class="t-name"> -'.$value['name'].'</div></div>';
                        echo $output;
                }
        ?>
</section>