<header>	
	<!-- Logo -->
		<a href="javascript:void(0)" id="EscMenu"></a>
		<a href="<? echo $Home ?>" id="BotaoHome"></a>		
		<a href="javascript:void(0)" id="AbrirFecharMenu"></a>

	<!-- Menu -->
		<nav>
			<a href="<? echo $Home ?>"><img src="<? echo $images ?>menu-logo.png" id="LogoHeader" /></a>

			<a href="index.php"><h4>Nossa essência</h4></a>
			<a href="identidade.php"><h4>Tom de voz</h4></a>

			<ul id="MenuPrincipal">
				<?php					
				echo '<li><a href="'. $Logo .'">Logo</a></li>';
				echo '<li><a href="'. $Cores .'">Cores</a></li>';
				echo '<li><a href="'. $Tipografia .'">Tipografia</a></li>';
				echo '<li><a href="'. $Grafismos .'">Grafismos</a></li>';
				echo '<li><a href="'. $Icones .'">Ícones</a></li>';
				echo '<li><a href="'. $Fotografia .'">Fotografia</a></li>';
				echo '<li><a href="'. $Ilustracoes .'">Ilustrações</a></li>';
				echo '<li><a href="'. $Identidade .'">Identidade</a></li>';
				echo '<li><a href="'. $Inspiracoes .'">Inspirações</a></li>';
				?>
			</ul>

			<ul id="MenuDownload">
				<? echo '<li><a href="'. $Download .'">Downloads</a></li>'; ?>
				<? echo '<li><a href="'. $Papelaria .'">Papelaria</a></li>'; ?>
				<? echo '<li><a href="'. $TemplatePPT .'">Template PPT</a></li>'; ?>
			</ul>

			<a class="duvidas" href="<? echo $Contato ?>">DÚVIDAS?</a>
		</nav>
	</header>