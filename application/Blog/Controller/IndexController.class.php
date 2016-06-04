<?php
namespace Blog\Controller;
use Common\Controller\HomebaseController;

class IndexController extends HomebaseController{
function index(){
		$User = M('recruit_list');
	$Position_info = $User->order('Position_id desc')->select();
		//var_dump($Position_info);
		$this->assign("Position",$Position_info);
		$this->display(":index");
}

public function job_offer(){
          
		   $value = session('user');
		   $Position_title=$_POST['Position_title'];
		   $Position_name=$_POST['Position_name'];
		   $Position_nature=$_POST['Position_nature'];
		   $Work_place=$_POST['Work_place'];
		   $Require_number=$_POST['Require_number'];
		   $Job_offer=$_POST['Job_offer'];
		   $Work_time=$_POST['Work_time'];
		   $Position_describe=$_POST['Position_describe'];
		   $Contact=$_POST['Contact'];
		   $Contact_way=$_POST['Contact_way'];
		
		

		if($Position_nature==1){
			$Position_nature="兼职";
			}
			if($Position_nature==2){
			$Position_nature="全职";
			}
			if($Position_nature==3){
			$Position_nature="其他";
			}



			if($_POST['Sex_require']==1){
			$Sex_require="男";
			}
			if($_POST['Sex_require']==2){
			$Sex_require="女";
			}
			if($_POST['Sex_require']==3){
			$Sex_require="无";
			}


		  $User = M('recruit_list');

 $data=array(
		'Position_title'=>$Position_title,
		'User_id'=> $value,
		'Position_nature'=>$Position_nature,
		'Position_name'=>$Position_name,
		'Work_place'=>$Work_place,
		'Require_number'=> $Require_number,
		'Job_offer'=>$Job_offer,
		'Work_time'=>$Work_time,
		'Position_describe'=>$Position_describe,
		'Contact'=> $Contact,
		'Contact_way'=> $Contact_way,
		'Sex_require'=>$Sex_require,
	            );

		$recruit_info = $User->add($data);
		
			$this->display(":jump");
			
			
			

    }
public function company(){
	$User = M('user_list');
	$Position_info = $User->order('User_id desc')->select();
	var_dump($Position_info);
}

public function checkcompany(){
	$id['id']=intval($_GET['id']);
	$User = M('user_list');
	$data['Sign'] = 1;
	$User->where($id)->save($data);
	//$row="测试";
	//$this->assign("id",$id);
	//$this->display(":checkcompany");
	$this->success("成功");
}

public function recruit(){
	$User = M('recruit_list');
	$data['status'] = 1;
	$Position_info = $User->where($data)->order('Position_id desc')->select();
//	var_dump($Position_info);
	$this->assign("Job_offer_list",$Position_info);
	$this->display(":recruit");
}
public function delete_re(){
	$Position_id['Position_id']=intval($_GET['id']);
	$User = M('recruit_list');
	$User->where($Position_id)->delete(); 
	$this->success("删除成功");
	//echo $Position_id ;
	
	}
public function job_output(){
	$Position_id=intval($_GET['id']);
	$User = M('recruit_list');
	$map['Position_id'] = $Position_id;
	$Position_info = $User->where($map)->select();	
	$this->assign("Job_offer",$Position_info);
	$this->display(":job_output");
	//var_dump($Position_info);
	
}

public function company_check(){
	$Position_id=intval($_GET['id']);
	$User = M('recruit_list');
	$map['Position_id'] = $Position_id;
	$Position_info = $User->where($map)->select();	
	$this->assign("Job_offer",$Position_info);
	$this->display(":company_check");
	//var_dump($Position_info);
	
}

public function checkre(){
	$id['Position_id']=intval($_GET['id']);
	$User = M('recruit_list');
	$data['status'] = 1;
	$User->where($id)->save($data); 
	$this->success("成功");
}
public function jump(){

	  if(sp_is_user_login()){ //已经登录时直接跳到首页
	       $this->display(":jump");
	    }else{
	        $this->display(":companylogin");
	    }
}

public function recruit_detail(){

	$User = M('recruit_list');
	$value = session('user');
	$data['User_id'] = $value;
	$recruit_detail=$User->where($data)->select();

	$this->assign("recruit_detail",$recruit_detail);
	//echo $value;
	//var_dump($recruit_detail);
	$this->display(":recruit_detail");
}

public function keyword(){

	$value = session('name');

	$username['user_login'] = $value;
	$User = M('users');
	
	$key_word1=$User->where($username)->getField('key_word1');
	$key_word2=$User->where($username)->getField('key_word2');
	$key_word3=$User->where($username)->getField('key_word3');

	$acticle=M('recruit_list');
	
	$map1['Position_title'] = array('like',"%$key_word1%");
	$map2['Position_title'] = array('like',"%$key_word2%");
	$map3['Position_title'] = array('like',"%$key_word3%");

	$act1=$acticle->where($map1)->select();
	$act2=$acticle->where($map2)->select();
	$act3=$acticle->where($map3)->select();
	



$this->assign("act1",$act1);
$this->assign("act2",$act2);
$this->assign("act3",$act3);

	//echo $value ;

	$this->display(":keyword");
	}
	


	public function update_key(){
	
	$value = session('name');
	$username['user_login'] = $value;
	$User = M('users');
		
	$data1['key_word1'] =$_POST['key_word1'];
	$data2['key_word2'] =$_POST['key_word2'];
	$data3['key_word3'] =$_POST['key_word3'];

	$User->where($username)->save($data1); 
	$User->where($username)->save($data2); 
	$User->where($username)->save($data3); 

	


	  $this->success('新增成功', 'Blog/index/keyword_detail');
	}

	public function keyword_detail(){
	
	$value = session('name');

	$username['user_login'] = $value;
	$User = M('users');


	$key_word1=$User->where($username)->getField('key_word1');
	$key_word2=$User->where($username)->getField('key_word2');
	$key_word3=$User->where($username)->getField('key_word3');
	
	$this->assign("key_word1",$key_word1);
	$this->assign("key_word2",$key_word2);
	$this->assign("key_word3",$key_word3);
	
	
	//echo $key_word3 ;
	
	$this->display(":keyword_detail");
	
	}

	
}