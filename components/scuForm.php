<div class="airdrop-form-box">
    <?php
        
        $text = (object) [
            'ENG' => (object) [
                'explainer' => 'Please fill up the form, to convert your SCUs into AAL.',
                'explainer1' => 'Just specify the quantity of SCUs you want to redeem and click on the button.',
                'explainer2' => 'SCU/AAL Exchange Rate: 1 to 1.',
                'explainer3' => 'Your AAls will be sent to your metamask wallet right away. To see it, just add to Metamask the following token asset: ',
                'action' => 'Get AAL',
                'title' => 'Redeem SCU',
                'amount' => 'Amount in SCU',
                'gets' => 'You Receive: '
            ],
            'ES' => (object) [
                'explainer' => 'LLene el formulario, para convertir sus SCUs en AAL.',
                'explainer1' => 'Para hacerlo, es suficiente especificar el monto que Usted desea redimir hacer click en el boton.',
                'explainer2' => 'Tasa de Cambio SCU/AAL: 1 por 1.',
                'explainer3' => 'Va a recibir los AAL en seguida. Para verlos, agruegue en Metamask el activo a continuacion:',
                'action' => 'Recibir AAL',
                'title' => 'Redimir SCU',
                'amount' => 'Monto en SCU',
                'gets' => 'Recibe: '
            ],
            'ITA' => (object) [
                'explainer' => 'Riempi il form per convertire gli SCUs in AAL.',
                'explainer1' => 'Per farlo, è sufficiente specificare la quantità di SCU che si desidera redimere e clickare il bottone.',
                'explainer2' => 'Tasso di Cambio SCU/AAL: 1 ad 1.',
                'explainer3' => 'Gli AAL saranno inviati subito. Per vederli, è sufficiente aggiungere a Metamask l\' asset qui sotto:',
                'action' => 'Ricevi AAL',
                'title' => 'Redimere SCU',
                'amount' => 'Quantità in SCU',
                'gets' => 'Riceve: '
            ]
        ];
    ?>
    <div id = "scu-modal-background">
        <div class="scu-modal-content">
            <h3><i class="fas fa-window-close closer"></i></h3>
            <h1><i class ="fas fa-coins"></i> <?php echo $text->$lang->title;?></h1>
            <div class="scu-modal-body">
                <div>
                    <p><?php echo $text->$lang->explainer;?></p>
                    <p><?php echo $text->$lang->explainer1;?></p>
                    <p><?php echo $text->$lang->explainer2;?></p>
                    <p><?php echo $text->$lang->explainer3;?></p>
                    <p id="copyAddr" class="clickable">
                        <i class="fas fa-copy"></i> <b id="tokenAddress"></b>
                    </p>
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

</div>