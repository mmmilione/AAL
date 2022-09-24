<div class="content">
    <?php
        $text = (object) [
            'ENG' => (object) [
                'title' => 'Antarctic (AAL) Presale',
                'explainer' => 'Connect your Metamask to buy AAL at lowest price:',
                'explainer1' => '<b>0.05 USDT ONLY</b> for each AAL',
                'panic' => 'When the offer expires, <b>the price will go up to 14 AAL for 1 USDT (~0.07 USDT)</b>',
                'action' => 'Buy AAL',
                'time' => 'This price is available for:'
            ],
            'ES' => (object) [
                'title' => 'Preventa de Antarctic (AAL)',
                'explainer' => 'Conecte Metamask para comprar AAL al precio mas bajo:',
                'explainer1' => '<b>SOLO 0.05 USDT</b> por cada AAL',
                'panic' => 'Cuando caduque esta oferta, <b>el precio va a subir a 14 AAL per USDT (~0.07 USDT)</b>',
                'action' => 'Comprar AAL',
                'time' => 'Este precio es valido por:'
            ],
            'ITA' => (object) [
                'title' => 'Antarctic (AAL) Presale',
                'explainer' => 'Connetti Metamask per comprare AAL al miglior prezzo:',
                'explainer1' => '<b>SOLO 0.05 USDT</b> per AAL',
                'panic' => 'Allo scadere dell\' offerta, <b>il prezzo sale a 14 AAL per ogni USDT (~0.07 USDT)</b>',
                'action' => 'Compra AAL',
                'time' => 'Offerta valida per:'
            ]
        ];
    ?>
    <div class="airdrop">
        <h1><?php echo $text->$lang->title;?></h1>
        <p><?php echo $text->$lang->explainer;?> <?php echo $text->$lang->explainer1;?></p>
        <p><?php echo $text->$lang->panic;?></p>
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
        <?php include('saleForm.php'); ?>
    </div>
</div>