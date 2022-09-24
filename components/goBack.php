<?php 
    $text = (object) [
        'ENG' => (object) [
            'back' => 'Go Back',
        ],
        'ES' => (object) [
            'back' => 'Atras',
        ],
        'ITA' => (object) [
            'back' => 'Indietro',
        ],
    ]
?>

<p class="center">
    <a href="./">
        <span class="connectBTN"><?php echo $text->$lang->back;?></span>
    </a>
</p>