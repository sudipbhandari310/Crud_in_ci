<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/login.css';?>">
</head>

<body>

    <div class="container">
        <form class="form-signing" action="<?php echo base_url().'auth/login'?>" method="post" name="frm" id="frm">



            <h1 class="h3 mb-3 fw-normal text-center"> Please sign in</h1>
            <input type="text" id="email" value="<?php echo set_value(field:'email')?>" name="email"
                class="form-control <?php echo (form_error(field:'email') !="")?'is-invalid': '';?>"
                placeholder="Email address">
            <label for="email" class="sr-only"></label>
            <p class="invalid-feedback"> <?php echo form_error(field:'email');?> </p>

            <input type="password"
                class="form-control <?php echo (form_error(field:'password') !="")?'is-invalid': '';?>" id="password"
                value="<?php echo set_value(field:'password')?>" name="password" placeholder="Password">
            <label for="password"></label>
            <p class="invalid-feedback"> <?php echo form_error(field:'password');?> </p>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <a href="<?php echo base_url().'Auth/register'?>">Register Here!</a>
    </form>

    <script src="" async defer></script>
</body>

</html>