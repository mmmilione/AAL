<div class="faq-list">
    <?php
    
        $text = (object) [
            'ENG' => (object) [
                'title' => 'FAQ',
                'chainQ' => 'In which blockchain is AAL running?',
                'chainA' => 'AAL runs on the Binance Smartchain',
                'airdropQ' => 'What\'s an airdrop?',
                'airdropA' => 'An airdrop is a way to distribute a token or cryptocurrency for free. The airdrop of AAL will start on September the 15th 2022 and wil last for 60 days. 2.5 millions AAL will be given away for free.',
                'buyQ' => 'How can I get AAL?',
                'buyA' => 'You can get AAL for free, during the airdrop phase, which starts on September the 15th 2022. After that, the real phase of AAL sale will begin. Sale stages are listed below:',
                'presale' => '<b>PRESALE (120 days):</b> after the airdrop, institutioonal investors will be able to buy AAL the bargain price of 0.05 USDT each. In this phase, the minimum amount that can be purchased is the equivalent of 5000 USDT.',
                'round1' => '<b>ROUND-SALE 1 (60 days):</b> after presale, it will be possible to buy AAL the rate of 14 AAL for 1 USDT (~0.07 USDT). The minimum amount that can be purchased is the equivalent of 10 USDT.',
                'round2' => '<b>ROUND-SALE 2 (60 days):</b> after ROUND 1, it will be possible to buy AAL the rate of 11 AAL for 1 USDT (~0.085 USDT). The minimum amount that can be purchased is the equivalent of 10 USDT.',
                'market' => '<b>FREE MARKET:</b> after ROUND 2, AAL will be freely convertible in USDT on the PancakeSwap DEX. As the AAL/USDT Liquidity Pool is deployed on the DEX, the initial exchange rate will be 10 AAL for 1 USDT (0.1 USDT). Afterwards, the exchange rate will float freely depending on supply and demand.',
                'connectQ' => 'How do I connect my metamask to the Binance Smartchain?',
                'connectA' => 'Please refer to the official Binance documentation to set up your metamask. <a href="https://academy.binance.com/en/articles/connecting-metamask-to-binance-smart-chain" target="_blank">CLICK HERE</a>',
                'addressQ' => 'What\'s the address of the token AAL?',
                'addressA' => 'The address of the Smart Contract of token AAL is:',
                'skuQ' => 'What\'SCU?',
                'skuA1' => 'The SCU token is a proxy token that can be redeemed for AAL at a fixed 1 to 1 ratio. It is used to reward some of the contributors of this project.',
                'skuA2' => 'It comes in two flavours: SCU6 and SCU18. The former can be redeemed only 6 months after the AAL token is launched. The latter can be redeemed only 18 months after launch.',
                'skuA3' => 'The idea is to guarantee that team members are fully committed to the success of the project, while avoiding them to dump the token, thereby crushing the price.',
                'scuAddressQ' => 'Which are the addresses of SCU proxy token contracts?',
                'redeemQ' => 'How can I redeem my SCUs?',
                'redeemA1' => '<a href="./scu6.php">CLICK HERE</a> to redeem your SCU6.',
                'redeemA2' => '<a href="./scu18.php">CLICK HERE</a> to redeem your SCU18.',
                'gasQ' => 'Sometimes I try to send my tokens (USDT, SCU, AAL, DAI...) to someone else and Metamask returns a strange error',
                'gasA' => 'This is due to the new Gas feature of Metamask. You just need to set manually the gas price for the transaction if the default value is 0.'
            ],
            'ES' => (object) [
                'title' => 'Preguntas',
                'chainQ' => 'En cual blockchain corre AAL?',
                'chainA' => 'AAL corre en la Binance Smartchain',
                'airdropQ' => 'Que es un airdrop?',
                'airdropA' => 'El airdrop es la practica de distribuir un token o una criptomoneda dde manera gratuita. El airdrop de AAL va a empezar el dia 15 de September 2022 y va a durar 60 dias. Se van a regalar 2.5 millones de AAL.',
                'buyQ' => 'Como puedo obtener AAL?',
                'buyA' => 'Puede obtener AAL gratuitamente, partecipando al Airdrop, que va a empezar el dia 15 de Setiembre 2022. Luego, va a empezar la fase de venta del token propiamente dicha. Abajo encuentra las distintas fases del proceso de venta:',
                'presale' => '<b>PRESALE (120 dias):</b> despues del airdrop, los inversionistas institucionales van a poder comprar los AAL al precio de 0.05 USDT. En esta fase, el monto minimo de compra es 5000 USDT.',
                'round1' => '<b>ROUND-SALE 1 (60 dias):</b> despues del presale, va a ser possibile comprar AAL a la tasa de cambio de 14 AAL por 1 USDT (~0.07 USDT). El monto minimo de compra es 10 USDT.',
                'round2' => '<b>ROUND-SALE 2 (60 dias):</b> despues del ROUND 1, va a ser possibile comprar AAL a la tasa de cambio de 11 AAL por 1 USDT (~0.085 USDT). El monto minimo de compra es 10 USDT.',
                'market' => '<b>MERCADO LIBRE:</b> depsues del ROUND 2, va a ser possibile intercambiar AAL por USDT en el DEX PancakeSwap. En cuanto se despliegue el Liquidity Pool en el DEX, la tasa de cambio inicial va a ser 10 AAL por 1 USDT (0.1 USDT). Luego el precio va a fluctuar libremente, en dependencia de las dinamicas de oferta y demanda.',
                'connectQ' => 'Como puedo conectarme a la Binance Smartchain?',
                'connectA' => 'Consulte la documentacion de Oficial de Binance. <a href="https://academy.binance.com/es/articles/connecting-metamask-to-binance-smart-chain" target="_blank">HAGA CLICK AQUI</a>',
                'addressQ' => 'Cual es la direccion del token AAL?',
                'addressA' => 'La direccion del Smart Contract del token AAL es:',
                'skuQ' => 'Que es SCU?',
                'skuA1' => 'El token SCU es un token proxy que puede ser convertido en AAL al cambio fijo de 1 por 1. Es utilizado para recompensar algunos de los contribudores claves del proyecto.',
                'skuA2' => 'Existen 2 variedades de este token: SCU6 y SCU18. El primero, puede ser convertido 6 meses despues del lanzo de AAL. El segundo puede ser convertido solo 18 meses despues del lanzo.',
                'skuA3' => 'La idea es garantizar que el equipo esté bien motivado a proteger el valor de AAL,evitando que vendan el token en seguida, afectando negativamente el precio.',
                'scuAddressQ' => 'Quales son las direcciones del los Smart Contract del Token Proxy SCU?',
                'redeemQ' => 'Como puedo convertir mis SCUs?',
                'redeemA1' => '<a href="./scu6.php">HAGA CLICK AQUI</a> para convertir SCU6.',
                'redeemA2' => '<a href="./scu18.php">HAGA CLICK AQUI</a> para convertir SCU18.',
                'gasQ' => 'De vez en cuando, no logro enviar is token (USDT, AAL, SCU, DAI...). Metamask me devuelve un error muy raro.',
                'gasA' => 'Esto pasa producto a la nueva modalidad de gestion del gas adoptada por Metamask. La solucion es facil: es suficiente poner manualmente el costo del Gas en Metamask si el valor por defecto es 0'
            ],
            'ITA' => (object) [
                'title' => 'FAQ',
                'chainQ' => 'In quale blockchain gira AAL?',
                'chainA' => 'AAL gira sulla Binance Smartchain',
                'airdropQ' => 'Cosa è un airdrop?',
                'airdropA' => 'L\' airdrop è un metodo per distribuire gratuitamente un token o una criptomoneta. L\' airdrop di AAL inizia il 15 Settembre 2022 e durerà 60 giorni. 2.5 milioni di AAL saranno distribuiti gratuitamente.',
                'buyQ' => 'Come posso ottenere AAL?',
                'buyA' => 'E\' possibile ottenere AAL gratis partecipando all\' Airdrop che inizia il 15 di Settembre. Successivamente, inizierà la fase di vendita propriamente detta. Qui sotto sono elencate le varie fasi del processo di vendita:',
                'presale' => '<b>PRESALE (120 giorni):</b> terminato l\'airdrop, gli investitori istituzionali potranno iniziare ad acquistare AAL al prezzo di 0.05 USDT. In questa fase, la quantità minima acquistabile ammonta a 5000 USDT.',
                'round1' => '<b>ROUND-SALE 1 (60 giorni):</b> terminato il presale, sarà possibile acquistare AAL, al tasso di 14 AAL per 1 USDT (~0.07 USDT). La quantità minima acquistabile è di 10 USDT.',
                'round2' => '<b>ROUND-SALE 2 (60 giorni):</b> terminato il ROUND 1, sarà possibile acquistare AAL, al tasso di 11 AAL per 1 USDT (~0.085 USDT). La quantità minima acquistabile è di 10 USDT.',
                'market' => '<b>MERCATO LIBERO:</b> terminato il ROUND 2, AAL sarà convertibile in USDT sul DEX PancakeSwap. Al momento del lancio sul DEX il tasso di cambio iniziale sarà di 10 AAL per 1 USDT (0.1 USDT). Successivamente il prezzo fluttuerà liberamente, a seconda delle dinamiche della domanda ed dell\' offerta.',
                'connectQ' => 'Come posso connetermi alla Binance Smartchain?',
                'connectA' => 'Consulti la documentazione ufficiale di Binance. <a href="https://academy.binance.com/it/articles/connecting-metamask-to-binance-smart-chain" target="_blank">CLICCARE QUI</a>',
                'addressQ' => 'Qual\' è l\' indirizzo del contratto del token AAL?',
                'addressA' => 'L\' indirizzo del contratto del token AAL è:',
                'skuQ' => 'Che è SCU?',
                'skuA1' => 'SCU è un token proxy  che può essere convertito in AAL al tasso fisso di 1 per 1. E\' utilizzato per ricompensare alcuni contributori chiave del progetto.',
                'skuA2' => 'Esistono 2 varietà di questo token: SCU6 e SCU18.Il primo, può essere convertito 6 mesi dopo il lancio di AAL. Il secondo, può essere convertito solo 18 mesi dopo il lancio.',
                'skuA3' => 'L\' obittivo è incentivare il team a proteggere il valore di AAL, evitando dump del token sul mercato, che impatterebbero negativamente il prezzo.',
                'scuAddressQ' => 'Quali sono gli indirizzi degli Smart Contract del Proxy Token SCU?',
                'redeemQ' => 'Come posso convertire i miei SCU?',
                'redeemA1' => '<a href="./scu6.php">CLICCARE QUI</a> per convertire SCU6.', 
                'redeemA2' => '<a href="./scu18.php">CLICCARE QUI</a> per convertire SCU18.',
                'gasQ' => 'A volte capita che non riesco ad inviare i miei token (USDT, DAI, AAL, SCU...). Metamask mi da un errore strano.',
                'gasA' => 'Questo accade a causa della nuova modalità di gestione del gas adottata da Metamask. La soluzione è facile: è sufficiente specificare manualmente il prezzo del gas, se questo valore per difetto è 0'
            ]
        ];
    ?>

    <h1><?php echo $text->$lang->title;?></h1>

    <h4><?php echo $text->$lang->chainQ;?></h4>
    <p><?php echo $text->$lang->chainA;?></p>

    <h4><?php echo $text->$lang->airdropQ;?></h4>
    <p><?php echo $text->$lang->airdropA;?></p>
    <h4><?php echo $text->$lang->buyQ;?></h4>
    <p><?php echo $text->$lang->buyA;?></p>
    <p>
        <ul>
            <li><?php echo $text->$lang->presale;?></li><br>
            <li><?php echo $text->$lang->round1;?></li><br>
            <li><?php echo $text->$lang->round2;?></li><br>
            <li><?php echo $text->$lang->market;?></li><br>
        </ul>
    </p>
    
    <h4><?php echo $text->$lang->connectQ;?></h4>
    <p><?php echo $text->$lang->connectA;?></p>
    <h4><?php echo $text->$lang->addressQ;?></h4>
    <p><?php echo $text->$lang->addressA;?></p>
    <p class="clickable" id="copyAAL">
        <i class="fas fa-copy"></i> <b id="aalAddress"></b>
    </p>
    <p id="aalLink" class="bscLink"><i class="fas fa-search"></i> BSC Scan</p>
    <h4><?php echo $text->$lang->skuQ;?></h4>
    <p><?php echo $text->$lang->skuA1;?></p>
    <p><?php echo $text->$lang->skuA2;?></p>
    <p><?php echo $text->$lang->skuA3;?></p>
    <h4><?php echo $text->$lang->scuAddressQ;?></h4>
    <p>SCU6:</p>
    <p class="clickable" id="copySCU6">
        <i class="fas fa-copy"></i> <b id="scu6Address"></b>
    </p>
    <p id="scu6Link" class="bscLink"><i class="fas fa-search"></i> BSC Scan</p>
    <p>SCU18:</p>
    <p class="clickable" id="copySCU18">
        <i class="fas fa-copy"></i> <b id="scu18Address"></b>
    </p>
    <p id="scu18Link" class="bscLink"><i class="fas fa-search"></i> BSC Scan</p>
    <h4><?php echo $text->$lang->redeemQ;?></h4>
    <p><?php echo $text->$lang->redeemA1;?></p>
    <p><?php echo $text->$lang->redeemA2;?></p>
    <h4><?php echo $text->$lang->gasQ;?></h4>
    <p><?php echo $text->$lang->gasA;?></p>

</div>
