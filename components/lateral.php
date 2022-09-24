<?php 

    $text = (object) [
        'ENG' => (object) [
            'Home' => 'Home',
            'FAQ' => 'FAQ',
            'link' => "https://antarcticlands.org/antarctic-token-2/",
            'linkFAQ' => "https://antarcticlands.org/antarctic-token-2/#asked-question"
        ],
        'ES' => (object) [
            'Home' => 'Inicio',
            'FAQ' => 'Preguntas',
            'link' => "https://antarcticlands.org/es/antarctic-token/",
            'linkFAQ' => "https://antarcticlands.org/es/antarctic-token/#preguntas-frecuentes"
        ],
        'ITA' => (object) [
            'Home' => 'Home',
            'FAQ' => 'Domande',
            'link' => "https://antarcticlands.org/it/antarctic-token-aal/",
            'linkFAQ' => "https://antarcticlands.org/it/antarctic-token-aal/#domande-frequenti"
        ]
    ];

?>
<div class="lateral">
    <div><a href="./"><i class="fas fa-home"></i> <?php echo $text->$lang->Home;?></a></div>
    <div><a href="<?php echo $text->$lang->link;?>" target="_blank"><i class="fas fa-globe"></i> AntarcticLands</a></div>
    <div><a href="<?php echo $text->$lang->linkFAQ;?>" target="_blank"><i class="fas fa-question-circle"></i> <?php echo $text->$lang->FAQ;?></a></div>
    <div class="admin hidden"><a href="/admin/"><i class="fas fa-user-cog"></i> Admin</a></div>
</div>