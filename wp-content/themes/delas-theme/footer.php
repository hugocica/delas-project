            <footer id="footer">
            	<div class="delas-footer">
                    <div class="container">
                        <div class="col-md-4 description">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/delas-inverse.png" alt="Série Delas Logo Branco">
                            <p>
                                Delas é uma série realizada por alunas de Rádio e TV da Unesp Bauru e produzida para a plataforma Instagram! 
                            </p>
                            <p>
                                A série conta a história de quatro meninas que juntas vão tentar superar traumas pelos quais passaram ainda na adolescência, e através de suas histórias poder ajudar outras garotas, que assim como elas podem estar passando por situações semelhantes!
                            </p>
                        </div>
                        <div class="col-md-4 menu-footer">
                            
                        </div>
                        <div class="col-md-4 uni-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/faac-logo.png" alt="Faculdade de Arquitetura, Artes e Comunicação FAAC logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/unesp-logo.png" alt="Unesp logo">
                        </div>
                    </div>
                </div>

                <div class="dev-footer">
                    <div class="container">
                        <div class="cr-box col-md-8 col-sm-6">
                            <?php
                                if ( date('Y') != '2016' )
                                    $date_range = '-' . date('Y');
                            ?>
                            <p>© COPYRIGHT 2016<?php echo $date_range; ?>. Delas TODOS OS DIREITOS RESERVADOS.</p>
                            <div class="support-div"></div>
                        </div>
                        <div class="dev-container col-md-4 col-sm-5">
                            <p>Desenvolvido por:</p>
                            <div class="dev-box">
                                <a href="https://github.com/hugocica/" target="_blank">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                    <span>Hugo Cicarelli</span>
                                </a>
                            </div>
                            <div class="support-div"></div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>
