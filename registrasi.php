<?php
require  'function.php';

if(isset($_POST["register"])){
	if(registrasi($_POST) > 0){
		echo "<script>
		alert('user baru berhasil ditambahkan!');
		</script>";
	}else{
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registrasi.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Registrasi</title>
</head>

<body style="background-color: #CD5C5C;">
    <div id="registrasi">
        <div class="container">
            <div id="registrasi-row" class="row justify-content-center align-items-center">
                <div id="registrasi-column" class="col-md-6">
                    <div id="registrasi-box" class="col-md-12">
                        <form id="registrasi-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Registrasi</h3>
                            <?php if (isset($error)) { ?>
                                <div>
                                    <script>
                                        alert("<?php echo $error; ?>");
                                    </script>
                                </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Konfirasi Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <br>
                                <input type="submit" name="submit" class="btn btn-danger btn-md" value="Registrasi">
                            </br>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>