<div class="content">
    <?php
        $text = (object) [
            'ENG' => (object) [
                'title' => 'We Are Airdropping Antarctic (AAL)',
                'explainer' => 'Connect your Metamask to claim 100 AAL for free.',
                'action' => 'Get AAL',
                'time' => 'Time Left:'
            ],
            'ES' => (object) [
                'title' => 'Estamos Airdropando Antarctic (AAL)',
                'explainer' => 'Conecte su Metamask para recibir 100 AAL gratis.',
                'action' => 'Recibir AAL',
                'time' => 'Quedan:'
            ],
            'ITA' => (object) [
                'title' => 'Stiamo Airdroppando Antarctic (AAL)',
                'explainer' => 'Connetti Metamask per ricevere gratuitamente 100 Token Antarctic di AntarticLands (AAL).',
                'action' => 'Ricevi AAL',
                'time' => 'Tempo Rimanente:'
            ]
        ];
    ?>
    <div class="airdrop">
        <h1><?php echo $text->$lang->title;?></h1>
        <p><?php echo $text->$lang->explainer;?></p>
        <div class="divider"></div>
        <h3 id="timeleft">
            <?php echo $text->$lang->time;?>
        </h3>
        <h2 class="counter">Loading...</h2>
        <div class="divider"></div>
        <p class="claim">
            <span class="claim-btn">
                <i class="fas fa-coins"></i> <?php echo $text->$lang->action;?>
            </span>
        </p>
        <?php include('certificate.php'); ?>
        <?php include('airdropForm.php'); ?>
    </div>
</div>