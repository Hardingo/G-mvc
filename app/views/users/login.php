<?php 
    require APROOT . "/views/includes/header.php";
?>
<div class="content login-form">
    <div class="row">
        <div class="col-6 m-auto mt-3">
            <form action="<?php echo URLROOT . 'users/login'?>" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>
                <button class="btn btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>
<?php 
    require APROOT . "/views/includes/footer.php";
?>