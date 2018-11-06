<section id="planos" class="bloco-plano scrollspy">


	<ul id="tabs-swipe-demo" class="tabs center">

	    <li class="tab col s3"><a href="#mensal" class="active">Planos</a></li>
	    <li class="tab col s3"><a href="#personalizado" >personalizado</a></li>

	</ul>

	<div class="row">

		<div id="mensal" class="col s12">
			<div class="row plano-basico col s12 m4">
				<div class="center">
					<h3>básico</h3>
				</div>
				<div class="col s12 social-img">
					<img src="_img/planos/site.png" title="Criação de Site" title="Criação de Site">
					<img src="_img/planos/facebook.png" title="Facebook Ads">
					<img src="_img/planos/insta.png" title="Instagram">
				</div>
					<hr class="traco">
				<div class="valor">
					<h5> A partir de</h5>
					<h4>R$ 600,00</h4>
					<!-- Planos Anual - Basico -->
				</div>
				
			</div>
			

			<div class="row plano-standart col s12 m4">
					<div class="center">
						<h3>standart</h3>
					</div>
					<div class="col s12 social-img">
						<img src="_img/planos/site.png" title="Criação de Site">
						<img src="_img/planos/facebook.png" title="Facebook Ads">
						<img src="_img/planos/insta.png" title="Instagram">
						<img src="_img/planos/ads.png" title="Google Adword">	
					</div>
					<hr class="traco">
					<div class="valor">
						<h5> A partir de</h5>
						<h4>R$ 1.100,00</h4>
						<!-- Plano Anual - Standart -->

					</div>
					
			</div>

			<div class="row plano-plus col s12 m4">
					<div class="center">
						<h3>plus</h3>
					</div>

					<div class="col s12 social-img">
						<img src="_img/planos/site.png" title="Criação de Site">
						<img src="_img/planos/facebook.png" title="Facebook Ads">
						<img src="_img/planos/insta.png" title="Instagram">
						<img src="_img/planos/ads.png" title="Google Adword">
						<img src="_img/planos/video.png" title="1 Comercial">					
					</div>
					<hr class="traco">
					<div class="valor">
						<h5> A partir de</h5>
						<h4>R$ 1200,00</h4>
					</div>
					
			</div>

			<div class="s12 center link-planos">
				
				<a href="nossos_planos.php">
					<i class="fas fa-arrow-right" ></i>
						Confira nossos planos
					<i class="fas fa-arrow-left"></i>
				</a>
				
			</div>

			
		</div>

		<div id="personalizado" class="col s12 ">
			<div class="row formulario col s12 m6 offset-m3">
				<div class="col s12 center">
					<h3>Faça seu plano personalizado <br>preenchendo o formulario de contato.</h3>
					<h6>Entraremos em contato o mais rápido possível</h6>
				</div>
				<form method="POST" action="orcamento-personalizado.php">
					<div>
						<div class="col s12 input-field">
							<input type="text" name="nome" id="name" required class=" white-text" style="letter-spacing: 2px">
							<label for="name">Nome</label>
						</div>

						<div class="col s12 input-field">
							<input type="email" name="email" id="e-mail" required class=" white-text" style="letter-spacing: 2px">
							<label for="e-mail">E-mail</label>
						</div>
						<div class="col s12 input-field">
							<input type="text" name="fone" id="phone" required class=" white-text" style="letter-spacing: 2px">
							<label for="phone">Celular</label>
						</div>

						<div class="col s12 input-field">
							<input type="text" name="cidade" id="city" required class=" white-text" style="letter-spacing: 2px">
							<label for="city">Cidade - Estado</label>
						</div>

						<div class="col s12 input-field">
							<input type="text" name="atividade" id="ativ" required class=" white-text" style="letter-spacing: 2px">
							<label for="ativ">Qual o seu ramo de atividade?</label>
						</div>

						<div class="col s12 input-field">
							<input type="text" name="invest" id="investir" required class=" white-text" style="letter-spacing: 2px">
							<label for="investir">Até quando você está disposto a investir?</label>
						</div>
						
						<div class="col s12">
						    <p class="white-text">Como você deseja que retornemos o contato?</p>
						    <p>
						      <input class="with-gap" name="tp-contato" type="radio" id="whatsapp" value="WhatsApp" />
						      <label for="whatsapp">WhatsApp</label><br>
						    
						      <input class="with-gap" value="E-mail" name="tp-contato" type="radio" id="email" />
						      <label for="email">E-mail</label><br>
						    
						      <input class="with-gap" value="Telefonema" name="tp-contato" type="radio" id="telefonema"  />
						      <label for="telefonema">Telefonema</label><br>
						    </p>						    
						</div>

						<div class="col s12">
						    <p class="white-text">Qual orçamento gostaria receber?</p>
						    <p>
						      <input class="with-gap" name="orcamento" type="radio" id="mes" value="mensal" />
						      <label for="mes">Mensal</label><br>
						    	
						      <input class="with-gap" value="trimestral" name="orcamento" type="radio" id="trimestral" />
						      <label for="trimestral">Trimestral</label><br>
						    
						      <input class="with-gap" value="semestral" name="orcamento" type="radio" id="semestral"  />
						      <label for="semestral">Semestral</label><br>

						      <input class="with-gap" value="anual" name="orcamento" type="radio" id="anual"  />
						      <label for="anual">Anual</label><br>

						      <input class="with-gap" value="todos" name="orcamento" type="radio" id="todos"  />
						      <label for="todos">Todo, para uma análise</label>
						    </p>						    
						</div>

						<div class="col s12">
							<p class="white-text">Qual os serviços você deseja?</p>
							 <p>
						      <input type="checkbox" value="Site" name="servicos0" id="site" class="filled-in"/>
						      <label for="site">Site</label><br/>
						 
						      <input type="checkbox" value="Facebook" name="servicos1" id="facebook" class="filled-in"/>
						      <label for="facebook">Facebook</label><br/>
						  
						      <input type="checkbox" value="Instagram" name="servicos2" id="instagram" class="filled-in"/>
						      <label for="instagram">Instagram</label><br/>
						  
						      <input type="checkbox" value="Google-Ads" name="servicos3" id="adword" class="filled-in"/>
						      <label for="adword">Google Adword</label><br/>
						  
						      <input type="checkbox" name="servicos5" id="comercial" class="filled-in" value="Comercial-Instutucional" />
						      <label for="comercial">Comercial Institucional</label>
						    </p>
						</div>

						<div class="input-field col s12" style="margin-top: 55px;">
				            <textarea id="mensagem-form" class="materialize-textarea white-text" name="mensagem" style="letter-spacing: 2px; margin-top: 20px;" placeholder="ex: especificar a quantidade de publicações semanais em cada ferramenta de publicidade."></textarea>
				            <label for="mensagem-form">Mensagem</label>
				         </div>

				         <input type="submit" name="enviar" value="Enviar Solicitação" class="btn botao col s12">


						


					</div>
				</form>
			</div>
		</div> 

		
			
	</div>

</section>