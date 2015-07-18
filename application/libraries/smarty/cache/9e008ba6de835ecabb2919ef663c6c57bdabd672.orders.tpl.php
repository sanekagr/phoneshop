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
    'f6c749e39640534dae34750e1556ddb5f453c613' => 
    array (
      0 => 'application\\views\\smarty\\modal-delete.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2446955aa409e411284-02536045',
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
  'unifunc' => 'content_55aa409e4b7979_45059468',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409e4b7979_45059468')) {function content_55aa409e4b7979_45059468($_smarty_tpl) {?>
    <div class="row">

        <div class="col-sm-12">
            <h1>Orders</h1><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-all-orders">
                <i class="fa fa-trash-o"></i> Delete All Order Records</button>&nbsp;&nbsp;

            <button class="btn btn-success excel-orders" onclick=" window.location='http://localhost/phoneshop/cms/excel_export/' ">
                <i class="fa fa-file-excel-o"></i> Save to excel file</button>&nbsp;&nbsp;

            <button class="btn btn-success csv-orders" onclick=" window.location='http://localhost/phoneshop/cms/excel_export/get_csv_report/orders' ">
                <i class="fa fa-file-o"></i> Save to csv file</button>&nbsp;&nbsp;

            <br><br>
            
<div class="modal fade" id="modal-delete-all-orders" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete all order records?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="-1" class="btn btn-danger delete-btn delete-order">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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

                
                
                
                    <tr>
                        <td><h4><b>admin<b/></h4></td>
                        <td>admin@domain.com</td>

                         <td>
                                                          <div>
                             

                                     <h5><b>Charger Micro Usb</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 15.50$</small></li>
                                 </ul>

                                 
                             

                                     <h5><b>headphones apple</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 20.50$</small></li>
                                 </ul>

                                 
                                                          </div>
                         </td>
                        <td>36$</td>
                        <td>2015-04-23 00:01:10</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-96"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-order-96" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this order record?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="96" class="btn btn-danger delete-btn delete-order">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><h4><b>admin<b/></h4></td>
                        <td>admin@domain.com</td>

                         <td>
                                                          <div>
                             

                                     <h5><b>Samsung Galaxy S5</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 550.00$</small></li>
                                 </ul>

                                 
                             

                                     <h5><b>Samsung Galaxy S6</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 680.99$</small></li>
                                 </ul>

                                 
                                                          </div>
                         </td>
                        <td>1230.99$</td>
                        <td>2015-04-22 23:44:00</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-95"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-order-95" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this order record?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="95" class="btn btn-danger delete-btn delete-order">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><h4><b>sasha2<b/></h4></td>
                        <td>sanekagr@gmail.com</td>

                         <td>
                                                          <div>
                             

                                     <h5><b>Canon 600d</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 599.00$</small></li>
                                 </ul>

                                 
                             

                                     <h5><b>SanDisk Ultra SDHC/SDXC Memory Card 32gb</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 24.00$</small></li>
                                 </ul>

                                 
                                                          </div>
                         </td>
                        <td>623$</td>
                        <td>2015-04-15 21:29:11</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-94"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-order-94" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this order record?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="94" class="btn btn-danger delete-btn delete-order">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><h4><b>admin<b/></h4></td>
                        <td>admin@domain.com</td>

                         <td>
                                                          <div>
                             

                                     <h5><b>SanDisk Extreme PROu00ae CompactFlash 64gb</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 129.95$</small></li>
                                 </ul>

                                 
                                                          </div>
                         </td>
                        <td>129.95$</td>
                        <td>2015-04-15 21:28:12</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-93"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-order-93" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this order record?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="93" class="btn btn-danger delete-btn delete-order">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><h4><b>user<b/></h4></td>
                        <td>user@domain.com</td>

                         <td>
                                                          <div>
                             

                                     <h5><b>Samsung Galaxy S5</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 550.00$</small></li>
                                 </ul>

                                 
                             

                                     <h5><b>SanDisk Ultra 32gb &#8362;</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: 1</small></li>
                                     <li><small>Price: 25.00$</small></li>
                                 </ul>

                                 
                                                          </div>
                         </td>
                        <td>575$</td>
                        <td>2015-04-15 21:13:54</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-92"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-order-92" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this order record?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="92" class="btn btn-danger delete-btn delete-order">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                
                </tbody>
            </table>
        </div>

    </div>


<?php }} ?>
