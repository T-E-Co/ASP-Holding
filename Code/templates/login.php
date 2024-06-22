<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <title>HTML Login Form</title>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="../assets/css/laptop/style.css">
        <link rel="stylesheet" href="../assets/css/global/navbar.css">
    </head>
    <body>

        <?php
        try {
            require '../includes/navbar.php';
        } catch (Error $e) {
            header('Location: ../includes/error.php');
            exit();
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col vh-100 w-100 d-flex justify-content-center align-items-center">

                    <div class="main">
                        <h1 class="text-center">CRM-CS</h1>
                        <form action="#" method="post" onsubmit="login_validation()">
                            <div class="mb-3">
                                <label for="loginUsername" class="form-label">
                                    نام کاربری :
                                </label>
                                <input type="text" class="form-control" id="loginUsername" name="loginUsername" placeholder="نام کاربری خود را وارد کنید.">
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">
                                    گذرواژه :
                                </label>
                                <input type="text" class="form-control" id="loginPassword" name="loginPassword" placeholder="گذرواژه خود را وارد کنید.">
                            </div>
                            <div class="mb-3 d-grid col-6 mx-auto">
                                <button class="btn btn-success" type="submit">ورود</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>