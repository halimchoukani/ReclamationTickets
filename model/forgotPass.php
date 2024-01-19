<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Additional stylesheets, if needed -->
  <title>Password Reset</title>
</head>

<body>

  <div class="form-gap"></div>
  <div class="container">
    <div class="row">
<<<<<<< HEAD
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                    </div>
                    <div class="panel-body">
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" onsubmit="sendEmail(); return false;">

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                    <input id="email" name="email" placeholder="email address" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                            </div>

                            <input type="hidden" class="hide" name="token" id="token" value="">
                        </form>
                    </div>
                </div>
=======
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="text-center">
              <h3><i class="fa fa-lock fa-4x"></i></h3>
              <h2 class="text-center">Forgot Password?</h2>
              <p>You can reset your password here.</p>
>>>>>>> e9cb8655e53827083e46f2c9bc1ccd0dbaac64f4
            </div>
            <div class="panel-body">
              <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="sendcode.php">

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                    <input id="email" name="email" placeholder="email address" class="form-control" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                </div>

                <input type="hidden" class="hide" name="token" id="token" value="">
              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
</div>
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script>
  emailjs.init("x0GNxyAPfEu14m11-");
</script>
<script>
  function sendEmail() {
    emailjs.send("service_03519p3", "template_s799ywb", {
        to_email: document.getElementById("email").value,
      
    })
    .then(
      function(response) {
        console.log("Email sent successfully:", response);
      },
      function(error) {
        console.log("Email failed to send:", error);
      }
    );
  }
</script>

<!-- Include JavaScript and jQuery libraries -->

=======
  </div>

>>>>>>> e9cb8655e53827083e46f2c9bc1ccd0dbaac64f4

  <!-- Include JavaScript and jQuery libraries -->


  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</body>

</html>