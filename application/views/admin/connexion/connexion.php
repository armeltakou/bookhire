<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Nov 2018 11:48:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Book-Hire</title>
    <?php

    echo css("app.min");
    echo vendorscss("bower_components/animate.css/animate.min");
    echo vendorscss("bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min");

    ?>
</head>

<body data-sa-theme="1">
<div class="login">

    <!-- Login -->
    <div class="login__block active" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Bienvenue! Veuillez-vous identifier

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Creer un compte</a>
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Mot de passe oublié?</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <div class="form-group">
                <input type="text" class="form-control text-center" placeholder="Login">
            </div>

            <div class="form-group">
                <input type="password" class="form-control text-center" placeholder="Mot de passe">
            </div>

            <a href="<?php echo site_url(array('Admin','Accueil')); ?>" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></a>
        </div>
    </div>

    <!-- Register -->
    <div class="login__block" id="l-register">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Création de compte

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Vous avez déjà un compte?</a>
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Mot de passe oublié?</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <div class="form-group">
                <input type="text" class="form-control text-center" placeholder="Name">
            </div>

            <div class="form-group form-group--centered">
                <input type="text" class="form-control text-center" placeholder="Email Address">
            </div>

            <div class="form-group form-group--centered">
                <input type="password" class="form-control text-center" placeholder="Password">
            </div>

            <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">J'accepte les conditions</span>
                </label>
            </div>

            <a href="index-2.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-plus"></i></a>
        </div>
    </div>

    <!-- Forgot Password -->
    <div class="login__block" id="l-forget-password">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Forgot Password?

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Vous avez déjà un compte?</a>
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Creer un compte</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <p class="mb-5">Bien vouloir contacter l'administrateur pour réinitialiser votre mot de passe.</p>

            <div class="form-group">
                <input type="text" class="form-control text-center" placeholder="Adresse email">
            </div>

            <a href="index-2.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></a>
        </div>
    </div>
</div>
<?php

echo vendorsjs("bower_components/jquery/dist/jquery.min");
echo vendorsjs("bower_components/popper.js/dist/umd/popper.min");
echo vendorsjs("bower_components/bootstrap/dist/js/bootstrap.min");

echo js("app.min");

?>
</body>
</html>