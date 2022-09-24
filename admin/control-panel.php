<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntarcticLands Token - AAL - Dashboard</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/admin.css">
    
</head>

<body>
    <div class="container">

        <?php 
            $lang = 'ITA';
            include('../components/nav.php'); 
        ?>

        <?php 
            $pw = $_POST["pw"];
            if($pw != "YOUR_PASSWORD"){ //Customize this
                return include("wrongpw.php");
            }
        ?>

        <div class="main-dashboard">

            <h2>Dashboard</h2>

            <div class="stats">
                <h3>Token Bruciati</h3>
                <div class="burning-box">
                    <p>AAL: <b id="allBurnt">Loading...</b></p>
                    <p>SCU6: <b id="scu6Burnt">Loading...</b></p>
                    <p>SCU18: <b id="scu18Burnt">Loading...</b></p>
                </div>
            </div>

            <div class="stats">
                <h3>Vendita</h3>

                <div class="ownership-box">

                    <div>
                        <p>Status: <b id="statusSale">Loading...</b></p>
                        <p class="error" id="saleSwitchError"></p>
                        <p class="success" id="saleSwitchSuccess"></p>
                    </div>

                    <div>
                        <p class="sale-switch-btns">
                            <span id="saleON" class="start hidden saleBTNs"><i class="fas fa-play" ></i> Start</span>
                            <span id="saleOFF" class="stop hidden saleTNs"><i class="fas fa-stop"></i> Stop</span>
                            <span id="saleDisabled" class="disabled hidden saleBTNs"><i class="fas fa-play" ></i> Start</span>
                        </p>
                        <div class="spinner hidden" id="saleSwitchSpinner">
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>

                <div class="fine-line"></div>

                <p>Owner: <b id="ownerSale">Loading...</b></p>

                <p>Saldo: <b id="balanceSale">Loading...</b> AAL</p>

                <div class="fine-line"></div>

                <h4>Trasferisci Propietà</h4>

                <div class="ownership-box">

                    <form id="salePropertyForm">
                        <div>
                            <p class="label">Nuevo Proprietario</p>
                            <input type="text" id="newOwnerSale" placeholder="0x...." required>
                            <p id="saleOwnerError" class="error"></p>
                            <p id="saleOwnerSuccess" class="success"></p>
                        </div>
                    </form>

                    <div>
                        <p id="saleChangeOwnerP">
                            <span id="saleChangeOwner" class="changeOwner"><i class="fas fa-random" ></i> Trasferisci</span>
                        </p>
                        <div class="spinner hidden" id="saleOwnershipSpinner">
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>

                <div class="fine-line"></div>

                <div class = "sale-stats">
                    <div>
                        <p>Volume Presale: <b id="presaleVol">Loading...</b></p>
                        <p>Partecipanti Presale: <b id="presalePartecipants">Loading...</b></p>
                    </div>
                    <div>
                        <p>Volume Round1: <b id="round1Vol">Loading...</b></p>
                        <p>Partecipanti Round1: <b id="round1Partecipants">Loading...</b></p>
                    </div>
                    <div>
                        <p>Volume Round2: <b id="round2Vol">Loading...</b></p>
                        <p>Partecipanti Round2: <b id="round2Partecipants">Loading...</b></p>
                    </div>
                </div>
                <!--
                <p>AAL Airdroppati: <b id="aalDropped">Loading...</b></p>

                <p>Partecipanti: <b id="participants">Loading...</b></p>
                -->
            </div>

            <div class="stats">
                <h3>Airdrop</h3>

                <div class="ownership-box">

                    <div>
                        <p>Status: <b id="status">Loading...</b></p>
                        <p class="error" id="airdropSwitchError"></p>
                        <p class="success" id="airdropSwitchSuccess"></p>
                    </div>

                    <div>
                        <p class="aidrop-switch-btns">
                            <span id="airdropON" class="start hidden airBTNs"><i class="fas fa-play" ></i> Start</span>
                            <span id="airdropOFF" class="stop hidden airBTNs"><i class="fas fa-stop"></i> Stop</span>
                            <span id="airdropDisabled" class="disabled hidden airBTNs"><i class="fas fa-play" ></i> Start</span>
                        </p>
                        <div class="spinner hidden" id="airdropSwitchSpinner">
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>

                <div class="fine-line"></div>

                <p>Owner: <b id="owner">Loading...</b></p>

                <p>Saldo: <b id="balanceAirdrop">Loading...</b> AAL</p>

                <div class="fine-line"></div>

                <h4>Trasferisci Propietà</h4>

                <div class="ownership-box">

                    <form id="airdropPropertyForm">
                        <div>
                            <p class="label">Nuevo Proprietario</p>
                            <input type="text" id="newOwner" placeholder="0x...." required>
                            <p id="airdropOwnerError" class="error"></p>
                            <p id="airdropOwnerSuccess" class="success"></p>
                        </div>
                    </form>

                    <div>
                        <p id="airdropChangeOwnerP">
                            <span id="airdropChangeOwner" class="changeOwner"><i class="fas fa-random" ></i> Trasferisci</span>
                        </p>
                        <div class="spinner hidden" id="airdropOwnershipSpinner">
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>

                <div class="fine-line"></div>

                <p>AAL Airdroppati: <b id="aalDropped">Loading...</b></p>

                <p>Partecipanti: <b id="participants">Loading...</b></p>

                <?php include('../db/getAirdropData.php'); ?>
                
            </div>

            

            <?php include('../components/goBack.php');?>
            
        </div>

        <?php include('../components/footer.php'); ?>
        
    </div>
    
    <script type="module" src="/assets/js/main.js"></script>
    <script type="module" src="/assets/js/admin.js"></script>
</body>
</html>