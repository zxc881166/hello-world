<?php

header('Content-Type: text/html; charset=utf-8');



function isImageCorrupted($filePath) {
    // 检查文件是否存在
    if (!file_exists($filePath)) {
        return "文件不存在";
    }

    // 尝试获取图像信息
    $imageInfo = @getimagesize($filePath);
    
    // 检查是否成功获取图像信息
    if ($imageInfo === false) {
        return "图像损坏或格式不支持";
    }

    return "图像正常";
}

// 使用示例
$filePath = 'savedTexture_20241112_145831.png'; // 替换为你的文件路径
$result = isImageCorrupted($filePath);
echo $result;
?>