<?php
namespace Blog\Controller;
use Common\Controller\HomebaseController;

class StudentController extends HomebaseController{

function index(){
  $this->display(":avatar");
}

//展示所有的教师列表
function showteacher(){

		$User = M('user_list');
		$techer_list1 = $User->where('Te_sign=1')->select();
		$techer_list2 = $User->where('Te_sign=0')->select();
		$this->assign("techer_list1",$techer_list1);
		$this->assign("techer_list2",$techer_list2);
		//var_dump($techer_list1);
		 $this->display(":showteacher");
}

//展示教师详细    
function detaliteacher(){

		$User = M('user_list');
		$id['Te_id']=7;//intval($_GET['Te_id']);
		$data = $User->where($id['Te_id'])->find();
		//var_dump($data);
		$this->assign("techer_detil",$datas);
		 $this->display(":detaliteacher");
}
//显示学生详情
function detalistudent(){

		$User = M('users');
		$id['id']=3;//intval($_GET['id']);
		$data = $User->where($id)->find();
		//var_dump($data);
		$this->assign("student_detil",$datas);
		 $this->display(":detalistudent");

}
//添加申请
function add(){

		   $Te_id=$_POST['Te_id'];
		   $User_id=$_POST['St_id'];
		   $St_name=$_POST['St_name'];
		   $title=$_POST['title'];
		   $Te_name=$_POST['Te_name'];
		   $content=$_POST['content'];
		   $contact_way=$_POST['contact_way'];
		   $email=$_POST['email'];
		 
		   $User = M('apply');

		   $data=array(
		'Te_id'=>$Te_id,
		'St_name'=> $St_name,
		'Te_name'=> $Te_name,
		'title'=> $title,
		'content'=>$content,
		'content'=>$content,
		'contact_way'=>$contact_way,
		'email'=>$email,
	            );
		 $User = $User->add($data);
}

//显示教师端的申请列表
function teacher_showapply(){
	//$value = session('user');
	  $User = M('apply');
		$map['Te_id'] = $value ;
		$list = $User->where($map)->select();
		//var_dump($data);
		$this->assign("student_detil",$datas);
		 $this->display(":teacher_showapply");
}

//显示学生已发送的申请列表
function student_showapply(){
	$value = session('user');
	$User = M('apply');
	$map['St_id'] = $value ;
	$list = $User->where($map)->select();
}

//教师编写自己的简介消息
function edit(){

		   $Te_id=$_POST['Te_id'];
		   $S_introduce=$_POST['S_introduce'];
		   $Te_job=$_POST['Te_job'];
		   $T_introduce=$_POST['T_introduce'];
		   $Max_number=$_POST['Max_number'];
		   $Now_number=$_POST['Now_number'];
		   $email=$_POST['email'];
		   $contact_way=$_POST['contact_way'];


		   $User = M('user_list');

		     $data=array(
		'Te_id'=>$Te_id,
		'S_introduce'=> $S_introduce,
		'T_introduce'=>$T_introduce,
		'contact_way'=>$contact_way,
		'Max_number'=>$Max_number,
		'Now_number'=>$Now_number,
		'email'=>$email,
	            );
		 $User = $User->add($data);

}
//绑定
function bundling(){
//首先判断教师当前的教导人数是不是已经超过
	  $Te_id['Te_id']=$_POST['Te_id'];
	   $User = M('user_list');

	   $data1 = $User->field('Now_number')->where($Te_id)->find();
	   $data2= $User->field('Max_number')->where($Te_id)->find();
	  
	   if( $data1+1<$data2){
		   //写入标志位
		$apply = M('apply');
		$stae['stae']=1;
	   $apply->where($Te_id)->save($stae); 
	   
	   }else{
	   error;
	   }
}
//显示学生绑定列表
function show_Tebundling(){
	$value['Te_id'] = session('user');
	$User = M('apply');
	$data1 = $User->where($value)->find();


}
//显示老师绑定列表
function show_Stbundling(){
	$value['St_id'] = session('user');
	$User = M('apply');
	$data1 = $User->where($value)->find();
}
//申请添加
function add_apply(){

 $this->display(":add");

}
}