

    <div class="row">

        <div class="col-sm-12">
            <h1>Orders</h1><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-all-orders">
                <i class="fa fa-trash-o"></i> Delete All Order Records</button>&nbsp;&nbsp;

            <button class="btn btn-success excel-orders" onclick=" window.location='{$url}cms/excel_export/' ">
                <i class="fa fa-file-excel-o"></i> Save to excel file</button>&nbsp;&nbsp;

            <button class="btn btn-success csv-orders" onclick=" window.location='{$url}cms/excel_export/get_csv_report/orders' ">
                <i class="fa fa-file-o"></i> Save to csv file</button>&nbsp;&nbsp;

            <br><br>
            {include file="modal-delete.tpl" item="all order records" data_id="-1" id="modal-delete-all-orders" class="delete-order"}
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

                {* if we have a records *}
                {if !empty($orders)}

                {foreach $orders as $user}

                    <tr>
                        <td><h4><b>{$user.name}<b/></h4></td>
                        <td>{$user.email}</td>

                         <td>
                             {$total = 0 }
                             <div>
                             {foreach $user.order as $order}


                                     <h5><b>{$order->name}</b></h5>
                                 <ul class="order-details">
                                     <li><small>Quantity: {$order->qty}</small></li>
                                     <li><small>Price: {$order->price}$</small></li>
                                 </ul>

                                 {$total=$total+($order->subtotal)}

                             {/foreach}
                             </div>
                         </td>
                        <td>{$total}$</td>
                        <td>{$user.time}</td>
                        <td class="del">
                            <button class="btn btn-danger delete-all-orders" data-toggle="modal"
                                    data-target="#modal-delete-order-{$user.id}"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            {include file="modal-delete.tpl" item="this order record" data_id="{$user.id}" id="modal-delete-order-{$user.id}" class="delete-order"}
                        </td>
                    </tr>

                {/foreach}

                {else}

                    <tr>
                        <td>
                            <h2>No Order Records</h2>
                        </td>
                    </tr>


                {/if}

                </tbody>
            </table>
        </div>{*/.col-sm-12*}

    </div>


