<?php /*%%SmartyHeaderCode:2141055380c16954a27-74344524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b5cf0595b72b9419fe5bc7c86cf21a627b9313' => 
    array (
      0 => 'application\\views\\smarty\\order.tpl',
      1 => 1429201456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2141055380c16954a27-74344524',
  'variables' => 
  array (
    'name' => 0,
    'ord' => 0,
    'url' => 0,
    'order' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55380c16990bd1_29414526',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55380c16990bd1_29414526')) {function content_55380c16990bd1_29414526($_smarty_tpl) {?><div class="container">
    <div class="row order">

        <div class="col-sm-12">
            <h1 class="bg-primary text-center" >Thank you admin, your order have been saved!</h1>
            <div class="col-sm-6">
                <h2>Order details:</h2>
                                <p><strong>
                Item: <a href="http://localhost/phoneshop/products/phone_accessories/accessories-7">Charger Micro Usb</a><br>
                Quantity: 1<br>
                Price: 15.50$<br>
                Subtotal: 15.5$<br>
                </p></strong>
                                <p><strong>
                Item: <a href="http://localhost/phoneshop/products/phone_accessories/accessories-5">headphones apple</a><br>
                Quantity: 1<br>
                Price: 20.50$<br>
                Subtotal: 20.5$<br>
                </p></strong>
                                <h3>Total: 36$</h3>
                <div>
                    <a href="http://localhost/phoneshop/products/">Continue Shopping</a>
                </div>

            </div>
        </div>
    </div>


</div>
<?php }} ?>
