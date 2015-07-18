<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed' );

class Model_cms extends CI_Model{


    /* --------------------------------------------------------*/
    /* ----------------    Product Management  ----------------*/
    /* --------------------------------------------------------*/

    /**
     * get data of all product
     * @param null $cat_id - id of product
     * @return array of products with category data
     */
    public function getProductsList($cat_id=null){

        $data = array();
        $x = 0;
        $query = $this->db->get('categories');

        if($query->num_rows() > 0){

            if($cat_id){

                    $row=$query->result_array();

                    $data[$x] = $row[$cat_id-1];

                    $sql = "SELECT *,id AS prod_id FROM products WHERE categorie_id={$cat_id} ORDER BY the_order ASC ";
                    // using alias 'prod_id' because collision with other field 'id'
                    $items_query = $this->db->query($sql);

                    if ($items_query->num_rows() > 0) {

                        foreach ($items_query->result_array() as $sub_row) {

                            $data[$x]['items'][] = $sub_row;
                        }

                    } else {

                        $data[$x]['items'] = array();
                    }

            }else {

                foreach ($query->result_array() as $row) {

                    $data[$x] = $row;

                    $sql = "SELECT *,id AS prod_id FROM products WHERE categorie_id={$row['id']}";
                    // using alias 'prod_id' because collision with other field 'id'
                    $items_query = $this->db->query($sql);

                    if ($items_query->num_rows() > 0) {

                        foreach ($items_query->result_array() as $sub_row) {

                            $data[$x]['items'][] = $sub_row;
                        }

                    } else {
                        $data[$x]['items'] = array();
                    }

                    $x++;
                }//foreeach
            }//else
        }

        return $data;
        //die_r($data);

    }
    /**
     * @param $id id of product
     */
    public function deleteProduct($id){

        //find and delete  old image
        $sql="SElECT c.machine_name as cat_name,p.machine_name  prod_name,p.title as title FROM products p JOIN categories c ON p.categorie_id=c.id  WHERE p.id=?";
        $query=$this->db->query($sql, $id);
        $product_data=$query->row_array();

       if($query->num_rows() > 0){

           $sql="DELETE FROM products WHERE id=?";
           $this->db->query($sql,$id);

           if($this->db->affected_rows()>0){

               //delete all images in the  directory
               $this->load->helper('file');
               delete_files('./public/img/'.$product_data['cat_name'].'/'.$product_data['prod_name'].'/',true);
               //remove directory
               @rmdir('./public/img/'.$product_data['cat_name'].'/'.$product_data['prod_name'].'/');

               echo 'The '.$product_data['title'].' was deleted successfully ';

           }
       }
    }

    /**
     * @param $post - inserted data of product
     * @param null $no_jpg - in the case of item without picture
     * @return bool
     */
    public function addProduct($post,$no_jpg=null){
       //die_r($post);
       //insert the values
        if($no_jpg){
            $post['main_image']='no.jpg';
            $post['images']='no.jpg';
        }
        $sql="INSERT INTO products VALUES ('',?,?,?,?,?,?,?,1,?)";
        $this->db->query($sql,array($post['title'],$post['description'],$post['cat_selection'],$post['categorie_name'],$post['main_image'],$post['images'],$post['price'],$post['visibility']));

        if($this->db->affected_rows()>0){

            //receive last id value and insert the machine name
            $sql="SELECT id FROM products ORDER BY id DESC LIMIT 1 ";
            $query=$this->db->query($sql);
            $last_id=$query->row_array();

            $machine_name=$post['categorie_name'].'-'.$last_id['id'];

            $sql="UPDATE products SET machine_name=? WHERE id={$last_id['id']}";
            $this->db->query($sql,$machine_name);

            //rename pictures directory
            if($this->db->affected_rows()>0){
                @rename('./public/img/'.$post['categorie_name'].'/'.$post['machine_name'].'/','./public/img/'.$post['categorie_name'].'/'.$machine_name.'/');
            }

            //copy no.jpg image to the product pictures directory if it hasn't picture
            if($no_jpg){
                @copy('./public/img/no.jpg', './public/img/'.$post['categorie_name'].'/'.$machine_name.'/no.jpg' );
            }

            //get old and insert new order of product
            $sql="SELECT MAX(the_order) FROM products WHERE categorie_id=? ";
            $query=$this->db->query($sql,$post['cat_selection']);
            $order=$query->row_array();
            $new_order=$order['MAX(the_order)']+1;

            $sql="UPDATE products SET the_order={$new_order} WHERE id={$last_id['id']}";
            $this->db->query($sql);

            return true;
        }
        return false;
    }


