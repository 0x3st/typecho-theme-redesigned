<?php
/**
 * Redesigned Default theme for Typecho
 *
 * @package Redesigned
 * @author Shishishi
 * @version 2.0.0
 * @link https://nets.icu
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit; // 防止直接访问文件
$this->need('header.php'); // 引入header.php文件
?>
<div class="kuang">
<div  class="wenzhang">
    <?php while ($this->next()): ?> <!-- 循环输出文章 -->
        <article>
            <time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time> <!-- 显示发布日期 -->
            &nbsp;&nbsp;[<?php $this->category(','); ?>｜<a
                        itemprop="name" href="<?php $this->author->permalink(); ?>"
                        rel="author"><?php $this->author(); ?></a>]&nbsp; <!-- 显示分类 -->
            <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a><!-- 显示标题 -->
        </article>
    <?php endwhile; ?>
    
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?> <!-- 分页导航 -->
</div></div><!-- end #main-->

<?php $this->need('footer.php'); // 引入footer.php文件 ?>
