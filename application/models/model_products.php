<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model
{



    /**
     * return array with all categories
     * @return null
     */
    public function getCategories()
    {
        $categories=null;
        $this->db->order_by("cat_order", "ASC");
        $query = $this->db->get('categories');//SELECT * FROM categories

        if ($query->num_rows() > 0) {

            $categories= $query->result_array();//only result_array() because we need it fo parser

        }

        return $categories;//return array with all categories
    }

    /**
     * @param $category -
     * @return mixed
     */
    public function getProducts($category){
        $products=null;

        $sql="SELECT c. machine_name cat_machine, c.name, p.* FROM products p
			  JOIN  categories c ON c.id=p.categorie_id
		      WHERE c.machine_name=? AND p.visibility=1 ORDER BY p.the_order ASC ";


        $query=$this->db->query($sql,array($category));


        if($query->num_rows()> 0){
            $products=$query->result_array();
        }
        //die_r($products);
        return $products;

    }

    /**
     *  search  products in database
     * @param $input - search input
     * @return search result or null
     */
    public function productSearch($input){

        $results=null;

        $sql="SELECT c.machine_name cat_name, p.* FROM products as p
			  JOIN  categories as c ON c.id=p.categorie_id
		      WHERE visibility=1 AND title REGEXP ? OR description REGEXP ?";

        $query=$this->db->query($sql,array($input,$input));

        if($query->num_rows()> 0){

            $results=$query->result_array();
        }
        //die_r($results);
        return $results;

    }

    /** process a search
     * @param $input -search input
     * @return array|search
     */
    public function productSearch2($input){
        //split search input
        if(strpos($input,',')){
            $search=explode(',', $input);
        }
        elseif(strpos($input,' ')) {
            $search = explode(' ', $input);
        }
        elseif(strpos($input,'.')) {
            $search = explode('.', $input);
        }
        else{
            $search=$input;
            $result=$this->productSearch($search);
            return $result;
        }

        //results processing and merging into one array
        $result=array();
        if(is_array($search)){
            foreach($search as $str){
                if(strlen($str)<=1)continue;
                $str=trim($str);
                if($str) {
                    $result[] = $this->productSearch($str);
                }else{
                    continue;
                }
            }
        }
        //merging the sub-arrays
        $full_results=array();
        foreach($result as $res){
            if($res) {
                $full_results = array_merge($full_results, $res);
            }
        }

        //clean duplicate results
        $json_results=array();
        foreach($full_results as $res){
            $json_results[]=json_encode($res);
        }

        $json_unique_results=array_unique($json_results);

        $unique_results=array();
        foreach($json_unique_results as $res){
            $unique_results[]=(array)json_decode($res);
        }

        //die_r($unique_results);
        return $unique_results;



    }

    /**
     * return all products sorting by category for the home page
     * @return array of all products
     */
    public function getProductsList(){

        $data = array();
        $x = 0;
        $this->db->order_by("cat_order", "ASC");
        $query = $this->db->get('categories');

        if($query->num_rows() > 0){

            foreach ($query->result_array() as $row) {

                $data[$x] = $row;

                //$sql="SELECT *,id AS prod_id FROM products WHERE categorie_id={$row['id']}";
                $sql="SELECT c.id, p.* FROM products p
			          JOIN  categories c ON c.id=p.categorie_id
		              WHERE c.id={$row['id']} AND p.visibility=1 ORDER BY p.the_order ASC ";

                // using alias 'prod_id' because collision with other field 'id'
                $items_query = $this->db->query($sql);
                //die_r($items_query->result_array());

                if($items_query->num_rows() > 0){
                    $y=0;

                    foreach($items_query->result_array() as $sub_row){

                        if($y==4)break;//maximum 4 products in all category
                        $data[$x]['items'][] = $sub_row;
                        $y++;
                    }

                }else{
                    $data[$x]['items']=array();
                }
                $x++;
            }
        }
        //die_r($data);
        return $data;
    }


    /**
     * return data of 1 product from db by machine_name
     * @param $product - machine_name of product
     * @return array with  product data
     */
    public function getItem($product){

        $item=null;

        $sql="SELECT c. machine_name cat_name, c.name cat_title , p.* FROM products p
			  JOIN  categories c ON c.id=p.categorie_id
		      WHERE  p.machine_name=? AND p.visibility=1";

        $query=$this->db->query($sql,array($product));

        if($query->num_rows()>0){

            $item=$query->row_array();
        }

        //die_r($item);
        return $item;

    }

    /**
     * return data of 1 product from db by id
     * @param $id - id of product
     * @return array with  product data
     */
    public function getProduct($id){

        $item=null;

        $sql="SELECT c. machine_name cat_name, c.name cat_title , p.* FROM products p
			  JOIN  categories c ON c.id=p.categorie_id
		      WHERE  p.id=?";

        $query=$this->db->query($sql,array($id));

        if($query->num_rows()>0){

            $item=$query->row_array();
        }

        //die_r($item);
        return $item;

    }

}
