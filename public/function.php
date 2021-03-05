<?php
function dd($res)
{
    echo "<pre>";
    print_r($res);
    echo "</pre>";
    exit;
}
function dd1($res)
{
    echo "<pre>";
    print_r($res);
    echo "</pre>";

}
function res($code = 1, $message = '',$data = [], $list = [])
{
    $data = [
        'code' => $code,
        'message' => $message,
        'data' => $data,
        'list' => $list
    ];
    echo json_encode($data);exit;
}