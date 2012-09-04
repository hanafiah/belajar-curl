<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
        <link href="http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <legend>Welcome</legend>
            <label>Selamat datang <strong> <span class="label label-inverse"><i class="icon-user icon-white"></i> <?php echo $_COOKIE['name']; ?></strong></span>  Data ini di ambil dari cookies/cookie_file.txt</label>
        </div>
    </body>
</html>
