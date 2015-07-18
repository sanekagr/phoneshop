<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Shopping Cart</h1>
            <hr>
        </div>
    </div>

    <!--http://bootsnipp.com/snippets/featured/shopping-cart-bs-3-->

    <?php if($this->cart->contents()!=null): ?>

    <?= form_open(site_url().'cart/updateCart', array('id' => 'checkout-form')); ?>

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover table-cart" style="text-align: left;">
                    <thead>
                    <tr>
                        <th class="col-sm-8">Product</th>
                        <th class="col-sm-1 text-center">Quantity</th>
                        <th class="col-sm-1 text-center">Price</th>
                        <th class="col-sm-1 text-center">Total</th>
                        <th class="col-sm-1"></th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $i = 1; ?>
                    <?php //die_r($this->cart->contents())?>

                    <?php foreach ($this->cart->contents() as $items): ?>

                        <?= form_hidden($i . '[rowid]', $items['rowid']); ?>

                        <tr>
                            <td class="name" style="text-align: left;">

                                <a class="thumbnail pull-left" style="margin-right: 20px;"
                                   href="<?= site_url('products') . '/' . $items['cat_name'] . '/' . $items['machine_name'] ?>">
                                    <img class="media-object" src="<?= site_url('public/img').'/'.$items['cat_name'].'/'.$items['machine_name'].'/'.$items['main_image']; ?>"
                                         style=" height: 80px;"> </a>
                                <a href="<?= site_url('products') . '/' . $items['cat_name'] . '/' . $items['machine_name'] ?>"><?= $items['name']; ?></a>

                            </td>

                            <td class="text-center quantity">

                                <div class="input-group">
                                    <div class="input-group-btn" data-op="down">
                                        <button class="update-btn btn btn-default btn-sm"><i
                                                class="fa fa-minus"></i></button>
                                    </div>
                                    <?= form_input(array('type' => 'number', 'name' => $i . '[qty]', 'value' => $this->security->xss_clean($items['qty']), 'maxlength' => '3', 'class' => 'form-control input-amount text-center input-sm')); ?>
                                    <div class="input-group-btn" data-op="up">
                                        <button class="update-btn btn btn-default btn-sm"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>

                            </td>

                            <td class="text-center price"><strong><?= $this->cart->format_number($items['price']); ?>
                                    $</strong>
                            </td>

                            <td class="text-center">
                                <strong><?= $this->cart->format_number($items['subtotal']); ?>
                                    $</strong>
                            </td>

                            <td>
                                <button type="button" data-rowid="<?= $items['rowid'] ?>"
                                        class="btn btn-danger delete-item">
                                    <span class="glyphicon glyphicon-remove"></span> Remove
                                </button>
                            </td>
                        </tr>

                        <?php $i++; ?>

                    <?php endforeach; ?>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td class="text-left">
                            <button type="button" class="btn btn-danger  delete-all">
                                <span class="glyphicon glyphicon-remove"></span> Empty Cart
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td class="text-right"><h2>Total:</h2></td>
                        <td class="text-right">
                            <h3>
                                <strong>
                                        <?= $this->cart->format_number($this->cart->total()); ?>$
                                </strong>
                            </h3>
                        </td>
                    </tr>

                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><br><br>

                            <a href="<?= site_url('products'); ?> " role="button" class="btn btn-info btn-lg">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                            </a>

                        </td>
                        <td><br><br>
                            <a href="<?= site_url('cart/order'); ?> " role="button" class="btn btn-success btn-lg">Checkout
                                <span class="glyphicon glyphicon-play"></span>
                            </a>
                        </td>
                    </tr>
                    </tbody>

                </table>
                <?= form_close();?>

            </div><!--/.table-responsive-->
        </div><!--/.col-sm-12-->
    </div><!--/.row-->

    <?php else:  ?>
        <div class="row">

            <div class="col-sm-12">
                <i><h1>Your shopping cart is empty</h1></i><br>
                <button role="button" class="btn btn-info btn-lg"
                        onclick="window.location='<?= site_url('products'); ?>' ">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                </button>
                &nbsp;&nbsp;&nbsp;
                <button role="button" class="btn btn-default btn-lg" onclick="history.go(-1)">
                    <span class="glyphicon glyphicon-arrow-left"></span> Back
                </button>
            </div>

        </div>

    <?php endif;  ?>


</div><!--/.container-->





