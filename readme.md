# 中文语言包切换 resources/lang/zh
# 文件路径 config/filesystems.php line 16   'default' => env('FILESYSTEM_DRIVER', 'public'),
php artisan storage:link

# config/app.php
## 时区 设置  'timezone' => 'Asia/Shanghai',//Asia/Shanghai  UTC
## 语言包设置  'locale' => 'zh',//en
# 

# 邮件
配置：
<pre>
MAIL_DRIVER=smtp
MAIL_HOST=smtp.aliyun.com
MAIL_PORT=465
MAIL_USERNAME=jjg2zq@aliyun.com
MAIL_PASSWORD=tsxl7758258
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=jjg2zq@aliyun.com
MAIL_FROM_NAME=【辛巴收银系统】
</pre>

驱动前提：
composer require guzzlehttp/guzzle


#数据库
 ### php artisan migrate:install

## 新建表 simbaSaaS 库表
### 已创建
<pre>
php artisan make:model TRole --all
php artisan make:model TPermission --all
php artisan make:model UserRole --all
php artisan make:model RolePermission --all
php artisan make:model Department --all
php artisan make:model Employee --all
php artisan make:model VipMember --all
php artisan make:model Order --all
php artisan make:model OrderItem --all

php artisan make:model Product --all
php artisan make:model ProductSku --all
php artisan make:model ProductSkuShop --all
php artisan make:model SkuShop --all

php artisan make:model WorkReport --all

php artisan make:model LoginLog --all
php artisan make:model LogoutLog --all

php artisan make:model ReciveOrder --all
php artisan make:model ReciveOrderChangeLog --all
php artisan make:model ReciveOrderItem --all
php artisan make:model Company --all
php artisan make:model Shop --all

php artisan make:model SendOrder --all
php artisan make:model SendOrderItem --all
php artisan make:model SendOrderItemChangeLog --all

php artisan make:model CheckOrder --all
php artisan make:model CheckOrderItem --all
php artisan make:model CheckOrderItemChangeLog --all

php artisan make:model Supplier --all

php artisan make:model Stock --all
php artisan make:model StockLog --all
php artisan make:model Category --all

</pre>







  
  
  

