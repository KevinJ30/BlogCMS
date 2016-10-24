<div class="row">
	<div class="col-md-12">
		<h1><?= $article->title ?></h1>
		<small>Crée le : <?= $article->created ?></small> <br />
		<small>Modifié le : <?= $article->modified ?></small> <br />
		<small><?= $article->views ?> vues</small>
		<hr />
		<p><?= $article->content ?></p>
	</div>
</div>