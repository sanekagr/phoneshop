<?php /*%%SmartyHeaderCode:988055aa4075413712-87920581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1eebe6f797eb21d14450700f2d05f007d2e00f' => 
    array (
      0 => 'application\\views\\smarty\\cms\\categoriesOrder.tpl',
      1 => 1429201592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988055aa4075413712-87920581',
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'categories' => 0,
    'form' => 0,
    'cat' => 0,
    'set_value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa4075478a95_08593418',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa4075478a95_08593418')) {function content_55aa4075478a95_08593418($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Categories Order</h1>
            

                                                    <div class="error-display "></div>
                    </div>

    </div>

    <div class="row">
        
            <div class="col-xs-8 col-sm-5 col-lg-3">
                <form action="http://localhost/phoneshop/cms/categories/categories_order/" method="post" accept-charset="utf-8" id="order-category-form"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="9898b01411f96bdb8fa3ea17b805f27a" />
</div>
                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:150px;">Category</div></th>
                    </tr>
                                            <tr>
                            <td><input type="text" name="order-1" class="form-control" value="1"
                                       style="max-width: 60px;" /></td>
                            <td>Phones</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-2" class="form-control" value="2"
                                       style="max-width: 60px;" /></td>
                            <td>Tablets</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-4" class="form-control" value="3"
                                       style="max-width: 60px;" /></td>
                            <td>Cameras</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-3" class="form-control" value="4"
                                       style="max-width: 60px;" /></td>
                            <td>Memory Cards</td>
                        </tr>
                                            <tr>
                            <td><input type="text" name="order-5" class="form-control" value="5"
                                       style="max-width: 60px;" /></td>
                            <td>Phone Accessories </td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 col-sm-12">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
            </div>
            </form>
            <div class="col-sm-12">
                <br><a href="http://localhost/phoneshop/cms/categories"><b>Back to Categories Management</b></a>
            </div>
            </div>


</div><?php }} ?>
