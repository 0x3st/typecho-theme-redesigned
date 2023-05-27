<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; // 防止直接访问文件
$this->need('header.php'); // 引入header.php文件
?>
<div style="background-color:white;border:solid 1px black;margin-bottom:35px;">
<div  style="padding: 12px 0 12px 20px;">
<div style="margin: 0 20px 0 20px;">
    <article>
        <h2>#&nbsp;&nbsp;<?php $this->title() ?></h2> <!-- 显示页面标题 -->
        <div>
            <?php $this->content(); ?> <!-- 显示页面内容 -->
        </div>
        
        <?php $this->need('comments.php'); ?> <!-- 引入评论模板 -->
        
        <p><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p> <!-- 显示标签 -->
    </article>
</div></div></div>

<?php $this->need('footer.php'); // 引入footer.php文件 ?>
