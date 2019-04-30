<?php
namespace app\index\controller;

use think\Controller;

class ViewDemo extends Controller{

	public function index(){
		// return  $this->fetch();
		// return $this->fetch("ViewDemo/index");
		// return $this->fetch("ViewDemo1/test");
		//return $this->fetch("admin@/HelloWorld/another");

		return $this->fetch("./template/index.html");
	}


	public function template_assign(){

		//单个模板变量赋值
		$this->assign("name","hzt");

		//批量模板变量赋值
		$this->assign([
			"sex"=>"male",
			"city"=>"wf"	
		]);

		//参数传入赋值
		return $this->fetch("ViewDemo/Index",["lover"=>"xxx","where"=>"yyy"]);
	}
}