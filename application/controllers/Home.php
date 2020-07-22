<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	      function __construct(){

            parent::__construct();

            $this->load->model('app_model');

      }


	
	 public function index()
	{
		$this->load->view('dashboard');
	 }
	public function regis()
	{
		$this->load->view('auth/registrasi');
	}
	public function ceklogin()
	{
		if(isset($_POST['login'])){
			$email = $this->input->post('email',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->app_model->proseslogin($email,$pass);
			$hasil = count((array)$cek);
			if ($hasil > 0) {
				$pelogin = $this->db->get_where('user',array('email' => $email,'password' => $pass))->row(); 
			
		
				 redirect('Home/beranda', $pelogin->email);
			}else{
				redirect('');
			}
		}	
	}
	public function beranda(){
		$this->load->view('auth/beranda');
		
	}
	public function insert(){
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$data = array('nik' => $nik, 'nama' => $nama,'email' => $email,'password' => $password,'telp' => $phone,);
		$tambah = $this->app_model->tambahData('user',$data);
		if($tambah > 0){
			redirect('');
		}else{
			echo "gagal";
		}
	}

	
	public function admin(){
		$this->load->view('admin/login');

		if(isset($_POST['login'])){
			$email = $this->input->post('email',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->app_model->prologin($email,$pass);
			$hasil = count((array)$cek);
			if($hasil > 0){
				$datalogin = $this->db->get_where('petugas', array('email' => $email, 'password' => $pass))->row();
				if($datalogin->level == 'admin'){
					 redirect('Home/dashadmin');
				}elseif($datalogin->level == 'petugas') {
					redirect('Home/dashpetugas');
				}
				
			}
		}
	}

		public function dashadmin(){
		$this->data['hasil'] = $this->app_model->getUser('user');
		$this->data['result'] = $this->app_model->getPetugas('petugas');
		$this->data['pengadu'] = $this->app_model->getPengaduan('pengaduan');
		$this->data['tanggapan'] = $this->app_model->getTanggapan('tanggapan');
	
		$this->load->view('admin/dashboard', $this->data);
	}
	public function dashpetugas(){
		$this->load->view('admin/petugas');
	}

	public function delete($id){
		$hapus= $this->app_model->hapusData('user',$id);
		if($hapus > 0){
			redirect('Home/dashadmin');
		}else{
			echo "gagal";
		}
	}

	public function hapus($id){
		$hapus= $this->app_model->hapus('petugas',$id);
		if($hapus > 0){
			redirect('Home/dashadmin');
		}else{
			echo "gagal";
		}
	}
	public function hapusPengadu($id){
		$hapus= $this->app_model->hapusPengadu('pengaduan',$id);
		if($hapus > 0){
			redirect('Home/dashadmin');
		}else{
			echo "gagal";
		}
	}
	public function form_edit($id){

		$this->data['dataEdit'] = $this->app_model->dataEdit('pengaduan',$id);
		$this->load->view('form-edit', $this->data);
	}
	public function update($id){
		$status = $_POST['status'];
		
		$data = array('status' => $status, );
		$edit = $this->app_model->editData('pengaduan',$data,$id);
		if($edit > 0){
			redirect('Home/dashadmin');
		}else{
			echo "gagal";
		}
	}     

	public function laporanPengaduan(){

			$tgl    = $this->input->post('tgl');
			$nik	= $this->input->post('nik');
			$isi	= $this->input->post('isi');
			$foto	= $_FILES['foto'];
			if ($foto=''){}else{
				$config['upload_path']		='./assets/foto';
				$config['allowed_types']	='jpg|png|gid';

				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "gagal upload";die();
				}else{
					$foto=$this->upload->data('file_name');
				}
			}	 

			$data = array(
				'tgl_pengaduan'		=> $tgl,
				'nik'				=> $nik,
				'isi_laporan'		=> $isi,
				'foto'				=> $foto

			);
			$this->app_model->input_data($data, 'pengaduan');
			redirect('home/beranda');
}

}



  