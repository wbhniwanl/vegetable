<?php
/**
 * 会员注册
 */
namespace Company\Controller;
use Common\Controller\HomebaseController;
class RegisterController extends HomebaseController {
	
	function index(){
	    if(sp_is_user_login()){ //已经登录时直接跳到首页
	        redirect(__ROOT__."/");
	    }else{
	        $this->display(":register");
	    }
	}
	
	function doregister(){
    	
    	if(isset($_POST['email'])){
    	    
    	    //邮箱注册
    	    $this->_do_email_register();
    	    
    	}elseif(isset($_POST['mobile'])){
    	    
    	    //手机号注册
    	    $this->_do_mobile_register();
    	    
    	}else{
    	    $this->error("注册方式不存在！");
    	}
    	
	}
	

	
	private function _do_email_register(){
	   
        if(!sp_check_verify_code()){
            $this->error("验证码错误！");
        }
        
        $rules = array(
            //array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
            array('email', 'require', '邮箱不能为空！', 1 ),
            array('password','require','密码不能为空！',1),
            array('repassword', 'require', '重复密码不能为空！', 1 ),
            array('repassword','password','确认密码不正确',0,'confirm'),
           // array('email','email','邮箱格式不正确！',1), // 验证email字段格式是否正确
            	
        );
	    
	     
	    $users_model=M("user_list");
	     
	    if($users_model->validate($rules)->create()===false){
	        $this->error($users_model->getError());
	    }
	     
	    $password=$_POST['password'];
	    $email=$_POST['email'];
	    $username=$_POST['username'];
		$teacher_name=$_POST['teacher_name'];
		$Content_way=$_POST['Company_way'];
	    //用户名需过滤的字符的正则
	    $stripChar = '?<*.>\'"';
	    if(preg_match('/['.$stripChar.']/is', $username)==1){
	        $this->error('用户名中包含'.$stripChar.'等非法字符！');
	    }
	     
 	    $banned_usernames=explode(",", sp_get_cmf_settings("banned_usernames"));
	     
 	    if(in_array($username, $banned_usernames)){
	        $this->error("此用户名禁止使用！");
    }
	     
	    if(strlen($password) < 5 || strlen($password) > 20){
	        $this->error("密码长度至少5位，最多20位！");
	    }
	    
	    $where['User_id']=$username;
	    
	    
	    $ucenter_syn=C("UCENTER_ENABLED");
	    $uc_checkemail=1;
	    $uc_checkusername=1;
	    if($ucenter_syn){
	        include UC_CLIENT_ROOT."client.php";
	        $uc_checkemail=uc_user_checkemail($email);
	        $uc_checkusername=uc_user_checkname($username);
	    }
	     
	    $users_model=M("user_list");

	    $result = $users_model->where($where)->count();
	    if($result || $uc_checkemail<0 || $uc_checkusername<0){
	       $this->error("用户名或者该邮箱已经存在！");
	    }else{
	        $uc_register=true;
	        if($ucenter_syn){
	             
	            $uc_uid=uc_user_register($username,$password,$email);
	            //exit($uc_uid);
	            if($uc_uid<0){
	                $uc_register=false;
	            }
	       }
	        if($uc_register){
	            $need_email_active=C("SP_MEMBER_EMAIL_ACTIVE");
	            $data=array(
	                'User_id' => $username,
	                'Password' => $password,
	                'Teacher_name' => $teacher_name,
	                'Email' => $email,
	                'Content_way' => $Content_way,
	            );
	            $rst = $users_model->add($data);
	            if($rst){
	                //登入成功页面跳转
	               // $data['id']=$rst;
	              //  $_SESSION['user']=$data;
	                	
	                //发送激活邮件
	                if($need_email_active){
	                    $this->_send_to_active();
	                    unset($_SESSION['User_id']);
	                    $this->success("注册成功，激活后才能使用！",U("user/login/index"));
	                }else {
	                    $this->success("注册成功！请等待管理员审核！",__ROOT__."/");
	                }
	                	
	            }else{
	                $this->error("注册失败！",U("user/register/index"));
	            }
	             
	        }else{
	            $this->error("注册失败！",U("user/register/index"));
	        }
	         
	    }
	}
	

	
	
}