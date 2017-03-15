<?php if ($this->loop->isItems()): ?>
<?php while ($this->loop->haveItems()): $item = $this->loop->item(); ?> 
	<article role="article" class="article">
		<header>
			<figure>
				<?=$item->thumbnail();?> 
			</figure>
			<h3><a href="<?=$item->url();?>"><?=$item->title();?></a></h3>
			<p class="news-info">
				<span class="author"><?=_('author');?>: <?=$item->author();?></span>
				<span class="time"><?=_('added');?>: <time datetime="<?=$item->date('c');?>" title="<?=$item->date();?>"><?=$item->date(false, 'locale');?></time></span>
				<?php if($item->hasPhotos()):?><span class="photos"><?=_('photos');?>: <?=$item->photos();?></span><?php endif;?> 
				<span class="views"><?=_('views');?>: <?=$item->views();?></span>
				<?php if($item->hasCategory()):?><span class="category-anchor"><?=$item->category();?></span><?php endif;?> 
			</p>
		</header>
		<section>
			<p><?=$item->content($truncate = 500, $stripTags = true);?></p>
			<p class="more"><a href="<?=$item->url();?>">Czytaj dalej »</a></p>
		</section>
	</article>
<?php endwhile;?> 

	<nav role="navigation">
		<?=$this->loop->nav(['ul'=>'cd-pagination', 'current'=>'current'], 5);?>
	</nav>

<?php else: ?> 
	<div class="alert info">Brak artykułów do wyświetlenia!</div>
<?php endif;?>