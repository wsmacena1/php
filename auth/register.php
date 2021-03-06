<!DOCTYPE html>
<html lang="us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="user_register.php" method="post">
            <div class="col-sm-6" style="background-color: blanchedalmond;">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" required>
                </div>
                <button class="btn btn-success botao" type="submit">Register</button>
                <a class="btn btn-danger" href="/php">Cancel</a>
                
                
                <div class="form-group" style="color: red;">
                    <strong>
                        <?php 
                            if(isset($_GET['msg']))
                                echo $_GET['msg'];
                        ?>
                    </strong>
                </div>
            </div>
        </form>

    </div>
</body>
</html>