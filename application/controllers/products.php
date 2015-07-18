<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

    function __construct() {

        parent::__construct();
        $this -> load -> model('model_products');
    }

    public function index($category = null, $products = null) {

        if (is_null($category)) {//show all categories

            /*  breadcrumbs */
            $this->breadcrumbs->unshift('products', site_url('products'));
            $this->breadcrumbs->unshift('Home', site_url('home') );

            $this -> data['title'] = 'Our categories';
            $cat = $this -> model_products -> getCategories();

             $this->data['content']=$this->smarty->load('categories',$cat);
        }
        elseif (!is_null($category) && is_null($products)) {//if category part in the URL and no product number


            $category = $this -> security -> xss_clean($category);
            $this -> data['title'] = $category.'- items';
            $prod = $this -> model_products -> getProducts($category);

            if ($prod) {

                /*  breadcrumbs */
                $this->breadcrumbs->unshift($prod[0]["name"], site_url("products/").$prod[0]['cat_machine']);
                $this->breadcrumbs->unshift('products', site_url('products') );
                $this->breadcrumbs->unshift('Home', site_url('home') );

                $this -> data['title'] = 'Phoneshop - '.  $prod[0]["cat_machine"];
                $this -> data['content']= $this->smarty->load('category',$prod,'category');

            }

        }
        elseif (!is_null($category) && !is_null($products)) {//if category part in the URL and no product number

            $products = $this -> security -> xss_clean($products);
            $item = $this -> model_products -> getItem($products);
            $images=explode(',',$item['images']);
            $images=trim_array($images);

            if ($item) {

                /*  breadcrumbs */
                $this->breadcrumbs->unshift($item["title"], site_url("products/").$item['cat_name'].'/'.$item['machine_name']) ;
                $this->breadcrumbs->unshift($item["cat_title"], site_url("products").'/'.$item['cat_name']) ;
                $this->breadcrumbs->unshift('products', site_url('products') );
                $this->breadcrumbs->unshift('Home', site_url('home') );

                $this->smarty->assign('images',$images);
                $this -> data['title'] ='Phoneshop - '. $item['title'];
                $this -> data['content']= $this->smarty->load('item',$item);
            }

        }

        $this -> load -> view('templates/main', $this -> data);//show the template main
    }



}
