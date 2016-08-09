<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 基础控制器
 */
class BaseController extends Controller{
    public function index(){
        $this->display();
    }
}