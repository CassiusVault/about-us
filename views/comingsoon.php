<? 
$page = 'Letter';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 5 CSS -->
<!--     // <link rel="icon" href="./assets/img/Favicon.jpeg" type="image/x-icon" /> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="./assets/css/styles.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title><?php echo $page; ?> | The Vault</title>
    <style>
    body{
        /* background:linear-gradient(180deg,rgb(233 233 233 / 50%),rgb(168 231 219 / 50%)); */
        background: #fff;
    }
    h1, h2, h3, h4, h5, h6{
        font-family: 'Arial', sans-serif;
        color:#1E4C7B;
    }
    p {
        font-family: 'Montserrat', sans-serif !important;
        font-size: 18px;
    }
    .VaultBtn{
        background: #36474f;
        color:#fff;
        padding:10px 20px;
        text-decoration:none;
        margin-bottom:10px;
    }
    .landing{
        height: 100vh;
        align-items: center;
        margin-top: 20px;
    }
    .landing .col-md-12 {
        padding:0px 300px;
    }
    .logo{
        width:30%;
    }
    @media screen and (max-width:900px) and (min-width:768px){
        .landing .col-md-12 {
           padding: 0px 20px !important;
        }
        .logo{
            width:40%;
        }
    }
    @media screen and (max-width:767px) and (min-width:0px){
        .landing .col-md-12 {
           padding: 0px 20px !important;
        }
        .logo{
            width:60%;
        }
    }
    </style>
</head>
<body>
    <header>
        <!-- <?php include_once 'header.php';?> -->
    </header>

    <main>
        <div class="container-fluid landing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="./assets/img/Logo - Vault.png" alt="Coming Soon" class="img-fluid logo">
                        <br><br>
                        <h2 style="color:#000;">Thank you for visiting us.</h2>
                        <br>
                        <p>It’s been nearly 10 great years since Vault launched. <br>
                        Currently, we have over 36 000 users from the investment community, thousands of alerts being issued daily, and 80 top African listed companies as corporate subscribers.
                        <br>
                            Having launched in India, we are preparing to expand to the Middle East. 
                        </p>
                        <h3>So what’s next?</h3>
                        <p>Over the last few months we have taken time to revisit how we can best meet the needs of our clients and prospects.
                        <br> Engaged with marketing and brand experts, we scratched our heads, and debated for hours.</p>
                        <h3>The outcome?</h3>
                        <p>A new strategic focus for the Vault offering and a fresh new brand.
                            <br>
                            Please be patient as the preparation for the brand launch takes place, targeted for early January 2024.
                            <br>
                            As always, you can <a href="mailto:athrossell@thevault.exchange">contact Ant if you need</a> more information.
                        </p>
                        <a href="./subscriptions" class="VaultBtn">Details on our current pricing </a>
                        <p style="margin-top:10px">Regards</br>
                            James, Ant, Cassius, Simon and the Vault team.
                        </p>
                    </div>
                </div>  
            </div>
        </div>
    </main>

    <footer>
        <!-- <?php include_once 'footer.php';?> -->
    </footer> 

    <!-- First, include Popper.js and jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!-- Then, include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        jQuery('document').ready(function(){
            jQuery('.navbar-toggler-icon').click(function(){
                jQuery('div#navbarNav').toggle('slideDown');
            });
        });
        </script>
</body>
</html>
