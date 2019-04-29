<?php

$TESTIMONY = array(
        array('testemony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed purus libero, finibus in maximus id, gravida in nisi. Proin tincidunt, mi sit amet malesuada tristique, sem urna vehicula nisl, nec accumsan ante eros quis ligula.', 'name' => 'Jhon Doe'),
        array('testemony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed purus libero, finibus in maximus id, gravida in nisi. Proin tincidunt, mi sit amet malesuada tristique, sem urna vehicula nisl, nec accumsan ante eros quis ligula.', 'name' => 'Lord Byron'), 
        array('testemony' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed purus libero, finibus in maximus id, gravida in nisi. Proin tincidunt, mi sit amet malesuada tristique, sem urna vehicula nisl, nec accumsan ante eros quis ligula.', 'name' => 'Margaret Tetcher')
);

foreach ($TESTIMONY as $value) {
    $output = '<div class="testemony-container row"><div class="testemony"><q>'.$value['testemony'].'</q>';
    $output.= '</div><div class="t-name">'.$value['name'].'</div></div>';
    echo $output;
}