<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }
    function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Barang');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email is not valid',
            'required' => 'Email must be filled in'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password must be filled in'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header.php");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer.php");
        } else {
            $this->cek_login();
        }
    }

    function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('Barang');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has been registered!',
            'valid_email' => 'Email is not valid',
            'required' => 'Email must be filled in'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password matched',
                'min_length' => 'Password to short',
                'required' => 'Password must be filled in'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('layout/auth_reg_header.php', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('layout/auth_reg_footer.php');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                //'gambar' => 'default.jpg',
                'status' => "Karyawan",
                //'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account created!</div>');
            redirect('Auth');
        }
    }

    function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'status' => $user['status'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['status'] == 'Admin') {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Welcome!</div>');
                    redirect('Barang');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Welcome!</div>');
                    redirect('Check_in');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><span class="fe fe-alert-triangle fe-16 mr-2"/>New email, who is this? 
            Try make it one :)</div>');
            redirect('Auth');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logged Out! Come again!</div>');
        redirect('Auth');
    }
}