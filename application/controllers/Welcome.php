<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data );
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataKelas()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_kelas=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('kelas','id_kelas',$id_kelas)->row();
			$data['detail']['id_kelas']= $tampil->id_kelas;
            		$data['detail']['nama_kelas']= $tampil->nama_kelas;
            		$data['detail']['id_kk']= $tampil->id_kk;
			$data['content']='VFormUpdateKelas';
		}
		else
		{	
			$data['DataKelas']=$this->MSudi->GetData('kelas');
			$data['content']='VKelas';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKelas()
	{
		$data['content']='VFormAddKelas';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKelas()
	{
		 $add['id_kelas']=$this->input->post('id_kelas');
         	 $add['nama_kelas']= $this->input->post('nama_kelas');
         	 $add['id_kk']= $this->input->post('id_kk');  
        	 $this->MSudi->AddData('kelas',$add);
        	 redirect(site_url('Welcome/DataKelas'));
	}



	public function UpdateDataKelas()
	{
		 $id_kelas=$this->input->post('id_kelas');
		 $update['nama_kelas']= $this->input->post('nama_kelas');
         	 $update['id_kk']= $this->input->post('id_kk');
          	 $this->MSudi->UpdateData('kelas','id_kelas',$id_kelas,$update);
		 redirect(site_url('Welcome/DataKelas'));
	}


	public function DeleteDataKelas()
	{
		 $id_kelas=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('kelas','id_kelas',$id_kelas);
        	 redirect(site_url('Welcome/DataKelas'));
	}


	
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}


	public function DataPb()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_pembayaran=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('pembayaran','id_pembayaran',$id_pembayaran)->row();
				$data['detail']['id_pembayaran']= $tampil->id_pembayaran;
	            $data['detail']['id_petugas']= $tampil->id_petugas;
	            $data['detail']['nisn']= $tampil->nisn;
	            $data['detail']['tgl_bayar']= $tampil->tgl_bayar;
	            $data['detail']['bulan_dibayar']= $tampil->bulan_dibayar;
	            $data['detail']['tahun_dibayar']= $tampil->tahun_dibayar;
	            $data['detail']['id_spp']= $tampil->id_spp;
	            $data['detail']['jumlah_bayar']= $tampil->jumlah_bayar;
			$data['content']='VFormUpdatePb';
		}
		else
		{	
			$data['DataPb']=$this->MSudi->GetData('pembayaran');
			$data['content']='VPb';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPb()
	{
		$data['content']='VFormAddPb';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPb()
	{
		 $add['id_pembayaran']=$this->input->post('id_pembayaran');
		 $add['id_petugas']= $this->input->post('id_petugas');
		 $add['nisn']= $this->input->post('nisn');
		 $add['tgl_bayar']= $this->input->post('tgl_bayar');
		 $add['bulan_dibayar']= $this->input->post('bulan_dibayar');
		 $add['tahun_dibayar']= $this->input->post('tahun_dibayar');
		 $add['id_spp']= $this->input->post('id_spp');
		 $add['jumlah_bayar']= $this->input->post('jumlah_bayar');
        	 $this->MSudi->AddData('pembayaran',$add);
        	 redirect(site_url('Welcome/DataPb'));
	}



	public function UpdateDataPb()
	{
		 $id_pembayaran=$this->input->post('id_pembayaran');
		 $update['id_petugas']= $this->input->post('id_petugas');
		 $update['nisn']= $this->input->post('nisn');
		 $update['tgl_bayar']= $this->input->post('tgl_bayar');
		 $update['bulan_dibayar']= $this->input->post('bulan_dibayar');
		 $update['tahun_dibayar']= $this->input->post('tahun_dibayar');
		 $update['id_spp']= $this->input->post('id_spp');
		 $update['jumlah_bayar']= $this->input->post('jumlah_bayar');
         $this->MSudi->UpdateData('pembayaran','id_pembayaran',$id_pembayaran,$update);
		 redirect(site_url('Welcome/DataPb'));
	}


	public function DeleteDataPb()
	{
		 $id_pembayaran=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('pembayaran','id_pembayaran',$id_pembayaran);
        	 redirect(site_url('Welcome/DataPb'));
	}


	
	public function Logout2()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}









public function DataPt()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_petugas=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('petugas','id_petugas',$id_petugas)->row();
			$data['detail']['id_petugas']= $tampil->id_petugas;
            		$data['detail']['nama_petugas']= $tampil->nama_petugas;
            		$data['detail']['id_login']= $tampil->id_login;
			$data['content']='VFormUpdatePt';
		}
		else
		{	
			$data['DataPt']=$this->MSudi->GetData('petugas');
			$data['content']='VPt';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPt()
	{
		$data['content']='VFormAddPt';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPt()
	{
		 $add['id_petugas']=$this->input->post('id_petugas');
         	 $add['nama_petugas']= $this->input->post('nama_petugas'); 
         	 $add['id_login']= $this->input->post('id_login');  
        	 $this->MSudi->AddData('petugas',$add);
        	 redirect(site_url('Welcome/DataPt'));
	}



	public function UpdateDataPt()
	{
		 $id_petugas=$this->input->post('id_petugas');
		 $update['nama_petugas']= $this->input->post('nama_petugas');
		 $update['id_login']= $this->input->post('id_login');
         $this->MSudi->UpdateData('petugas','id_petugas',$id_petugas,$update);
		 redirect(site_url('Welcome/DataPt'));
	}


	public function DeleteDataPt()
	{
		 $id_petugas=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('petugas','id_petugas',$id_petugas);
        	 redirect(site_url('Welcome/DataPt'));
	}


	
	public function Logout3()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}











public function DataSiswa()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nisn=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('siswa','nisn',$nisn)->row();
			$data['detail']['nisn']= $tampil->nisn;
            		$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['id_kelas']= $tampil->id_kelas;
            		$data['detail']['alamat']= $tampil->alamat;
            		$data['detail']['no_telp']= $tampil->no_telp;
            		$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['id_login']= $tampil->id_login;
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
			$data['DataSiswa']=$this->MSudi->GetData('siswa');
			$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		 $add['nisn']=$this->input->post('nisn');
         	 $add['nis']= $this->input->post('nis'); 
         	 $add['nama']= $this->input->post('nama'); 
         	 $add['id_kelas']= $this->input->post('id_kelas'); 
         	 $add['alamat']= $this->input->post('alamat');
         	 $add['no_telp']= $this->input->post('no_telp');
         	 $add['id_spp']= $this->input->post('id_spp');
         	 $add['id_login']= $this->input->post('id_login');
        	 $this->MSudi->AddData('siswa',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}



	public function UpdateDataSiswa()
	{
		 $nisn=$this->input->post('nisn');
		 $update['nis']= $this->input->post('nis');
		 $update['nama']= $this->input->post('nama');
		 $update['id_kelas']= $this->input->post('id_kelas');
		 $update['alamat']= $this->input->post('alamat');
		 $update['no_telp']= $this->input->post('no_telp');
		 $update['id_spp']= $this->input->post('id_spp');
		 $update['id_login']= $this->input->post('id_login');
         $this->MSudi->UpdateData('siswa','nisn',$nisn,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		 $nisn=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('siswa','nisn',$nisn);
        	 redirect(site_url('Welcome/DataSiswa'));
	}


	
	public function Logout4()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}











		public function DataSPP()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_spp=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('spp','id_spp',$id_spp)->row();
			$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['tahun']= $tampil->tahun;
            		$data['detail']['nominal']= $tampil->nominal;
			$data['content']='VFormUpdateSPP';
		}
		else
		{	
			$data['DataSPP']=$this->MSudi->GetData('spp');
			$data['content']='VSPP';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSPP()
	{
		$data['content']='VFormAddSPP';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSPP()
	{
		 $add['id_spp']=$this->input->post('id_spp');
         	 $add['tahun']= $this->input->post('tahun');
         	 $add['nominal']= $this->input->post('nominal');  
        	 $this->MSudi->AddData('spp',$add);
        	 redirect(site_url('Welcome/DataSPP'));
	}



	public function UpdateDataSPP()
	{
		 $id_spp=$this->input->post('id_spp');
		 $update['tahun']= $this->input->post('tahun');
         	 $update['nominal']= $this->input->post('nominal');
          	 $this->MSudi->UpdateData('spp','id_spp',$id_spp,$update);
		 redirect(site_url('Welcome/DataSPP'));
	}


	public function DeleteDataSPP()
	{
		 $id_spp=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('spp','id_spp',$id_spp);
        	 redirect(site_url('Welcome/DataSPP'));
	}


	
	public function Logout5()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}


}