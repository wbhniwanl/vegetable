<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li class="active"><a><?php echo L('USER_INDEXADMIN_INDEX');?></a></li>
		</ul>
		<form method="post" class="js-ajax-form">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th align="center">ID</th>
						
						<th><?php echo L('NICENAME');?></th>
						<th><?php echo L('AVATAR');?></th>
						<th><?php echo L('Position_nature');?></th>
						<th><?php echo L('Word_place');?></th>
						<th><?php echo L('Sex_require');?></th>
						<th><?php echo L('Require_number');?></th>
						<th><?php echo L('Job_offer');?></th>
						<th><?php echo L('Work_time');?></th>
						<th><?php echo L('Contact');?></th>
						<th><?php echo L('Contact_way');?></th>
						<th><?php echo L('STATUS');?></th>

						<th align="center"><?php echo L('USER_STATUS_UNVERIFIED');?></th>
					</tr>
				</thead>
				<tbody>
					<?php $user_statuses=array("0"=>L('USER_STATUS_BLOCKED'),"1"=>L('USER_STATUS_ACTIVATED'),"2"=>L('USER_STATUS_UNVERIFIED')); ?>
					<?php if(is_array($Job_offer_list)): foreach($Job_offer_list as $key=>$vo): ?><tr>
						<td align="center"><?php echo ($vo["position_id"]); ?></td>
						
						
						<td><?php echo ($vo["position_title"]); ?></td>
						<td><?php echo ($vo["position_name"]); ?></td>
						<td><?php echo ($vo["position_nature"]); ?></td>
						<td><?php echo ($vo["work_place"]); ?></td>
						<td><?php echo ($vo["sex_require"]); ?></td>
						<td><?php echo ($vo["require_number"]); ?></td>
						<td><?php echo ($vo["job_offer"]); ?></td>
						<td><?php echo ($vo["work_time"]); ?></td>
						<td><?php echo ($vo["contact"]); ?></td>
						<td><?php echo ($vo["contact_way"]); ?></td>
						<td><?php echo ($vo["status"]); ?></td>
						
						
						
						
						
						<td><?php echo ($user_statuses[$vo['user_status']]); ?></td>
						<td align="center">
							<a href="<?php echo U('blog/index/checkre',array('id'=>$vo['position_id']));?>" ><?php echo L('BLOCK_USER');?></a>|
							<a href="<?php echo U('indexadmin/cancelban',array('id'=>$vo['id']));?>" class="js-ajax-dialog-btn" data-msg="<?php echo L('ACTIVATE_USER_CONFIRM_MESSAGE');?>"><?php echo L('ACTIVATE_USER');?></a>
						</td>
					</tr><?php endforeach; endif; ?>
				</tbody>
			</table>
			<div class="pagination"><?php echo ($page); ?></div>
		</form>
	</div>
	<script src="/public/js/common.js"></script>
</body>
</html>