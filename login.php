<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="images-leadhero/favicon.png" type="image/png">
    <title>LeadHero</title>   
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="css-leadhero/app.min.css" rel="stylesheet">

    <!-- <link href="coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet"> -->
  </head>
  <body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12" style="max-width:500px;">
          <div class="logo text-center pb-3">
             <img style="width: 220px;" src="images-leadhero/logo.png" alt="LeadHero">
          </div>
          <div class="card-group">
            <div class="card p-sm-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Enter your email/username and password.</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="images-leadhero/free.svg#cil-user"></use>
                      </svg></span></div>
                  <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="images-leadhero/free.svg#cil-lock-locked"></use>
                      </svg></span></div>
                  <input class="form-control" type="password" placeholder="Password">
                </div>
                <div class="row align-items-center">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="button">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="c1">
                        <label class="custom-control-label" for="c1">Remember me</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
          </div>
          <p class="m-0 text-center p-4">Lead Hero &copy; Copyright <?php echo date("Y");?> All rights reserved.</p>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="js-leadhero/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="js-leadhero/svgxuse.min.js"></script>
    <!--<![endif]-->    
    <script src="js-leadhero/app.bundle.js"></script>
  </body>
</html>
