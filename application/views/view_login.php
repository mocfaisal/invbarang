
	




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventory Barang | Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/dist2/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/dist2/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/dist2/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/dist2/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/dist2/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" method="POST" id="f-login" action="<?php echo base_url(); ?>?/login/cek">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="user" id="user" placeholder="Username" required />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required />
              </div>
              <div>
                <input class="btn btn-success btn-flat" type="submit" value="Login">
              </div>
</form>
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-suitcase"></i> Inventory Barang</h1>
                  <p>©2017 All Rights Reserved. Mochammad Faisal. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
