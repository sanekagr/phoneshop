<?php /*%%SmartyHeaderCode:15653904815531689dbae730-10798309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d5760415c4ef436aa72c7e44a1a2c910f4201d' => 
    array (
      0 => 'application/views/smarty/cms/editProduct.tpl',
      1 => 1429201594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15653904815531689dbae730-10798309',
  'variables' => 
  array (
    'message' => 0,
    'validation_errors' => 0,
    'categories' => 0,
    'old_value' => 0,
    'url' => 0,
    'form' => 0,
    'set_value' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5531689dce6ac8_68613603',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5531689dce6ac8_68613603')) {function content_5531689dce6ac8_68613603($_smarty_tpl) {?>    <div class="row">

        <div class="col-sm-12">
            <h1 class="text-center">Edit Product</h1>

            

                                                    <div class="error-display  text-center"></div>
            
        </div>


    </div>

    

    <div class="row">

        <div class="col-sm-8 col-sm-offset-4">
            <div class="btn-group" role="group">
                <button class="btn btn-default btn-lg" onclick="window.location='http://phoneshop.agran.info/cms/dashboard/edit_images/3' ">
                    <i class="fa fa-picture-o"></i> Delete or Add Pictures
                </button>
                <button class="btn btn-default btn-lg" onclick="window.location='http://phoneshop.agran.info/cms/dashboard/products_order/2' ">
                    Products order
                </button>
            </div><br>
            <small>Save changes (if you need) before you leave this page</small>
        </div>

        
        <form action="http://phoneshop.agran.info/cms/dashboard/edit_product/3" method="post" accept-charset="utf-8" id="edit-product-form"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="228798172d0bc9da90359f400f7d3a88" />
</div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="description">Product Description:</label>
                               <textarea class="form-control" id="description"
                                         name="description" >
                                                                          <p>"<span style="font-size:12pt;"><em>So capable, you won’t want to put it down. So thin and light, you won’t have to." With iPad, we’ve always had a somewhat paradoxical goal: to create a device that’s immensely powerful, yet so thin and light you almost forget it’s there. A device that helps you do amazing things, without ever getting in your way. iPad Air 2 is all that. And then some.</em></span></p>
<p><span style="font-size:12pt;">The iPad Air 2 is technically Apple's sixth generation iPad, and the second to carry the 'Air' moniker. It's slightly thinner than the original Air, but differs little in appearance. The main changes are under the hood: the tablet runs on iOS 8 and is powered by Apple's A8X chip, and it gets a higher-resolution 8-megapixel camera.</span></p>
<p>  <strong><span style="font-size:12pt;"><a href="https://www.apple.com/il/ipad-air-2/">Apple</a></span></strong></p>
<p>  <strong><span style="font-size:12pt;"><a href="http://www.phonearena.com/phones/Apple-iPad-Air-2_id8948">Phonearena</a><br /></span></strong>  </p>
                                                                      
                               </textarea>
                    <small>You can add images and videos here only from external source</small>
                </div>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-5">

            <div class="col-sm-12"><br><br>
                <div class="form-group">
                    <select class="form-control" name="cat_change" id="cat_change">
                        <option value="-1">Change Category</option>
                                                    <option value="1">Phones</option>
                                                    <option value="2">Tablets</option>
                                                    <option value="4">Cameras</option>
                                                    <option value="3">Memory Cards</option>
                                                    <option value="5">Phone Accessories </option>
                                            </select>
                </div>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control"
                           value="Apple iPad Air 2" required />
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="prod_price">Product price in $:</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price"
                           value="499.00" required >
                </div>
            </div>

            <div class="col-sm-6">
                <div class="checkbox" style="position: relative; top:13px ;">
                    <label><input type="checkbox" name="visibility" checked >
                        <b>Present on site</b>
                    </label>
                </div><br><br>
            </div>

            <div class="col-sm-12 ">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Product"/>
                </div>
                <a href="http://phoneshop.agran.info/cms/dashboard/"><b>Back to Products Management</b></a>
            </div>

        </div>

        </form>

            </div>


<?php }} ?>
