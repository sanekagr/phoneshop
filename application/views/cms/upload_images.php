<div class="container">

    <div class="row">
        <h1 class="text-center">Add Images</h1>

        <div class="col-sm-12">
            <?php if ($this->session->flashdata('message') ): ?>
                <div class="message-success  text-center"><?= $this->session->flashdata('message'); ?></div>
            <?php endif; ?>

            <?php if ( $this->session->flashdata('error-message') ): ?>
                <div class="error-display  text-center"><?= $this->session->flashdata('error-message'); ?></div>
            <?php endif; ?>

            <?php if (validation_errors()): ?>
                <div class="error-display text-center"><?= validation_errors(); ?></div>
            <?php endif; ?></div>
    </div>

    <div class="row">

        <div class="col-sm-4 col-sm-offset-4 log-window">
            <?= form_open_multipart(site_url('cms/dashboard/upload'), array('id'=>'add-imeges-form')); ?>
            <br><br>
            <div class="form-group">
                <label for="cat_img">1 Image:</label>
                <input type="file" class="form-control" name="userfile[]"  />
            </div>

            <div class="form-group">
                <label for="cat_img">Images:</label>
                <input type="file" class="form-control" name="userfile[]" multiple="multiple" />
            </div>

            <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Upload Images" />
            <?= form_close(); ?>

        </div>
    </div>
</div>