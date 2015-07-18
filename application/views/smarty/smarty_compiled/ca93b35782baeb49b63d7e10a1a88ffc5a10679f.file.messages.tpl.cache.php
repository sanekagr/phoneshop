<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:40
         compiled from "application\views\smarty\cms\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2615555aa409c9cf7e4-69002052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca93b35782baeb49b63d7e10a1a88ffc5a10679f' => 
    array (
      0 => 'application\\views\\smarty\\cms\\messages.tpl',
      1 => 1429201594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2615555aa409c9cf7e4-69002052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'messages' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa409ca24eb2_24944625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409ca24eb2_24944625')) {function content_55aa409ca24eb2_24944625($_smarty_tpl) {?>

    <div class="row">

        <div class="col-sm-12">
            <h1>Messages</h1><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-all-messages">
                <i class="fa fa-trash-o"></i> Delete All Messages</button>&nbsp;&nbsp;

            <button class="btn btn-success excel-orders" onclick=" window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/excel_export/messages' ">
                <i class="fa fa-file-excel-o"></i> Save to excel file</button>&nbsp;&nbsp;

            <button class="btn btn-success csv-orders" onclick=" window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/excel_export/get_csv_report/contact_log' ">
                <i class="fa fa-file-o"></i> Save to csv file</button>&nbsp;&nbsp;
            <br><br>
            <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>"all messages",'data_id'=>"-1",'id'=>"modal-delete-all-messages",'class'=>"delete-message"), 0);?>

            <small>Click on row to see the message</small>

        </div>
    </div><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 ">

            <table class="table table-hover table-messages" >
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th style="min-width: 350px">Message</th>
                    <th style="min-width: 100px">Date</th>
                    <th></th>
                    <th></th>
                </tr>

                
                <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)) {?>

                <?php  $_smarty_tpl->tpl_vars['mes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->key => $_smarty_tpl->tpl_vars['mes']->value) {
$_smarty_tpl->tpl_vars['mes']->_loop = true;
?>

                    <tr>
                        <td><b><?php echo $_smarty_tpl->tpl_vars['mes']->value['name'];?>
<b/></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['subject'];?>
</td>
                        <td ><div><?php echo $_smarty_tpl->tpl_vars['mes']->value['message'];?>
</div></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mes']->value['date'];?>
</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            <?php echo $_smarty_tpl->getSubTemplate ("modal-view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('name'=>((string)$_smarty_tpl->tpl_vars['mes']->value['name']),'date'=>((string)$_smarty_tpl->tpl_vars['mes']->value['date']),'message'=>((string)$_smarty_tpl->tpl_vars['mes']->value['message']),'id'=>"modal-view-message-".((string)$_smarty_tpl->tpl_vars['mes']->value['id']),'class'=>"delete-message"), 0);?>

                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-<?php echo $_smarty_tpl->tpl_vars['mes']->value['id'];?>
"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>"this message",'data_id'=>((string)$_smarty_tpl->tpl_vars['mes']->value['id']),'id'=>"modal-delete-message-".((string)$_smarty_tpl->tpl_vars['mes']->value['id']),'class'=>"delete-message"), 0);?>

                        </td>
                    </tr>

                <?php } ?>

                <?php } else { ?>

                    <tr>
                        <td>
                            <h2>No Messages</h2>
                        </td>
                    </tr>


                <?php }?>

                </tbody>
            </table>
        </div>

    </div>


<?php }} ?>
