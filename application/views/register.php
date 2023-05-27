<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
</head>

<body>
    <div class="container">
    </div>



    <?php  
     $msg= $this->session->flashdata('msg');
     if($msg != ""){
      echo "<div class='alert-alert success'>'.$msg.'</div>";
     }
     ?>


    <div class="col-md-6 offset-3">
        <div class="card mt-4">

            <div class="card-header">
                Register Here
            </div>
            <form action="<?php echo base_url().'Auth/register'?>" name="registerForm" id="registerForm" method="post">
                <div class="card-body register">
                    <p class="card-text">Fill your details here.</p>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" name="first_name" id="first_name"
                            value="<?php echo set_value(field:'first_name')?>"
                            class="form-control <?php echo (form_error(field:'first_name') !="")?'is-invalid': '';?>"
                            placeholder="First Name">
                        <p class="invalid-feedback"> <?php echo form_error(field:'first_name');?> </p>
                    </div>
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" name="last_name" id="last_name"
                            value="<?php echo set_value(field:'last_name')?>"
                            class="form-control <?php echo (form_error(field:'first_name') !="")?'is-invalid':'';?>"
                            placeholder="Last Name">
                        <p class="invalid-feedback"> <?php echo form_error(field:'last_name');?></p>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo set_value(field:'email')?>"
                            class="form-control <?php echo (form_error(field:'first_name') !="")?'is-invalid':'';?>"
                            placeholder="Email">
                        <p class="invalid-feedback"> <?php echo form_error(field:'email');?></p>
                    </div>
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="text" name="phone" id="phone" value="<?php echo set_value(field:'phone')?>"
                            class="form-control <?php echo (form_error(field:'first_name') !="")?'is-invalid':'';?>"
                            placeholder="Phone">
                        <p class="invalid-feedback"> <?php echo form_error(field:'phone');?></p>
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" id="password"
                            value="<?php echo set_value(field:'password')?>"
                            class="form-control <?php echo (form_error(field:'first_name') !="")?'is-invalid':'';?>"
                            placeholder="Password">
                        <p class="invalid-feedback"> <?php echo form_error(field:'password');?></p>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Register Now</button>

                    </div>

                </div>

            </form>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>