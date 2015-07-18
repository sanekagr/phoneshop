<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Categories extends MY_Controller
{

    public $post;

    function __construct()
    {

        parent:: __construct();

        if (!$this->data['is_admin']) {

            redirect('user/login');

        }
        $this->load->library('form_validation');
        $this->load->helper('file');
        $this->load->model('model_cms');
        $this->load->model('model_products');

    }

    /**
     *  view all categories table
     */
    public function index()
    {
        $categories = $this->model_products->getCategories();
        //die_r($categories);

        if(!empty($categories)){

            $this->smarty->assign('feedback',$this->session->flashdata('feedback') );
            $this->data['content']=$this->smarty->load('cms/allCategories',$categories,'categories');

        }else{
            $this->data['content']=$this->smarty->load('cms/allCategories');
        }

       /* breadcrumbs */
        $this->breadcrumbs->unshift('Categories Management', site_url('cms/categories'));
        $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

        $this->load->view('cms/main',$this->data);
    }


    public function add_category(){

        $this->form_validation->set_rules('name','Name','trim|required|xss_clean');


        if ($this->form_validation->run() == false){

                $this->data['content']=$this->load->view('cms/addCategory',null,true);

                /* breadcrumbs */
                $this->breadcrumbs->unshift('Add Category', site_url('cms/categories/add_category'));
                $this->breadcrumbs->unshift('Categories Management', site_url('cms/categories'));
                $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

                $this->load->view('cms/main',$this->data);

        } else {
            //check if admin choose a picture of category
            if( !is_uploaded_file ($_FILES['userfile']['tmp_name']) ) {

                $result=$this->model_cms->addCategory($this->input->post('name'));

                if($result) {
                    $this->session->set_flashdata('message', 'The ' . $this->input->post('name') . ' category was successfully added but without image,<br>
                <small> if you want to add the image later you can do it in the "edit category"</small>!');
                }

            }else {

                $this->do_upload($this->input->post('name'));
                $file_data=$this->upload->data();
                $result=$this->model_cms->addCategory($this->input->post('name'),$file_data['file_name']);
                //die_r($file_data['file_name']);
                if($result) {

                    $this->session->set_flashdata('message', 'The ' . $this->input->post('name') . ' category was successfully added!');
                }
            }

            redirect('cms/categories/add_category');

        }


    }

    /**
     * @param $cat_id - id of category
     */
    public function edit_category($cat_id){

        $id=$this->security->xss_clean($cat_id);
        $category=$this->model_cms->getCategory($id);

        $message=array('flashdata-error'=>$this->session->flashdata('error-message'),'flashdata'=>$this->session->flashdata('message'));
        $form=array('open'=>form_open_multipart(site_url().'cms/categories/edit_category/'.$id, array('id'=>'edit-category-form')), 'close'=>form_close());
        $set_value = array('name' => set_value('name'));


        $cat=array('id'=>$id, 'name'=>$category['name']);
        $this->smarty->assign('set_value', $set_value);
        $this->smarty->assign('cat',$cat);
        $this->smarty->assign('form',$form);
        $this->smarty->assign('message',$message);

        $this->form_validation->set_rules('name','Name','trim|required|xss_clean|min_length[3]');


        if ($this->form_validation->run() == false){

            $this->smarty->assign('validation_errors',validation_errors());
            $this->data['content']=$this->smarty->load('cms/editCategory',null,true);

            /* breadcrumbs */
            $this->breadcrumbs->unshift('Edit Category', site_url('cms/categories/edit_category'));
            $this->breadcrumbs->unshift('Categories Management', site_url('cms/categories'));
            $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

            $this->load->view('cms/main',$this->data);

        } else {

            //check if admin choose a picture of category
            if( !is_uploaded_file ($_FILES['userfile']['tmp_name']) ) {

                $result=$this->model_cms->editCategory($id,$this->input->post('name'));

                if($result) {
                    $this->session->set_flashdata('message', 'The ' . $this->input->post('name') . ' - name of category was successfully edited!');
                }

            }else {
                //upload the picture
                $this->do_upload($this->input->post('name'));

                $file_data=$this->upload->data();
                $result=$this->model_cms->editCategory($id,$this->input->post('name'),$file_data['file_name']);
                if($result) {

                    $this->session->set_flashdata('message', 'The ' . $this->input->post('name') . ' - name and picture of category was successfully edited!');
                }
            }

            redirect('cms/categories/edit_category/'.$id);

        }

    }


    public function delete_category(){

        $id = $this->input->get('id',true);

        if (isset($id)) {

            $this->model_cms->deleteCategory($id);

        }

    }

    /**
     * get the new order of categories
     */

    public function categories_order(){

        $categories=$this->model_products->getCategories();
        //die_r(count($categories));
        $message=array('flashdata-error'=>$this->session->flashdata('error-message'),'flashdata'=>$this->session->flashdata('message'));
        $form=array('open'=>form_open(site_url().'cms/categories/categories_order/', array('id'=>'order-category-form')), 'close'=>form_close());

        //assign variables to template
        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('message',$message);
        $this->smarty->assign('form',$form);

        foreach($categories as $cat) {
            $this->form_validation->set_rules('order-' . $cat['id'], 'Category Place', 'trim|is_natural_no_zero|xss_clean');
        }

        if ($this->form_validation->run() == false){

            foreach($categories as $cat) {
                $set_value[$cat['id']] = set_value('order-' . $cat['id']);

            }
            $this->smarty->assign('set_value',$set_value);

            $this->smarty->assign('validation_errors',validation_errors());
            $this->data['content']=$this->smarty->load('cms/categoriesOrder',null,true);

            /* breadcrumbs */
            $this->breadcrumbs->unshift('Categories Order', site_url('cms/categories/categories_order'));
            $this->breadcrumbs->unshift('Categories Management', site_url('cms/categories'));
            $this->breadcrumbs->unshift('Admin Dashboard', site_url('cms/dashboard') );

            $this->load->view('cms/main',$this->data);

        } else {

            $order=array();

            foreach($categories as $cat) {
                $order['places'][]=$this->input->post('order-'.$cat["id"]);
                $order['ids'][]=$cat["id"];

            }
            $result=$this->model_cms->getNewCategoryOrder($order);

            if($result){

                $this->session->set_flashdata('message', 'The order of categories was edited!');
            }

            redirect('cms/categories/categories_order/');
        }

    }


    /**
     * configuration and processing of image uploading
     * @return mixed - array of data of uploaded image
     */
    private function do_upload($file_name)
    {
        $file_name=strtolower($file_name);
        $file_name=str_replace(array(' ',',',':'),'_',$file_name);

        $config['upload_path'] = './public/img/categories';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '20971520';  // 20 MB
        $config['max_width'] = '7000';
        $config['max_height'] = '7000';
        $config['encrypt_name'] = false;
        $config['file_name'] = $file_name;

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload())

        {
            $this->session->set_flashdata('error-message', $this->upload->display_errors());
            redirect('cms/categories/add_category');
        }

        else
        {
            return $this->upload->data();
        }

    }

}