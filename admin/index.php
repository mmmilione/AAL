<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntarcticLands Token - AAL - Admin Login</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/admin.css">
    
</head>
<body>

    <div class="container">

        <?php 
            $lang = 'ES';
            include('../components/nav.php'); 
        ?>

        <div class="main-admin">

            <h2>Admin Login</h2>

            <div class="login-box">
                <form action="control-panel.php" method="POST">
                    <div>
                        <p class="label"><i class = "fas fa-key"></i> Password<p>
                        <input type="password" placeholder="La mia Password" id="pw" name="pw" required>
                    </div>
                    
                    <p class="go-back-container">
                        <button type="submit" class="go-back" id="login">
                            Entra
                        </button>
                    </p>
                </form>
            </div>

            <p class = "back-string">
                <a href="../">Torna al Sito</a>
            </p>
            
        </div>

        <?php include('../components/footer.php'); ?>
        
    </div>
    
    <script type="module" src="/assets/js/main.js"></script>
</body>
</html>