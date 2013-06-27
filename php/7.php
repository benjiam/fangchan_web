<?
$mem = new Memcache; //创建Memcache对象
$mem->connect("127.0.0.1", 11211); //连接Memcache服务器
$val = "abc";
$key = md5($val);
//$mem->set($key, $val, 0, 120); //增加插入一条缓存，缓存时间为120s
if(($k = $mem->get('username'))){ //判断是否获取到指定的key
echo 'from cache:'.$k;
} else {
echo 'normal'; //这里我们在实际使用中就需要替换成查询数据库并创建缓存.
}
?>
