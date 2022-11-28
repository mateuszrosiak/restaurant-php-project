<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant PHP Project</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>

<body>
<div class="container mx-auto p-6 font-Poppins">

    <header class="header-wrapper">
        <?php
        require_once("templates/pages/header.php"); ?>
        <?php
        require_once("templates/pages/hero.php"); ?>
    </header>

    <section class="page">
        <?php
        require_once("templates/pages/$page.php");
        ?>
    </section>


    <section class="newsletter">
        <?php
        require_once("templates/pages/newsletter.php"); ?>
    </section>

    <footer class="footer">
        <?php
        require_once("templates/pages/footer.php"); ?>
    </footer>

</div>

</div>
</body>

</html>