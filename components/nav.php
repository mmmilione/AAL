<?php 
    $language = "Italiano";
    if($lang === "ES"){$language="Español";}
    if($lang === "ENG"){$language="English";}

    $text = (object) [
        'ENG' => (object) [
            'Home' => 'Home',
            'Connect' => 'Connect',
            'FAQ' => 'FAQ',
            'link' => "https://antarcticlands.org/antarctic-token-2/",
            'linkFAQ' => "https://antarcticlands.org/antarctic-token-2/#asked-question"
        ],
        'ES' => (object) [
            'Home' => 'Inicio',
            'Connect' => 'Conectar',
            'FAQ' => 'Preguntas',
            'link' => "https://antarcticlands.org/es/antarctic-token/",
            'linkFAQ' => "https://antarcticlands.org/es/antarctic-token/#preguntas-frecuentes"
        ],
        'ITA' => (object) [
            'Home' => 'Home',
            'Connect' => 'Connetti',
            'FAQ' => 'Domande',
            'link' => "https://antarcticlands.org/it/antarctic-token-aal/",
            'linkFAQ' => "https://antarcticlands.org/it/antarctic-token-aal/#domande-frequenti"

        ]
    ];
?>


<div id="toast" class="">
    <div id="toastBody"></div>
</div>

<div class="nav">

    <div>
        <a href="./">
            <img src="/assets/images/AALsymbolCropped.png" class="symbol" alt="">
        </a>
    </div>
    
    <div class="flags">
        
        <div class="main-flag-box">
            <img src="/assets/images/<?php echo $lang;?>.png" alt="<?php echo $language;?>" class="small-flag"> <?php echo $language;?> <span id="invert">^</span>
        </div>

        <div id="lang-list">
            <?php 
                if($lang !== "ITA"){
                    echo '<a href="/IT/"><img src="/assets/images/ITA.png" alt="Italiano" class="small-flag"> Italiano</a><br><br>';
                }
                if($lang !== "ENG"){
                    echo '<a href="/"><img src="/assets/images/ENG.png" alt="English" class="small-flag"> English</a><br><br>';
                }
                if($lang !== "ES"){
                    echo '<a href="/ES/"><img src="/assets/images/ES.png" alt="Español" class="small-flag"> Español</a>';
                }
            ?>
        </div>
        
    </div>

    <div class = "connect">
        <p>
            <span class="connectBTN">
                <i class="fas fa-wallet"></i> <?php echo $text->$lang->Connect;?>
            </span>
            <span class="wallet hidden"></span>
        </p>
    </div>

    <div id="menu-btn-box">
        <span class="menu-btn">
            <i class="fas fa-bars menu-icons"></i>
            <i class="fas fa-window-close hidden menu-icons"></i>
        </span>
    </div>

</div>

<?php include('mobnav.php')?>

<?php include('alert.php')?>

<?php include('approvalForm.php'); ?>

