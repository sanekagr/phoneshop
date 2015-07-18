<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-18 15:03:42
         compiled from "application\views\smarty\cms\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2446955aa409e411284-02536045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e008ba6de835ecabb2919ef663c6c57bdabd672' => 
    array (
      0 => 'application\\views\\smarty\\cms\\orders.tpl',
      1 => 1429201595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2446955aa409e411284-02536045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'orders' => 0,
    'user' => 0,
    'order' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa409e46a936_54338982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409e46a936_54338982')) {function content_55aa409e46a936_54338982($_smarty_tpl) {?>

    <div class="row">

        <div class="col-sm-12">
            <h1>Orders</h1><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-all-orders">
                <i class="fa fa-trash-o"></i> Delete All Order Records</button>&nbsp;&nbsp;

            <button class="btn btn-success excel-orders" onclick=" window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/excel_export/' ">
                <i class="fa fa-file-excel-o"></i> Save to excel file</button>&nbsp;&nbsp;

            <button class="btn btn-success csv-orders" onclick=" window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
cms/excel_export/get_csv_report/orders' ">
                <i class="fa fa-file-o"></i> Save to csv file</button>&nbsp;&nbsp;

            <br><br>
            <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>"all order records",'data_id'=>"-1",'id'=>"modal-delete-all-orders",'class'=>"delete-order"), 0);?>

            <small>Click on row to see the order details</small>

        </div>
    </div><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 table-responsive">

            <table class="table table-hover table-orders" >
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Order Details</th>
                    <th>Total Order</th>
                    <th>Time</th>
                    <th></th>
                </tr>

                
                <?php if (!empty($_smarty_tpl->tpl_vars['orders']->value)) {?>

                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>

                    <tr>
                        <td><h4><b><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
<b/></h4></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>

                         <td>
                             <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
                             <div>
                             <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>


                                     <h5><b><?php echo $_smarty_tpl->tpl_vars['order']->value->name;?>
</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: <?php echo $_smarty_tpl->tpl_vars['order']->value->qty;?>
</small></li>
                                     <li><small>Price: <?php echo $_smarty_tpl->tpl_vars['order']->value->price;?>
$</small></li>
                                 </ul>

                                 <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['order']->value->subtotal), null, 0);?>

                             <?php } ?>
                             </div>
                         </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['time'];?>
</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            <?php echo $_smarty_tpl->getSubTemplate ("modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('item'=>"this order record",'data_id'=>((string)$_smarty_tpl->tpl_vars['user']->value['id']),'id'=>"modal-delete-order-".((string)$_smarty_tpl->tpl_vars['user']->value['id']),'class'=>"delete-order"), 0);?>

                        </td>
                    </tr>

                <?php } ?>

                <?php } else { ?>

                    <tr>
                        <td>
                            <h2>No Order Records</h2>
                        </td>
                    </tr>


                <?php }?>

                </tbody>
            </table>
        </div>

    </div>


<?php }} ?>
