<?php
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
 
class baak extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data baak
    function index_get() {
        $id_baak = $this->get('id_baak');
        if ($id_baak == '') {
            $baak = $this->db->get('baak')->result();
        } else {
            $this->db->where('id_baak', $id_baak);
            $baak = $this->db->get('baak')->result();
        }
        $this->response($baak, 200);
    }
 
    // insert new data to baak
    function index_post() {
        $data = array(
                    'id_baak'           => $this->post('id_baak'),
                    'nama_baak'          => $this->post('nama_baak'),
                    'email'    => $this->post('email'),
					'telp'    => $this->post('telp'),
                    'alamat'        => $this->post('alamat'));
        $insert = $this->db->insert('baak', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data baak
    function index_put() {
        $id_baak = $this->put('id_baak');
        $data = array(
                    'id_baak'       => $this->put('id_baak'),
                    'nama_baak'      => $this->put('nama_baak'),
                    'email'=> $this->put('email'),
					'telp'=> $this->put('telp'),
                    'alamat'    => $this->put('alamat'));
        $this->db->where('id_baak', $id_baak);
        $update = $this->db->update('baak', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete baak
    function index_delete() {
        $id_baak = $this->delete('id_baak');
        $this->db->where('id_baak', $id_baak);
        $delete = $this->db->delete('baak');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}