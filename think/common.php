<?php

/**
 * 替代scan_dir的方法
 * @param string $pattern 检索模式 搜索模式 *.txt,*.doc; (同glog方法)
 * @param int    $flags
 * @param        $pattern
 * @return array
 */
function cmf_scan_dir($pattern, $flags = 0)
{
    $files = glob($pattern, $flags);
    if (empty($files)) {
        $files = [];
    } else {
        $files = array_map('basename', $files);
    }

    return $files;
}