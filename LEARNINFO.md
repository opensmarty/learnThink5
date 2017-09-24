# 构建工具build
## 默认生成公共文件
默认会读取应用目录application下面的build.php 作为自动生成的定义文件，如果你的定义文件位置不同，则需要使用--config参数指定如下：
```bash
php think build --config build.php
```
## 生成demo模块
```bash
php think build --module demo
```
## 生成model

# mysql操作
## mysql导入乱码
使用source命令导入的数据，在页面显示乱码,排除文件编码的原因，定位到是数据库的问题。
重新导入一次数据，使用mysql命令导入，增加参数： --default-character-set=utf8 
```bash
mysql -u root -p --default-character-set=utf8

show variables like "%char%"
set character_set_database = utf8;
set character_set_server = utf8;

show variables like "%collation%";
set collation_connection = utf8_general_ci;
```
## mysql免密码登录
```ini
[client]
host     = localhost
user     = root
password = os2017@db
socket   = /var/run/mysqld/mysqld.soc
```
## 创建mysql数据库
```sql
CREATE DATABASE learntp5 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```
## 修改表名
```sql
ALTER TABLE `opensmarty`.`snake_role`  RENAME TO  `opensmarty`.`os_role` ;
```