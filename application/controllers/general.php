<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class general extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->library('cart');
			date_default_timezone_set("Asia/Bangkok");
			$this->load->model('model_general');
			$this->load->helper('string');
		}

		public function index()
		{
			$this->load->view('index_view');
		}

		public function laman_login() 
		{
			$this->load->view('login_view');
		}

		public function laman_register() 
		{
			$this->load->view('register_view');
		}

		public function laman_kasir() 
		{
			if ($this->session->userdata("tipepengguna") == "kasir") {
				$idkasir = $this->session->userdata('idkasir');
				$this->data['detail_karyawan'] = $this->model_general->get_detail_karyawan($idkasir);
				$this->data['tabel_menu'] = $this->model_general->get_tabel_menu_kasir($idkasir);
				$this->load->view('dashboard_kasir', $this->data);
			} else {
				redirect('general');
			}
		}

		public function laman_manajer() 
		{
			if ($this->session->userdata("tipepengguna") == "manajer") {	
				$idmanajer = $this->session->userdata('idmanajer');
				$this->data['tabel_menu'] = $this->model_general->get_tabel_menu_manajer($idmanajer);
				$this->data['tabel_karyawan'] = $this->model_general->get_tabel_karyawan($idmanajer);
				$this->load->view('dashboard_manajer', $this->data);
			} else {
				redirect('general');
			}
		}

		public function laman_faq()
		{
			$this->load->view('faq_view');
		}

		public function register()
		{
			if($this->session->userdata('login') == FALSE) {
				if($this->input->post('submit_daftar')) {
					$this->form_validation->set_rules('username', 'Username', 'trim|required');
					$this->form_validation->set_rules('email', 'Email', 'trim|required');
					$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
					$this->form_validation->set_rules('repassword', 'Konfirmasi Password', 'required|matches[password]');

					if($this->form_validation->run() == TRUE) {
						$idmanajer = $this->model_general->count_id_manajer();

						$register_manajer = array(
							'username' => $this->input->post('username'),
							'nama_depan' => $this->input->post('namadepan'),
							'nama_belakang' => $this->input->post('namabelakang'),
							'email' => $this->input->post('email'),
							'password' => $this->input->post('password'),
							'id_manajer' => $idmanajer
						);
						$this->db->insert('tb_manajer', $register_manajer);

						$register_restoran = array(
							'nama_restoran' => $this->input->post('restoname'),
							'alamat' => $this->input->post('restoaddress'),
							'id_manajer' => $idmanajer
						);
						$this->db->insert('tb_restoran', $register_restoran);

						if($this->db->affected_rows() > 0) {
							$this->session->set_flashdata('notif_login', '<p class="alert alert-success"><strong>Registrasi sukses.</strong> Silahkan login!</p>');
							redirect('general/laman_login');
						} else {
							$this->session->set_flashdata('notif_register', '<p class="alert alert-danger"><strong>Registrasi gagal!.</strong></p>');
							redirect('general/laman_register');
						}
					} else {
						$this->session->set_flashdata('notif_register', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
						redirect('general/laman_register');
					}
				} else {
					redirect('general/laman_register');
				}
			}
		}

		public function login()
		{
			if($this->session->userdata('login') == FALSE) {
				if($this->input->post('submit_masuk')) {
					$this->form_validation->set_rules('username', 'Username', 'trim|required');
					$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

					if ($this->form_validation->run() == TRUE) {
						$username = $this->input->post('username');
						$password = $this->input->post('password');

						$cek_kasir = $this->model_general->cek_kasir($username,$password);
						$cek_manajer = $this->model_general->cek_manajer($username,$password);

						if ($cek_kasir->num_rows() > 0) {
							$data_kasir = $cek_kasir->row_array();
							$this->session->set_userdata('login', TRUE);
							$this->session->set_userdata('tipepengguna', "kasir");
							$this->session->set_userdata('namadepan', $data_kasir['nama_depan']);
							$this->session->set_userdata('namabelakang', $data_kasir['nama_belakang']);
							$this->session->set_userdata('username', $data_kasir['username']);
							$this->session->set_userdata('email', $data_kasir['email']);
							$this->session->set_userdata('idkasir', $data_kasir['id_kasir']);
							redirect('general/laman_kasir');
						} elseif ($cek_manajer->num_rows() > 0) {
							$data_manajer = $cek_manajer->row_array();
							$this->session->set_userdata('login', TRUE);
							$this->session->set_userdata('tipepengguna', "manajer");
							$this->session->set_userdata('namadepan', $data_manajer['nama_depan']);
							$this->session->set_userdata('namabelakang', $data_manajer['nama_belakang']);
							$this->session->set_userdata('username', $data_manajer['username']);
							$this->session->set_userdata('email', $data_manajer['email']);
							$this->session->set_userdata('idmanajer', $data_manajer['id_manajer']);
							redirect('general/laman_manajer');
						} else {
							$this->session->set_flashdata('notif_login', '<div class="alert alert-danger" role="alert"><b>Invalid username or password!</b></div>');
							redirect('general/laman_login');
						}
					} else {
						$this->session->set_flashdata('notif_login', '<div class="alert alert-danger" role="alert"><b class="lh-2">'.validation_errors().'</b></div>');
						redirect('general/laman_login');
					}
				} else {
					redirect('general/laman_login');
				}
			} else {
				redirect('general');
			}
		}

		public function logout() 
		{
			$this->session->sess_destroy();
			redirect('general');
		}

		public function add_cart($id)
		{
			$menu = $this->model_general->find($id);

			$data = array(
				'id' => $menu->id_menu,
				'qty' => 1,
				'price' => $menu->harga,
				'name' => $menu->nama_menu
			);

			$this->cart->insert($data);
			redirect('general/laman_kasir');
		}

		public function add_employee()
		{
			if ($this->session->userdata("tipepengguna") == "manajer") {
				if($this->input->post('submit_addemployee')) {
					$this->form_validation->set_rules('first_name', 'First Name', 'required', array('required' => '%s Must be filled'));
					$this->form_validation->set_rules('salary', 'Salary', 'required', array('required' => '%s Must be filled'));

					if ($this->form_validation->run() == TRUE) {
						$config['upload_path'] = './assets/img/';
						$config['allowed_types'] = 'jpg|jpeg|png';
						$config['max_size'] = '24000';
						$config['max_width'] = '1000';
						$config['max_height'] = '1000';

						$this->load->library('upload', $config);
						$this->upload->initialize($config);

						if ( ! $this->upload->do_upload('employee_photo')) {
							$this->session->set_flashdata
							('notifikasi', 
								'<div class="alert alert-danger" role="alert">
									<b class="lh-2">'.$this->upload->display_errors().'<b>
								</div>'
							);
							redirect('general/laman_manajer');
						} else {
							$unggah_gambar = array('unggahgambar' => $this->upload->data());

							// CREATE THUMBNAIL IMAGE
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/img/'.$unggah_gambar['unggahgambar']['file_name'];
							$config['new_image'] = './assets/img/';
							$config['create_thumb'] = TRUE;
							$config['maintain_ratio'] = TRUE;
							$config['width'] = 250;
							$config['height'] = 250;
							$config['thumb_marker'] = '';

							$this->load->library('image_lib', $config);
							$this->image_lib->resize();
							// END THUMBNAIL IMAGE

							$data_kasir = array(
								'id_manajer' => $this->session->userdata('idmanajer'),
								'nama_depan' => $this->input->post('first_name'),
								'nama_belakang' => $this->input->post('last_name'),
								'username' => $this->input->post('username'),
								'password' => $this->input->post('password'),
								'email' => $this->input->post('email'),
								'gaji' => $this->input->post('salary'),
								'foto_kasir' => $unggah_gambar['unggahgambar']['file_name']
							);

							$this->db->insert('tb_kasir', $data_kasir);

							$this->session->set_flashdata
							('notifikasi', 
								'<div class="alert alert-success" role="alert">
									<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
									</svg>
									<b class="lh-2">&nbsp; Success, New Employee Created!<b>
								</div>'
							);
							redirect('general/laman_manajer');
						}
					} else {
						$this->session->set_flashdata
						('notifikasi', 
							'<div class="alert alert-danger" role="alert">
								<b class="lh-2">&nbsp;'.validation_errors().'</b>
							</div>'
						);
						redirect('general/laman_manajer');
					}
				} else {
					redirect('general/laman_manajer');
				}
			} else {
				redirect('general');
			}
		}

		public function add_menu()
		{
			if ($this->session->userdata("tipepengguna") == "manajer") {
				if($this->input->post('submit_addmenu')) {
					$this->form_validation->set_rules('menu_name', 'Menu Name', 'required', array('required' => '%s Must be filled'));

					if ($this->form_validation->run() == TRUE) {
						$config['upload_path'] = './assets/img/';
						$config['allowed_types'] = 'jpg|jpeg|png';
						$config['max_size'] = '24000';
						$config['max_width'] = '1000';
						$config['max_height'] = '1000';

						$this->load->library('upload', $config);
						$this->upload->initialize($config);

						if ( ! $this->upload->do_upload('menu_photo')) {
							$this->session->set_flashdata
							('notifikasi', 
								'<div class="alert alert-danger" role="alert">
									<b class="lh-2">'.$this->upload->display_errors().'<b>
								</div>'
							);
							redirect('general/laman_manajer');
						} else {
							$unggah_gambar = array('unggahgambar' => $this->upload->data());

							// CREATE THUMBNAIL IMAGE
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/img/'.$unggah_gambar['unggahgambar']['file_name'];
							$config['new_image'] = './assets/img/';
							$config['create_thumb'] = TRUE;
							$config['maintain_ratio'] = TRUE;
							$config['width'] = 250;
							$config['height'] = 250;
							$config['thumb_marker'] = '';

							$this->load->library('image_lib', $config);
							$this->image_lib->resize();
							// END THUMBNAIL IMAGE

							$data_menu = array(
								'id_manajer' => $this->session->userdata('idmanajer'),
								'nama_menu' => $this->input->post('menu_name'),
								'harga' => $this->input->post('menu_price'),
								'kuantitas' => $this->input->post('menu_qty'),
								'foto_menu' => $unggah_gambar['unggahgambar']['file_name']
							);

							$this->db->insert('tb_menu', $data_menu);

							$this->session->set_flashdata
							('notifikasi', 
								'<div class="alert alert-success" role="alert">
									<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
									</svg>
									<b class="lh-2">&nbsp; Success, New Menu Created!<b>
								</div>'
							);
							redirect('general/laman_manajer');
						}
					} else {
						$this->session->set_flashdata
						('notifikasi', 
							'<div class="alert alert-danger" role="alert">
								<b class="lh-2">&nbsp;'.validation_errors().'</b>
							</div>'
						);
						redirect('general/laman_manajer');
					}
				} else {
					redirect('general/laman_manajer');
				}
			} else {
				redirect('general');
			}
		}

		public function edit_employee($idkasir)
		{
			$this->model_general->get_detail_karyawan($idkasir);

			if ($this->session->userdata("tipepengguna") == "manajer") {
				if($this->input->post('submit_editemployee')) {
					$this->form_validation->set_rules('first_name', 'First Name', 'required', array('required' => '%s Must be filled'));
					$this->form_validation->set_rules('salary', 'Salary', 'required', array('required' => '%s Must be filled'));

					if ($this->form_validation->run() == TRUE) {
						if(!empty($_FILES['employee_photo']['name'])) {
							$config['upload_path'] = './assets/img/';
							$config['allowed_types'] = 'jpg|jpeg|png';
							$config['max_size'] = '24000';
							$config['max_width'] = '1000';
							$config['max_height'] = '1000';

							$this->load->library('upload', $config);
							$this->upload->initialize($config);

							if ( ! $this->upload->do_upload('employee_photo')) {
								$this->session->set_flashdata
								('notifikasi', 
									'<div class="alert alert-danger" role="alert">
										<b class="lh-2">'.$this->upload->display_errors().'<b>
									</div>'
								);
								redirect('general/laman_manajer');
							} else {
								$unggah_gambar = array('unggahgambar' => $this->upload->data());

								// CREATE THUMBNAIL IMAGE
								$config['image_library'] = 'gd2';
								$config['source_image'] = './assets/img/'.$unggah_gambar['unggahgambar']['file_name'];
								$config['new_image'] = './assets/img/';
								$config['create_thumb'] = TRUE;
								$config['maintain_ratio'] = TRUE;
								$config['width'] = 250;
								$config['height'] = 250;
								$config['thumb_marker'] = '';

								$this->load->library('image_lib', $config);
								$this->image_lib->resize();
								// END THUMBNAIL IMAGE

								$data_kasir = array(
									'id_kasir' => $idkasir,
									'id_manajer' => $this->session->userdata('idmanajer'),
									'nama_depan' => $this->input->post('first_name'),
									'nama_belakang' => $this->input->post('last_name'),
									'username' => $this->input->post('username'),
									'password' => $this->input->post('password'),
									'email' => $this->input->post('email'),
									'gaji' => $this->input->post('salary'),
									'foto_kasir' => $unggah_gambar['unggahgambar']['file_name']
								);

								$this->db->where('id_kasir', $idkasir);
								$this->db->update('tb_kasir', $data_kasir);

								$this->session->set_flashdata
								('notifikasi', 
									'<div class="alert alert-success" role="alert">
										<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
										</svg>
										<b class="lh-2">&nbsp; Success, Employee Edited!<b>
									</div>'
								);
								redirect('general/laman_manajer');
							}
						} else {
							$data_kasir = array(
								'id_kasir' => $idkasir,
								'id_manajer' => $this->session->userdata('idmanajer'),
								'nama_depan' => $this->input->post('first_name'),
								'nama_belakang' => $this->input->post('last_name'),
								'username' => $this->input->post('username'),
								'password' => $this->input->post('password'),
								'email' => $this->input->post('email'),
								'gaji' => $this->input->post('salary')
							);

							$this->db->where('id_kasir', $idkasir);
							$this->db->update('tb_kasir', $data_kasir);

							$this->session->set_flashdata
							('notifikasi', 
								'<div class="alert alert-success" role="alert">
									<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
									</svg>
									<b class="lh-2">&nbsp; Success, Employee Edited!<b>
								</div>'
							);
							redirect('general/laman_manajer');
						}
					} else {
						$this->session->set_flashdata
						('notifikasi', 
							'<div class="alert alert-danger" role="alert">
								<b class="lh-2">&nbsp;'.validation_errors().'</b>
							</div>'
						);
						redirect('general/laman_manajer');
					}
				} else {
					redirect('general/laman_manajer');
				}
			} else {
				redirect('general');
			}
		}

		public function edit_menu($idmenu)
		{
			$this->model_general->get_detail_menu($idmenu);

			if ($this->session->userdata("tipepengguna") == "manajer") {
				if($this->input->post('submit_editmenu')) {
					$this->form_validation->set_rules('menu_name', 'Menu Name', 'required', array('required' => '%s Must be filled'));
					//$this->form_validation->set_rules('menu_id', 'ID Menu', 'required', array('required' => '%s Must be filled'));

					if ($this->form_validation->run() == TRUE) {
						if(!empty($_FILES['menu_photo']['name'])) {
							$config['upload_path'] = './assets/img/';
							$config['allowed_types'] = 'jpg|jpeg|png';
							$config['max_size'] = '24000';
							$config['max_width'] = '1000';
							$config['max_height'] = '1000';

							$this->load->library('upload', $config);
							$this->upload->initialize($config);

							if ( ! $this->upload->do_upload('menu_photo')) {
								$this->session->set_flashdata
								('notifikasi', 
									'<div class="alert alert-danger" role="alert">
										<b class="lh-2">'.$this->upload->display_errors().'<b>
									</div>'
								);
								redirect('general/laman_manajer');
							} else {
								$unggah_gambar = array('unggahgambar' => $this->upload->data());

								// CREATE THUMBNAIL IMAGE
								$config['image_library'] = 'gd2';
								$config['source_image'] = './assets/img/'.$unggah_gambar['unggahgambar']['file_name'];
								$config['new_image'] = './assets/img/';
								$config['create_thumb'] = TRUE;
								$config['maintain_ratio'] = TRUE;
								$config['width'] = 250;
								$config['height'] = 250;
								$config['thumb_marker'] = '';

								$this->load->library('image_lib', $config);
								$this->image_lib->resize();
								// END THUMBNAIL IMAGE

								$data_menu = array(
									'id_menu' => $idmenu,
									'id_manajer' => $this->session->userdata('idmanajer'),
									'nama_menu' => $this->input->post('menu_name'),
									'harga' => $this->input->post('menu_price'),
									'kuantitas' => $this->input->post('menu_qty'),
									'foto_menu' => $unggah_gambar['unggahgambar']['file_name']
								);

								$this->db->where('id_menu', $idmenu);
								$this->db->update('tb_menu', $data_menu);

								$this->session->set_flashdata
								('notifikasi', 
									'<div class="alert alert-success" role="alert">
										<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
										</svg>
										<b class="lh-2">&nbsp; Success, Menu Edited!<b>
									</div>'
								);
								redirect(base_url('general/laman_manajer'),'refresh');
							}
						} else {
							$data_menu = array(
								'id_menu' => $idmenu,
								'id_manajer' => $this->session->userdata('idmanajer'),
								'nama_menu' => $this->input->post('menu_name'),
								'harga' => $this->input->post('menu_price'),
								'kuantitas' => $this->input->post('menu_qty')
							);

							$this->db->where('id_menu', $idmenu);
							$this->db->update('tb_menu', $data_menu);

							$this->session->set_flashdata
							('notifikasi', 
								'<div class="alert alert-success" role="alert">
									<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
									</svg>
									<b class="lh-2">&nbsp; Success, Menu Edited!<b>
								</div>'
							);
							redirect(base_url('general/laman_manajer'),'refresh');
						}
					} else {
						$this->session->set_flashdata
						('notifikasi', 
							'<div class="alert alert-danger" role="alert">
								<b class="lh-2">&nbsp;'.validation_errors().'</b>
							</div>'
						);
						redirect(base_url('general/laman_manajer'),'refresh');
					}
				} else {

				}
			} else {
				redirect('general');
			}
		}

		public function delete_cart($rowid)
		{
			$this->cart->remove($rowid);
			redirect(base_url('general/laman_kasir'), 'refresh');
		}

		public function delete_all_cart()
		{
			$this->cart->destroy();
			$this->session->set_flashdata
			('notifikasi', 
				'<div class="alert alert-success" role="alert">
					<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
					</svg>
					<b class="lh-2">&nbsp; Sucessfully remove all cart<b>
				</div>'
			);
			redirect(base_url('general/laman_kasir'), 'refresh');
		}

		public function delete_menu($idmenu)
		{
			$data = array('id_menu' => $idmenu);
			$this->db->where('id_menu', $idmenu);
			$this->db->delete('tb_menu', $data);
			$this->session->set_flashdata
			('notifikasi', 
				'<div class="alert alert-success" role="alert">
					<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
					</svg>
					<b class="lh-2">&nbsp; Sucessfully remove menu<b>
				</div>'
			);
			redirect(base_url('general/laman_manajer'), 'refresh');
		}

		public function delete_employee($idkasir)
		{
			$data = array('id_kasir' => $idkasir);
			$this->db->where('id_kasir', $idkasir);
			$this->db->delete('tb_kasir', $data);
			$this->session->set_flashdata
			('notifikasi', 
				'<div class="alert alert-success" role="alert">
					<svg class="bi bi-check-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
					</svg>
					<b class="lh-2">&nbsp; Sucessfully remove employee<b>
				</div>'
			);
			redirect(base_url('general/laman_manajer'), 'refresh');
		}
		
		public function checkout()
		{
			if ($this->session->userdata("tipepengguna") == "kasir") {
				if($this->input->post('submit_checkout')) {
					$keranjang = $this->cart->contents();

					$data_checkout = array(
						'id_transaksi' => $this->input->post('id_transaksi'),
						'id_kasir' => $this->session->userdata('idmanajer'),
						'nama_menu' => $this->input->post('menu_name'),
						'harga' => $this->input->post('menu_price'),
						'kuantitas' => $this->input->post('menu_qty')
					);
				} else {

				}
			} else {

			}
		}
	}
?>
