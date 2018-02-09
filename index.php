<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Website login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <style>
        .red{
            color : red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <p>Hello Shinnosuke</p>
    <div id="start"></div>
    <button>Henshin</button>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script>
        //$("selector element").method()
        /* or 
            $(function(){
                $("selector").method();
            });
         */
        $(function() {
            $("#start").html("Henshin!!");
            alert($("#start").text());
            $("button").click(function() {
                $("p").text("Hello Drive");
                $("p").toggleClass("red");
            });
        });
    </script>
</body>
</html>