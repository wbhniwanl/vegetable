<?php

namespace Home\Model;
use Think\Model;


class OutputModel extends Model {//新闻详细输出
public function output_text($text_id){
$User = M('article');
$map['id'] = $text_id;
$text_info = $User->where($map)->select();

return $text_info;


}

public function output_title(){//新闻标题列表输出模板
$User = M('article');
//$map['id'] = $title_id;
$title_info = $User->order('id desc')->select();//where($map)->getField('subject');

return $title_info;


}

public function output_job_list()
	{//招聘信息列表输出模板
$User = M('recruit_list');
//$map['Position_id'] = $Position_id;
//$Position_info = $User->where($map)->select();
//$Position_info = $User->where($map)->getField('Position_name');
$Position_info = $User->order('Position_id desc')->select();
return $Position_info;

}

public function ouput_job($Position_id)
	{//招聘信息详细输出模板
$User = M('recruit_list');
$map['Position_id'] = $Position_id;
$Position_info = $User->where($map)->select();
//$Position_info = $User->where($map)->getField('Position_name');

return $Position_info;

}


public function output_time($time_id)
	{//利用ID输出时间
$User = M('article');
$map['id'] = $time_id;
$time_info = $User->where($map)->getField('createtime');
//$time_info = date("Y-m-d H:i:s",$value['$time_info']);

return $time_info;

}

public function output_title_ID($title_id){//利用ID输出标题
$User = M('article');
$map['id'] = $title_id;
$title_info = $User->where($map)->getField('subject');
return $title_info;
}












}


?>