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

class ArticleValidate extends Validate
{
    protected $rule = [
        ['title', 'require', '文章标题不能为空'],
        ['description', 'require', '文章描述不能为空'],
        ['keywords', 'require', '关键词不能为空'],
        ['thumbnail', 'require', '缩略图不能空'],
        ['content', 'require', '文章内容不能为空']
    ];

}