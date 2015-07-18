
<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static"
     data-keyboard="false"
     aria-hidden="true">

    <div class="modal-dialog" >
        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
                <h1 class="modal-title text-center" id="myModalLabel" >Contact Us</h1>

            </div>
            <!-- /.modal-header -->

            <div class="modal-body">

                <div class="messages"></div>

                <?= form_open('', array('id' => 'contactForm', 'class' => 'form-horizontal')); ?>

                <!-- Name input-->
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="name" name="name" type="text" placeholder="Your Name:*"
                               class="form-control validate" maxlength="30" value="<?= set_value('name') ?>" autofocus >
                    </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="email" name="email" type="text" placeholder="Your Email:*"
                               class="form-control validate" value="<?= set_value('email') ?>" >
                    </div>
                </div>

                <!-- Phone input-->
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="phone" name="phone" type="text" placeholder="Your Phone:"
                               class="form-control" value="<?= set_value('phone') ?>" maxlength="13" >
                    </div>
                </div>

                <!-- Subject of the request select -->

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="sel" class="small">Subject of the request:</label>
                        <select class="form-control" name="sel" id="sel" required>
                            <option value="General question">General question</option>
                            <option value="About the product">About the product</option>
                            <option value="Problem with a product">I got a problem with a product that I bought</option>
                        </select>
                    </div>
                </div>

                <!-- Message body -->
                <div class="mes">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="message" class="small">Message:</label>
                                        <textarea class="form-control validate" id="message" name="message" rows="5"
                                                  maxlength="5000" value="<?= set_value('message'); ?>"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary btn-lg pull-left contact-submit" value="Send">
                        <button type="button" class="btn btn-default btn-lg pull-right" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>

                <?= form_close(); ?>

            </div>
            <!-- /.modal-body -->


        </div>
        <!--/.modal-content-->
    </div>
    <!--/.modal-dialog-->
</div>
<!--/.modal fade-->
