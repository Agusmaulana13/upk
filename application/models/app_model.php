<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_Model extends CI_Model {
  // Fungsi untuk menampilkan semua data gambar
  public function view(){
    return $this->db->get('pengaduan')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'deskripsi'=>$this->input->post('input_deskripsi'),
      'nik'=>$this->input->post('input_nik'),
      'nama_file' => $upload['file']['file_name'],
      'ukuran_file' => $upload['file']['file_size'],
      'tipe_file' => $upload['file']['file_type']
    );
    
    $this->db->insert('pengaduan', $data);
  }
  public function proseslogin($email,$pass)
  {
    $this->db->where('email',$email);
    $this->db->where('password',$pass);
    return $this->db->get('user')->row();
  }
  public function getUser($table_name)
  {
    $get_user = $this->db->get($table_name);
    return $get_user->result_array();
  }
  public function getPetugas($table_name)
  {
    $get_petugas = $this->db->get($table_name);
    return $get_petugas->result_array();
  }
  public function getPengaduan($table_name)
  {
    $get_pengaduan = $this->db->get($table_name);
    return $get_pengaduan->result_array();
  }
  public function getTanggapan($table_name)
  {
    $get_tanggapan = $this->db->get($table_name);
    return $get_tanggapan->result_array();
  }
  
  public function tambahdata($table_name,$data){
    $tambah = $this->db->insert($table_name,$data);
    return $tambah;

  }
  
  public function prologin($email,$pass){
    $this->db->where('email', $email);
    $this->db->where('password', $pass);
    return $this->db->get('petugas')->row();
  }

  public function hapus($table_name,$id){
    $this->db->where('id_petugas',$id);
    $hapus = $this->db->delete($table_name);
    return $hapus;
  }
  public function hapusData($table_name,$id){
    $this->db->where('id',$id);
    $hapus = $this->db->delete($table_name);
    return $hapus;
  }
  public function hapusPengadu($table_name,$id){
    $this->db->where('id_pengaduan',$id);
    $hapus = $this->db->delete($table_name);
    return $hapus;
  }
  public function dataEdit($table_name,$id)
  {
    $this->db->where('id_pengaduan',$id);
    $get_user = $this->db->get($table_name);  
    return $get_user->row();
  }

  public function editData($table_name,$data,$id)
  {
    $this->db->where('id_pengaduan',$id);
    $edit = $this->db->update($table_name,$data);
    return $edit;
  }
  

  }

