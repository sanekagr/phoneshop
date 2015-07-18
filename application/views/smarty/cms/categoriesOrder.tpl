<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Categories Order</h1>
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
        {if isset($categories)}

            <div class="col-xs-8 col-sm-5 col-lg-3">
                {$form.open}
                <table class="table table-condensed">
                    <tbody>
                    <tr class="success">
                        <th class="col-xs-2">Place</th>
                        <th class="col-xs-6"><div style="width:150px;">Category</div></th>
                    </tr>
                    {foreach $categories as $cat}
                        <tr>
                            <td><input type="text" name="order-{$cat.id}" class="form-control" value="{if !$set_value.{$cat.id} or !isset($set_value) or empty($set_value)}{$cat.cat_order}{/if}{$set_value.{$cat.id}}"
                                       style="max-width: 60px;" /></td>
                            <td>{$cat.name}</td>
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
                <br><a href="{$url}cms/categories"><b>Back to Categories Management</b></a>
            </div>
        {else}
            <div class="col-md-12"><h1>No Categories</h1></div>
        {/if}
    </div>


</div>