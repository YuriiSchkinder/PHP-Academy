<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>

<main role="main" class="container">

    <div class="starter-template">
        <?php if(isset($data['error'])): foreach ($data['error'] as $val)  : ?>
         <p> <?=$val ?> </p>
        <?php endforeach; else: ?>
        <p><?=$data?></p>
        <?php endif;?>
        <h3>Register</h3>
        <form action="" method="post">
            <input type="text" class="form-control" name="login" value="<?php if(isset($data['user']['login'])) echo $data['user']['login'] ?>" placeholder="Your Login">
            <input type="text" class="form-control" name="email" value="<?php if( isset($data['user']['email'])) echo $data['user']['email']?>" placeholder="Your Email">
            <input type="password" class="form-control" name="password"  placeholder="Your Password">

            <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
        </form>
    </div>

</main>



</body>
</html>