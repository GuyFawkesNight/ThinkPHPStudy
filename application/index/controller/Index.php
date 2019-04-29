<?php
namespace app\index\controller;

class Index
{
    public function index($name='')
    {
        return 'hello, '.$name ;
    }
}
