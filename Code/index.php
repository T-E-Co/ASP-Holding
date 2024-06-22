<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRM-CS-IRAN</title>
        <link href="node_modules/bootstrap/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
        <link href="assets/css/laptop/index-main.css" rel="stylesheet">
    </head>
    <body>
        <?php
        try {
            require 'includes/navbar.php';
        } catch (Error $e) {
            header('Location: includes/error.php');
            exit();
        }
        ?>
        <div class="content">
            <?php
            try {
                require 'includes/sidebar.php';
            } catch (Error $e) {
                header('Location: includes/error.php');
                exit();
            }
            ?>
            <div class="main-content d-flex justify-content-center align-items-center">

                <div class="d-block">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center" style="height: 60vh">
                            <p class="fw-bolder text-center">
                                <span class="text-danger">CRMS-CS</span>
                                <br>
                                <span class="text-danger">C</span>ustomer <span class="text-danger">R</span>elationship <span class="text-danger">M</span>anagement <span class="text-danger">S</span>ystem
                                <br>
                                <span class="text-danger">C</span>omputer <span class="text-danger">S</span>ervice
                            </p>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center" style="height: 60vh">
                            <img class="img-fluid" src="assets/image/index-main.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>