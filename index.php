<?php
    session_start();

    // Check to see if user is not logged in
    if (!isset($_SESSION['access_token']) ) {
        header('Location: login.php');
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
        <div class="row mt-5">
            <div class="col-md-3">
                <img src="<?php echo $_SESSION['picture']; ?>" class="img-fluid" alt="profile Picture">
            </div>
            <div class="col-md-9 my-auto">
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>ID:</td>
                        <td><?php echo $_SESSION['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $_SESSION['name']; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <?php if ($_SESSION['gender'] == '') : ?>
                        <td>Not given</td>
                        <?php elseif (!$_SESSION['gender'] = '') : ?>
                        <td><?php echo $_SESSION['gender']; ?></td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <td>Action:</td>
                        <td><a href="http://devbox.com/googleLogin/logout.php" class="btn btn-primary">Log Out</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>