<div class="container">

    <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-2">

            <div class="well"><h2 class="text-center">Edit your account settings:</h2></div>
            <?php if ($this->session->flashdata('message')): ?>
                <div class="message-success  text-center"><?= $this->session->flashdata('message'); ?></div>
            <?php endif; ?>

                       <!--    for ajax       -->
            <div class="message-success text-center"></div>
            <div class="error-display text-center"></div>


        </div>

    </div>

    <div class="row">
        <div class='my-tab col-sm-12 col-md-8 col-md-offset-2' role="tabpanel">

            <!-- Nav tabs -->
            <ul class=" nav nav-tabs" role="tablist" id="myTab">
                <li role="presentation" class="active"><a href="#name" aria-controls="name" role="tab"
                                                          data-toggle="tab">Change
                        your name</a></li>
                <li role="presentation"><a href="#email" aria-controls="email" role="tab" data-toggle="tab">Change your
                        email</a></li>
                <li role="presentation"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Change
                        your password</a></li>
                <li role="presentation"><a href="#delete" aria-controls="delete" role="tab" data-toggle="tab">Delete
                        Account</a></li>
            </ul>

            <div class="tab-content ">

                <!--            Changing name system        -->

                <div role="tabpanel" class="tab-pane active " id="name">

                    <h3>Change your name:</h3><br>

                    <div class=" content-tab ">

                        <?= form_open('',array('class'=>'edit_name')); ?>

                        <div class="form-group">
                            <label for="name">Your new name:</label>
                            <input type="text" class="form-control" name="name" id="name" required pattern=".{3,}"
                                   title="3 characters minimum" value="<?= set_value('name') ?>">

                            <div class="checkbox">
                                <label><input type="checkbox" name="check1" id="check1"> Confirm action</label>
                            </div>

                            <button type="submit" id="edit_name" name="edit_name" class="btn btn-primary">Submit</button>
                        </div>


                        <?= form_close(); ?>

                    </div>

                </div>

                <!--            Changing email system        -->

                <div role="tabpanel" class="tab-pane" id="email">

                    <h3>Change your email:</h3><br>

                    <div class=" content-tab ">

                        <?= form_open('',array('class'=>'edit_email') ); ?>

                        <div class="form-group">
                            <label for="email">Your new email:</label>
                            <input type="email" class="form-control" name="email" id="email" required
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?= set_value('email') ?>">
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="check2" id="check2"> Confirm action</label>
                        </div>

                        <button type="submit" id="edit_email" name="edit_email" class="btn btn-primary ">Submit</button>

                        <?= form_close(); ?>
                    </div>
                </div>

                <!--            Changing password system        -->

                <div role="tabpanel" class="tab-pane" id="password">

                    <h3>Change your password:</h3><br>

                    <div class=" content-tab ">

                        <?= form_open('',array('class'=>'edit_password') ); ?>


                        <div class="form-group">
                            <label for="pwd">Old Password:</label>
                            <input type="password" class="form-control" id="pwd" name="pwd" required pattern=".{4,}"
                                   title="4 characters minimum" value="<?= set_value('password') ?>">
                        </div>

                        <div class="form-group">
                            <label for="pwd1">New Password:</label>
                            <input type="password" class="form-control" id="pwd1" name="pwd1" required pattern=".{4,}"
                                   title="4 characters minimum">

                        </div>

                        <div class="form-group">
                            <label for="pwd2">Confirm New Password:</label>
                            <input type="password" class="form-control" id="pwd2" name="pwd2" required>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="check3" id="check3"> Confirm action</label>
                        </div>

                        <button type="submit" id="edit_password" name="edit_password" class="btn btn-primary">Submit
                        </button>

                        <?= form_close(); ?>

                    </div>

                </div>

                <!--            Deleting system        -->

                <div role="tabpanel" class="tab-pane" id="delete">

                    <h3>Delete your account:</h3><br>

                    <div class=" content-tab ">

                        <div class="checkbox">


                            <?= form_open(site_url() . 'user/delete_account/'); ?>

                            <div class="checkbox">
                                <label><input type="checkbox" id="check4" name="check4"> Confirm action</label>
                            </div>
                            <button type="button" id="del1" name="del1" class="del btn btn-danger"
                                    data-toggle="modal"><i class="fa fa-trash-o"></i> Delete
                            </button>
                            <br><br>

                            <div class="alert alert-danger" style="display: none">
                                Confirm action!&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>


                            <!--    Modal -->

                            <div id="myModal1" class="modal fade" aria-labelledby="smallModal" data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title">Confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p style="color:red; font-size:18px">Are you sure that you want to delete
                                                your account?</p>
                                        </div>
                                        <div class="modal-footer" style="text-align:center ">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>

                                            <button type="submit" id="delete" name="delete" class="del2 btn btn-danger"><i
                                                    class="fa fa-trash-o"></i> Delete
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?= form_close(); ?>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>