<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
    <?php include "./suciastky/header.php"?>

    <section class="index-login d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="background-color:#262626">
            <div class="index-login-signup">
                <h4 class="text-center mb-4" style="color: white">Registracia</h4>
                <form action="includes/signup.inc.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="uid" placeholder="Meno" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pwd" placeholder="Heslo" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pwdrepeat" placeholder="Zopakujte Heslo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Registrovat</button>
                </form>
            </div>
        </div>
    </section>

    <?php include "./suciastky/footer.php"?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
