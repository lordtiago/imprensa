<?php
/*
Template Name: Credenciamento */
get_header(); ?>


	<div id="container-content" role="main">
		<div id="credenciamento">
			<h1>Credenciamento</h1>
			<div id="form">
				<form action="" method="post">
					<div class="nome">
						<h2>Nome</h2>
						<input type="text" name="nome">
					</div>
					<div class="email">
						<h2>e-mail</h2>
						<input type="text" name="email">
					</div>
					<div class="midia">
						<h2>Midia de Comunica&ccedil;&atilde;o</h2>
						<input type="text" name="midia">
					</div>
					<div class="estado">
						<h2>Estado</h2>
						<select name="estado">
							<option>S&atilde;o Paulo</option>
						</select>
					</div>
					<div class="cidade">
						<h2>Cidade</h2>
						<input type="text" name="cidade">
					</div>
					<div class="funcao">
						<h2>Fun&ccedil;&atilde;o</h2>
						<select name="funcao">
							<option>Jornalista</option>
						</select>
					</div>
					<div class="acampamento">
						<h2>Acampamento</h2>
						<select name="acampamento">
							<option>PHN</option>
						</select>
					</div>
					<div class="validacao">
						<input type="checkbox" name="validacao">
						<span>Li e aceito os termos de credenciamento</span>
					</div>
					<button type="button">Enviar</button> 
				</form>
			</div>

			<div id="termos">
				<h2>Termos de credenciamento</h2>
				<div id="texto">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nunc lacus, ultrices non bibendum et, rutrum ac justo. Sed vitae turpis mauris, adipiscing lobortis lectus. Ut nec auctor turpis. Donec eleifend viverra massa sed pretium. Proin elit sem, gravida eu lacinia eu, semper non mauris. Proin id diam tellus, in venenatis est. Morbi iaculis tellus id velit iaculis pulvinar. Suspendisse egestas mollis sapien, ut eleifend nisi hendrerit non. Curabitur pharetra luctus augue quis elementum. Fusce dui nisi, hendrerit eu dictum ut, tempus ac enim. Donec nec turpis in quam aliquam convallis. Sed a auctor nunc. Etiam eget dignissim mauris. Nunc justo lectus, commodo quis vehicula eget, posuere et turpis.</p>

					<p>Maecenas adipiscing interdum ullamcorper. Fusce imperdiet orci eget eros volutpat faucibus. Nullam est risus, tristique vel dictum non, dapibus at nibh. Proin sit amet ultricies nibh. Duis in augue nisi. Sed dictum risus non est blandit lacinia. Nunc sit amet tempus nisl. Mauris vitae lacus odio, sit amet molestie erat. Mauris bibendum egestas faucibus. Pellentesque rutrum commodo posuere. Curabitur vel nisi ante, in malesuada felis. Pellentesque nulla justo, fermentum id vestibulum et, aliquet quis eros. Donec feugiat magna vitae purus pulvinar semper. Curabitur mi mauris, ultrices at sollicitudin quis, laoreet eu elit.<p>

					<p>Sed hendrerit volutpat quam, semper faucibus turpis scelerisque quis. Sed blandit, arcu eu molestie commodo, erat massa convallis purus, in tristique odio arcu nec leo. Duis commodo urna sit amet purus scelerisque ut elementum metus sodales. Nulla iaculis ligula sit amet diam tincidunt sed vestibulum velit placerat. Etiam gravida posuere mauris sed luctus. Aenean pretium enim vitae ipsum ullamcorper id tincidunt mauris vestibulum. Nulla facilisi. In tristique, libero ut laoreet scelerisque, justo libero vulputate odio, in iaculis turpis purus sit amet augue. Nam mi mi, bibendum ut posuere ac, rutrum interdum tellus. Integer et mi nec purus egestas consectetur at non risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>

					<p>Donec tempus feugiat dapibus. Nullam consectetur purus a metus dignissim sit amet ornare tortor mollis. Nunc fringilla consectetur nulla, id pharetra lacus elementum non. Sed hendrerit lacinia felis, ut sodales arcu iaculis nec. Donec aliquam eros eget orci tristique gravida. Sed suscipit pharetra convallis. Proin sodales bibendum molestie. Quisque vehicula leo condimentum risus dignissim nec suscipit nibh adipiscing. Ut pretium dictum risus, ac adipiscing arcu placerat id. Nunc at erat arcu, in mattis velit. Ut non nisi eu arcu commodo rhoncus non vitae tellus. Pellentesque fermentum suscipit eros aliquet pulvinar. Quisque non ipsum augue, mollis laoreet justo.</p>

					<p>Morbi rutrum imperdiet metus vitae dignissim. Aliquam aliquam sodales ante sed venenatis. Etiam tortor arcu, consectetur a lacinia malesuada, facilisis at nunc. Fusce accumsan tempor mauris convallis venenatis. Curabitur at nunc dolor. Mauris mollis erat quis purus malesuada quis vulputate ipsum hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
				</div>
			</div>
		</div>

	</div><!-- #main -->
	
<?php get_footer(); ?>