
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul{
        text-decoration: none; 
    }
    .left_panel ul li{
        margin-top: 40px;
    }
</style>
<body>
    <div>
        <div class="entete">
            <fieldset style="width: 98%;  height: 150px;">
                <h1 style="color: red; font-size: 50px;">
                    <marquee>
                         Tunisair
                    </marquee>
                    <div style="padding-bottom: -10px;">
                        <button>
                        stop
                    </button>
                    <button>
                        play
                    </button>
                    </div>
                    
                </h1>
            </fieldset>
        </div>
        <div class="left_panel" style="width: 30%; height: 550px; float: left; background-color: rgb(241, 49, 49, 0.4);">
            <ul type=''>
                <li><a href="bannier.html">Acceuil</a></li>
                <li><a href="reservation.html">Reservation</a> </li>
                <li><a href="contact.html">Contact</a></li>
                <form action="save.php" method="post">
                    <button type="submit" name="voir_user" style="margin-top: 30px; padding: 5px; background-color: rgba(36, 36, 230, 0.5) ;color: white; border-radius: 7px;">
                    voir les personnes enregistrées
                </button>
                </form>
                
            </ul>
        </div>
        <div class="right_panel" align='center'>
            <h1>
                You are Welcome
            </h1>
            <br><img src="46.jpg" alt="" style="width: 300px;">
        </div>
    </div>
</body>
</html>