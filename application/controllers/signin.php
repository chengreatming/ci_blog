<?php


class Signin extends CI_Controller {


	public function index()
	{
		$this->load->view('news/signin');
		
	}
	
	function regist() {
        $this->load->model('user_test'); //��������֮ǰ������User_testģ�ͣ�����ĸ���ô�С
        $arr = array('uname'=>$_POST['username'], 'upawd'=>$_POST['password']);
        $this->user_test->u_insert($arr); //����user_test��u_insert������������
    }

}