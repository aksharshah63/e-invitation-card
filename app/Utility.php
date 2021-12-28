<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    public static function uploadFile($obj_file, $date = '') {
        $path = base_path('public/wedding/images/');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (null !== $obj_file) {
            $file = $obj_file;
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
        } else {
            $name = '';
        }
        return $name;
    }

    public static function audiouploadFile($obj_file, $date = '') {
        $path = base_path('public/wedding/audio/');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (null !== $obj_file) {
            $file = $obj_file;
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
        } else {
            $name = '';
        }
        return $name;
    }

    public static function occasionuploadFile($obj_file, $id) {
        $path = base_path('public/occasion/images/' . $id);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (null !== $obj_file) {
            $file = $obj_file;
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
        } else {
            $name = '';
        }
        return $name;
    }

    public static function postgetImageUrl($image) {
            if (file_exists(public_path() . '/wedding/images/' . $image)) {
                $imageurl = asset('/wedding/images/' . $image);
            } elseif (substr($image, 0, 7) == "http://" || substr($image, 0, 8) == "https://") {
                $imageurl = $image;
            } else {
                $imageurl = asset('/wedding/images/' . $image);
            }
            return $imageurl;
    }

    public static function audioImageUrl($image, $date = '') {
            if (file_exists(public_path() . '/wedding/audio/' . $image)) {
                $imageurl = asset('/wedding/audio/' . $image);
            } elseif (substr($image, 0, 7) == "http://" || substr($image, 0, 8) == "https://") {
                $imageurl = $image;
            } else {
                $imageurl = asset('/wedding/audio/' . $image);
            }
            return $imageurl;
    }

    public static function occasiongetImageUrl($image, $id) {
        if (file_exists(public_path() . '/occasion/images/' . $id . '/'. $image)) {
            $imageurl = asset('/occasion/images/' .  $id . '/' . $image);
        } elseif (substr($image, 0, 7) == "http://" || substr($image, 0, 8) == "https://") {
            $imageurl = $image;
        } else {
            $imageurl = asset('/occasion/images/' .  $id . '/' . $image);
        }
        return $imageurl;
    }

    public static function groomuploadFile($obj_file, $id) {
        $path = base_path('public/groom/images/' . $id);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (null !== $obj_file) {
            $file = $obj_file;
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
        } else {
            $name = '';
        }
        return $name;
    }

    public static function groomgetImageUrl($image, $id) {
        if (file_exists(public_path() . '/groom/images/' . $id . '/'. $image)) {
            $imageurl = asset('/groom/images/' .  $id . '/' . $image);
        } elseif (substr($image, 0, 7) == "http://" || substr($image, 0, 8) == "https://") {
            $imageurl = $image;
        } else {
            $imageurl = asset('/groom/images/' .  $id . '/' . $image);
        }
        return $imageurl;
    }
    
    public static function brideuploadFile($obj_file, $id) {
        $path = base_path('public/bride/images/' . $id);
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (null !== $obj_file) {
            $file = $obj_file;
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
        } else {
            $name = '';
        }
        return $name;
    }

    public static function bridegetImageUrl($image, $id) {
        if (file_exists(public_path() . '/bride/images/' . $id . '/'. $image)) {
            $imageurl = asset('/bride/images/' .  $id . '/' . $image);
        } elseif (substr($image, 0, 7) == "http://" || substr($image, 0, 8) == "https://") {
            $imageurl = $image;
        } else {
            $imageurl = asset('/bride/images/' .  $id . '/' . $image);
        }
        return $imageurl;
    }
}
