<div class="airdrop-form-box">
    <?php
        
        $text = (object) [
            'ENG' => (object) [
                'explainer' => 'Please fill up the form in this page, to receive 100 AAL for free.',
                'explainer1' => 'In the form you have to insert the following:',
                'bullet1' => 'your email address.',
                'bullet2' => 'a link to some publication of yours (social media, blog article, youtube video) where you present the AAL token.',
                'explainer2' => 'Your AALs will be sent to your metamask wallet right away. To see it, just add to Metamask the following token asset: ',
                'action' => 'Get AAL',
                'time' => 'Time Left:',
                'justCopy' => 'Just click on the address to copy it.'
            ],
            'ES' => (object) [
                'explainer' => 'LLene el formulario para recibir 100 AAL gratis.',
                'explainer1' => 'Es necesario proporcionar lo siguiente:',
                'bullet1' => 'una dirección de correo electronico.',
                'bullet2' => 'un link a alguna publicacion suya (redes sociales, articulo de blog, video de youtube) donde se presenta el token AAL.',
                'explainer2' => 'Va a recibir los AAL en seguida. Para verlos, agruegue en Metamask el activo a continuacion:',
                'action' => 'Recibir AAL',
                'time' => 'Quedan:',
                'justCopy' => 'Haga click en la dirección del token para copiarla'
            ],
            'ITA' => (object) [
                'explainer' => 'Per ricevere 100 AAL gratis, è sufficiente riempire il form in questa pagina.',
                'explainer1' => 'E\' necessario fornire quanto segue: ',
                'bullet1' => 'un indirizzo email.',
                'bullet2' => 'un link a una sua pubblicazione (articolor di blog, post sui social, video youtube...) dove si presenta il token AAL.',
                'explainer2' => 'Gli AAL saranno inviati subito. Per vederli, è sufficiente aggiungere a Metamask l\' asset qui sotto:',
                'action' => 'Ricevi AAL',
                'time' => 'Tempo Rimanente:',
                'justCopy' => 'Cliccare sull\' indirizzo del token per copiarlo'
            ]
        ];
    ?>
    <div id = "airdrop-modal-background">
        <div class="airdrop-modal-content">
            <h3><i class="fas fa-window-close closer"></i></h3>
            <h1><i class ="fas fa-coins"></i> <?php echo $text->$lang->action;?></h1>
            <div class="airdrop-modal-body">
                <div>
                    <p><?php echo $text->$lang->explainer;?></p>
                    <p><?php echo $text->$lang->explainer1;?></p>
                    <p>
                        <ul>
                            <li><?php echo $text->$lang->bullet1;?></li>
                            <br>
                            <li><?php echo $text->$lang->bullet2;?></li>
                        </ul>
                    </p>
                    <p><?php echo $text->$lang->explainer2;?></p>
                    <p id="copyAddr" class="clickable">
                        <i class="fas fa-copy"></i> <b id="tokenAddress"></b>
                    </p>
                    <p class="success"><?php echo $text->$lang->justCopy;?></p>
                </div>
                <form>
                    
                    <p class="label">
                        <i class = "fas fa-envelope"></i> Email
                    </p>
                    <p class="center">
                        <input type = "email" id="email" placeholder="myemail@gmail.com" required>
                    </p>
                    <br>
                    <p class="label">
                        <i class = "fas fa-globe"></i> Link
                    </p>
                    <p class="center">
                        <input type = "text" id="link" placeholder="https://website.com" required>
                    </p>
                    
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