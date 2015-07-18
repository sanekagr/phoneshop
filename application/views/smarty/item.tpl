


    <div class="row">

        <div class="col-sm-12">
            <h2 class="item-h2">{$item.title}</h2><br>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-12 col-md-5">
            <div class="fotorama fotorama-items" data-autoplay="false" data-keyboard="true" data-nav="thumbs"
                 data-allowfullscreen="true" data-maxheight="450" data-fit="scaledown">

                {foreach $images as $image}
                    <img src="{$url}public/img/{$item.cat_name}/{$item.machine_name}/{$image}">
                {/foreach}

            </div>
        </div>

        <div class="col-sm-12 col-md-7 item-cart">

            <h1>{$item.price}$</h1><br>
            <button class="btn btn-default btn-lg add-to-cart" data-id="{$item.id}">Add to cart <i
                        class="fa fa-cart-plus"></i></button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button data-id="{$item.id}" class="btn btn-info btn-lg buy-now">Buy Now</button>
            <p style="margin-top:20px">
                {$item.description}
            </p>

            <p>
                <a href="{$url}products/{$item.cat_name}">Back to all <b>{$item.cat_title}</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button role="link" class="link" onclick="history.go(-1) "><b>Back</b></button>
            </p>

        </div>

    </div>






