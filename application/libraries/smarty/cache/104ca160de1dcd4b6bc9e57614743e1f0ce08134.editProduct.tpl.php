<?php /*%%SmartyHeaderCode:1735855aa409358a556-74833143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '104ca160de1dcd4b6bc9e57614743e1f0ce08134' => 
    array (
      0 => 'application\\views\\smarty\\cms\\editProduct.tpl',
      1 => 1429201594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1735855aa409358a556-74833143',
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
  'unifunc' => 'content_55aa409361a852_84148455',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409361a852_84148455')) {function content_55aa409361a852_84148455($_smarty_tpl) {?>    <div class="row">

        <div class="col-sm-12">
            <h1 class="text-center">Edit Product</h1>

            

                                                    <div class="error-display  text-center"></div>
            
        </div>


    </div>

    

    <div class="row">

        <div class="col-sm-8 col-sm-offset-4">
            <div class="btn-group" role="group">
                <button class="btn btn-default btn-lg" onclick="window.location='http://localhost/phoneshop/cms/dashboard/edit_images/71' ">
                    <i class="fa fa-picture-o"></i> Delete or Add Pictures
                </button>
                <button class="btn btn-default btn-lg" onclick="window.location='http://localhost/phoneshop/cms/dashboard/products_order/1' ">
                    Products order
                </button>
            </div><br>
            <small>Save changes (if you need) before you leave this page</small>
        </div>

        
        <form action="http://localhost/phoneshop/cms/dashboard/edit_product/71" method="post" accept-charset="utf-8" id="edit-product-form"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="9898b01411f96bdb8fa3ea17b805f27a" />
</div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="description">Product Description:</label>
                               <textarea class="form-control" id="description"
                                         name="description" >
                                                                          <h2>The new LG G3 flagship</h2>
<p>Sports 5.5-inch, <strong>1440 x 2560 (QHD</strong>) pixel resolution screen, which provides the super-crisp, 538 pixels per inch. Dimensions are pretty compact for the screen size, resulting in excellent 76.4% screen to body size ratio. The Android 4.4 KitKat-based handset is powered by a quad-core Snapdragon 801 and 3GB of LPDDR3 RAM. It features 32GB of internal storage and a microSD slot. The main 13-megapixel rear shooter comes with the company's improved Optical Image Stabilization+ and has a laser auto focus assist beam, which delivers fast focus even in low light scenarios. The 2.1-megapixel front-facing cam comes with an "enhanced selfie mode".</p>
<h4><span style="color:#3366ff;font-size:12pt;"><a href="http://www.phonearena.com/phones/LG-G3_id8347"><span style="color:#3366ff;">Phonearena</span></a></span></h4>
<p><span style="font-size:12pt;"><strong><span style="color:#3366ff;"><a href="http://www.lg.com/global/g3/index.html"><span style="color:#3366ff;">LG<span style="color:#3366ff;"> </span>Site</span></a></span></strong></span></p>
                                                                      
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
                           value="LG G3" required />
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="prod_price">Product price in $:</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price"
                           value="449.99" required >
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
                <a href="http://localhost/phoneshop/cms/dashboard/"><b>Back to Products Management</b></a>
            </div>

        </div>

        </form>

            </div>


<?php }} ?>
