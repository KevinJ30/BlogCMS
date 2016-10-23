<div class="row">
	<?php foreach($articles as $article): ?>
	<div class="col-md-12">
		<h1><?= $article->title ?></h1>
		<small>Crée le :<?= $article->created ?> <br />Modifié le :<?= $article->modified ?></small>
		<hr />
		<p><?= $article->content ?></p>
	</div>
	<?php endforeach; ?>
</div>