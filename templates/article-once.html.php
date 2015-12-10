<?php include '_head.html.php';?>

<article role="article" class="article">
	<h3><?=$this->title();?></h3>
	<p class="news-info">
		<span class="author"><?=_('author');?>: <?=$this->author();?></span>
		<span class="time"><?=_('added');?>: <time datetime="<?=$this->date('c');?>" title="<?=$this->date();?>"><?=$this->date(false, 'locale');?></time></span>
		<?php if($this->hasPhotos()):?><span class="photos"><?=_('photos');?>: <?=$this->photos();?></span><?php endif;?> 
		<span class="views"><?=_('views');?>: <?=$this->views();?></span>
		<?php if($this->hasCategory()):?><span class="category-anchor"><?=$this->category();?></span><?php endif;?> 
	</p>
	<figure>
		<?=$this->thumbnail();?> 
	</figure>
	<section>
		<?=$this->content();?>
	</section>
</article>

<?php include '_foot.html.php';?>