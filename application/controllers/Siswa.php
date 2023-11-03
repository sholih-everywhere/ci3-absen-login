<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct() {
        
        parent::__construct();

        //cek session login
        if($this->session->userdata("username") == "") {
            redirect('/login');
        }

    }



    public function index()
    {
       

        //load model
        $this->load->model('m_siswa');

        $data = array(
            'data_siswa' => $this->m_siswa->get_siswa()->result()
        );
        //load view
        $this->load->view('data_siswa', $data);
    }

    public function tambah()
    {
        //load view
        $this->load->view('tambah_siswa');
    }

    public function simpan()
    {
        //load model
        $this->load->model('m_siswa');

        //get data dari form
        $nisn          = $this->input->post('nisn');
        $nama_lengkap    = $this->input->post('nama_lengkap');
        $jabatan    = $this->input->post('jabatan');
        $keterangan    = $this->input->post('keterangan');
        

         $data = array(
            'nisn' => $nisn,
            'nama_lengkap' => $nama_lengkap,
            'jabatan' => $jabatan,
            'keterangan' => $keterangan,
            'jam_masuk' => date("Y-m-d H:i:S"),
            'jam_keluar' => 'Berjalan'
        );

        //insert data via model
        $this->m_siswa->simpan_siswa($data);

        //redirect ke controller siswa
        redirect('siswa');

    }

    public function edit($id)
    {
        //load model 
        $this->load->model('m_siswa');

        //get ID dari URL segment ke 3
        $id = $this->uri->segment(3);

        $data = array(
            'data_siswa' => $this->m_siswa->edit_siswa($id)
        );

        //load view
        $this->load->view('edit_siswa', $data);
    }

    public function update()
    {
        //load model
        $this->load->model('m_siswa');

        //get data dari form
        $id['id'] = $this->input->post("id");
        $nisn             = $this->input->post('nisn');
        $nama_lengkap    = $this->input->post('nama_lengkap');
        $jabatan            = $this->input->post('jabatan');
        $keterangan            = $this->input->post('keterangan');

        $data = array(
            'nisn' => $nisn,
            'nama_lengkap' => $nama_lengkap,
            'jabatan' => $jabatan,
            'keterangan' => $keterangan,
            

        );

        //update via model    
        $this->m_siswa->update_siswa($data, $id);

        //redirect ke controller siswa
        redirect('siswa');
    }

    public function hapusdata($id)
{
    
    $idkendaraan['id'] = $id; 
    
    $this->load->model('m_siswa');

    $this->m_siswa->hapus_kendaraan($idkendaraan);

    redirect('siswa');

}

public function keluar($id)
    {
        //load model
        $this->load->model('m_siswa');
        

        $data = array( 
            'jam_keluar' => date("Y-m-d H:i:S")
        );

        $idaja["id"] = $id;

        
        $this->m_siswa->jamkeluar($data, $idaja);

        
        redirect('siswa');
    }

    public function logout()
    {
        //hapus session
        $this->session->sess_destroy();

        redirect('/login');
    }

}

?>