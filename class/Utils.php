<?php


class Utils {

    public function __construct() { }

    public function extractToJson($jsonFile) {
        $decode = json_decode($jsonFile);
        $arr = array();

        foreach($decode as $key => $value) {
            array_push($arr, $value);
        }
        return $arr;
    }

    public static function mimetypeImageValid($mime) {
        $mimeValid = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG', 'bmp', 'BMP');
        $ret = false;

        for ($i = 0; $i < count($mimeValid); $i ++) { 
            if ($mime == $mimeValid[$i]) {
                $ret = true;
                break;
            }
        }

        return $ret;
    }

    public static function verifyMimetypeImage($file) {
        $dataNow = date('Y-d-m-his');
        $parse = explode(".", $file); 
        $mime = end($parse);
        if (Utils::mimetypeImageValid($mime) == true) {
            $newName =  'image_'.$dataNow.".".$mime;
            $newName = strtolower($newName);
            $ret = array('success' => true, 'newName' => $newName);
        } else {
            $ret = array('success' => false, 'newName' => null );
        }

        return $ret;
    }

    public static function response($status, $data, $err) {
        $response = array("status" => $status, "data" => $data, "error" => $err);
        return Utils::toJSON($response);
    }

    public static function toJSON($data) {
        return json_encode($data, true);
    }

    public static function decodeJSON($json) {
        return json_decode($json, true);
    }

}