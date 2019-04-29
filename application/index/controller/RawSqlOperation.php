<?php
namespace app\index\controller;

use think\Db;

class RawSqlOperation {
	//创建
	public function create(){
		$result = Db::execute('insert into think_data (id, name ,status) values (5, "thinkphp",1)');
		dump($result);
	}

	//更新
	public function update(){
		// 更新记录
		$result = Db::execute('update think_data set name = "framework" where id = 5 ');
		dump($result);
	}

	//读取
	public function read(){
		//query方法返回的结果是一个数据集（数组），如果没有查询到数据则返回空数组。
		$result = Db::query('select * from think_data where id = 5');
		dump($result);
	}

	//删除
	public function delete(){
		$result = Db::execute('delete from think_data where id = 5 ');
		dump($result);
	}
}