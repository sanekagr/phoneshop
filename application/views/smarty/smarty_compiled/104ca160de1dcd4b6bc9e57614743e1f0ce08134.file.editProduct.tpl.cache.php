<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:31
         compiled from "application\views\smarty\cms\editProduct.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_55aa40936025f5_63107919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa40936025f5_63107919')) {function content_55aa40936025f5_63107919($_smarty_tpl) {?>
    <div class="row">

        <div class="col-sm-12">
            <h1 class="text-center">Edit Product</h1>

            

            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']) {?>
                <div class="message-success  text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata'];?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['message']->value['flashdata']-'error') {?>
                <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['message']->value['flashdata']-'error';?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['validation_errors']->value)) {?>
                <div class="error-display  text-center"><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</div>
            <?php }?>

        </div>


    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&!empty($_smarty_tpl->tpl_vars['categories']->value)&&isset($_smarty_tpl->tpl_vars['old_value']->value)) {?>


    <div class="row">

        <div class="col-sm-8 col-sm-offset-4">
            <div class="btn-group" role="group">
                <button class="btn btn-default btn-lg" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/edit_images/<?php echo $_smarty_tpl->tpl_vars['old_value']->value['id'];?>
' ">
                    <i class="fa fa-picture-o"></i> Delete or Add Pictures
                </button>
                <button class="btn btn-default btn-lg" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/products_order/<?php echo $_smarty_tpl->tpl_vars['old_value']->value['categorie_id'];?>
' ">
                    Products order
                </button>
            </div><br>
            <small>Save changes (if you need) before you leave this page</small>
        </div>

        
        <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="description">Product Description:</label>
                               <textarea class="form-control" id="description"
                                         name="description" >
                                   <?php if (!$_smarty_tpl->tpl_vars['set_value']->value['description']||!isset($_smarty_tpl->tpl_vars['set_value']->value)||empty($_smarty_tpl->tpl_vars['set_value']->value)) {?>
                                       <?php echo $_smarty_tpl->tpl_vars['old_value']->value['description'];?>

                                   <?php }?>
                                   <?php echo $_smarty_tpl->tpl_vars['set_value']->value['description'];?>

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
                        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control"
                           value="<?php if (!$_smarty_tpl->tpl_vars['set_value']->value['title']||!isset($_smarty_tpl->tpl_vars['set_value']->value)||empty($_smarty_tpl->tpl_vars['set_value']->value)) {
echo $_smarty_tpl->tpl_vars['old_value']->value['title'];
}
echo $_smarty_tpl->tpl_vars['set_value']->value['title'];?>
" required />
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="prod_price">Product price in $:</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price"
                           value="<?php if (!$_smarty_tpl->tpl_vars['set_value']->value['price']||!isset($_smarty_tpl->tpl_vars['set_value']->value)||empty($_smarty_tpl->tpl_vars['set_value']->value)) {
echo $_smarty_tpl->tpl_vars['old_value']->value['price'];
}
echo $_smarty_tpl->tpl_vars['set_value']->value['price'];?>
" required >
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
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/"><b>Back to Products Management</b></a>
            </div>

        </div>

        <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>


        <?php } else { ?>

        <?php }?>
    </div>


<?php }} ?>
