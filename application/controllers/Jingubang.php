<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: undefined
 * Date: 16-8-8
 * Time: 下午3:04
 */
class Jingubang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('show_model');
        $this->load->helper('url_helper');
        session_start();
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('welcome_message');
        $this->load->view('templates/footer');
    }


    public function register()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '注册新用户';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/register', $data);
            $this->load->view('templates/footer');

        } else {
            $data['msg'] = $this->show_model->register();
            $this->load->view('common/message', $data);
        }
    }


    public function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('show_model');

        $data['title'] = '用户登陆';

        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        if (isset($_SESSION['username']) && (!empty($_SESSION['username']))) {
            $this->user();
            return 0;
        }

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/login', $data);
            $this->load->view('templates/footer');
        } else {
            $res = $this->show_model->login();
            $this->load->view('user/location', $res);
        }
    }

    public function user()
    {
        $this->load->model('sql_model');
        $this->load->model('show_model');

        $data['title'] = '金箍棒sql注入检测系统';

        if (isset($_SESSION['username']) && (!empty($_SESSION['username']))) {
            $res['history'] = $this->show_model->gethistory();
            $res['hobbys'] = $this->show_model->gethobby();
            $this->load->view('templates/header', $data);
            $this->load->view('common/sql',$res);
            $this->load->view('common/options');
            $this->load->view('user/user', $res);
            $this->load->view('templates/footer');
        } else {
            $data['msg'] = "验证失败";
            $data['url'] = site_url("jingubang/login");
            $this->load->view("user/location", $data);
        }
    }

    public function addhobby(){
        $this->load->model('show_model');
        if(!empty($_POST['hobby'])&&!empty($_POST['name'])){
            $hobby['username'] = $_SESSION['username'];
            $hobby['name'] = $_POST['name'];
            $hobby['json'] = $_POST['hobby'];
            $this->show_model->addhobby($hobby);
            echo 'ok';
        }
        else{
            show_404();
        }
    }

    public function delhobby(){
        $this->load->model('show_model');
        if(!empty($_POST['name'])){
            $name = $_POST['name'];
            $this->show_model->delhobby($name);
            echo 'ok';
        }
    }

    public function log()
    {
        $this->load->model('sql_model');
        if (!empty($_POST['taskid'])) {
            $taskid = $_POST['taskid'];
            $log = $this->sql_model->logToWeb($taskid);
            $log = json_encode($log);
            echo $log;
        } else {
            show_404();
        }
    }

    public function getPayloads()
    {
        $this->load->model('sql_model');
        if (!empty($_POST['taskid'])) {
            $taskid = $_POST['taskid'];
            $payloads = $this->sql_model->payloadsToWeb($taskid);
            $payloads = json_encode($payloads);
            echo $payloads;
        } else {
            show_404();
        }
    }

    public function options(){
        $data['title'] = '金箍棒sql注入检测系统';
        $this->load->model('sql_model');
        $this->load->view('templates/header',$data);
        $this->load->view('common/sql');
        $this->load->view('templates/footer');
    }

    public function js(){
        $this->load->view('templates/js');
    }

    public function css(){
        $this->load->view('templates/css');
    }
    public function sql()
    {
        $this->load->model('sql_model');
        if (!empty($_POST['url'])) {
            $url = $_POST['url'];
            $json = $_POST['parameters'];
            ob_start();
// do initial processing here
            echo 'ok'; // send the response
            header('Connection: close');
            header('Content-Length: '.ob_get_length());
            ob_end_flush();
            ob_flush();
            flush();
            $result = $this->sql_model->sql($url,$json);
            return 0;
        } else {
            show_404();
        }
    }

    public function logout()
    {
        $_SESSION['username'] = NULL;
        $this->login();
    }

    public function delete()
    {
        if(!empty($_POST['taskid'])){
            $taskid = $_POST['taskid'];
            $this->load->model('sql_model');
            $this->sql_model->delTask($taskid);
            echo 'ok';
        }
        else{
            show_404();
        }

    }
}