<div id="mob-lateral-menu">
    <div class="mobAddressContainer hidden">
        <p class="mobAddress"></p>
    </div>
    <div><a href="./"><i class="fas fa-home"></i> <?php echo $text->$lang->Home;?></a></div>
    <div><a href="<?php echo $text->$lang->link;?>" target="_blank"><i class="fas fa-globe"></i> AntarcticLands</a></div>
    <div><a href="<?php echo $text->$lang->linkFAQ;?>" target="_blank"><i class="fas fa-question-circle"></i> <?php echo $text->$lang->FAQ;?></a></div>
    <div class="connectMob"><a href="#"><i class="fas fa-wallet"></i> <?php echo $text->$lang->Connect;?></a></div>
    <div class="admin hidden"><a href="/admin/"><i class="fas fa-user-cog"></i> Admin</a></div>

    <div id="mob-menu-lang-box">
        <div class="mob-flag-box">
            <img src="/assets/images/<?php echo $lang;?>.png" alt="<?php echo $language;?>" class="small-flag-mob"> <?php echo $language;?> <span id="invert-mob">^</span>
        </div>
        <div id="mob-lang-options" class="hidden">
            <?php 
                if($lang !== "ITA"){
                    echo '> <a href="/IT/"><img src="/assets/images/ITA.png" alt="Italiano" class="small-flag"> Italiano</a><br><br><br>';
                }
                if($lang !== "ENG"){
                    echo '> <a href="/"><img src="/assets/images/ENG.png" alt="English" class="small-flag"> English</a><br><br><br>';
                }
                if($lang !== "ES"){
                    echo '> <a href="/ES/"><img src="/assets/images/ES.png" alt="Español" class="small-flag"> Español</a>';
                }
            ?>
        </div>
    </div>

</div>