<?php
/**
 * Created by.
 * Author: baijidong
 * E-mail: baijidong1992@gmail.com
 * Date: 2021-03-31 13:36
 */

namespace common\logics;


class Func
{
    /**
     * 生成年
     * @return array
     */
    public static function generateYear()
    {
        $start = '1999';
        $end = date('Y');
        $years = [];
        for ($i = $end; $i >= $start; $i--) {
            $years[] = $i;
        }
        return $years;
    }

    /**
     * 获取属性
     * @param $data
     * @param $name
     * @return mixed|string
     */
    public static function getAttributes($data, $name)
    {
        if (isset($data[$name]) && !empty(isset($data[$name])))
            return $data[$name];
        else
            return '';
    }
}