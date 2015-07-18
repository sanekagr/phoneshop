



    <h1 >Thank you {$name}, your order have been saved!</h1>

    <h2>Order details:</h2>

    {foreach $ord as $order}
    <p><strong>
    Item: <a href="{$url}products/{$order.cat_name}/{$order.machine_name}">{$order.name}</a><br>
    Quantity: {$order.qty}<br>
    Price: {$order.price}$<br>
    Subtotal: {$order.subtotal}$<br>
    </p></strong>
    {/foreach}
    <h2>Total: {$total}$</h2>






