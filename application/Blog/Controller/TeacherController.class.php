<?php
namespace Blog\Controller;
use Common\Controller\HomebaseController;

class TeacherController extends HomebaseController{

function index(){
  $this->display(":avatar");
}


 function avatar(){
    	$userid=sp_get_current_userid();
		$user=$this->users_model->where(array("id"=>$userid))->find();
		$this->assign($user);
    	$this->display();
    }
    
    function avatar_upload(){
    	$config=array(
    			'FILE_UPLOAD_TYPE' => sp_is_sae()?"Sae":'Local',//TODO 其它存储类型暂不考虑
    			'rootPath' => './'.C("UPLOADPATH"),
    			'savePath' => './avatar/',
    			'maxSize' => 512000,//500K
    			'saveName'   =>    array('uniqid',''),
    			'exts'       =>    array('jpg', 'png', 'jpeg'),
    			'autoSub'    =>    false,
    	);
    	$upload = new \Think\Upload($config);//
    	$info=$upload->upload();
    	//开始上传
    	if ($info) {
    	//上传成功
    	//写入附件数据库信息
    		$first=array_shift($info);
    		$file=$first['savename'];
    		$_SESSION['avatar']=$file;
    		$this->ajaxReturn(sp_ajax_return(array("file"=>$file),"上传成功！",1),"AJAX_UPLOAD");
    	} else {
    		//上传失败，返回错误
    		$this->ajaxReturn(sp_ajax_return(array(),$upload->getError(),0),"AJAX_UPLOAD");
    	}
    }
    
    function avatar_update(){
    	if(!empty($_SESSION['avatar'])){
    		$targ_w = intval($_POST['w']);
    		$targ_h = intval($_POST['h']);
    		$x = $_POST['x'];
    		$y = $_POST['y'];
    		$jpeg_quality = 90;
    		
    		$avatar=$_SESSION['avatar'];
    		$avatar_dir=C("UPLOADPATH")."avatar/";
    		if(sp_is_sae()){//TODO 其它存储类型暂不考虑
    			$src=C("TMPL_PARSE_STRING.__UPLOAD__")."avatar/$avatar";
    		}else{
    			$src = $avatar_dir.$avatar;
    		}
    		
    		$avatar_path=$avatar_dir.$avatar;
    		
    		
    		if(sp_is_sae()){//TODO 其它存储类型暂不考虑
    			$img_data = sp_file_read($avatar_path);
    			$img = new \SaeImage();
    			$size=$img->getImageAttr();
    			$lx=$x/$size[0];
            	$rx=$x/$size[0]+$targ_w/$size[0];
            	$ty=$y/$size[1];
            	$by=$y/$size[1]+$targ_h/$size[1];
    			
    			$img->crop($lx, $rx,$ty,$by);
    			$img_content=$img->exec('png');
    			sp_file_write($avatar_dir.$avatar, $img_content);
    		}else{
    			$image = new \Think\Image();
    			$image->open($src);
    			$image->crop($targ_w, $targ_h,$x,$y);
    			$image->save($src);
    		}
    		
    		$userid=sp_get_current_userid();
    		$result=$this->users_model->where(array("id"=>$userid))->save(array("avatar"=>$avatar));
    		$_SESSION['user']['avatar']=$avatar;
    		if($result){
    			$this->success("头像更新成功！");
    		}else{
    			$this->error("头像更新失败！");
    		}
    		
    	}
    }
    

}