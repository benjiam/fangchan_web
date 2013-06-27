<?php
try{
	$obj = new PDO('mysql:host=127.0.0.1;dbname=fangchan', 'dba1', 'dba12345');//生成PDO示例
	$obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置以异常的形式报错
	$obj->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );//设置fetch时返回数据形式为数组
	$obj->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$obj->exec("set names 'utf8'"); 

	$ps = $obj->prepare("SELECT *  FROM `users` WHERE `userid` != ? and `password` != ? ");//生成一个PDOStatement实例
	$ps->execute(array(13564054971, "1111111111111111111111111"));
	//$ps->bindValue(1 , 13564054971);//第一个？处的参数换成 文章，不需要附加任何处理
	//$ps->bindValue(2 , "1111111111111111111111111");//第二个？处的参数换成2，不需要附加任何处理
	//$ps->execute(); //正式执行。
	$res = $ps->fetchAll();//得到查询结果
	var_dump($res);
} catch(Exception $e){
	exit($e->getMessage());
}

?>
