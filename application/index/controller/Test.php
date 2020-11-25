<?php
namespace app\index\controller;

class Test
{

    function binarySearch($arr,$low,$high,$search)
    {
        if ($low <= $high){
            $middle = intval(($low+$high)/2);
        }
        if($arr[$middle] > $search){
            $high = $middle;
            return $this->binarySearch($arr,$low,$high,$search);
        }elseif($arr[$middle] < $search){
            $low = $middle;
            return $this->binarySearch($arr,$low,$high,$search);
        }else{
            return $middle;
        }
        die;
    }
    function get()
    {
        $arr = [1,2,3,4,5,6,7,8,10,14,16,18];
        $low = 0;
        $high = count($arr);
        $search = 14;
        $index = $this->binarySearch($arr,$low,$high,$search);
        dump($index);
        dump($arr);die;
    }

    function while()
    {
        $arr = [1,2,3,4,5,6,7,8,10,14,16,18];
        $num = 18;
        $temp = 0;
        $low = 0;
        $high = count($arr);
        while ($low < $high) {
            $middle = intval(($low+$high)/2);
            if($arr[$middle] > $num){
                
            }
        }
    }
    /**
     * 文件A 的路径是 /home/web/lib/img/cache.php
        文件B的路径是 /home/web/api/img/show.php
        那么，文件A相对于文件B的路径是 ../../lib/img/cache.php
     */
    function xdDir()
    {
        $a = '/home/web/lib/img/cache.php';
        $b = '/home/web/api/img/show.php';
        // 求a相对于b的路径,即文件B 访问 文件A的相对路径。  ../../lib/img/cache.php
        $aArr = explode('/',dirname($a));
        $bArr = explode('/',dirname($b));
        $aCount = count($a);
        $bCount = count($b);
        $len = max($aLen, $bLen);
        $temp = '';
        // $k = 0；
        // for ($i=0; $i <$len ; $i++) { 
        //     if($k == 0){
        //         if(isset($aArr[$i]) && ($aArr[$i]!=$bArr[$i]) ){
        //             $temp = '../';
        //             if(isset($aArr)){
        //             }
        //             $k = $k+1;
        //         }

        //     }
        //     if(empty($bArr[$i]) ){
        //         $temp .= '../';
        //     }
        // }
        // $this->getPath($a,$b);die;
    }
    function getPath($a, $b)
    {
        $aArr = explode('/', dirname($a));
        $bArr = explode('/', dirname($b));

        $aLen = count($aArr);
        $bLen = count($bArr);

        $len = max($aLen, $bLen);

        $k = 0;
        for($i = 0; $i < $len; $i++)
        {
            if($k == 0){
                if(isset($aArr[$i]) && ($aArr[$i] != $bArr[$i]))
                {
                    $d .= '../';
                    if(isset($bArr[$i]))
                    {
                        $nP[$i] = $bArr[$i];
                    }
                    $k = $k + 1;
                }
            }else{
                if(isset($bArr[$i]))
                {
                    $d .= '../';
                }
                if(isset($aArr[$i]))
                {
                    $nP[$i] = $bArr[$i];
                }
            }
        }
        echo $d.implode('/', $nP);
    }
    /**
     * 返回二叉树的中序遍历
     */
    function inorderTraversal($root) {
        $root = [1,null,2,3];
        $res = [];         
        $this->helper($root,$res);         
        return $res;
    }
    function helper($root,&$res){
        if($root == null) return;
        $this->helper($root->left,$res);
        $res[] = $root->val;
        $this->helper($root->right,$res);
    }
    /**
     * 给定 nums = [2, 7, 11, 15], target = 9
        因为 nums[0] + nums[1] = 2 + 7 = 9
        所以返回 [0, 1]
     */
    function twoSum() 
    {
        $nums = [2, 7, 11, 15];
        $target = 9;
        foreach ($nums as $k=> $v){
            if(isset($result[$target - $v]) && $nums[$result[$target - $v]] + $v === $target) {
                 dump([$result[$target - $v],$k]);die;
            }
            $result[$v] = $k;
        }
    }
    // 阶乘
    function jiecheng($n)
    {   
        if($n==1){
            return 1;
        }
        $res = $this->jiecheng($n-1)*$n;
        return $res;
    }
    function getOneJc()
    {
        $n = 50;
        $res = $this->jiecheng($n);
        return $res;
    }
    // 二分查找
    function erfen($arr,$target,$low,$high)
    {
        // if($low<$high){
            $middle = intval(($low+$high)/2);
        // }
        if($target == $arr[$middle]){
            return $middle;
        }
        if($arr[$middle] > $target){
            $high = $middle;
            $res = $this->erfen($arr,$target,$low,$high);
        }else{
            $low = $middle;
            $res = $this->erfen($arr,$target,$low,$high);
        }
        return $res;
        // die;
    }
    function geterfen()
    {
        $arr = [1,3,4,6,7,18,33,88,391];
        $count = count($arr);
        $target = 3;
        $res = $this->erfen($arr,$target,0,$count);
        return $res;
    }
    //快排
    function quickSort($arr)
    {
        if (count($arr) <= 1) {
            return $arr;
        }
        $base = $arr[0];
        $left = [];
        $right = [];
        for ($i=1; $i <count($arr) ; $i++) { 
            if($arr[$i] < $base){
                $left[] = $arr[$i];
            }else{
                $right[] = $arr[$i];
            }
        }
        $left_ = $this->quickSort($left);
        $right_ = $this->quickSort($right);
        return array_merge($left_,[$base],$right_);
    }
    function getQuickSort()
    {
        $arr = [1,44,5,22,56,75,868,33,333,908];
        // $res = $this->quickSort($arr);
        $res = $this->insertSort($arr);
        dump($res);
        return $res;
    }
    //插入排序
    function insertSort($arr)
    {
        $count = count($arr);

        for ($i=1; $i <$count ; $i++) { 
            $temp = $arr[$i];
            for ($j=$i-1; $j >=0 ; $j--) { 
                if($temp <$arr[$j]){
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $temp;
                }else{
                    break;
                }
            }
        } 
        return $arr;  
    }
    function pregUrl()
    {
        $text = 'http://tp.swoole.com/index/test/pregurl?id=1aaa 哈哈哈哈ask等哈少框架';
        $text = 'http://192.168.1.1 哈哈哈哈ask等哈少框架';
        $pattern = '/(https?:\/\/([\w\.\-])+(:[0-9]{1,4})?(\/([\w\.\-&%#+\?=]*)*)*)/i';
        preg_match($pattern, $text,$match);
        dump($match);die;
        $text = preg_replace('/(https?:\/\/([\w\.\-])+(:[0-9]{1,4})?(\/([\w\.\-&%#+\?=]*)*)*)/i', '<a href="\1" target="_blank">\1</a>', $text);
        dump($text);
        return 11;
    }
}
