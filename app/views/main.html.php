<?php foreach($posts as $p):?>
	<div class="post">
		<h2><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h2>

		<div class="date"><?php echo date('d F Y', $p->date)?></div>

		<?php 
        $text = $p->body;
        $excerpt = explode("</p>", $text);
        echo $excerpt[0],'</p>';
        ?>
        
         <a class="mooi-button mooi-button-primary" href="<?php echo $p->url?>">Read More ></a>

	</div>
<?php endforeach;?>

<?php if ($has_pagination['prev']):?>
	<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Newer</a>
<?php endif;?>

<?php if ($has_pagination['next']):?>
	<a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Older</a>
<?php endif;?>
