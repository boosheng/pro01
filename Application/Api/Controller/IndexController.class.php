<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Api\Controller;
use OT\DataDictionary;
use Think\Controller;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends Controller {

	//系统首页
    public function _initialize(){
    }
    
    public function order(){
    	$cuid= intval($_REQUEST['cuid']);
    	$id= intval($_REQUEST['id']);
    	if($cuid>0){
    		$par['uid']=$cuid;
    	}
    	if($id>0){
    		$par['id']=$id;
    	}
    	$res = D("CustomerOrder")->where($par)->select();
    	echo json_encode($res,true);
    }
    
    public function customer(){
    	$id= intval($_REQUEST['id']);
    	if($id>0){
    		$par['id']=$id;
    	}
    	$res = D("Customer")->where($par)->select();
    	echo json_encode($res,true);
    }

}