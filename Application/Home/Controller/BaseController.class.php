<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public  function _initialize()
    {
        $where['id']=1;
        $g_sitemess=M('siteconfig')->where($where)->find();
        $this->assign('g_sitemess',$g_sitemess);
    }
}