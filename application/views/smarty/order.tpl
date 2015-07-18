
<div class="container">
    <div class="row order">

        <div class="col-sm-12">
            <h1 class="bg-primary text-center" >Thank you {$name}, your order have been saved!</h1>
            <div class="col-sm-6">
                <h2>Order details:</h2>
                {foreach $ord as $order}
                <p><strong>
                Item: <a href="{$url}products/{$order.cat_name}/{$order.machine_name}">{$order.name}</a><br>
                Quantity: {$order.qty}<br>
                Price: {$order.price}$<br>
                Subtotal: {$order.subtotal}$<br>
                </p></strong>
                {/foreach}
                <h3>Total: {$total}$</h3>
                <div>
                    <a href="{$url}products/">Continue Shopping</a>
                </div>

            </div>
        </div>
    </div>


</div>
