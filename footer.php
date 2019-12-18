<div id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4 mb-3 text-center">
                <img class="mb-4 img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>"/>
            </div>
            <div class="col-sm-2 mb-3">
                <h2>Redes Sociais</h2>
                <div class="social-media">
                    <a target="_blank" href="https://www.facebook.com/falacomerciario/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://www.instagram.com/falacomerciario9/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCdTUk87XZhEjaWGWWToWteg"><i class="fas fa-play"></i></a>
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