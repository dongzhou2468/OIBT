<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 2:15 PM
 */

class adminController {

    public static $var = 'hello world';

    public function __construct(){
        session_start();
//        if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
//            $this->showmessage('请登录后再操作！', 'admin.php?controller=admin&method=login');
//        }
    }

    public function index(){
        $var = 'intel1234';
//        VIEW::assign("var", $var);
//        VIEW::display('admin/index.html');
//        echo '<script language="JavaScript">location.replace("index1.php");</script>';

        $row = array("abc","def", "ghi");
        $url = "http://localhost/Test141209/index1.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $row);
        $output = curl_exec($ch);

        $this->redirect($output);
    }

    public function login(){
        $useremail = daddslashes($_POST['email']);
        $password = daddslashes($_POST['password']);

        if($auth = $this->checkAuth($useremail, $password)){
            $_SESSION['auth'] = $auth;
            echo '<script language="JavaScript">document.body.innerHTML="";</script>';
            $this->showmessage('登录成功！', 'admin.php?controller=index&method=index');
        }else{
            echo '<script language="JavaScript">document.body.innerHTML="";</script>';
            $this->showmessage('登录失败！', 'admin.php?controller=admin&method=index');
        }
    }

    private function checkAuth($useremail, $password){
        DB::dbConnect();
        $sql = 'select * from user where email="'.$useremail.'"';
        $result =  DB::query($sql);
        DB::dbClose();
        $rs = mysql_fetch_array($result, MYSQL_ASSOC);
        if((!empty($rs))&&$rs['password']==$password){
            return $rs;
        }else{
            return false;
        }
    }

    private function redirect($output){
        echo '<script language="JavaScript">document.body.innerHTML="";</script>';   //js清除页面内容
        print_r($output);
    }

    private function showmessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}