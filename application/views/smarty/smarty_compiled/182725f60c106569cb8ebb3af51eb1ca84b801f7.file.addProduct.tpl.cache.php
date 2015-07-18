<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 16:11:53
         compiled from "application/views/smarty/cms/addProduct.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_55316909253f37_94206760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55316909253f37_94206760')) {function content_55316909253f37_94206760($_smarty_tpl) {?>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Add Product</h1>

            

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


    <div class="row">

        <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)) {?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>


        <div class="col-xs-12 col-sm-12 col-md-4">
            <br>
            <div class="col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="cat_selection" id="cat_selection">
                        <option value="-1">Choose Category</option>
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
                    <small>If you didn't make a category, <a  style="color:#0064cd" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories/add_category/">add it here</a></small>
                </div>
            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['set_value']->value['title'];?>
" required />
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
                           value="<?php echo $_smarty_tpl->tpl_vars['set_value']->value['price'];?>
" required >
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
                                         name="description" style="border: 2px solid #222;"><?php echo $_smarty_tpl->tpl_vars['set_value']->value['description'];?>
</textarea>
                    <small>You can add images and videos here only from external source</small>
                </div>
            </div>

        </div>

        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block" id="submit" value="Save Product"/>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>

        <div class="col-sm-4 col-sm-offset-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/"><b>Back to Products Management</b></a>
        </div>

        <?php } else { ?>
            <div class="col-sm-12 text-left">
                <h3 >You haven't any category yet, <a  style="color:#0064cd" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories/add_category/">add it here</a> </h3>
            </div>
        <?php }?>
    </div>

<?php }} ?>
