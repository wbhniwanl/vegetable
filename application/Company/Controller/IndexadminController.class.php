<?php
namespace Company\Controller;
use Common\Controller\AdminbaseController;

class IndexadminController extends AdminbaseController{


function index(){
	$User = M('user_list');
	$Position_info = $User->order('User_id desc')->select();
	$this->assign("Position_info",$Position_info);
	//var_dump($Position_info);
    $this->display();
}
}