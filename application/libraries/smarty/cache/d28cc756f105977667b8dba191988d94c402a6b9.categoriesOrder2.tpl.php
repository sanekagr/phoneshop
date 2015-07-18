<?php /*%%SmartyHeaderCode:2205524faad917e37-10292559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28cc756f105977667b8dba191988d94c402a6b9' => 
    array (
      0 => 'application\\views\\smarty\\cms\\categoriesOrder2.tpl',
      1 => 1428478213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2205524faad917e37-10292559',
  'variables' => 
  array (
    'message' => 0,
    'categories' => 0,
    'form' => 0,
    'cat' => 0,
    'error' => 0,
    'order' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5524faad976774_34656642',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5524faad976774_34656642')) {function content_5524faad976774_34656642($_smarty_tpl) {?><div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Categories Order</h1>
            

                        
        </div>

    </div>

    <div class="row">
                   <form action="http://localhost/phoneshop/cms/categories/categories_order2/" method="post" accept-charset="utf-8" id="order-category-form"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="a8db503be4b1c0ba7c7984c7ce97abbc" />
</div>

                <div class="col-md-3 col-sm-5">
                    <label for="cat-select">Categories:</label>
                    <select class="form-control" name="cat-select" id="cat-select">
                        <option value="choose">Choose category</option>
                                                    <option value=1>Phones</option>
                                                    <option value=2>Tablets</option>
                                                    <option value=4>Cameras</option>
                                                    <option value=3>Memory Cards</option>
                                                    <option value=5>Phone Accessories</option>
                                            </select>
                                    </div>

                <div class="col-md-3 col-sm-5">
                    <label for="order-select">New place of category</label>
                    <select class="form-control" name="order-select" id="order-select">
                        <option value='choose'>Choose Order</option>
                                                    <option value=1>1</option>
                                                    <option value=2>2</option>
                                                    <option value=3>3</option>
                                                    <option value=4>4</option>
                                                    <option value=5>5</option>
                                            </select>
                                    </div>

                <div class="col-sm-12">
                    <br><input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
                </div>
            </form>
            </div>

</div><?php }} ?>
