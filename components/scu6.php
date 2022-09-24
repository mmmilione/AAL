<div class="content">
    <?php
        $text = (object) [
            'ENG' => (object) [
                'title' => 'Redeem your SCU6 Tokens',
                'explainer' => 'Connect your Metamask to redeem your SCU6 tokens for AAL at a 1 to 1 ratio.',
                'action' => 'Convert SCU',
                'time' => 'Convertibility will start in:'
            ],
            'ES' => (object) [
                'title' => 'Convierta sus tokens SCU6',
                'explainer' => 'Conecte su Metamask para convertir sus token SCU6 en AAL al 1 por 1.',
                'action' => 'Convertir SCU',
                'time' => 'Va a poder convertir dentro de:'
            ],
            'ITA' => (object) [
                'title' => 'Converti i tuoi SCU6 in AAL',
                'explainer' => 'Connetti Metamask per gli SCU6 in AAL al tasso di conversione di 1 ad 1.',
                'action' => 'Converti SCU',
                'time' => 'La convertibilità avrà inizio tra:'
            ]
        ];
    ?>
    <div class="airdrop">
        <h1><?php echo $text->$lang->title;?></h1>
        <p><?php echo $text->$lang->explainer;?></p>
        <div class="divider"></div>
        <h3 id="timeleft" class="hidden"><?php echo $text->$lang->time;?></h3>
        <h2 class="counter">
           <?php include('spinner.php')?>
        </h2>
        <div class="divider"></div>
        <p class="claim">
            <span class="claim-btn hidden"><i class="fas fa-coins"></i> <?php echo $text->$lang->action;?></span>
        </p>
        <?php include('scuForm.php'); ?>
        
    </div>
</div>