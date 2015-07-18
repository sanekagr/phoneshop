

    <div class="row">

        <div class="col-sm-12">
            <h1>Messages</h1><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-all-messages">
                <i class="fa fa-trash-o"></i> Delete All Messages</button>&nbsp;&nbsp;

            <button class="btn btn-success excel-orders" onclick=" window.location='{$url}cms/excel_export/messages' ">
                <i class="fa fa-file-excel-o"></i> Save to excel file</button>&nbsp;&nbsp;

            <button class="btn btn-success csv-orders" onclick=" window.location='{$url}cms/excel_export/get_csv_report/contact_log' ">
                <i class="fa fa-file-o"></i> Save to csv file</button>&nbsp;&nbsp;
            <br><br>
            {include file="modal-delete.tpl" item="all messages" data_id="-1" id="modal-delete-all-messages" class="delete-message"}
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

                {* if we have a records *}
                {if !empty($messages)}

                {foreach $messages as $mes}

                    <tr>
                        <td><b>{$mes.name}<b/></td>
                        <td>{$mes.email}</td>
                        <td>{$mes.phone}</td>
                        <td>{$mes.subject}</td>
                        <td ><div>{$mes.message}</div></td>
                        <td>{$mes.date}</td>
                        <td>
                            <button class="btn btn-default" data-toggle="modal"
                                    data-target="#modal-view-message-{$mes.id}"><i
                                        class="fa fa fa-eye"></i> View
                            </button>
                            {include file="modal-view.tpl" name="{$mes.name}" date="{$mes.date}" message="{$mes.message}" id="modal-view-message-{$mes.id}" class="delete-message"}
                        </td>
                        <td class="del">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-delete-message-{$mes.id}"><i
                                        class="fa fa-trash-o"></i> Delete
                            </button>
                            {include file="modal-delete.tpl" item="this message" data_id="{$mes.id}" id="modal-delete-message-{$mes.id}" class="delete-message"}
                        </td>
                    </tr>

                {/foreach}

                {else}

                    <tr>
                        <td>
                            <h2>No Messages</h2>
                        </td>
                    </tr>


                {/if}

                </tbody>
            </table>
        </div>{*/.col-sm-12*}

    </div>


