<?php /*%%SmartyHeaderCode:23626552f70092d3261-92115466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd300fed2644e0d77a2bdb2f366617f6efbafc537' => 
    array (
      0 => 'application\\views\\smarty\\cms\\productsOrder.tpl',
      1 => 1429115015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23626552f70092d3261-92115466',
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'products' => 0,
    'form' => 0,
    'prod' => 0,
    'set_value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552f70093ae305_35977509',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f70093ae305_35977509')) {function content_552f70093ae305_35977509($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Products Order</h1>
            

                            <div class="message-success">The order of products was edited!</div>
                                                    <div class="error-display "></div>
                    </div>

    </div>

    <div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-6">

                <form action="http://localhost/phoneshop/cms/dashboard/products_order/4" method="post" accept-charset="utf-8"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="d56cfcbceb7b9e6aca094111bb3fe032" />
</div>
                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:200px;">Product</div></th>
                    </tr>
                                            <tr>
                            <td><input type="text" name="order-6" class="form-control" value="1" style="max-width: 60px;"
                                       /></td>
                            <td>Canon 600d\ EOS Rebel T3i</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-8" class="form-control" value="2" style="max-width: 60px;"
                                       /></td>
                            <td>Sony Alpha a7S</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-75" class="form-control" value="3" style="max-width: 60px;"
                                       /></td>
                            <td>Nikon D5500</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-74" class="form-control" value="4" style="max-width: 60px;"
                                       /></td>
                            <td>Samsung NX1</td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 col-sm-12">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
            </div>
            </form>

            <div class="col-sm-12">
                <br><a href="http://localhost/phoneshop/cms/dashboard/edit_product/74"><b>Back to edit product section</b></a>
            </div>
            </div>


</div><?php }} ?>
