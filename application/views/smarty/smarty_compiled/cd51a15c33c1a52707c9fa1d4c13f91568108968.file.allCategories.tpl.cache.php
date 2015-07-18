<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:43
         compiled from "application\views\smarty\cms\allCategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724255aa409f263ad4-42908503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd51a15c33c1a52707c9fa1d4c13f91568108968' => 
    array (
      0 => 'application\\views\\smarty\\cms\\allCategories.tpl',
      1 => 1429201591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724255aa409f263ad4-42908503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'feedback' => 0,
    'categories' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa409f2a9174_78725166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409f2a9174_78725166')) {function content_55aa409f2a9174_78725166($_smarty_tpl) {?>

<div class="container">
    <div class="row">
        <h2>Edit Categories</h2><br>

        <div class="col-sm-12">
            <button class="btn btn-primary" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories/add_category' "><i
                        class="fa fa-plus"></i> Add New Category
            </button>&nbsp;&nbsp;
            <button class="btn btn-info" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories/categories_order' "><i
                        class="fa fa-pencil"></i> Categories Order
            </button>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['feedback']->value)) {?>
          <div class="col-sm-12 message-success"><?php echo $_smarty_tpl->tpl_vars['feedback']->value;?>
</div>
        <?php }?>
    </div>
    <br/>

    <div class="row">
        <div class="col-xs-12 col-sm-7">

            <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)&&isset($_smarty_tpl->tpl_vars['categories']->value)) {?>

            <table class="table table-hover table-products">
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                    <tr>
                        <td class="col-xs-4"><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat']->value['machine_name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-info" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/categories/edit_category/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
' "><i class="fa fa-pencil"></i> Edit</button>
                        </td>
                        <td class="col-xs-1">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-category-<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>" ".((string)$_smarty_tpl->tpl_vars['cat']->value['name'])." category with all the content (images, products)",'data_id'=>((string)$_smarty_tpl->tpl_vars['cat']->value['id']),'id'=>"modal-delete-category-".((string)$_smarty_tpl->tpl_vars['cat']->value['id']),'class'=>"delete-category"), 0);?>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <?php } else { ?>
                <h2>No Categories</h2>
            <?php }?>

        </div>
    </div>
</div>
<?php }} ?>
