<!DOCTYPE html>
<?php
    $login = 'Roman';
?>

<html lang="en">
    <head>
        <title>some title</title>
        <style>
            .form-input {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <form action="">
                <div class="form-input">
                    <label for="login">login:</label>
                    <input type="text" name="login" id="login" value="<?php echo $login ?>">
                </div>

                <div class="form-input">
                    <label for="password">password:</label>
                    <input type="password" name="password" id="password">
                </div>
            </form>
        </div>
    </body>
</html>