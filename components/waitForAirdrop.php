<div class="content">
    <?php
        $text = (object) [
            'ENG' => (object) [
                'title' => 'Join the Airdrop of Antarctic (AAL)',
                'explainer' => 'Connect your Metamask to claim 100 AAL for free.',
                'time' => 'Airdrop will start on:',
                'sep15' => '15th of September 2022'
            ],
            'ES' => (object) [
                'title' => 'Participe al Airdrop de Antarctic (AAL)',
                'explainer' => 'Conecte su Metamask para recibir 100 AAL gratis.',
                'time' => 'El Airdrop empieza el dia:',
                'sep15' => '15 de Setiembre 2022'
            ],
            'ITA' => (object) [
                'title' => 'Partecipa all\' Airdrop di Antarctic (AAL)',
                'explainer' => 'Connetti Metamask per ricevere gratuitamente 100 Token Antarctic di AntarticLands (AAL).',
                'time' => 'L\' Airdrop inizia il:',
                'sep15' => '15 Settembre 2022'
            ]
        ];
    ?>
    <div class="airdrop">
        <h1><?php echo $text->$lang->title;?></h1>
        <p><?php echo $text->$lang->explainer;?></p>
        <div class="divider"></div>
        <h3 id="timeleft"><?php echo $text->$lang->time;?></h3>
        <h2 class="counter dateMOB">
           <?php echo $text->$lang->sep15; ?>
        </h2>
        <div class="divider"></div>
        <div class="divider"></div>
        
        <?php include('certificate.php'); ?>
        <?php include('airdropForm.php'); ?>
    </div>
</div>