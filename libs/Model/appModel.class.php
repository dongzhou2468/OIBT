<?php
/**
 * User: hangche1
 * Date: 12/9/2014
 * Time: 3:54 PM
 */

class appModel{

    private $id;
    private $name;
    private $type;
    private $dscp;
    private $version;
    private $size;
    private $srcPath;
    private $imgPath;
    private $ISV;
    private $dlTimes;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = $type;
    }

    public function getDscp(){
        return $this->dscp;
    }
    public function setDscp($dscp){
        $this->dscp = $dscp;
    }

    public function getVersion(){
        return $this->version;
    }
    public function setVersion($version){
        $this->version = $version;
    }

    public function getSize(){
        return $this->size;
    }
    public function setSize($size){
        $this->size = $size;
    }

    public function getSrcPath(){
        return $this->srcPath;
    }
    public function setSrcPath($srcPath){
        $this->srcPath = $srcPath;
    }

    public function getImgPath(){
        return $this->imgPath;
    }
    public function setImgPath($imgPath){
        $this->imgPath = $imgPath;
    }

    public function getISV(){
        return $this->ISV;
    }
    public function setISV($ISV){
        $this->ISV = $ISV;
    }

    public function getDlTimes(){
        return $this->dlTimes;
    }
    public function setDlTimes($dlTimes){
        $this->dlTimes = $dlTimes;
    }

}