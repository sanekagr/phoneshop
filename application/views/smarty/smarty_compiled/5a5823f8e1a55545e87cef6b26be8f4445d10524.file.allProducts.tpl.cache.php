<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:51
         compiled from "application\views\smarty\cms\allProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49855aa40a75ce605-08476300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5823f8e1a55545e87cef6b26be8f4445d10524' => 
    array (
      0 => 'application\\views\\smarty\\cms\\allProducts.tpl',
      1 => 1429201592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49855aa40a75ce605-08476300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'categories' => 0,
    'cat' => 0,
    'form' => 0,
    'validation_errors' => 0,
    'search_results' => 0,
    'item' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa40a7663185_65837145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa40a7663185_65837145')) {function content_55aa40a7663185_65837145($_smarty_tpl) {?><div class="container">

    <div class="row">

        <div class="col-sm-12"><h1>Product Management</h1><br></div>

    </div>

        

    <div class="row">

        <div class="col-xs-12 col-sm-12">

                <button class="btn btn-primary" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/add_product/' ">
                    <i class="fa fa-plus"></i> Add new product
                </button>&nbsp;&nbsp;&nbsp;

                <button class="btn btn-info" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories/' "><i class="fa fa-pencil"></i> Edit Categories
                </button>&nbsp;&nbsp;&nbsp;

                <button class="btn btn-default" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/database_backup/' "><i class="fa fa-download"></i> Database Backup
                </button>

        </div>

    </div> <br>


    <div class="row">

        

        <div class="col-xs-12 col-sm-6">
            <select class="form-control pull-left" name="selection" id="selection" style="border: 1px #222 solid">
                <option value="-1">Choose Category</option>
                <option value="0">All Categories</option>
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
        <br class="visible-xs-inline-block">
        <br class="visible-xs-inline-block">

        

        <div class="col-xs-12 col-sm-6 ">

            <?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

            <div class="input-group">

               <input type="text" class="form-control" placeholder="Search product" name="product-search"  minlength=2 required style="border: 1px #222 solid" >

               <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="submit" style="border: 1px #222 solid">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
               </span>

            </div><!-- /input-group -->
            <?php if (isset($_smarty_tpl->tpl_vars['validation_errors']->value)) {?>
                <small style="color: red"><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</small>
             <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>


        </div>

     </div>


    <div class="row">

        

        <?php if (isset($_smarty_tpl->tpl_vars['search_results']->value)) {?>

            <div class="col-xs-12 col-sm-6 "><br>
                <h3>Search results:</h3>

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <table class="table table-hover table-condensed table-products">
                            <tbody>
                            <tr>
                                <td class="col-xs-5">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['machine_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                </td>
                                <td class="col-xs-1">
                                    <button class="btn btn-info pull-right" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/edit_product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' "><i class="fa fa-pencil"></i> Edit</button>
                                </td>
                                <td class="col-xs-1">
                                    <button class="btn btn-danger pull-right" data-toggle="modal"
                                            data-target="#modal-delete-product-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-trash-o" ></i> Delete
                                    </button>
                                    <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>" ".((string)$_smarty_tpl->tpl_vars['item']->value['title'])." with the content",'data_id'=>((string)$_smarty_tpl->tpl_vars['item']->value['id']),'id'=>"modal-delete-product-".((string)$_smarty_tpl->tpl_vars['item']->value['id']),'class'=>"delete-product"), 0);?>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>

                       <b><i>No search results</i></b>

                    <?php } ?>
            </div>
            <div class="col-sm-12"><hr></div>
        <?php } else { ?>

        <?php }?>


        


        <?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>

        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>

            <div class="col-xs-12 col-sm-6">

                <h3 style="color: #264780; font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h3><br>
                <table class="table table-hover table-condensed table-products">
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <tr>
                            <td class="col-xs-4"><a
                                        href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['machine_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-info pull-right"
                                        onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/dashboard/edit_product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' "><i
                                            class="fa fa-pencil"></i> Edit
                                </button>
                            </td>
                            <td class="col-xs-1">
                                <button class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#modal-delete-product-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-trash-o"></i>
                                    Delete
                                </button>
                                <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>" ".((string)$_smarty_tpl->tpl_vars['item']->value['title'])." with the content",'data_id'=>((string)$_smarty_tpl->tpl_vars['item']->value['id']),'id'=>"modal-delete-product-".((string)$_smarty_tpl->tpl_vars['item']->value['id']),'class'=>"delete-product"), 0);?>

                            </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                        <tr>
                            <td><h4>No products in category</h4></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>


        <?php } ?>
       

        <?php } else { ?>
            <h1>No products </h1>
        <?php }?>


    </div>
    <!--/.row-->
</div><?php }} ?>
