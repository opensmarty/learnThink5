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

class UserValidate extends Validate
{
    protected $rule = [
        ['user_name', 'unique:user', '管理员已经存在']
    ];

}