<?php
namespace Blog\Controller;
use Common\Controller\AdminbaseController;

class IndexadminController extends AdminbaseController{


function index(){
	$User = M('recruit_list');
	$Position_info = $User->order('Position_id desc')->select();
//	var_dump($Position_info);
	$this->assign("Job_offer_list",$Position_info);
	$this->display();
}
}