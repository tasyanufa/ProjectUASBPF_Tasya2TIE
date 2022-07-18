<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Account_model');
	}

	function index(){
        if($this->session->userdata('email')){
            redirect('Dashboard');
        }
        $this->form_validation->set_rules('email','Email','trim|required|valid_email',
        [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password','Password','trim|required',
        [
            'required' => 'Password Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        }
        else{
            $this->cek_login();
        }
	}

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if($user){
            if(password_verify($password, $user['password'])){
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if($user['role'] == 'Admin'){
                    redirect('Dashboard');
                }
                else{
                    redirect('profil');
                }
            }
            else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Salah!</div>');
                redirect('Auth');
            }
        }
        else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar!</div>');
            redirect('Auth');
        }
    }

    // public function reset_password()
    // {
    //     $this->load->view("layout/auth_header");
    //     $this->load->view("auth/reset_password_email");
    //     $this->load->view("layout/auth_footer");
    // }

    // public function reset_password_validation()
    // {
    //     $user = $this->db->get_where('user', ['email' => $email])->row_array();
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    //     if ($this->form_validation->run()) {
    //         $email = $this->input->post('email');
    //         $reset_key = random_string('alnum', 50);

    //         if($this->Reset_model->update_reset_key($email, $reset_key)){
    //             var_dump("ada");
    //         }
    //         else{
    //             var_dump("error");
    //         }
    //     }
    //     else {
    //         echo 0;
    //         $this->load->view("layout/auth_header");
    //         $this->load->view("auth/reset_password_email");
    //         $this->load->view("layout/auth_footer");
    //     }
    // }

    public function registrasi(){
        if ($this->session->userdata('email')) {
            redirect('Dashboard');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'Nama Wajib di isi'
		]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Terlalu Pendek',
            'required' => 'Password harus diisi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/registrasi");
            $this->load->view("layout/auth_footer");
        }
        else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.png',
                'role' => "User",
                'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!
            Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
            redirect('Auth');
        }
	}

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Logout!</div>');
        redirect('Auth');
    }

    public function lupa_password()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Halaman Reset Password';
            $this->load->view("layout/auth_header");
            $this->load->view('auth/lupa_password', $data);
            $this->load->view("layout/auth_footer");
        } else {
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->Account_model->getUserInfoByEmail($clean);

            if (!$userInfo) {
                $this->session->set_flashdata('sukses', 'email address salah, silakan coba lagi.');
                redirect(site_url('auth/lupa_password'), 'refresh');
            }

            //build token   

            $token = $this->Account_model->insertToken($userInfo->id_user);
            $qstring = $this->base64url_encode($token);
            $url = site_url() . '/auth/reset_password/token/' . $qstring;
            $link = '<a href="' . $url . '">' . $url . '</a>';

            $message = '';
            $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';
            $message .= '<strong>Silakan klik link ini:</strong> ' . $link;

            echo $message; //send this through mail  
            exit;
        }
    }

    public function reset_password()
    {
        $token = $this->base64url_decode($this->uri->segment(1));
        $cleanToken = $this->security->xss_clean($token);

        $user_info = $this->Account_model->isTokenValid($cleanToken); //either false or array();          

        if (!$user_info) {
            $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');
            redirect(site_url('auth/reset_password'), 'refresh');
        }

        $data = array(
            'title' => 'Halaman Reset Password',
            'nama' => $user_info->nama,
            'email' => $user_info->email,
            'token' => $this->base64url_encode($token)
        );

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/auth_header");
            $this->load->view('auth/reset_password', $data);
            $this->load->view("layout/auth_footer");
        } else {

            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);
            $hashed = md5($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            $cleanPost['id_user'] = $user_info->id_user;
            unset($cleanPost['passconf']);
            if (!$this->Account_model->updatePassword($cleanPost)) {
                $this->session->set_flashdata('sukses', 'Update password gagal.');
            } else {
                $this->session->set_flashdata('sukses', 'Password anda sudah  
             diperbaharui. Silakan login.');
            }
            redirect(site_url('auth'), 'refresh');
        }
    }

    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}