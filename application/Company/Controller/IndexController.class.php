<?php
namespace Company\Controller;
use Common\Controller\HomebaseController;

class IndexController extends HomebaseController{
	
		function index(){
	    if(sp_is_user_login()){ //�Ѿ���¼ʱֱ��������ҳ
	        $this->redirect('blog/index/jump', array('cate_id' => 2), 5, '�Ѿ���¼ҳ����ת��...');
	    }else{
	        $this->display(":companylogin");
	    }
	}
}