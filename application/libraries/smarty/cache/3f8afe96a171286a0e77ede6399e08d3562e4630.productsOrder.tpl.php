<?php /*%%SmartyHeaderCode:544827233553168a4195db7-39645827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8afe96a171286a0e77ede6399e08d3562e4630' => 
    array (
      0 => 'application/views/smarty/cms/productsOrder.tpl',
      1 => 1429201595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544827233553168a4195db7-39645827',
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
  'unifunc' => 'content_553168a43a7a04_39127650',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553168a43a7a04_39127650')) {function content_553168a43a7a04_39127650($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Products Order</h1>
            

                                                    <div class="error-display "></div>
                    </div>

    </div>

    <div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-6">

                <form action="http://phoneshop.agran.info/cms/dashboard/products_order/2" method="post" accept-charset="utf-8"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="228798172d0bc9da90359f400f7d3a88" />
</div>
                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:200px;">Product</div></th>
                    </tr>
                                            <tr>
                            <td><input type="text" name="order-3" class="form-control" value="1" style="max-width: 60px;"
                                       /></td>
                            <td>Apple iPad Air 2</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-4" class="form-control" value="2" style="max-width: 60px;"
                                       /></td>
                            <td>Apple iPad mini 3</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-72" class="form-control" value="3" style="max-width: 60px;"
                                       /></td>
                            <td>Samsung Galaxy Tab S 10.5</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-73" class="form-control" value="4" style="max-width: 60px;"
                                       /></td>
                            <td>Samsung Galaxy Tab 4 10.1 T530</td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 col-sm-12">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
            </div>
            </form>

            <div class="col-sm-12">
                <br><a href="http://phoneshop.agran.info/cms/dashboard/edit_product/73"><b>Back to edit product section</b></a>
            </div>
            </div>


</div><?php }} ?>