    /**
     * @param $product - updated product data
     * @return bool
     */
    public function editProduct($product){
        //die_r($product);
        //if category was changed
        if($product['cat_change'] != -1){
            //receive the category machine name from db
            $new_cat=$this->getCategory($product['cat_change']);
            $new_cat_name=$new_cat['machine_name'];
            $new_prod_name=$new_cat['machine_name'].'-'.$product['id'];

            $old_name='./public/img/'.$product['cat_name'].'/'.$product['machine_name'];
            $new_name='./public/img/'.$new_cat_name.'/'.$new_prod_name;

            @rename($old_name,$new_name);

            $data = array(
                'machine_name'=>$new_prod_name,
                'title' => $product['title'],
                'description' => $product['description'],
                'price' => $product['price'],
                'visibility' => $product['visibility'],
                'categorie_id' => $product['cat_change'],
            );

        }else {

            $data = array(
                'title' => $product['title'],
                'description' => $product['description'],
                'price' => $product['price'],
                'visibility' => $product['visibility']
            );
        }

        $this->db->where('id', $product['id']);
        $this->db->update('products', $data);

        if($this->db->affected_rows()>0){

            return true;
        }
        return false;
    }

    /**
     * @param $dir_names - category and machine name +id
     * @param $names - names of inserted images
     * @param null $no_jpg if product hasn't image
     * @return bool
     */
    public function addImages($dir_names,$names,$no_jpg=null){

        if($no_jpg=='no.jpg'){

            $data['images']=$names;
            //set the main image - first image in string of names or image from first file input
            $first_image=explode(',',$names);
            $first_image2=trim($first_image[0]);
            $this->post['main_image']=$first_image2;

            $data['main_image']=$first_image2;
            $data['images']=$names;
            $sql="UPDATE products SET main_image = ?,images = ? WHERE id =? ";
            $this->db->query($sql,array($first_image2,$names,$dir_names['id']));

            @unlink('./public/img/'.$dir_names['category'].'/'.$dir_names['product'].'/no.jpg');

        }else{

            $names=','.$names;
            $sql="UPDATE products SET images = concat(images,?) WHERE id =? ";
            $this->db->query($sql,array($names,$dir_names['id']));

        }

        if($this->db->affected_rows()>0){

            return true;
        }
        return false;
    }

    /**
     * delete choose images
     * @param $dirname array with directory names (category and product) +id
     * @param $del_images - array of image names that must be deleted
     * @return bool
     */
    public function deleteImages($dirname,$del_images){

        $sql="SELECT images FROM products WHERE id=?";
        $query=$this->db->query($sql,$dirname['id']);

        if($query->num_rows()>0){
            $images=$query->row_array();
        }
        $images=explode(',',$images['images']);

        //find image name and delete them

        foreach($del_images as $del){
            foreach($images as $key => $img){

                if($img==$del){
                    $img=null;
                    unset($images[$key]);
                };
            }
        }
        //new string- names of remaining images
        $new_images=implode(',',$images);

        //check the main image - if it hasn't be deleted and if need - update field 'main_image'

        $sql="SELECT main_image FROM products WHERE id=?";
        $query=$this->db->query($sql,$dirname['id']);

        if($query->num_rows()>0){
            $main_image=$query->row_array();
        }
        $main=$main_image['main_image'];

        if(in_array($main,$del_images) and reset($images)!=false){

            $data['main_image']= reset($images);
            $this->db->where('id', $dirname['id']);
            $this->db->update('products', $data);
        }

        //update field 'images'
        $data['images']= $new_images;
        $this->db->where('id', $dirname['id']);
        $this->db->update('products', $data);

        if($this->db->affected_rows()>0){

            //check if images field remains empty
            if($this->images_empty($dirname['id'])){

                $data['images']= 'no.jpg';
                $data['main_image']= 'no.jpg';
                $this->db->where('id', $dirname['id']);
                $this->db->update('products', $data);

                if($this->db->affected_rows()>0){
                    @copy('./public/img/no.jpg', './public/img/'.$dirname['category'].'/'.$dirname['product'].'/no.jpg' );
                }
            }
            //delete images from server
            foreach($del_images as $del){
                @unlink('./public/img/'.$dirname['category'].'/'.$dirname['product'].'/'.$del);
            }

           return true;
        }

        return false;

    }

    /** check if images field empty
     * @param $id id of product
     * @return bool
     */
    private function images_empty($id){

        $sql="SELECT images FROM products WHERE id=?";
        $query=$this->db->query($sql,$id);

        if($query->num_rows()>0){
            $images=$query->row_array();
        }
        //die_r($images);

        //if no records in images field
        if($images['images']==''){
            return true;
        }
        return false;
    }

    /**set main image
     * @param $id - id of product
     * @param $name - the new name of main image
     * @return bool
     */
    public function setMainImage($id,$name){

        $sql="UPDATE products SET main_image=? WHERE id=?";
        $this->db->query($sql,array($name,$id));

        if($this->db->affected_rows()>0){
            return true;
        }

        return false;
    }

