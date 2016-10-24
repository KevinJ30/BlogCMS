<div class="row">
	<div class="col-md-12" style="margin-top:30px">
		<a href="index.php" class="btn btn-default"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Revenir a la liste</a>
		<h1><?= $article->title ?></h1>
		<small>Crée le : <?= $article->created ?></small> <br />
		<small>Modifié le : <?= $article->modified ?></small> <br />
		<small><?= $article->views ?> vues</small>
		<hr />
		<p><?= $article->content ?></p>
	</div>
</div>