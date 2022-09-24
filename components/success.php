<?php 
    $hash = $_GET['hash'];
    $bscLink = "https://bscscan.com/tx/" . $hash;
    $text = (object) [
        'ENG' => (object) [
            'title' => 'AAL Tokens Sent',
            'explainer2' => 'Your AALs will be sent to your metamask wallet right away. To see it, just add to Metamask the following token asset: ',    
            'justCopy' => 'Just click on the address to copy it.'
        ],
        'ES' => (object) [
            'title' => 'Token AAL Enviados',
            'explainer2' => 'Va a recibir los AAL en seguida. Para verlos, agruegue en Metamask el activo a continuacion:',    
            'justCopy' => 'Haga click en la dirección del token para copiarla'
        ],
        'ITA' => (object) [
            'title' => 'Token AAL Inviati',
            'explainer2' => 'Gli AAL saranno inviati subito. Per vederli, è sufficiente aggiungere a Metamask l\' asset qui sotto:',
            'justCopy' => 'Cliccare sull\' indirizzo del token per copiarlo'
        ],
    ]
?>

<div class = "show-success">
    <div class = "center"><img src="../assets/images/AALcoin.png" class = "coin-success"/></div>
    <h2 class = "center"><?php echo $text->$lang->title;?></h2>
    <h4 class = "center">
        <a href="<?php echo $bscLink; ?>" target="_blank" class="success">
            Hash: <span id="hashDisplay"></span>
        </a>
    </h4>
    <p><?php echo $text->$lang->explainer2;?></p>
    <p id="copyAddr" class="clickable">
        <i class="fas fa-copy"></i> <b id="tokenAddress"></b>
    </p>
    <p class="success"><?php echo $text->$lang->justCopy;?></p>
                
    <?php include('goBack.php');?>
</div>