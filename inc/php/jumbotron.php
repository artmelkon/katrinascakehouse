<div class="jumbotron row">
   
    <div class="special-events container flex">
        <div class="event subtitle center hd2"><?php echo $SUBTITLE; ?></div>
        <?php
            for ($i=0; $i < count($EVENT_TITLE); $i++) {
        ?>
            <div class="events-box container">
            <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                <span class="sut-title txt"><?php echo $EVENT_TITLE[$i]; ?></span>
            </div>
        <?php } ?>
    </div>
</div>