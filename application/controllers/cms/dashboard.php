<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends MY_Controller
{

    public $post;
    public $images_names;
    public $upload_data;

    function __construct()
    {

        parent:: __construct();

        if (!$this->data['is_admin']) {

            redirect('user/login');

        }
        $this->load->library('form_validation');
        $this->load->model('model_cms');
        $this->load->model('model_products');
        $this->load->helper('string');

    }

    /* ----------------------------------------------------- */
    /* -----------------  products management -------------- */
    /* ----------------------------------------------------- */


    /* ----------------    show products    ---------------- */

    /**
     * load the vew of the product management
     */
    public function index()
    {
        //get categories
        $categories = $this->model_products->getCategories();
        $this->smarty->assign('categories', $categories);

         //assign form and flashdata
        $form=array('open'=>form_open(site_url('cms/dashboard/search_products'), array('id'=>'search-products-form','role'=>'search') ), 'close'=>form_close());
        $this->smarty->assign('form', $form);

        //get the products
        $products = $this->model_cms->getProductsList();
        $this->data['content'] = $this->smarty->load('cms/allProducts', $products, 'products');

        /*  breadcrumbs */
        $this->breadcrumbs->push('Admin Dashboard - Products Management', site_url('cms/dashboard'));

        $this->load->view('cms/main', $this->data);
    }

    /**
     * show products by received categorie id
     * @param $cat_id - id of categorie
     */
    public function show_products($cat_id)
    {

        $cat_id = $this->security->xss_clean($cat_id);

        if ($cat_id == 0) {

            redirect('cms/dashboard');

        } else {

            $categories = $this->model_products->getCategories();
            $this->smarty->assign('categories', $categories);


            $form = array('open' => form_open(site_url('cms/dashboard/search_products/'), array('id' => 'add-product-form')), 'close' => form_close());
            $this->smarty->assign('form', $form);

            $products = $this->model_cms->getProductsList($cat_id);
            $this->data['content'] = $this->smarty->load('cms/allProducts', $products, 'products');


        }
        /*  breadcrumbs */
        $this->breadcrumbs->push('Admin Dashboard - Products Management', site_url('cms/dashboard'));

        $this->load->view('cms/main', $this->data);
    }

    /**
     * search product in product management page
     */
    public function search_products(){

        $this->form_validation->set_rules('product-search', 'Search Input', 'trim|required|xss_clean|min_length[2]');

        if ($this->form_validation->run() == false) {

            $this->smarty->assign('validation_errors', validation_errors());

        }else {

            $search_input = $this->input->post('product-search');
            $search_results = $this->model_products->productSearch2($search_input);

            if (!$search_results) {
                $search_results = array();
            }
            //assign to template search result
            $this->smarty->assign('search_results', $search_results);
        }
            //form and flashdata
            $form=array('open'=>form_open(site_url('cms/dashboard/search_products'), array('id'=>'search-products-form','role'=>'search') ), 'close'=>form_close());
            $this->smarty->assign('form', $form);

            //categories
            $categories = $this->model_products->getCategories();
            $this->smarty->assign('categories', $categories);

            //products
            $products = $this->model_cms->getProductsList();
            $this->data['content'] = $this->smarty->load('cms/allProducts',$products,'products');

            /*  breadcrumbs */
            $this->breadcrumbs->push('Admin Dashboard - Products Management', site_url('cms/dashboard'));

            $this->load->view('cms/main', $this->data);

    }

    /* ---------------------------------------------------*/
    /* ---------------  add product ----------------------*/
    /* ---------------------------------------------------*/

    public function add_product()
    {

        $categories = $this->model_products->getCategories();

        //data for the template
        $message = array('flashdata-error' => $this->session->flashdata('error-message'), 'flashdata' => $this->session->flashdata('message'));
        $form = array('open' => form_open_multipart(site_url() . 'cms/dashboard/add_product/', array('id' => 'add-product-form')), 'close' => form_close());

        //assign variables to the template
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('message', $message);
        $this->smarty->assign('form', $form);

        //validation
        $this->form_validation->set_rules('cat_selection', 'Category Selection', 'required|xss_clean|callback_check_category');
        $this->form_validation->set_rules('title', 'Product Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'Product Description', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|xss_clean|numeric|greater_than[0]');
        $this->form_validation->set_rules('visibility', 'Present on site', '');


        if ($this->form_validation->run() == false) {

            //set and assign values into smarty template

            $set_value = array('title' => set_value('title'), 'description' => set_value('description'), 'price' => set_value('price'));

            $this->smarty->assign('set_value', $set_value);
            $this->smarty->assign('validation_errors', validation_errors());
            $this->data['content'] = $this->smarty->load('cms/addProduct', null, true);

            /* breadcrumbs */
            $this->breadcrumbs->unshift('Add Product', site_url('cms/dashboard/addProduct'));
            $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard'));

            $this->load->view('cms/main', $this->data);

        } else {
            //only here the external functions (like trim or md5) will work
            $this->post = $this->input->post();

            //clean a tinymce input by htmlpurifier
            $this->load->helper('htmlpurifier');
            $clean_html = html_entity_decode($this->input->post('description'));
            $clean_html = html_purify($clean_html, 'comment');
            $this->post['description'] = $clean_html;

            //set machine names

            $cat_machine_name = 0;
            foreach ($categories as $cat) {
                if ($cat['id'] == $this->post['cat_selection']) {
                    $cat_machine_name = $cat['machine_name'];
                }
            }

            $prod_machine_name = $cat_machine_name.'-'.random_string('numeric', 4);


            $this->post['machine_name']=$prod_machine_name;//machine name to db
            $this->post['categorie_name']=$cat_machine_name;//for the renaming directory

            //make a directory for the pictures
            @mkdir('./public/img/' . $cat_machine_name . '/' . $prod_machine_name . '/', 0755, true);

            //change the visibility value
            if(isset($this->post['visibility'])){

                $this->post['visibility']=1;

            }else{
                $this->post['visibility']=0;
            }

            //check if main image and/or images uploaded
            $file_check=false;

            foreach($_FILES['userfile']['tmp_name'] as $tmp_name){

                if($tmp_name!=null) {$file_check=true;}
               // echo $tmp_name.'<br>';
            }

            if ( !$file_check) {

                $result = $this->model_cms->addProduct($this->post,'no.jpg');

                if ($result) {
                    $this->session->set_flashdata('message', 'The ' . $this->post['title'] . '  was successfully added but without image,<br>
                <small> if you want add the images later you can do it in the "edit product" section</small>!');
                }

            } else {

                $this->multiple_upload($cat_machine_name, $prod_machine_name);

                //setting image names in the post array -> to db

                //set the main image - first image in string of names or image from first file input
                $first_image=explode(',',$this->images_names);
                $first_image2=trim($first_image[0]);
                $this->post['main_image']=$first_image2;

                //setting the names of all images
                $this->post['images']=$this->images_names;

                //print_r($this->upload_data);

                $result = $this->model_cms->addProduct($this->post);

                if ($result) {

                    $this->session->set_flashdata('message', 'The ' . $this->post['title'] . '  was successfully added!');
                }
            }

            redirect('cms/dashboard/add_product');

        }
    }


    public function delete_product()
    {
        $id = $this->input->get('id',true);

        if (isset($id)) {

            $this->model_cms->deleteProduct($id);

        }

    }

    /**
     * @param $id - id of product
     */
    public function edit_product($id)
    {
        $id=$this->security->xss_clean($id);

        //data for the template
        $message = array('flashdata-error' => $this->session->flashdata('error-message'), 'flashdata' => $this->session->flashdata('message'));
        $this->smarty->assign('message', $message);

        $form = array('open' => form_open(site_url('cms/dashboard/edit_product').'/'.$id, array('id' => 'edit-product-form')), 'close' => form_close());
        $this->smarty->assign('form', $form);

        $categories = $this->model_products->getCategories();
        $this->smarty->assign('categories', $categories);

        $product = $this->model_products->getProduct($id);
        //die_r($product);
        $this->smarty->assign('old_value', $product);

        //validation
        $this->form_validation->set_rules('cat_change', 'Category Change', 'xss_clean');
        $this->form_validation->set_rules('title', 'Product Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('description', 'Product Description', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|xss_clean|numeric|greater_than[0]');
        $this->form_validation->set_rules('visibility', 'Present on site', '');

        if ($this->form_validation->run() == false) {

            //set and assign values into smarty template
            $set_value = array('title' => set_value('title'), 'description' => set_value('description'), 'price' => set_value('price'));
            $this->smarty->assign('set_value', $set_value);
            $this->smarty->assign('validation_errors', validation_errors());

            //show input fields
            $this->data['content'] = $this->smarty->load('cms/editProduct', null, true);
            /* breadcrumbs */
            $this->breadcrumbs->unshift('Edit Product', site_url('cms/dashboard/edit_product/' . $id));
            $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard'));

            $this->load->view('cms/main', $this->data);

        }else{

            $this->post=$this->input->post();
            $this->post['id']=$id;

            //clean a tinymce input by htmlpurifier
            $this->load->helper('htmlpurifier');
            $clean_html = html_entity_decode($this->input->post('description'));
            $clean_html = html_purify($clean_html, 'comment');
            $this->post['description'] = $clean_html;

            $this->post['cat_name'] = $product['cat_name'];
            $this->post['machine_name'] = $product['machine_name'];

            //change the visibility value
            if(isset($this->post['visibility'])){

                $this->post['visibility']=1;

            }else{
                $this->post['visibility']=0;
            }

            $result=$this->model_cms->editProduct($this->post);

            if($result){

                $this->session->set_flashdata('message','The  "'.$this->post['title'].'" was successfully updated!');
            }else{

                $this->session->set_flashdata('error-message','The product was not updated, any technical problem,try later');
            }

            redirect('cms/dashboard/edit_product/'.$id);
        }

    }

    /** show and add images
     * @param $id - of the product
     */
    public function edit_images($id){

        $id=$this->security->xss_clean($id);

        //data for the template
        $message = array( 'flashdata' => $this->session->flashdata('message'), 'error' => $this->session->flashdata('error') );
        $this->smarty->assign('message', $message);

        $form = array('open' => form_open_multipart(site_url('cms/dashboard/edit_images/'.$id) ), 'close' => form_close());
        $this->smarty->assign('form', $form);

        $form2 = array('open' => form_open('',array('id'=>'main-image-choice') ), 'close' => form_close());
        $this->smarty->assign('form2', $form2);


        $product = $this->model_products->getProduct($id);
        //die_r($product);
        $this->post['id']=$product['id'];

        $this->smarty->assign('product', $product);
        //for the other functions
        $this->post=$product;

        //get the array from the names of images
        $images=explode(',',$product['images']);
        $images2=array();
        $images3=array();

        foreach($images as $img){

            $images2[]=trim($img);
        }

        foreach($images2 as $img){
            if($img=='no.jpg')continue;
            $images3[]=$img;
        }

        //die_r($images3);
        $this->smarty->assign('images', $images3);
        //for the other functions
        $this->post['new_images']=$images3;

        //data of images place +id
        $dir_names['category']=$this->post['cat_name'];
        $dir_names['product']=$this->post['machine_name'];
        $dir_names['id']=$this->post['id'];

        /*  ------------------ adding images ----------------- */

        if( isset($_POST['add-submit']) ){

             if(is_uploaded_file($_FILES['userfile']['tmp_name'][0])) {

                 //upload images
                 $this->multiple_upload($this->post['cat_name'], $this->post['machine_name']);
                 //die_r($this->images_names);

                 //insert into db
                 if ($this->post['images'] == 'no.jpg') {

                     $result = $this->model_cms->addImages($dir_names, $this->images_names, 'no.jpg');
                 } else {

                     $result = $this->model_cms->addImages($dir_names, $this->images_names);
                 }

                 if ($result) {

                     $this->session->set_flashdata('message', 'Images/Image were/was successfully added!');
                 } else {

                     $this->session->set_flashdata('error-message', 'Images were not added, any technical problem,try later');
                 }
             }else{
                 $this->session->set_flashdata('error', 'Choose image/images to upload');
             }

            redirect('cms/dashboard/edit_images/'.$id);

        }

        /*  ------------------ delete images ----------------- */

        if(isset($_POST['delete-submit'])){

            //die_r($this->post['new_images']);

            foreach($this->post['new_images'] as $image){

                $this->form_validation->set_rules($image, 'Image', 'xss_clean');
            }

            if ($this->form_validation->run() == false) {

                $this->smarty->assign('validation_errors', validation_errors());

            }else{
                //die_r($this->input->post());

                $del=array();
                foreach($this->input->post() as $key => $val){
                    if($val==null)continue;
                    $del[]=str_replace('_','.',$key);
                }
               //die_r($del);

                if(empty($del)){

                    redirect('cms/dashboard/edit_images/'.$id);

                }else{

                    $result2=$this->model_cms->deleteImages($dir_names,$del);

                }

                if($result2 ){

                    $this->session->set_flashdata('message','Images\Image were\was successfully deleted!');
                }else{

                    $this->session->set_flashdata('error-message','Images were not deleted, any technical problem,try later');
                }

                redirect('cms/dashboard/edit_images/'.$id);

            }


        }

        //show input fields
        $this->data['content'] = $this->smarty->load('cms/editImages', null, true);
        /* breadcrumbs */
        $this->breadcrumbs->unshift('Add/Delete Pictures', site_url('cms/dashboard/edit_images/'. $id));
        $this->breadcrumbs->unshift('Edit Product', site_url('cms/dashboard/edit_product/'. $id));
        $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard'));

        $this->load->view('cms/main', $this->data);

    }

    /**
     * setting main image via ajax
     */
    public function choose_main_image(){

        $this->form_validation->set_rules('main_radio', 'main image choose', 'xss_clean|callback_same_image');
        $this->form_validation->set_rules('id', 'id', 'xss_clean|is_natural_no_zero');

        $this->post['id']=$this->input->post('id');

        if($this->form_validation->run() == false){

            $this->session->set_flashdata('error',validation_errors());

        }else{

            $set=$this->model_cms->setMainImage($this->input->post('id'),$this->input->post('main_radio'));

            if($set) {
                $this->session->set_flashdata('message','Main image was set successfully!');


            }else{
                $this->session->set_flashdata('error','Main image was not set,sorry for interference, try later');
            }

        }

        echo json_encode(true);

    }

    /** set the new order of products in category
     * @param $cat_id category id
     */
        public function products_order($cat_id){

            $cat_id=$this->security->xss_clean($cat_id);

            //data for the template
            $message = array( 'flashdata' => $this->session->flashdata('message'), 'error-message' => $this->session->flashdata('error') );
            $this->smarty->assign('message', $message);

            $form = array('open' => form_open(site_url('cms/dashboard/products_order'.'/'.$cat_id) ), 'close' => form_close());
            $this->smarty->assign('form', $form);

            $products=$this->model_cms->getProductByCatId($cat_id);
            $this->smarty->assign('products', $products);


            foreach($products as $prod) {
                $this->form_validation->set_rules('order-'. $prod['id'], 'product place', 'trim|is_natural_no_zero|xss_clean');
            }

            if ($this->form_validation->run() == false){

                foreach($products as $prod) {
                    $set_value[$prod['id']] = set_value('order-'.$prod['id']);

                }
                $this->smarty->assign('set_value',$set_value);

                $this->smarty->assign('validation_errors',validation_errors());
                $this->data['content']=$this->smarty->load('cms/productsOrder',null,true);

                /* breadcrumbs */
                $this->breadcrumbs->unshift('Products Order', site_url('cms/dashboard/products_order'.$cat_id));
                $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

                $this->load->view('cms/main',$this->data);

            } else {

                $order=array();

                foreach($products as $prod) {
                    $order['places'][]=$this->input->post('order-'.$prod["id"]);
                    $order['ids'][]=$prod["id"];

                }
                $result=$this->model_cms->productsOrder($order);

                if($result){

                    $this->session->set_flashdata('message', 'The order of products was edited!');
                }

                redirect('cms/dashboard/products_order/'.$cat_id);
            }

        }


    /**
     * database backup as zip/sql file
     */
        public function database_backup(){
            // Load the DB utility class
            $this->load->dbutil();

           // Backup your entire database and assign it to a variable
            $filename=date('d-m-Y').'_backup.zip';
            $prefs = array(
                'format'      => 'zip',
                'filename'    => $filename,
            );
            $backup =& $this->dbutil->backup($prefs);

          // Load the file helper and write the file to your server
            $this->load->helper('file');
            write_file('./db/'.$filename, $backup);

          // Load the download helper and send the file to your desktop
            $this->load->helper('download');
            force_download($filename, $backup);
        }


    /* ------------------------------------------------------------------*/
    /* ------------------ secondary functions ---------------------------*/
    /* ------------------------------------------------------------------*/

    /**callback that checks that choosen category
     * @param $cat_id - value recived from select categories category id
     * @return bool
     */
    public function check_category($cat_id)
    {
        if ($cat_id == -1) {

            $this->form_validation->set_message('check_category', 'You must choose category');
            return false;

        } else {
            return true;
        }

    }

    /**
     * @param $name name of main image
     * @return bool - if the same name in db
     */
    public function same_image($name)
    {

        $result=$this->model_cms->checkSameImage($name,$this->post['id']);
        if ($result) {

            $this->form_validation->set_message('same_image', 'This is the same image!');
            return false;

        } else {
            return true;
        }

    }


    /* ------------------ upload files--------------------------- */


    /**upload multiple image
     * @param $cat_name - name of category directory
     * @param $prod_name  name of product directory
     *
     */
    private function multiple_upload($cat_name,$prod_name)
    {

        $all_data=array();
        $name_array=array();
        $errors=array();

        $this->load->library('upload');

        $files = $_FILES;

            $cpt = count($_FILES['userfile']['name']);
            for ($i = 0; $i < $cpt; $i++) {

                $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                $this->upload->initialize($this->set_upload_options($cat_name, $prod_name));
                $this->upload->do_upload();

                $errors[] = $this->upload->display_errors();
                $all_data[] = $this->upload->data();

            }

        foreach($all_data as $data){
            if($data['orig_name']=='' or $data['orig_name']==null)continue;
            $name_array[] = $data['file_name'];
        }

        $names= implode(',', $name_array);
        //save data of the uploads
        $this->images_names =$names;
        $this->upload_data =$all_data;

        //die_r($all_data);

    }

    /**
     * @param $cat_name - name of category directory
     * @param $prod_name  name of product directory
     * @return array - configuration of uploaded files
     */
    private function set_upload_options($cat_name,$prod_name){

        $config =  array(
        'upload_path'     => "./public/img/".$cat_name.'/'.$prod_name.'/',
        'allowed_types'   => "gif|jpg|png|jpe",
        'max_size'        => "20971520",
        'max_height'      => "5000",
        'max_width'       => "5000",
        'file_name'       => random_string('numeric', 5)
    );

        return $config;
    }


    /* ----------------------------------------------------- */
    /* -----------------      Orders       ----------------- */
    /* ----------------------------------------------------- */

    /**
     *  get orders table
     */
    public function orders()
    {

        $orders = $this->model_cms->getOrders();

        //die_r($orders);

        if (count($orders) > 0) {

            $this->data['content'] = $this->smarty->load('cms/orders', $orders, 'orders');

        } else {

            $this->data['content'] = $this->smarty->load('cms/orders');
        }

        /*  breadcrumbs */
        $this->breadcrumbs->unshift('Orders', site_url('cms/dashboard/orders'));
        $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

        $this->load->view('cms/main', $this->data);
    }


    /**
     *  delete single rows and empty table (orders or messages)
     */
    public function delete_table_data()
    {

        $id = $this->input->get('id', true);
        $table= $this->input->get('table', true);

        if ($id == -1) {

            $this->model_cms->delete_table_data($table);

        } else {

            $this->model_cms->delete_table_data($table,$id);
        }

    }


    /* ----------------------------------------------------- */
    /* -----------------        Messages      -------------- */
    /* ----------------------------------------------------- */

    /**
     * get messages table
     */
   public function messages(){

       $messages = $this->model_cms->getMessages();

       //die_r($messages);

       if (count($messages) > 0) {

           $this->data['content'] = $this->smarty->load('cms/messages', $messages, 'messages');

       } else {

           $this->data['content'] = $this->smarty->load('cms/messages');
       }

       /*  breadcrumbs */
       $this->breadcrumbs->unshift('Messages', site_url('cms/dashboard/messages'));
       $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

       $this->load->view('cms/main', $this->data);
   }


}