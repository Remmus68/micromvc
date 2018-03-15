<?php


class File
{
    const ROOT_PATH = __DIR__.'/../../';

    public static function cache($data, $uniqDate, $prefix) {
        $filename=md5($uniqDate);
        $dir = '/var/cache/'. $prefix . '/';
        self::createFile($filename, $dir, $data);
    }

    public static function log($data, $type) {
        $filePath = self::ROOT_PATH . '/log/' . $type . '.log';

    }

    public static function getCache($uniqDate, $prefix) {
        $filename=md5($uniqDate);
        $dir = '/var/cache/'. $prefix . '/';
        $filePath = self::ROOT_PATH.$dir.$filename;
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        }else{
            return null;
        }
    }

    public static function createFile($fileName, $dir, $data, $mode='w') {
        self::createDir($dir);
        $handle=fopen(self::ROOT_PATH .$dir.$fileName, $mode);
        $result=fwrite($handle, $data);
        fclose($handle);
        chmod(self::ROOT_PATH .$dir.$fileName, 0777);
        return $result;
    }

    public static function createDir($dir) {
        $dir = self::ROOT_PATH . $dir;
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
            chmod($dir, 0777);
        }
    }
}