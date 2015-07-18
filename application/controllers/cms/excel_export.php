<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Excel_export extends MY_Controller
{

    public $post;

    function __construct()
    {
        parent:: __construct();

        if (!$this->data['is_admin']) {

            redirect('user/login');

        }
        //load PHPExcel library
        $this->load->library('Excel');
        $this->load->model('model_cms');

    }

    /**
     * import excel file from orders table
     */
    public function index()
    {
        //get a table
        $results=$this->model_cms->get_order_data();
        //die_r($results);
        if($results) {
            $this->save_excel_file($results['field_names'], $results['fields'], $results['table_data'], 'orders');
        }else {
            //if table empty
            $this->save_excel_file(array('NO ORDER RECORDS'), array(''), array(), 'orders');

        }

    }

    /**
     * import excel file from messages table
     */
    public function messages()
    {
        //get a table
        $results=$this->model_cms->get_messages_data();
        //die_r($results);
        if($results) {
            $this->save_excel_file($results['field_names'], $results['fields'], $results['table_data'], 'messages');
        }else {
            //if table empty
            $this->save_excel_file(array('NO MESSAGES'), array(''), array(), 'messages');

        }

    }

    /**
     * Function for getting excel file by sending parameters
     * @param $field_names - array of Given names of the fields
     * @param $fields - array of names of the fields
     * @param $table_data - array of the data from the table
     * @param $name - name of worksheet and the part of filename
     */
    private function save_excel_file($field_names, $fields, $table_data, $name)
    {
        // Create new PHPExcel object
        $objPHPExcel = new PHPExcel();

        // Set document properties
        $objPHPExcel->getProperties()->setTitle($name)->setDescription("none");

        // Add some data
        $objPHPExcel->setActiveSheetIndex(0);

        // Field names in the first row
        $col = 0;
        foreach ($field_names as $field) {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }

        // Fetching the table data
        $row = 2;
        foreach ($table_data as $data) {
            $col = 0;
            foreach ($fields as $field) {

                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data[$field]);
                $col++;
            }

            $row++;
        }
        //set bold first row
        $ab = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T');//20 letters of the headers of excel columns
        $limit = $ab[count($fields) - 1];
        $objPHPExcel->getActiveSheet()->getStyle("A1:" . $limit . "1")->getFont()->setBold(true);

        $objPHPExcel->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Excel2007)
        //clean the output buffer - necessary
        ob_end_clean();

        //this is the header given from PHPExcel examples. but the output seems somewhat corrupted in some cases.
        //header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        //so, we use this header instead.
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . date('d-m-Y') . '_'.$name.'.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }


    /**
     * download csv file from db
     *
     */

    public function get_csv_report($table_name)
    {
        $table_name=$this->security->xss_clean($table_name);

        $this->load->dbutil();
        $this->load->helper('download');
        /* get the object   */
        $report = $this->db->get($table_name);
        /*  pass it to db utility function  */

        if($report->num_rows()>0) {

            $new_report = $this->dbutil->csv_from_result($report);
            force_download(date('d-m-Y').'_'.$table_name. '.csv', $new_report);
        }else{

            force_download(date('d-m-Y') .'_'.$table_name. '.csv', 'NO RECORDS');
        }

        /*  Done    */
    }


}