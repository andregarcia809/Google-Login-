<?Php
    require_once 'config.php';

    $loginURL = $googleClient->createAuthUrl();

     // Check to see if user is logged in
     if (isset($_SESSION['access_token']) ) {
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Log In With Google</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row text-center">
            <div class="col-md-6">
                <div class="col-md-6">
                    <img src="./images/logo.png" class="img-fluid" alt="Logo">
                </div>
                <form action="">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email..">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password..">
                    </div>
                    <div class="from-control">
                        <button class="btn btn-primary">Log In</button>
                        <button onclick="window.location = '<?php echo $loginURL ?>'; " type="button"
                            class=" btn btn-danger">Log
                            In With
                            Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>