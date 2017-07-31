# PHP-Lab-Note
# 集成环境
## 下载地址
    www.wampserver.com
## 选项大意
1. localhost 本地主机

1. phpMyAdmin 数据库

1. www目录 根目录地址 打开可现实网站根目录

1. Apache 

    - Version   版本信息
    - Service 服务
    - Apache 模块 (A)
    - Alias 目录(L)
    - httpd.conf 配置文件
    - Apache 错误日志
    - Apache 访问日志
1. PHP

    - 设置
    - 扩展
    - php.ini 
    - php 错误日志
1. MySQL
    
    MySQL控制台 
    my.ini 配置文件
## 自定义网址根目录
1. 新建文件夹：F/Dome
1. Apache-》httpd.conf
1. 查找  DocumentRoot "f:/wamp/www/" 改为 "f:/Demo" 
1. 向下滚动 找到 Directory "f:/wamp/www" 改为 "f:/Demo"
1. 保存
1. 重新启动所有服务
## 更改web开发包
1. f:wamp 
1. 打开 wampmanager.ini
1. 查找 menu.left 
1. "WWW路径" 改为 "Demo路径"  "f/wamp/www" 改为 "f:/Dome"
1. 保存
1. 打开 wampmanager.tpl
1. 查找 menu.left 
1. "${w_wwwDirectory}" 改为 "Demo 目录"  ; "${wwwDir}" 改为 "F:/Dome";
1. 保存
1. 重启

## 
# 简单语法
