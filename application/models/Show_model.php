<?php
/**
 * Created by PhpStorm.
 * User: undefined
 * Date: 16-8-8
 * Time: 下午3:34
 */
    class Show_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function register(){
            $this->load->helper('url');
            $data = array(
                'username'=>$this->input->post('username'),
                'password'=>md5($this->input->post('password')),
                'email'=>$this->input->post('email'),
                'mobile'=>$this->input->post('mobile')
            );
            $query = $this->db->get_where('user',array('username'=>$data['username']));
            if($query->row_array() !== NULL){
                $res = 2;
            }
            else{
                $res =$this->db->insert('user',$data);
            }
            if($res == 1){
                $data = "注册成功";
            }
            elseif($res == 0){
                $data = "注册失败";
            }
            elseif($res == 2){
                $data = "用户名已存在";
            }
            return $data;
        }
        public function login(){
            $this->load->helper('url');
            $data = array(
                'username'=>$this->input->post('username'),
                'password'=>md5($this->input->post('password'))
            );
            $query = $this->db->get_where('user',array('username'=>$data['username'],'password'=>$data['password']));
            if($query->row_array()!=NULL){
                $_SESSION['username'] = $data['username'];

                $res['msg'] = "登陆成功";
            }
            else{
                $_SESSION['username'] = null;
                $res['msg'] = "登陆失败";
                $res['url'] = site_url('jingubang/login');
                return $res;
            }
            $res['url'] = site_url('jingubang/user');
            return $res;
        }
        public function gethistory(){
            if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
                $username = $_SESSION['username'];
            }
            else{
                exit;
            }
            //$task = $this->db->get_where('history',array('username'=>$username));
            $task = $this->db->query('select * from history where username = '.$this->db->escape($username).' order by id desc');
            $task = $task->result_array();
            $tasks = array();
            foreach ($task as $tmp){
                $tasks[] = $tmp['taskid'];
            }
            $history = array();
            foreach ($task as $tmp){
                $tmp = $this->db->get_where('Jingubang',array('taskid'=>$tmp['taskid']));
                $tmp = $tmp->result_array();
                $history[] = $tmp;
            }
            return $history;
        }

        public function addhobby($hobby){
            $this->db->insert('hobby',$hobby);
        }

        public function gethobby(){
            $username = $_SESSION['username'];
            $query = $this->db->get_where('hobby',array('username'=>$username));
            $res = $query->result_array();
            return $res;
        }

        public function delhobby($name){
            $username = $_SESSION['username'];
            $this->db->where(array('username'=>$username,'name'=>$name));
            $this->db->delete('hobby');
        }
    }