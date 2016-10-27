<ul class="nav navbar-nav navbar-right">
	<?php if(!auth_isConnected()) : ?>
		<li><a href="login.php">Se connecter</a></li>
	<?php else : ?>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Se déconnecter</a></li>
          </ul>
        </li>
	<?php endif; ?>
</ul>