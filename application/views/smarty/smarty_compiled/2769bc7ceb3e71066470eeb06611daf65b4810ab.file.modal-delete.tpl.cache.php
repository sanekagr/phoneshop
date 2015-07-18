<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 11:40:40
         compiled from "application\views\smarty\cms\modal-delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29449551e52082f1a40-17164483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2769bc7ceb3e71066470eeb06611daf65b4810ab' => 
    array (
      0 => 'application\\views\\smarty\\cms\\modal-delete.tpl',
      1 => 1428050437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29449551e52082f1a40-17164483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e52082f8f25_92305134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e52082f8f25_92305134')) {function content_551e52082f8f25_92305134($_smarty_tpl) {?>

<div class="modal fade modal-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0; opacity: 0.8;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger delete-btn">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>
