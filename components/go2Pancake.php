<div class="content">
    <?php
        $text = (object) [
            'ENG' => (object) [
                'title' => 'Buy Antarctic (AAL)',
                'explainer' => 'You can now buy Antarctic (AAL) at market price on the PancakeSwap DEX.',
                'action' => 'Buy AAL',
            ],
            'ES' => (object) [
                'title' => 'Compre Antarctic (AAL)',
                'explainer' => 'Ahora es posible comprar AAL a precio de mercado en el DEX PancakeSwap',
                'action' => 'Comprar AAL',
                
            ],
            'ITA' => (object) [
                'title' => 'Compra Antarctic (AAL)',
                'explainer' => 'Adesso è possibile comprare AAL a prezzo di mercato nel DEX Pancake Swap.',
                'action' => 'Compra AAL',
            ]
        ];
    ?>
    <div class="airdrop">

        <h1><?php echo $text->$lang->title;?></h1>
        <p><?php echo $text->$lang->explainer;?></p>

        <div class="divider"></div>
        <div class="divider"></div>
        <div class="divider"></div>
        <div class="divider"></div>
        <div class="divider"></div>

        <p class="claim">
            <a class="claim-btn" href="https://pancakeswap.finance" target="_blank">
                <i class="fas fa-coins"></i> <?php echo $text->$lang->action;?>
            </a>
        </p>

        <?php include('certificate.php'); ?>
        
    </div>
</div>