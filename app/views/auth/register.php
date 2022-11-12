<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="<?= assets('css/bulma.min.css')?>">
</head>

<body>
    <div class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-widescreen is-7-tablet is-7-desktop">
                        <form name="register" action="authuser/register" method="POST" class="box">
                            <div class="field">
                                <label class="label">First name</label>
                                <div class="control">
                                    <input type="text" name="firstname" class="input is-primary">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Last name</label>
                                <div class="control">
                                    <input type="text" name="lastname" class="input is-primary">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input type="email" name="email" class="input is-primary">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                    <input type="password" name="password" class="input is-primary">
                                </div>
                            </div>
                            <input type="submit" value="Register" class="button is-primary">
                            <a href="login">Already have an account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= assets('js/jquery.js')?>"></script>
    <script src="<?= assets('js/app.js')?>"></script>
    <script>register_page.register()</script>
</body>

</html>