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

class RoleValidate extends Validate
{
    protected $rule = [
        ['role_name', 'unique:role', '角色已经存在']
    ];

}