<?php
/**
 * Created by PhpStorm.
 * User: TINHLAM
 * Date: 1/8/2019
 * Time: 11:19 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');


    }

    public function index()
    {

        $data['contacts'] = $this->contact_model->getContacts();
        $this->load->view('contact_list', $data);
    }
    public function add()
    {
        $this->load->view('contact_add');
    }

    public function edit($id )
    {
        $data['contact_item'] = $this->contact_model->getContact($id);
        $this->load->view('contact_edit', $data);
    }
    /**
     * Hàm thực hiện việc lưu thông tin vào db
     * $id = 0 : trong trường hợp thêm mới
     * $id != 0: trong trường hợp cập nhật dữ liệu
     */
    public function save($id=0)
    {
        $postData = array(
            'name' => $this->input->post('name'),
            'phone1' => $this->input->post('phone1'),

        );

        if ($id == 0) // thêm mới
            $this->contact_model->addContact($postData);
        else // cập nhật
            $this->contact_model->updateContact($postData, $id);

        redirect(base_url('/'));
    }
    public function del($id)
    {
        $this->contact_model->deleteContact($id);
        echo 'success';
    }
}