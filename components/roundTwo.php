<div class="content">
    <?php
        $text = (object) [
            'ENG' => (object) [
                'title' => 'Antarctic (AAL) Round-Sale',
                'explainer' => 'Connect your Metamask to buy AAL at discounted price:',
                'explainer1' => '<b>12 AAL per USDT (~0.085 USDT ONLY)</b>',
                'panic' => 'When the offer expires, the token will be sold on PancakeSwap <b>for of 0.1 USDT</b>',
                'action' => 'Buy AAL',
                'time' => 'This price is available for:'
            ],
            'ES' => (object) [
                'title' => 'Round Sale de Antarctic (AAL)',
                'explainer' => 'Conecte Metamask para comprar AAL a un precio especial:',
                'explainer1' => '<b>12 AAL por 1 USDT (SOLO ~0.085 USDT)</b>',
                'panic' => 'Cuando caduque esta oferta, el token se va a poder comprar el token en PancakeSwap <b>por 0.01 USDT</b> por cada AAL',
                'action' => 'Comprar AAL',
                'time' => 'Este precio es valido por:'
            ],
            'ITA' => (object) [
                'title' => 'Round Sale di Antarctic (AAL)',
                'explainer' => 'Connetti Metamask per comprare AAL ad un prezzo scontato:',
                'explainer1' => '<b>12 AAL per 1 USDT (SOLO ~0.085 USDT)</b>',
                'panic' => 'Allo scadere dell\' offerta, si potrà comprare il token su PancakeSwap al prezzo di <b>0.01 USDT</b> per AAL',
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