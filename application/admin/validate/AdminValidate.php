<?php
// +----------------------------------------------------------------------
// | opensmarty
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2022 https://opensmarty.github.io All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: nicolas <1327400982@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\validate;

use think\Validate;

class AdminValidate extends Validate
{
    protected $rule = [
        ['userName', 'require', '用户名不能为空'],
        ['password', 'require', '密码不能为空'],
        ['code', 'require', '验证码不能为空']
    ];

}