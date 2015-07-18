<?php /*%%SmartyHeaderCode:2336855aa40660bf286-09247233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2964872fa0d80ae95fe998aa74367b28a916cf79' => 
    array (
      0 => 'application\\views\\smarty\\cms\\addProduct.tpl',
      1 => 1429201591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2336855aa40660bf286-09247233',
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'categories' => 0,
    'form' => 0,
    'cat' => 0,
    'url' => 0,
    'set_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa406611e5a1_05624450',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa406611e5a1_05624450')) {function content_55aa406611e5a1_05624450($_smarty_tpl) {?>    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Add Product</h1>

            

                                                    <div class="error-display  text-center"></div>
                    </div>
    </div>


    <div class="row">

        
        <form action="http://localhost/phoneshop/cms/dashboard/add_product/" method="post" accept-charset="utf-8" id="add-product-form" enctype="multipart/form-data"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="9898b01411f96bdb8fa3ea17b805f27a" />
</div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <br>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="cat_selection" id="cat_selection">
                        <option value="-1">Choose Category</option>
                                                    <option value="1">Phones</option>
                                                    <option value="2">Tablets</option>
                                                    <option value="4">Cameras</option>
                                                    <option value="3">Memory Cards</option>
                                                    <option value="5">Phone Accessories </option>
                                            </select>
                    <small>If you didn't make a category, <a  style="color:#0064cd" href="http://localhost/phoneshop/cms/categories/add_category/">add it here</a></small>
                </div>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="" required />
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group">
                    <label for="userfile">Main Image:</label>
                    <input type="file" class="form-control" name="userfile[]" />
                    <small>This picture appears in the Home and Products pages</small>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="userfile[]">Images:</label>
                    <input type="file" class="form-control" name="userfile[]" multiple="multiple" />
                    <small>You can also add images in edit picture section</small>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="prod_price">Product price in $:</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price"
                           value="" required >
                </div>
            </div>

            <div class="col-sm-6">
                <div class="checkbox" style="position: relative; top:13px ;">
                    <label><input type="checkbox" name="visibility" checked >
                        <b>Present on site</b>
                    </label>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="col-sm-12">
                <div class="form-group ">
                    <label for="description">Product Description:</label>
                               <textarea class="form-control" id="description"
                                         name="description" style="border: 2px solid #222;"></textarea>
                    <small>You can add images and videos here only from external source</small>
                </div>
            </div>

        </div>

        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Product"/>
            </div>
        </div>
        </form>
        <div class="col-sm-4 col-sm-offset-4">
            <a href="http://localhost/phoneshop/cms/dashboard/"><b>Back to Products Management</b></a>
        </div>

            </div>

<?php }} ?>
