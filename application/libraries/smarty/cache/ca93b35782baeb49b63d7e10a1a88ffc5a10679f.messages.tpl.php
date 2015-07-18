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
    'f6c749e39640534dae34750e1556ddb5f453c613' => 
    array (
      0 => 'application\\views\\smarty\\modal-delete.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
    'f5dc38b7cf2f8d2925f55dfb36c72869d4a2a63b' => 
    array (
      0 => 'application\\views\\smarty\\modal-view.tpl',
      1 => 1429201455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2615555aa409c9cf7e4-69002052',
  'variables' => 
  array (
    'url' => 0,
    'messages' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55aa409caa46f8_38349904',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa409caa46f8_38349904')) {function content_55aa409caa46f8_38349904($_smarty_tpl) {?>
    <div class="row">

        <div class="col-sm-12">
            <h1>Messages</h1><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-all-messages">
                <i class="fa fa-trash-o"></i> Delete All Messages</button>&nbsp;&nbsp;

            <button class="btn btn-success excel-orders" onclick=" window.location='http://localhost/phoneshop/cms/excel_export/messages' ">
                <i class="fa fa-file-excel-o"></i> Save to excel file</button>&nbsp;&nbsp;

            <button class="btn btn-success csv-orders" onclick=" window.location='http://localhost/phoneshop/cms/excel_export/get_csv_report/contact_log' ">
                <i class="fa fa-file-o"></i> Save to csv file</button>&nbsp;&nbsp;
            <br><br>
            
<div class="modal fade" id="modal-delete-all-messages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete all messages?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="-1" class="btn btn-danger delete-btn delete-message">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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

                
                
                
                    <tr>
                        <td><b>suchok<b/></td>
                        <td>sanekagr@walla.com</td>
                        <td></td>
                        <td>General question</td>
                        <td ><div>aasasas</div></td>
                        <td>2015-04-24 17:08:43</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-68"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            
<div class="modal fade" id="modal-view-message-68" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 style="text-align: center;">Message from suchok by date: 2015-04-24 17:08:43</h3>
        <p>
            aasasas
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-68"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-message-68" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this message?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="68" class="btn btn-danger delete-btn delete-message">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><b>suchok<b/></td>
                        <td>sanekagr@walla.com</td>
                        <td></td>
                        <td>General question</td>
                        <td ><div>asaasasasa</div></td>
                        <td>2015-04-24 17:06:03</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-67"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            
<div class="modal fade" id="modal-view-message-67" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 style="text-align: center;">Message from suchok by date: 2015-04-24 17:06:03</h3>
        <p>
            asaasasasa
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-67"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-message-67" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this message?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="67" class="btn btn-danger delete-btn delete-message">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><b>suchok<b/></td>
                        <td>sanekagr@walla.com</td>
                        <td></td>
                        <td>General question</td>
                        <td ><div>gnida</div></td>
                        <td>2015-04-24 17:02:53</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-66"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            
<div class="modal fade" id="modal-view-message-66" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 style="text-align: center;">Message from suchok by date: 2015-04-24 17:02:53</h3>
        <p>
            gnida
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-66"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-message-66" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this message?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="66" class="btn btn-danger delete-btn delete-message">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><b>Karina Popov<b/></td>
                        <td>sanekagr@gmail.com</td>
                        <td></td>
                        <td>General question</td>
                        <td ><div>Message:  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div></td>
                        <td>2015-04-11 15:05:45</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-64"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            
<div class="modal fade" id="modal-view-message-64" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 style="text-align: center;">Message from Karina Popov by date: 2015-04-11 15:05:45</h3>
        <p>
            Message:  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-64"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-message-64" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this message?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="64" class="btn btn-danger delete-btn delete-message">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                    </tr>

                
                    <tr>
                        <td><b>stam<b/></td>
                        <td>sanekagr@walla.com</td>
                        <td>+972508777105</td>
                        <td>General question</td>
                        <td ><div>Message:  
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div></td>
                        <td>2015-04-11 15:05:24</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-63"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            
<div class="modal fade" id="modal-view-message-63" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #E0E0E0;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 style="text-align: center;">Message from stam by date: 2015-04-11 15:05:24</h3>
        <p>
            Message:  
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-63"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            
<div class="modal fade" id="modal-delete-message-63" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#E0E0E0; opacity: 0.9;">
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 style="color:red;text-align: center;">Are you sure that you want to delete this message?</h2>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" data-id="63" class="btn btn-danger delete-btn delete-message">Yes</button>
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
