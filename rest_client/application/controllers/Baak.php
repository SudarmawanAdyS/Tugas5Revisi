<?php
Class baak extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://sudrmwn.000webhostapp.com/server/server/index.php";
    }
    
    // menampilkan data baak
    function index(){
        $data['baak'] = json_decode($this->curl->simple_get($this->API.'/baak'));
        $this->load->view('baak/list',$data);
    }
    
    // insert data baak
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_baak'       =>  $this->input->post('id_baak'),
                'nama_baak'      =>  $this->input->post('nama_baak'),
                'email'=>  $this->input->post('email'),
				'telp'=>  $this->input->post('telp'),
                'alamat'    =>  $this->input->post('alamat'));
            $insert =  $this->curl->simple_post($this->API.'/baak', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('baak');
        }else{
            $data['email'] = json_decode($this->curl->simple_get($this->API.'/email'));
            $this->load->view('baak/create',$data);
        }
    }
    
    // edit data baak
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_baak'       =>  $this->input->post('id_baak'),
                'nama_baak'      =>  $this->input->post('nama_baak'),
                'email'=>  $this->input->post('email'),
				'telp'=>  $this->input->post('telp'),
                'alamat'    =>  $this->input->post('alamat'));
            $update =  $this->curl->simple_put($this->API.'/baak', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('baak');
        }else{
            $data['email'] = json_decode($this->curl->simple_get($this->API.'/email'));
            $params = array('id_baak'=>  $this->uri->segment(3));
            $data['baak'] = json_decode($this->curl->simple_get($this->API.'/baak',$params));
            $this->load->view('baak/edit',$data);
        }
    }
    
    // delete data baak
    function delete($id_baak){
        if(empty($id_baak)){
            redirect('baak');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/baak', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('baak');
        }
    }
}