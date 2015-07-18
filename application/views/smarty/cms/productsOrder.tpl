<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Products Order</h1>
            {* ---------------- messages divs  ----------------- *}

            {if $message.flashdata}
                <div class="message-success">{$message.flashdata}</div>
            {/if}
            {if $message.flashdata-error}
                <div class="error-display ">{$message.flashdata-error}</div>
            {/if}
            {if isset($validation_errors)}
                <div class="error-display ">{$validation_errors}</div>
            {/if}
        </div>

    </div>

    <div class="row">
        {if isset($products)}

            <div class="col-xs-12 col-sm-12 col-md-6">

                {$form.open}
                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:200px;">Product</div></th>
                    </tr>
                    {foreach $products as $prod}
                        <tr>
                            <td><input type="text" name="order-{$prod.id}" class="form-control" value="{if !$set_value.{$prod.id} or !isset($set_value) or empty($set_value)}{$prod.the_order}{/if}{$set_value.{$prod.id}}" style="max-width: 60px;"
                                       /></td>
                            <td>{$prod.title}</td>
                        </tr>
                    {/foreach}

                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 col-sm-12">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
            </div>
            {$form.close}

            <div class="col-sm-12">
                <br><a href="{$url}cms/dashboard/edit_product/{$prod.id}"><b>Back to edit product section</b></a>
            </div>
        {else}
            <div class="col-sm-12"><h1>No Products in category</h1></div>
        {/if}
    </div>


</div>