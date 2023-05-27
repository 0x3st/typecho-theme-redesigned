<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; // 防止直接访问文件

$this->header(); // 输出HTML头部信息
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        <?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?>
        <?php $this->options->title(); ?>
    </title>
    
    <!-- 以下为CSS和JS外链 -->
        <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<div class="full">
<div class="sidebar">
        <header class="header">
            <div>
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> <!-- 显示博客标题 -->
                
                <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?> <!-- 调用页面小工具 -->
                <?php while ($pages->next()): ?> <!-- 循环输出页面链接 -->
                    &nbsp;<a <?php if ($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>

                &nbsp;
<?php if ($this->user->hasLogin()): ?><a href="/admin">管理</a><?php endif; ?> <!-- 输出后台管理链接 -->
            </div>
        </header></div>
        <!-- 以下为主要内容 -->
