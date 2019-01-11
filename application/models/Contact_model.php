<?php
/**
 * Created by PhpStorm.
 * User: TINHLAM
 * Date: 1/9/2019
 * Time: 12:21 AM
 */
class Contact_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getContacts()
    {
        $query = $this->db->get('contacts', 20);
        return $query->result();
    }
    public function getContact($id)
    {
        $query = $this->db->get_where('contacts', array('id'=>$id));
        return $query->first_row(); // chỉ lấy bản ghi đầu tiên
    }

    public function addContact($data = array())
    {
        $insert = $this->db->insert('contacts', $data);
        if ($insert) {
            return $this->db->insert_id(); // trả về id mới, nếu insert thành công
        }
        else {
            return false; // trả về false nếu insert thất bại
        }
    }

    public function updateContact($data = array(), $id)
    {
        $update = $this->db->update('contacts', $data, array('id'=>$id));
        return $update ? true : false; // trả về true nếu update thành công và ngược lại
    }

    public function deleteContact($id)
    {
        $delete = $this->db->delete('contacts', array('id'=>$id));
        return $delete ? true : false; // trả về true nếu delete thành công và ngược lại
    }
}