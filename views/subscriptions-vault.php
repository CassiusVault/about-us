<? 
$page = 'Subscription';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 5 CSS -->
    <link rel="icon" href="./assets/img/Favicon.jpeg" type="image/x-icon" />
    
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
    .landing{
        align-items: center;
        margin-top: 20px;
    }
    .landing .col-md-12 {
        padding:0px 100px;
    }
    .logo{
        width:25%;
    }
    .CTA-section{
        background: #36474f;
        color:#fff;
        padding: 50px 160px;
        margin-top: 50px;
    }
    .CTA-section h2{
        color:#fff;
        font-size: 40px;
    }
    .CTA-section a{
        color:#fff;
    }
    .card-header{
        background: #36474f;
        padding: 20px 20px;
        color:#fff;
    }
    .card-hover{
        transition: all 0.3s ease-in-out;
    }
    .card-hover:hover{
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 6px 7px 3px #00000026;
    }
    .priceSection{
        background: #f7f7f7;
        border-radius: 5px;
        padding: 10px 20px;
    }
    .priceSection p{
        margin-bottom: 0px;
    }
    @media screen and (max-width:900px) and (min-width:768px){
        .landing .col-md-12 {
           padding: 0px 20px !important;
        }
        .logo{
            width:40%;
        }
        .col-md-4 {
            flex: 0 0 auto;
            width: 100% !important;
            margin-bottom: 20px !important;
        }
        .CTA-section {
            background: #36474f;
            color: #fff;
            padding: 50px 50px;
            margin-top: 20px !important;
        }
    }
    @media screen and (max-width:767px) and (min-width:0px){
        .landing .col-md-12 {
           padding: 0px 20px !important;
        }
        .logo{
            width:60%;
        }
        .col-md-4 {
            margin-bottom: 20px !important; 
        }
        .CTA-section {
            background: #36474f;
            color: #fff;
            padding: 50px 50px;
            margin-top: 50px !important;
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
                        <a href="./"><img src="./assets/img/Logo - Vault.png" alt="Coming Soon" class="img-fluid logo"></a>
                        <br><br>
                        <h1>Vault subscription options</h1>
                        <p>Select the modules best suited to your desired benefits and problem solving. </p>
                        <br>
                        <div class="section-subscription">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-hover">
                                            <h5 class="card-header"><i class="fa fa-briefcase"></i> Core</h5>
                                            <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <div class="card-text">
                                                <p> <i class="fa fa-check checkright"></i> Database managed to zero bounce on a daily basis, in-depth profiles, GDPR compliant.</p>
                                                <hr/>
                                                <p> <i class="fa fa-check checkright"></i> Register for alerts link for your website.</p>
                                                <hr/>
                                                <p> <i class="fa fa-check checkright"></i> Automatic branded stock exchange announcement alerts. </p>
                                                <div class="priceSection">
                                                    <p><strong>Monthly: &#163;320.00 </strong></p>
                                                    <p>* Core is a required module</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="card card-hover">
                                        <h5 class="card-header"> <i class="fa fa-database"></i> Database analytics </h5>
                                        <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <div class="card-text">
                                            <p><i class="fa fa-check checkright"></i> Beneficial register uploaded monthly</p>
                                            <hr/>
                                            <p><i class="fa fa-check checkright"></i> All individual fund managers allocated to all beneficial holdings</p>
                                            <hr/>
                                            <p><i class="fa fa-check checkright"></i> Universe of buy and sell-side in your sector</p>
                                            <hr/>
                                            <p><i class="fa fa-check checkright"></i> Meetings easily logged and notes added.  Reports and statistics on meetings held.</p>
                                            <hr/>
                                            <p><i class="fa fa-check checkright"></i> Peer analysis</p>
                                            <hr/>
                                            <p><i class="fa fa-check checkright"></i> Dashboard with PDF download</p>
                                            
                                            <div class="priceSection">
                                                <p><strong>Monthly: &#163;165.00</strong></p>
                                            </div>
                                        </div>
                        
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="card card-hover">
                                        <h5 class="card-header"> <i class="fa fa-certificate"></i> Professional </h5>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <div class="card-text">
                                                <p><i class="fa fa-check checkright"></i> Notify your database of updated calendar items with a single click.</p>
                                                <hr/>
                                                <p><i class="fa fa-check checkright"></i> Upload and issue alerts for reports, webcasts and online reports in a few seconds. </p>
                                                <hr/>
                                                <p><i class="fa fa-check checkright"></i> Create engaging, responsive communications in a few minutes at no extra cost. Link in your choice of downloads, with one click.</p>
                                                <hr/>
                                                <p><i class="fa fa-check checkright"></i> Cut out admin: Vault seamlessly manages invitation sends, reminders and RSVP’s. All events RSVP’d to stored in member’s profile view for your review.</p>
                                                <hr/>
                                                <p><i class="fa fa-check checkright"></i> XML website feeds for Calendar and Documents are an option, pricing is based on complexity required. </p>
                                                <div class="priceSection">
                                                    <p><strong>Monthly: &#163;215.00</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>

                                <div class="spacer"></div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="container-fluid CTA-section">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <h2> It would great to get together to understand your opportunities and problems. </h2>
                    <p> Let's set a time to chat...<a href="mailto:athrossell@thevault.exchange" class="link-style"> DROP ANT THROSSELL AN EMAIL </a></p>
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
