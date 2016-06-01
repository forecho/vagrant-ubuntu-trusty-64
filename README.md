打造自己的 vagrant 开发环境
================

## 包括以下环境和软件：

- Nginx 1.4.6
- Mysql 5.5.44
- PHP 5.6.22
- git
- [autojump](https://github.com/joelthelion/autojump)
- [composer](https://getcomposer.org)
- vim
- redis (包括 phpredis 扩展) 2.8.4
- MongoDB  (包括 php mongo 扩展) 2.4.9
- Memcacahe (包括 php memcacahe 和 php memcached 扩展) 1.4.14
- [swoole](http://www.swoole.com/)


## Box地址

链接: http://pan.baidu.com/s/1nt1hDMD 密码: ckg4

按时间排序使用最新的 box（即 Ubuntu20160601.box）。


## 如何搭建

下载最新的 box, 执行以下命令添加刚才下载好的 box 到 Box list：

```sh
// cd 下载 box 目录
// vagrant box add 名称 路径
vagrant box add ubuntu64 Ubuntu20160601.box

vagrant box list // 查看
mkdir ubuntu // 创建文件夹
cd ubuntu 
vagrant init ubuntu64 // 初始化

```
然后下载本项目到目前的目录下，并且替换 Vagrantfile 文件，然后启动 vagrant

```
vagrant up
```

最后你可以愉快的时候 Xshell 工具 SSH 连接了。

```
IP：192.168.33.30
端口：22
用户名：vagrant
密码：vagrant
```

连接之后切换 root 用户：

```
sudo su // 不需要输入密码
```

## 关于 nginx 的使用

默认这个 box 我已经配置好 LNMP 环境了。PHP 的项目直接放在当前文件夹的 `php` 文件夹内就可以了。（默认配置的是 php 文件夹，如果要换其他文件夹，请自行修改 nginx 的 dev.conf 文件的配置）

示例：

```
根目录
	|--php
		|--cai
			|--zheng
				|--hai
		|--getyii
			|--frontend
				|--web
```

默认我使用的是 `*.dev.com` 作为域名。

只要在**本机（一般是 Windows 系统）**的 hosts 文件，添加一下代码：

```
……
192.168.33.30	cai.dev.com
192.168.33.30	cai-zheng-hai.dev.com
192.168.33.30	getyii-frontend-web.dev.com
……
```

**注意**
- 因为是虚拟机，所以添加 hosts 这一步是必须的。
- 域名只做了三层解析，太多层觉得没必要。也就是说URL `cai-zheng-hai-open.dev.com` 默认是不行的。
- **Windows 可以使用 Acrylic 软件让 host 支持通配符解析，参考文章：[支持通配符和正则表达式的hosts文件(本地dns缓存及代理)](http://grow.sinaapp.com/?p=1368)**
- **Mac 可以使用 Dnsmasq 软件让 host 支持通配符解析，参考文章：[Mac OSX 安装 Dnsmasq 来加速网络](http://www.shixf.com/wiki/os/macosx/dnsmasq)**



## 关于MySQL

默认用户名：root

默认密码：root


## 关于一些常用的命令

**PHP-FPM**

- 重启
```
sudo service php5-fpm restart
```
- PHP 配置文件位置：`/etc/php5/fpm/php.ini`
- 查看 phpinfo() -> http://test.dev.com/

**Nginx**

- 重启
```sh
sudo service nginx restart
```

- 修改虚拟空间配置文件：
```
sudo vim /etc/nginx/conf.d/default.conf
```

**MySQL**

- 重启
```sh
sudo service mysql restart
```

**使用在线 phpmyadmin**

```sh
cp mysql.zip /vagrant/php/
unzip mysql.zip
```

然后访问 <http://mysql.dev.com/>

**Redis**

- 重启
```sh
sudo service redis-server restart
```
- 在线 phpRedisAdmin -> http://redis.dev.com/
- 测试 php redis 扩展 -> http://test.dev.com/redis.php

**Memcachad**

- 重启
```sh
sudo service memcached restart
```
- 在线 MemAdmin -> http://memcached.dev.com/
- 测试 php memcache 扩展 -> http://test.dev.com/memcache.php
- 测试 php memcached 扩展 -> http://test.dev.com/memcached.php

**MongoDB**

- 重启
```sh
sudo service mongodb restart
```

**使用在线 RockMongo（账号：admin 密码：admin）**

```sh
cp mongo.zip /vagrant/php/
unzip mongo.zip
```

然后访问 <http://mongo.dev.com/>

## Vagrant 参考文档

- <http://ninghao.net/blog/2077>
- <https://github.com/astaxie/Go-in-Action/blob/master/ebook/zh/01.2.md>
