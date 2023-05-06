<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Predict</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/backoffice/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/backoffice/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets/backoffice/css/style.css') ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo site_url('assets/backoffice/images/favicon.png') ?>">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>
                            <form>
                                <div class="form-group">
                                    <label>Pseudo *</label>
                                    <input type="text" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe *</label>
                                    <input type="text" class="form-control p_input">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Se souvenir de moi <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Se connecter</button>
                                </div>
                                <p class="sign-up">Vous n'avez pas de compte?<a href="<?php echo site_url('login/inscription') ?>"> S'inscrire</a></p>
                            </form>
                            <a href="<?php echo site_url('main/') ?>"><button class="btn btn-dark">Retour</button></a>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo site_url('assets/backoffice/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo site_url('assets/backoffice/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo site_url('assets/backoffice/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo site_url('assets/backoffice/js/misc.js'); ?>"></script>
    <script src="<?php echo site_url('assets/backoffice/js/settings.js'); ?>"></script>
    <script src="<?php echo site_url('assets/backoffice/js/todolist.js'); ?>"></script>
    <!-- endinject -->

</body>

</html>