<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lgin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/grocery_crud/themes/product-manager/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/grocery_crud/themes/product-manager/dist/css/styles.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    <div class="panel-body">
                        <p class="text-center-mar20">Please enter your account below.</p>
                        <form role="form" action="<?php echo base_url('/user/login')?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" id="inputError" autocomplete="off">
                                </div>
                                <!-- <div class="form-group has-error">
                                     <label class="control-label" for="inputError">Input with error</label>
                                     <input type="text" class="form-control" id="inputError">
                                 </div>
                                 -->
                                 <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block">Login</button>


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/damovo/vendor/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/damovo/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<script>

        $('input[type="email"]').attr("autocomplete", "off");
        $('input[type="password"]').attr("autocomplete", "off");
        $('input[type="email"]').val("");
        $('input[type="password"]').val("");

</script>
</body>

</html>
