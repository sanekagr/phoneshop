<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:40
         compiled from "application\views\smarty\modal-view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2358555aa409ca72181-87356070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5dc38b7cf2f8d2925f55dfb36c72869d4a2a63b' => 
    array (
      0 => 'application\\views\\smarty\\modal-view.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2358555aa409ca72181-87356070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'date' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa409ca810e4_39216248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409ca810e4_39216248')) {function content_55aa409ca810e4_39216248($_smarty_tpl) {?>

<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 style="text-align: center;">Message from <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 by date: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h3>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>
