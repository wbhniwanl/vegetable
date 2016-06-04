<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	
    //首页
	public function index() {

		$User = M('recruit_list');
		$data['status'] = 1;
		$Position_info = $User->where($data)->order('Position_id desc')->select();
		$this->assign("Position_info",$Position_info);
    	$this->display(":index");
    }

}


