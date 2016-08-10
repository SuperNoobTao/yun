<?php
namespace Admin\Controller;
use Think\Controller;
class SiteController extends BaseController {

    public function config(){
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            //写入
            $data=$_POST;
            $where['id']=1;
            $savedata=M('siteconfig')->where($where)->save($data);
            if ($savedata) {
                $this->success('保存成功');
            }else{
                $this->error('保存失败');
            }

        }else{
            //读取
            $where['id']=1;
            $sitemess=M('siteconfig')->where($where)->find();
            $this->assign('sitemess',$sitemess);
            $this->display();
        }
    }
}