    /**
     * checks if the same name of main image inserted
     * @param $name name of chuse main image
     * @param $id id of product
     * @return bool
     */
    public function checkSameImage($name,$id){

        $sql="SELECT main_image FROM products WHERE id=?";
        $query=$this->db->query($sql,array($id));
        $old_name=$query->row_array();

        if($name==$old_name['main_image']){

            return true;
        }
        return false;
}

    /** get the products by cat id
     * @param $cat_id categorie id
     * @return null
     */
    public function getProductByCatId($cat_id){

        $products=null;

        $sql="SELECT id,title,the_order FROM products WHERE categorie_id=? ORDER BY the_order ASC";
        $query=$this->db->query($sql,$cat_id);

        if($query->num_rows()>0){

            $products=$query->result_array();
        }

        return $products;

    }

    /**set new order of products
     * @param $order array with new order of products
     * @return bool
     */
    public function productsOrder($order){
        for($i=0;$i < count($order['ids']);$i++){

            $data=array('the_order' => $order['places'][$i]);
            $this->db->where('id', $order['ids'][$i]);
            $this->db->update('products', $data);
        }

        if($this->db->affected_rows()>0){
            return true;
        }

        return false;

    }



    /* --------------------------------------------------------*/
    /* ----------------  categories -------------------------*/
    /* --------------------------------------------------------*/

    /**
     * @param $id -category $id
     * @return bool
     */
    public function deleteCategory($id){

        //find and delete  old image
        $sql_old="SElECT image,machine_name FROM categories WHERE id=?";
        $query=$this->db->query($sql_old, $id);
        $old_file_name=$query->row_array();

        $sql="DELETE FROM categories WHERE id=?";
        $this->db->query($sql,array($id) );

        if($this->db->affected_rows()>0){

            //if we find old image delete it
            if($old_file_name['image']!=null && $old_file_name['machine_name']!=null ){

                //if its category without image
                if($old_file_name['image']!='no.jpg') {

                    @unlink('./public/img/categories/' . $old_file_name['image']);
                }
                //delete all images inside the category directory
                $this->load->helper('file');
                delete_files('./public/img/'.$old_file_name['machine_name'].'/',true);
                //remove directory
                @rmdir('./public/img/'.$old_file_name['machine_name'].'/');
            }

             $this->session->set_flashdata('feedback','Category was deleted!');
             return true;
        }
        return false;

    }

    /**
     * get category by id
     * @param $id - category id
     * @return null
     */
    public function getCategory($id){

        $categories=null;

        $sql="SELECT * FROM categories WHERE id={$id}";

        $query=$this->db->query($sql);

        if($query->num_rows() > 0){

            $categories=$query->row_array();

        }
        //die_r($categories);
        return $categories;
    }

    /**
     * Add new category
     * @param $name - name of category
     * @param null $file_name - name of the file
     * @return bool
     */
    public function addCategory($name,$file_name=null){

        if($file_name!=null){

            $image_name=$file_name;

        }else{

            $image_name='no.jpg';
        }

        $machine_name=strtolower($name);
        $machine_name=str_replace(array(' ',',',':'),'_',$machine_name);

        //get and insert the the order of category
        $sql="SELECT MAX(cat_order) FROM categories";
        $query=$this->db->query($sql);
        $order=$query->row_array();
        $new_order=$order['MAX(cat_order)']+1;

        $sql="INSERT INTO categories VALUES ('',?,?,?,{$new_order})";
        $this->db->query($sql,array($name,$image_name,$machine_name) );

        if($this->db->affected_rows()>0){

            @mkdir('./public/img/'.$machine_name.'/', 0755, true);

            return true;
        }


        return false;

    }

    /**
     * edit category
     * @param $id - id of the category
     * @param $name - category name
     * @param $file_name - image file
     * @return bool
     */
    public function editCategory($id,$name,$file_name=null){

        $machine_name=strtolower($name);
        $machine_name=str_replace(' ','_',$machine_name);

        //find and delete old image
        $sql_old="SElECT image,machine_name FROM categories WHERE id=?";
        $query=$this->db->query($sql_old, $id);

        $old_file_name=$query->row_array();
        //die_r($old_file_name);

        if($file_name!=null) {

            //if we find old image
            if($old_file_name['image']!=null){

                @unlink('./public/img/categories/'.$old_file_name['image']);
            }

            //update the fields
            $sql = "UPDATE categories SET name=?,image=?,machine_name=? WHERE id=?";

            $this->db->query($sql, array($name, $file_name, $machine_name, $id));
        }else{
            $sql = "UPDATE categories SET name=?,machine_name=? WHERE id=?";

            $this->db->query($sql, array($name, $machine_name, $id));
        }

        if($this->db->affected_rows()>0){

            //renames a images directory
             @rename('./public/img/'.$old_file_name['machine_name'].'/','./public/img/'.$machine_name.'/');

             return true;
        }

        return false;
    }


