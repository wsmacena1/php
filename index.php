<!DOCTYPE html>
<html lang="en">
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
    <h3>Hello Willians!</h3>
    <form action="calculo.php" method="POST">
    <div class="form-group">
        <div class="form-group col-md-6">
            <label for="fname">First Name</label>
            <input class="col-4 form-control" type="text" name="fname"/>
        <br>
            <label for="lname">Last Name</label>
            <input class="col-4 form-control" type="text" name="lname" />
        </div>

    </div>    

    <div class="form-group ">
        <button class="btn btn-primary botao" type="submit">Save</button>
    </div>
    </form>

    
<div>
</body>
</html>


