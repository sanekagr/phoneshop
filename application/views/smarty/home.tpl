</div>{* /.container*}

<div class="container-fluid">

    <div class="row">

        <div class="fotorama fotorama-home" data-width="100%" data-ratio="2.74" data-autoplay="6000" data-keyboard="true"
             data-transition="crossfade" data-loop="true" data-fit="contain" data-nav="false">

            <img src="{$url}public/img/carousel_home/1.1.jpg" data-caption=" <div class='caption'><a href='products/tablets' ><h1>Buy Tablets</h1></a></div>">
            <img src="{$url}public/img/carousel_home/2.1.jpg" data-caption=" <div class='caption'><a href='products/cameras' ><h1>Buy Cameras</h1></a></div> ">
            <img src="{$url}public/img/carousel_home/3.jpg" data-caption=" <div class='caption'><a href='products/phones' ><h1>Buy Cell Phones</h1></a></div> ">
            <img src="{$url}public/img/carousel_home/4.jpg" data-caption=" <div class='caption'><h1>We have the best prices</h1></div> ">
            <img src="{$url}public/img/carousel_home/5.jpg" data-caption=" <div class='caption'><h1>And good reputation</h1></div> ">
            <img src="{$url}public/img/carousel_home/6.jpg" data-caption=" <div class='caption'><h1>No problems with warranty</h1></div> ">
            <img src="{$url}public/img/carousel_home/7.jpg" data-caption=" <div class='caption'><h1>We are working for you!</h1></div> ">
            <img src="{$url}public/img/carousel_home/8.jpg" data-caption=" <div class='caption'><a href='products/tablets/tablets-3' ><h1>Ipad Air 2 16gb only 499$</h1></a></div> ">
            <img src="{$url}public/img/carousel_home/9.jpg" data-caption=" <div class='caption'><a href='products/tablets/tablets-4' ><h1>iPad Mini 3 16gb only 399$</h1></a></div> ">
            <img src="{$url}public/img/carousel_home/10.jpg" data-caption=" <div class='caption'><a href='products/cameras/cameras-74' ><h1>The new Samsung NX1 - 1499$</h1></a></div> ">
            <img src="{$url}public/img/carousel_home/11.jpg" data-caption=" <div class='caption'><a href='products/phones/phones-1' ><h1>iPhone 6 16gb - 699$</h1></a></div> ">

        </div>

        <div id="m1" class="marquee hidden-xs">
            <span class="h1-home">
                Phoneshop - The best cell phones, tablets, cameras and other devices at a good price,
                good service and warranty. We are working for you! Call 1700-000-000!
            </span>
        </div>
        <!--/.hidden-xs-->

    </div>{* /.row*}

</div>{*/.container-fluid*}

<div class="container">

    {foreach $products as $cat}

        {if $cat.items==null}
            {* skip this iteration if no products in the category *}
            {continue}
        {/if}

        <div class="row category_cart">

            <div class="col-sm-12" style="margin-top: 0;"><a href="{$url}products/{$cat.machine_name}">
                    <h1 class="hidden-xs">{$cat.name}</h1>
                    <h3 class="visible-xs-inline-block"><b>{$cat.name}</b></h3>
                </a>
            </div>

            {foreach $cat.items as $prod}
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 product_cart">

                    <div class="title">
                        <a href="{$url}products/{$cat.machine_name}/{$prod.machine_name}">
                            <h4 class="text-center"><b>{$prod.title}</b></h4></a>
                    </div>
                    <a href="{$url}products/{$cat.machine_name}/{$prod.machine_name}">
                        <img class="center-block img"
                             src="{$url}public/img/{$cat.machine_name}/{$prod.machine_name}/{$prod.main_image}"
                             alt="{$prod.title}"/>
                    </a>

                    <h4>{$prod.price}$</h4>
                    <button class="btn btn-primary btn-sm add-to-cart" data-id="{$prod.id}">add to cart <i
                                class="fa fa-cart-plus"></i></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{$url}products/{$cat.machine_name}/{$prod.machine_name}">
                        <button class="btn btn-primary btn-sm hidden-sm hidden-xs pull-right">Read more</button>
                    </a>

                </div>
            {/foreach}

        </div>
        <!--/.row-->

    {/foreach}


