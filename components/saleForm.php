    <?php
        
        $text = (object) [
            'ENG' => (object) [
                'explainer' => 'During presale, it is possible to buy AAL at the lowest possible price.',
                'explainer1' => 'At this stage, the minimum purchase volume allowed is ',
                'explainer2' => 'Exchange Rate: 1 AAL for ',
                'explainer3' => 'Your AALs will be sent to your metamask wallet right away. To see it, just add to Metamask the following token asset: ',
                'action' => 'Buy AAL',
                'title' => 'AAL Presale',
                'amount' => 'Amount in USDT',
                'gets' => 'You Receive: ',
                'justCopy' => 'Just click on the address to copy it.'
            ],
            'ES' => (object) [
                'explainer' => 'El la etapa de preventa, es posible comprar AAL al precio mas bajo posible.',
                'explainer1' => 'El monto minimo de compra requirido es ',
                'explainer2' => 'Tasa de Cambio: 1 AAL por ',
                'explainer3' => 'Va a recibir los AAL en seguida. Para verlos, agruegue en Metamask el activo a continuacion:',
                'action' => 'Comprar AAL',
                'title' => 'Preventa de AAL',
                'amount' => 'Monto en USDT',
                'gets' => 'Recibe: ',
                'justCopy' => 'Haga click en la dirección del token para copiarla'
            ],
            'ITA' => (object) [
                'explainer' => 'In prevendita è possibile comprare il token AAL al prezzo più basso.',
                'explainer1' => 'In questa fase, l\' ammountare minimo dell\' acquisto è di ',
                'explainer2' => 'Tasso di Cambio: 1 AAL per ',
                'explainer3' => 'Gli AAL saranno inviati subito. Per vederli, è sufficiente aggiungere a Metamask l\' asset qui sotto:',
                'action' => 'Compra AAL',
                'title' => 'Prevendita di AAL',
                'amount' => 'Quantità in USDT',
                'gets' => 'Riceve: ',
                'justCopy' => 'Cliccare sull\' indirizzo del token per copiarlo'
            ]
        ];
    ?>
    <div id = "presale-modal-background">
        <div class="scu-modal-content">
            <h3><i class="fas fa-window-close closer"></i></h3>
            <h1><i class ="fas fa-coins"></i> <?php echo $text->$lang->title;?></h1>
            <div class="scu-modal-body">
                <div>
                    <p><?php echo $text->$lang->explainer;?></p>
                    <p id="pMinQTY">
                        <?php echo $text->$lang->explainer1;?> <span id="minQTY"></span> USDT
                    </p>
                    <p><?php echo $text->$lang->explainer2;?> <span id="xRate"></span> USDT</p>
                    <p><?php echo $text->$lang->explainer3;?></p>
                    <p id="copyAddr" class="clickable">
                        <i class="fas fa-copy"></i> <b id="tokenAddress"></b>
                    </p>
                    <p class="success"><?php echo $text->$lang->justCopy;?></p>
                </div>
                <form>
                    
                    <p class="label">
                        <i class = "fas fa-money-bill"></i> <?php echo $text->$lang->amount;?>
                    </p>
                    <p class="center">
                        <input type = "number" id="amount" placeholder="0.0" required>
                    </p>
                    <h6 class="right amountYouGet">
                        <?php echo $text->$lang->gets;?> <b><span id="amountYouGet" class="success">0.0</span> AAL</b>
                    </h6>
                    <br>

                    <?php include('feedbackBox.php');?>
                    
                    <div id="airdropFormSpinner" class="hidden">
                        <?php include('spinner.php');?>
                    </div>

                    <p class="center" id="airdrop-form-btn-container">
                        <span class="claim-btn-in-form"><i class="fas fa-coins"></i> <?php echo $text->$lang->action;?></span>
                    </p>
                    
                </form>
            </div>
        </div>
    </div>