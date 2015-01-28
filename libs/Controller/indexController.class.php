<?php
/**
 * User: hangche1
 * Date: 11/27/2014
 * Time: 3:07 PM
 */

class indexController {

    public static $str = 'hello world<br />';
    private $arr;

    public function index(){

        DB::dbConnect();
        $sql = "SELECT * FROM Apps";
        $result =  DB::query($sql);
        if($result){
            echo "query success";
            var_dump($result);
        }else{
            echo "query fail!";
        }
        $num = mysql_num_rows($result);
        for($a = 0; $a < $num; $a++){
            $row = mysql_fetch_assoc($result);
            var_dump($row);
            $arr[] = $row;                          //apps数组
        }
        DB::dbClose();

        //$app = M('app');                            //app model

        $url = "http://localhost/Test141209/index1.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);             //can only post array!
        $output = curl_exec($ch);

        echo '<script language="JavaScript">document.body.innerHTML="";</script>';   //js清除页面内容
        print_r($output);

    }

    public function getStr(){
        return self::$str;
    }
}