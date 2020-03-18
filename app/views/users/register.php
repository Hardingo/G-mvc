<?php 
    require APROOT . "/views/includes/header.php";
?>
<div class="content register-form">
    <div class="row">
        <div class="col-6 m-auto mt-3">
            <form action="<?php echo URLROOT . 'users/register'?>" method="POST">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="repeat_password">Repeat Password</label>
                    <input type="password" name="repeat_password" id="repeat_password" class="form-control" />
                </div>
                <button class="btn btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>
<?php 
    require APROOT . "/views/includes/footer.php";
?>