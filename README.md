打造自己的 vagrant 开发环境
================

## 包括以下环境和软件：

- Nginx 1.4.6
- Mysql 5.5.44
- PHP 5.5.9
- git
- [autojump](https://github.com/joelthelion/autojump)
- [composer](https://getcomposer.org)
- vim


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



## 关于MySQL

默认用户名：root

默认密码：root


## Box地址



## 参考文档

- <http://ninghao.net/blog/2077>
- <https://github.com/astaxie/Go-in-Action/blob/master/ebook/zh/01.2.md>
