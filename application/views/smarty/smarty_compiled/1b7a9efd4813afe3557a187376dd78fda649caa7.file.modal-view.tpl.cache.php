<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-17 16:11:11
         compiled from "application/views/smarty/modal-view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619849790553168dfe9b036-17235798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7a9efd4813afe3557a187376dd78fda649caa7' => 
    array (
      0 => 'application/views/smarty/modal-view.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619849790553168dfe9b036-17235798',
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
  'unifunc' => 'content_553168dfebcc05_69639065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553168dfebcc05_69639065')) {function content_553168dfebcc05_69639065($_smarty_tpl) {?>

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
