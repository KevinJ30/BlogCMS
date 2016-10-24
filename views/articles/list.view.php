<div class="row">
	<?php foreach($articles as $article): ?>
	<div class="col-md-12">
		<h1><a href="articles.php?id=<?= $article->id ?>"><?= $article->title ?></a></h1>
		<small>Crée le :<?= $article->created ?></small><br />
		<small>Modifié le :<?= $article->modified ?></small><br />
		<small><?= $article->views ?> vues</small>
		<hr />
		<p><?= $article->content ?></p>
	</div>
	<?php endforeach; ?>
</div>