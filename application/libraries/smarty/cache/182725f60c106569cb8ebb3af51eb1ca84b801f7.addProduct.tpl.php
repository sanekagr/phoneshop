<?php /*%%SmartyHeaderCode:5567779925531690917cbb9-89300070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '182725f60c106569cb8ebb3af51eb1ca84b801f7' => 
    array (
      0 => 'application/views/smarty/cms/addProduct.tpl',
      1 => 1429201591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5567779925531690917cbb9-89300070',
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
  'unifunc' => 'content_5531690927af75_25509771',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5531690927af75_25509771')) {function content_5531690927af75_25509771($_smarty_tpl) {?>    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Add Product</h1>

            

                                                    <div class="error-display  text-center"></div>
                    </div>
    </div>


    <div class="row">

        
        <form action="http://phoneshop.agran.info/cms/dashboard/add_product/" method="post" accept-charset="utf-8" id="add-product-form" enctype="multipart/form-data"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="228798172d0bc9da90359f400f7d3a88" />
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
                    <small>If you didn't make a category, <a  style="color:#0064cd" href="http://phoneshop.agran.info/cms/categories/add_category/">add it here</a></small>
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
            <a href="http://phoneshop.agran.info/cms/dashboard/"><b>Back to Products Management</b></a>
        </div>

            </div>

<?php }} ?>
