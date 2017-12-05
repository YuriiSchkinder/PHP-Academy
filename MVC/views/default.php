<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title><?=Config::get('site_name')?></title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item"  >
                <a   <?php if(App::getRouter()->getController()=='pages') :?> class="nav-link active" <?php endif;?> class="nav-link"  href="/pages">Pages</a>
            </li>
            <li >
                <a <?php if(App::getRouter()->getController()=='contacts') :?> class="nav-link active" <?php endif;?>  class="nav-link" href="/contacts">Contacts us</a>
            </li>
        </ul>
    </div>
</nav>
<main role="main" class="container">

    <div class="starter-template">

        <p class="lead"><?= $data['content'] ?></p>
    </div>

</main>



</body>
</html>