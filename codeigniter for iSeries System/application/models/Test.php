<?php

/**
 * Created by PhpStorm.
 * User: hcurbelo
 * Date: 11/14/2017
 * Time: 8:28 PM
 */
class Test extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendSql()
    {
        /*$query = $this->db->get('TESTCUST.F56SSD');
        $query= $this->db->get_where('TESTCUST.F56SSD', array('SSDOCO' => '3957680'));
        return $query->result();
        $query = $this->db->query('SELECT SS@SDR FROM TESTCUST.F56SSD FETCH FIRST 10 ROWS ONLY');
        $row = $query->row_array();
        var_dump($row) ;
        //$query = $this->db->get('F56SSD');

        foreach ($query->result() as $row)
        {
            echo $row->SSDOCO;
        }*/
        /* $data = array('SS@MD' =>'ELECTRA');
        $this->db->where('SSDOCO', '3953924');
        $this->db->update('F56SSD', $data);*/

       $data = array(
            'CTURRF' => 'HECTOR T',
            'CTLITM' => 'HECTOR A',
       );

        if($this->db->insert('F56JRICT', $data))
        {
            return $data;
        }
        else
        {
            return false;
        }
    }
}