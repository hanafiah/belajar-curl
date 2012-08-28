<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Simple REST</title>
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
        <link href="http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    </head
    <body>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Simple REST <small>GET, POST, PUT, DELETE</small></h1>
                </div>
            </div>
            <div class="row">
                <h5>REQUEST_METHOD : <span class="label label-important"><?php echo $_SERVER['REQUEST_METHOD']; ?></label></h5>
                <hr>
                <pre class="prettyprint">
                <legend>Data</legend>
                    <?php
                    switch ($_SERVER['REQUEST_METHOD']) {
                        case 'GET':
                            $data = $_GET;
                            break;
                        case 'POST':
                            $data = $_POST;
                            break;
                        case 'PUT':
                            parse_str(file_get_contents('php://input'), $data);
                            break;
                        case 'DELETE':
                            parse_str(file_get_contents('php://input'), $data);
                            break;
                    }
                    print_r($data);
                    ?>
                </pre>
            </div>
        </div>
    </body>
</html>