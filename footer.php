<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb-5">
                <h3>SIGA-NOS NO INSTAGRAM</h3>
                <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/insta.jpg"; ?>"/>
            </div>
            <div class="col-sm-2 mb-3">
                <h3>INSTITUCIONAL</h3>
                <ul>
                    <li><a href="<?php echo home_url( '/quem-somos' ); ?>">Quem Somos</a></li>
                    <li><a href="#">Diretoria</a></li>
                    <li><a href="#">Parceiros</a></li>
                    <li><a href="#">Frentes de Ação</a></li>
                    <li><a href="<?php echo home_url( '/fale-conosco-2' ); ?>">Contato</a></li>
                </ul>
            </div>
            <div class="col-sm-2 mb-3">
                <h3>PARA PSICÓLOGOS</h3>
                <ul>
                    <li><a href="<?php echo home_url( '/sindicalize' ); ?>">Sindicalize-se</a></li>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Classificados</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="col-sm-2 mb-3">
                <h3>PARA PSICÓLOGOS</h3>
                <ul>
                    <li><a href="#">Notícias</a></li>
                    <li><a href="#">PsiComunicando</a></li>
                    <li><a href="#">Psicolog@r</a></li>
                    <li><a href="#">TVSinPsi</a></li>
                    <li><a href="#">Links</a></li>
                </ul>
            </div>
            <div class="col-sm-3 mb-3 footer-right">
                <img class="mb-4 img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>"/>
                <p>
                    <div class="mb-1">Rua Aimberê, 2053 - CEP 01258-020</span><i class="fas fa-map-marker-alt ml-2"></i></div>
                    <div class="mb-1">(11) 3062-4929 | (11) 98799-7052</span><i class="fas fa-mobile-alt ml-2"></i></div>
                    <div>contato@falacomerciarios.org.br</span><i class="fas fa-envelope ml-1"></i></div>
                </p>
                <div class="social-media">
                    <a href="https://www.facebook.com/falacomerciario/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/falacomerciario9/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCdTUk87XZhEjaWGWWToWteg"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-auto">
                        <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/news.jpg"; ?>"/>
                    </div>
                    <div class="col-sm-auto">
                        <h2>Assine nossa Newsletter</h2>
                        <p>Seja o primeiro a receber as principais notícias do Sinpsi por e-mail.</p>
                    </div>  
                </div> 
            </div>
            <div class="col-sm-4 ml-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control news-input" placeholder="Digite seu e-mail">
                    <div class="input-group-append">
                        <button class="btn btn-news" type="button" id="button-addon2">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php wp_footer(); ?>