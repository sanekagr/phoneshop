<div class="container">
    <br><br><br>

    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4 log-window">
            <h2 class="text-center">Sign In :</h2>

            <?php if (validation_errors()): ?>
                <div class="error-display text-center"><?php echo validation_errors(); ?></div>
            <?php endif; ?>


            <?= form_open(site_url() . 'user/login/'); ?>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                       value="<?= set_value('email') ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                       title="Wrong email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                       required>
            </div>

            <input type="submit" class="btn btn-default btn-block" name="submit" id="submit" value="Sign In"/>

            <div class="register ">
                <small>If you haven't account</small>
                <a href="<?= site_url('user/sign_up'); ?>">&nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i>
                    Register</a><br><br>
                <a href="<?= site_url('user/forgot_password/'); ?>"><b>Forgot your password?</b></a>
            </div>

            <?= form_close(); ?>


        </div>
    </div>

</div>