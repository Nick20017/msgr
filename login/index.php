<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>E.N.B.L. - Sign in</title>

        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link href="../css/blocks-desktop.css" type="text/css" rel="stylesheet" />
        <link href="../css/main.css" type="text/css" rel="stylesheet" />

        <script src="../vue/vue.js" type="text/javascript"></script>
        <script src="../js/blocks.js" defer type="text/javascript"></script>
    </head>

    <body>
        <div id="allLogin">
            <div id="header"><h1>{{ title }} - Sign in</h1></div>
            <div id="content">
                <?php include "../blocks/login.php"; ?>
            </div>
            <div id="footer"><span id="c">{{ c }}</span></div>
        </div>
    </body>
</html>