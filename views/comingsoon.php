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
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title><?php echo $page; ?> | The Vault</title>
    <style>
        body{
            background:linear-gradient(180deg,rgb(233 233 233 / 50%),rgb(168 231 219 / 50%));
        }
    .landing{
        height: 100vh;
        align-items: center;
        padding-top:25vh;
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
                        <center><img src="./assets/img/Logo-svg.svg" alt="Coming Soon" class="img-fluid"></center>
                        <br>
                        <h1 class="text-center" style="color:#000;font-family:Bukra-bold">Website under maintenance</h1>
                        <br>
                        <p class="text-center">Something new and exciting coming soon</p>
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