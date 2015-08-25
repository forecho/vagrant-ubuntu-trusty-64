<?php
//创建Memcache对象
$mem = new Memcache();
//连接Memcache服务器
$mem->connect('127.0.0.1', 11211);
$val = 'This is a memcache test!';
$key = md5($val);
//判断是否获取到指定key的数据，没缓存则增加一条过期时间为300秒的数据
if ( $data = $mem->get($key) )
{
    echo 'from cache data: ' . $data;
}
else
{
    $mem->set($key, $val, 0, 300);
    echo 'new set data: ' . $val;
}