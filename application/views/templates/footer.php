
<!--           Modals         -->
<?= $this->load->view('templates/contact_form');
    $this->load->view('templates/modal_first');
?>

<!--          footer         -->

<div class="footer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 hidden-xs hidden-sm brand" ><a href="<?= site_url('home'); ?>">Phone
                    <img src="<?= site_url('public/img/buying4org.svg'); ?>"
                         height="30px"/>Shop &copy; <?= date("Y"); ?></a></div>

            <div class="col-sm-12 col-xs-12 col-md-6">

                <!--     Button trigger contact modal      -->

                <div class="btn-group hidden-xs hidden-sm hidden-print" role="group" aria-label="">

                    <button type="button" class="btn btn-default btn-contact" onclick="window.location='<?= site_url('')?>' "><i class="fa fa-home"></i></button>
                    <button type="button" class="btn btn-default btn-contact" onclick="window.location='<?= site_url('products')?>' ">Products</button>
                    <button type="button" class="btn btn-default btn-contact" onclick="window.location='<?= site_url('about')?>' ">About</button>
                    <button type="button" class="btn btn-default btn-contact" onclick="window.location='<?= site_url('contact')?>' ">Contact</button>
                    <button type="button" class="btn btn-default btn-contact"
                            data-toggle="modal" data-target="#myModal2"
                            aria-label="Left Align" title="Click to send a message">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;
                        Message
                    </button>
                </div>

            </div>


            <!--   phone    -->

            <div class="col-sm-12 col-md-3">
                <a class="phone" href="tel:1700000000"><i class="fa fa-phone-square"></i></span>&nbsp;1-700-000-000</a>
                <a href="#" class="visible-xs-inline visible-sm-inline message" data-toggle="modal"
                   data-target="#myModal2">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Message
                </a>
            </div>

            <div class="col-xs-12 small-footer">
                <u>This site (project) only for the studying proposes.
				The source code is available on <a href="https://github.com/sanekagr/phoneshop" style="font-size:14px;"><i class="fa fa-github"></i> Github</a></u><br/>
                Designed by <a href="http://www.agran.info" target="_blank">Alex Agranov</a>
            </div>

        </div>
        <!--/.row-->

    </div>
    <!--/.container-fluid-->
</div>
<!--/.footer-->

</div>
<!--/.wrapper-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!--Fotorama -->
<!--<script src="--><?//= site_url('public/js/packages/fotorama.js');?><!--" ></script>-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js"></script>

<!-- jQuery Validate -->
<script type="text/javascript" src="<?= site_url('public/js/packages/jquery.validate.min.js');?>" ></script>

<!-- UItoTop -->
<script type="text/javascript" src="<?= site_url('public/js/packages/UItoTop.js'); ?>" ></script>

<!-- marquee.js-->
<script type="text/javascript" src="<?= site_url('public/js/packages/marquee.js'); ?>" ></script>

<!-- defenition of CI_ROOT -->
<script type="text/javascript"> var CI_ROOT="<?= site_url(); ?>"; </script>

<!-- custom scripts-->
<script type="text/javascript" src="<?= site_url('public/js/scr.js'); ?>" ></script>
<script type="text/javascript" src="<?= site_url('public/js/forms_validate.js');?>" ></script>

</body>
</html>