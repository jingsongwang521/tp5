<?php
namespace app\index\controller;
use traits\controller\Jump;
use think\cache\driver\Redis;
class Index
{
    use Jump;
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    //冒泡
    public function bubble()
    {
    	$arr = [8,9,21,12,434,55,1,45,8,23,9];
        $arr = [1,2,3,4,5,6,7,9,8];
    	$count = count($arr);
        $num = 0;
    	for ($i=0; $i < $count; $i++) {
            $flag = false;
    		for ($j=$i+1; $j <$count ; $j++) {
    			if($arr[$i] > $arr[$j]){
    				$temp = $arr[$i];
    				$arr[$i] = $arr[$j];
    				$arr[$j] = $temp;
                    $flag = true;
    			}
                $num++;
    		}
            if(!$flag){
                // break;
            }
            $num++;
    	}
        dump($num);
        $numbers = [1,2,3,4,5,6,7,9,8];
        $num = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $num++;
            $flag = 1;
            for ($j = 0; $j < count($numbers) - $i - 1; $j++) {
                $num++;
                if ($numbers[$j] > $numbers[$j + 1]) {
                    $flag = 0;
                    $temp = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j + 1] = $temp;
                }
            }
            if($flag) break;
        }
        dump($num);
        dump($numbers);exit;
    	dump($arr);
    }
    //快排
    public function quick($arr,$num)
    {
    	$base = 55;
    	for ($i=0; $i < $count; $i++) { 
    		if($arr[$i] > $base){
    			$left[] = $arr[$i];
    		}else{
    			$right[] = $arr[$i];
    		}
    	}
    	$right = $this->quick($quick);    	
    }
    function cache()
    {
        $redis = new Redis();
        $name = 'china';
        $ins = $redis->set($name,'nishishui',30);
        $ins = $redis->get($name);
        dump($ins);
        dump($redis);die;
    }
    function getTest()
    {
        echo 'swoole_other';
        echo '1111';
        echo '2222';
    }
}
