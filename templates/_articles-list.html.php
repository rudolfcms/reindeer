<?php if($this->isArticles()): ?>
<?php while($this->haveArticles()): $this->article(); ?> 
	<article role="article" class="article">
		<header>
			<figure>
				<?=$this->thumbnail();?> 
			</figure>
			<h3><a href="<?=$this->url();?>"><?=$this->title();?></a></h3>
			<p class="news-info">
				<span class="author"><?=_('author');?>: <?=$this->author();?></span>
				<span class="time"><?=_('added');?>: <time datetime="<?=$this->date('c');?>" title="<?=$this->date();?>"><?=$this->date(false, 'locale');?></time></span>
				<?php if($this->hasPhotos()):?><span class="photos"><?=_('photos');?>: <?=$this->photos();?></span><?php endif;?> 
				<span class="views"><?=_('views');?>: <?=$this->views();?></span>
				<?php if($this->hasCategory()):?><span class="category-anchor"><?=$this->category();?></span><?php endif;?> 
			</p>
		</header>
		<section>
			<p><?=$this->content($truncate = 500, $stripTags = true);?></p>
			<p class="more"><a href="<?=$this->url();?>">Czytaj dalej »</a></p>
		</section>
	</article>
<?php endwhile;?> 

	<nav role="navigation">
		<?=$this->nav(['ul'=>'cd-pagination', 'current'=>'current'], 5);?>
	</nav>

<?php else: ?> 
	<div class="alert info">Brak artykułów do wyświetlenia!</div>
<?php endif;?>