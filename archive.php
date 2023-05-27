<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div style="background-color:white;border:solid 1px black;margin-bottom:35px;">
<div style="margin: 12px 20px 12px 20px;">
    <h2>#&nbsp;<?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h3>
    <?php if ($this->have()): ?>
    <?php while ($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>&nbsp;&nbsp;<a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>          
        </article>
    <?php endwhile; ?>
    <?php else: ?>
        <article class="post">
            <?php _e('没有找到内容'); ?>
        </article>
    <?php endif; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div></div><!-- end #main -->


<?php $this->need('footer.php'); ?>
