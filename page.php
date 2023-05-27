<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; // 防止直接访问文件
$this->need('header.php'); // 引入header.php文件
?>
<div class="kuang">
<div  class="wenzhang">
    <article>
        <h2>#&nbsp;&nbsp;<?php $this->title() ?></h2> <!-- 显示文章标题 -->
        <div>
            <?php $this->content(); ?> <!-- 显示文章正文内容 -->
        </div>
    </article>
    
    <?php $this->need('comments.php'); ?> <!-- 引入评论模板 -->
</div></div>

<?php $this->need('footer.php'); // 引入footer.php文件 ?>