    /**get the new order of categories by special category place
     * @param $category array of id's and category order parameters
     * @return bool
     */
    public function getNewCategoryOrder($category){

        for($i=0;$i < count($category['ids']);$i++){

            $data=array('cat_order' => $category['places'][$i]);
            $this->db->where('id', $category['ids'][$i]);
            $this->db->update('categories', $data);
        }

       if($this->db->affected_rows()>0){
           return true;
       }

         return false;
        //die_r($category);
    }


    /* --------------------------------------------------------*/
    /* ----------------     orders    -------------------------*/
    /* --------------------------------------------------------*/

    /**
     * @return array of all order records
     */
    public function getOrders(){

        $orders = array();

        $sql = "SELECT * FROM orders  ORDER BY time DESC";

        $query = $this->db->query($sql);


        if($query->num_rows() > 0){

            foreach($query->result_array() as  $row){

                if($row['order']){

                    $row['order']=json_decode($row['order']);
                }

                $orders[] = $row;
            }

        }

        return $orders;
    }

    /**
     * @param null $id - id of record
     * @return bool  - sucess of operation
     */
    public function delete_table_data($table,$id=null){

        if($id!=null){

            $this->db->where('id',$id);
            $this->db->delete($table);
        }else{

            $this->db->empty_table($table);
        }

        if($this->db->affected_rows()>0){

            return true;
        }
        return false;
    }


    /* --------------------------------------------------------*/
    /* ----------------     Messages  -------------------------*/
    /* --------------------------------------------------------*/


    /**
     * @return array of messages
     */
    public function getMessages(){

        $messages = array();

        $sql = "SELECT * FROM contact_log  ORDER BY date DESC";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0){

            foreach($query->result_array() as  $row){

                $messages[] = $row;
            }

        }

        return $messages;
    }


    /* --------------------------------------------------------*/
    /* ----------------    Excel Import  ---------------------*/
    /* --------------------------------------------------------*/


    /**
     * get data from order table
     * @return bool - if returned false - empty table
     * @return array - data from table
     */
    public function get_order_data()
    {
        //get a table
        $query = $this->db->get('orders');
        //if table is empty
        if ($query->num_rows()==0) {
            return false;
        }
        $results = $query->result_array();

        $new_results = array();
        $i = 0;
        foreach ($results as $array) {

            foreach ($array as $key => $data) {
                $new_results[$i][$key] = $data;
                if ($key == 'order') {
                    $order=$this->decoded_order_details($data);
                    $new_results[$i]['total'] = $order['total'];
                    $new_results[$i]['order'] = $order['order_details'];
                }
            }
            $i++;

        }

        $table_output['fields'] = array();
        foreach ($new_results[0] as $key => $data) {
            $table_output['fields'][] = $key;
        }

        //die_r($new_results);
        $table_output['field_names'] = array('id', 'Name', 'Email', 'User ID', 'Order Details', 'Total ($)', 'Time');
        $table_output['table_data']=$new_results;

        return $table_output;

    }

    /** process on the json string, output of total order sum
     * @param $input - json string of order details
     * @return mixed|string - decoded, processed string string
     */
    private function decoded_order_details($input)
    {

        $decoded = json_decode($input);
        $new = array();

        $i = 0;
        $total = 0;
        foreach ($decoded as $data) {

            foreach ($data as $key => $new_data) {
                if ($key == 'rowid' || $key == 'cat_name' || $key == 'machine_name') continue;
                if ($key == 'subtotal') {
                    $total += $new_data;
                };
                $new[$i][$key] = $new_data;
            }
            $i++;

        }

        $new_string = json_encode($new);
        $new_string = str_replace('},{', ' || ', $new_string);
        $search = array('{', '[', ']', '}','"');
        $new_string = str_replace($search,' ', $new_string);
        $output['order_details'] = trim($new_string);
        $output['total'] = $total;
        //die_r($output);
        return $output;

    }

    /**
     * get data from order table
     * @return bool - if returned false - empty table
     * @return array - data from table
     */
    public function get_messages_data()
    {
        //get a table
        $query = $this->db->get('contact_log');
        //if table is empty
        if ($query->num_rows()==0){
            return false;
        }
        $results = $query->result_array();

        $table_output['fields'] = array();
        foreach ($results[0] as $key => $data) {
            $table_output['fields'][] = $key;
        }

        $table_output['field_names'] = $table_output['fields'];
        $table_output['table_data']=$results;

        return $table_output;

    }




}
