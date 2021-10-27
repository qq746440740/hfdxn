<?php
//测试git push同步到远程服务器

//本地路径
$local = '/home/wwwroot/www.hfdxn.com';
//仓库地址
$remote = 'https://github.com/qq746440740/hfdxn.git';
 
//密码
// $password = 'hfdxn123456';
//
// //获取请求参数
// $request = file_get_contents('php://input');
// if (empty($request)) {
//     die('request is empty');
// }
//
// //验证密码是否正确
// $data = json_decode($request, true);
// if ($data['password'] != $password) {
//     die('password is error');
// }

echo shell_exec("cd {$local} && git pull {$remote} 2>&1");
die('done ' . date('Y-m-d H:i:s', time()));
