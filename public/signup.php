<?php require "../src/insert.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style/bootstrap.5.0.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>

<body>

    <div class="parent">
        <div class="back">
            <div class="titre" class="alert alert-danger">
                <h1 class="mainTitle" > Inscrivez pour gagner 10000$</h1>
            </div>
            <div class="signUpAll">
                <form action="../src/insert.php" method="post" >
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" name="putName" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="putFirstName" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="putMail" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I'm not a Bot</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send" name="button">
                </form>
            </div>
        </div>

    </div>
</body>

</html>


