<div class="container">
    <br><br><br>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <?php if ($this->session->flashdata('message')): ?>
                <div class="message-success text-center"><?= $this->session->flashdata('message'); ?></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4 log-window">

            <h3 class="text-center">Forgot Your Password?</h3>

            <?php if (validation_errors()): ?>
                <div class="error-display text-center"><?= validation_errors(); ?></div>
            <?php endif; ?>

            <?= form_open(site_url('user/forgot_password')); ?>

            <div class="form-group">
                <label for="email">Enter Your Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                       value="<?= set_value('email') ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                       title="Wrong email">
            </div>


            <input type="submit" class="btn btn-default btn-block" name="submit" id="submit" value="Submit"/>

            <?= form_close(); ?>

            <div class="register">
                <a href="<?= site_url('user/login'); ?>"><i class="fa fa-user"></i> Log In</a>
            </div>

        </div>
    </div>

</div>