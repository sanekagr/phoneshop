<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:51
         compiled from "application\views\smarty\modal-delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645155aa40a7688af3-85506825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c749e39640534dae34750e1556ddb5f453c613' => 
    array (
      0 => 'application\\views\\smarty\\modal-delete.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645155aa40a7688af3-85506825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'item' => 0,
    'data_id' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa40a7695889_16241348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa40a7695889_16241348')) {function content_55aa40a7695889_16241348($_smarty_tpl) {?>

<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['data_id']->value;?>
" class="btn btn-danger delete-btn <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>
