<?php include 'database.php'; ?>
<?php
    //create select query
    $query = "SELECT * FROM shouts ORDER BY id DESC";
    $shouts = mysqli_query($con, $query);

?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Shout!</title>
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>

            <div id="container">
                <header>
                    <h1>Shout it!</h1>
                </header>
                <div id="shouts">
                    <ul>
                        <?php while($row = mysqli_fetch_assoc($shouts)) :    ?>
                            <li class="shout">
                                <span><?php echo $row['time']; ?> - </span><?php echo $row['user'] ?>: <?php echo $row['message'] ?>
                            </li>
                        <?php endwhile; ?>

                    </ul>
                </div>
                <div id="input">
                    <?php if(isset($_GET['error'])) :?>
                        <div class="error"><?php echo $_GET['error']; ?></div>
                    <?php endif; ?>
                    <form method="post" action="process.php">
                        <input type="text" name="user" placeholder="Enter your name!" />
                        <input type="text" name="message" placeholder="Enter your message!">
                        <br />
                        <input class="shout-btn" type="submit" name="submit" value="Shout it Out!">
                    </form>
                </div>
            </div>

        </body>
</html>