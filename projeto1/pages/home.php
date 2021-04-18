<div class="center">
    <section id="Home" class="all_vh">
        <div class="bg">
            <h1>Olá, eu sou <span>Franklin Henrique</span>.</h1>
            <h2>Sou um desenvolvedor web full-stack</h2>
            <div class="see_jobs">
                <a class="call_portfolio" href="<?php echo INCLUDE_PATH ?>#Porth1">Veja o meu trabalho <i class="fas fa-arrow-right"></i></a>
            </div>
            <!--see_jobs-->
        </div>
        <!--bg-->
    </section>
    <!--Home-->
    <section id="About" class="all_vh">
        <div class="title">
            <h1>Sobre</h1>
        </div><!-- title -->
        <section class="form_hexx">
            <div class="w33">
                <div class="hex_about_1"></div>
                <h3>Rápido</h3>
                <p>Tempo de carregamento rápido e livre de travamentos, meu maior foco!</p>
            </div>
            <!--w33-->
            <div class="w33">
                <div class="hex_about_2"></div>
                <h3>Responsivo</h3>
                <p>Meus sites funcionarão em qualquer dispositivo, pequeno ou grande.</p>
            </div>
            <!--w33-->
            <div class="w33">
                <div class="hex_about_3"></div>
                <h3>Dinâmico</h3>
                <p>Websites não precisam ser estáticos. Gosto de sites dinâmicos também e comprometo-me a fazê-los.
                </p>
            </div>
            <!--w33-->
        </section>
        <!--hexx_about-->
        <section class="who_i_am">
            <div class="w50 description">
                <img src="<?php echo INCLUDE_PATH ?>assets/image/hexx 1Me.png" alt="uma foto minha">
                <h2>Quem é Franklin ?</h2>
                <p>Eu sou um desenvolvedor web full-stack jr. Tenho uma grande paixão por aprender e pelo que faço,
                    devido a isso estou sempre me atualizando com as inovações do mercado e sempre disposto a
                    adquirir novos conhecimentos.</p>
                <h3><a class="call_contact" href="<?php echo INCLUDE_PATH ?>#Contact">Vamos fazer um website sensacional juntos!</a></h3>
            </div>
            <!--w50-->
            <div class="w50 skills">
                <h2>Tecnologias</h2>
                <div class="skillBox">
                    <span>HTML5</span>
                    <div class="skill">
                        <div class="skill_lv w90" completed="90"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>CSS3</span>
                    <div class="skill">
                        <div class="skill_lv w90" completed="90"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>JavaScript</span>
                    <div class="skill">
                        <div class="skill_lv w75" completed="75"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>JQuery</span>
                    <div class="skill">
                        <div class="skill_lv w50" completed="55"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>PHP</span>
                    <div class="skill">
                        <div class="skill_lv w75" completed="65"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>MySQL</span>
                    <div class="skill">
                        <div class="skill_lv w75" completed="65"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>GIT</span>
                    <div class="skill">
                        <div class="skill_lv w75" completed="75"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
                <div class="skillBox">
                    <span>Linux</span>
                    <div class="skill">
                        <div class="skill_lv w90" completed="75"></div>
                    </div>
                    <!-- skill -->
                </div>
                <!-- skillBox -->
            </div>
            <!--w50-->
        </section><!-- who_i_am -->
    </section>
    <!--About-->
    <section id="Services" class="all_vh">
        <div class="title">
            <h1>Serviços</h1>
        </div><!-- title -->
        <section class="flex_rect">
            <div class="flex_service 1">

                <div class="w25">
                    <i class="fas fa-chart-line"></i>
                    <p>Procurando melhorar a performance do seu site, SEO, ou a experiência do usuário? </p>
                    <a href="<?php echo INCLUDE_PATH ?>#Contact" class="btn">Entre em contato já!</a>
                </div><!-- w25 -->
                <div class="w25">
                    <i class="fas fa-pen-nib"></i>
                    <p> Projetos modernos, otimizádos e performáticos. Eficazes na hora de converter simples
                        visitantes em clientes!</p>
                    <a href="<?php echo INCLUDE_PATH ?>#Contact" class="btn">Entre em contato já!</a>
                </div><!-- w25 -->
                <div class="w25">
                    <i class="far fa-calendar-check"></i>
                    <p>Comprometimento em entregar os projetos no prazo correto, sem atrasos e nem aumento de valores.
                    </p>
                    <a href="<?php echo INCLUDE_PATH ?>#Contact" class="btn">Entre em contato já!</a>
                </div><!-- w25 -->
            </div>
            <!-- form_service1 -->

        </section><!-- form_rect -->
    </section><!-- Services -->
    <section id="Portfolio" class="all_vh">
        <div class="down_triangle"></div>
        <div class="portfolio_carousel" id='Porth1'>
            <div class="title">
                <h1>Portfólio</h1>
            </div><!-- title -->
            <section class="carousel_JS">
                <div class="carousel">
                    <div id="left-triangle" class="is_hidden"></div>
                    <!--left_triangle-->
                    <div class="carousel_track-container">
                        <ul class="carousel_track">
                            <li class="carousel_slide current_slide">
                                <img class="carousel_image" src="<?php echo INCLUDE_PATH ?>assets/image/01.jpg" alt="Um dos projetos que já criei">
                            </li>
                            <li class="carousel_slide">
                                <img class="carousel_image" src="<?php echo INCLUDE_PATH ?>assets/image/02.jpg" alt="Um dos projetos que já criei">
                            </li>
                            <li class="carousel_slide">
                                <img class="carousel_image" src="<?php echo INCLUDE_PATH ?>assets/image/03.jpg" alt="Um dos projetos que já criei">
                            </li>
                        </ul>
                        <!--carousel_track-->
                    </div>
                    <!--carousel_track-container-->
                    <div id="right-triangle"></div>
                    <!--right_triangle-->
                    <div class="carousel_nav">
                        <button class="carousel_indicator current_slide"></button>
                        <button class="carousel_indicator"></button>
                        <button class="carousel_indicator"></button>
                    </div>
                    <!--carousel_nav-->
                </div>
                <!--carousel-->
            </section><!-- carousel_JS -->
        </div><!-- portfolio_carousel -->
    </section><!-- Portfolio -->
    <section id="Contact" class="all_vh">
        <div class="flex_contact">
            <div class="title">
                <h1>Contato</h1>
            </div><!-- title -->
            <form method="post">
                <span class="callback_success">Sua mensagem foi entregue com sucesso!</span>
                <span class="callback_error">Algo deu errado no envio da sua mensagem.</span>
                <p class="w100"><i class="fas fa-user-alt"></i><input placeholder="Nome*" type="text" name="name" id="Name" required></p>
                <p class="w100"><i class="fas fa-envelope"></i><input placeholder="Email*" type="email" name="email" id="Email" required></p>
                <p class="w100"><textarea name="msg" id="Msg" cols="30" rows="5" placeholder="Deixe sua mensagem aqui!"></textarea></p>
                <p class="w100"><input class="btn" type="submit" value="Enviar" name="acao"></p>
            </form>
        </div><!-- flex_contact -->
    </section><!-- contact -->
    <span class="fixed_button_up"><a href="<?php echo INCLUDE_PATH ?>#Home"><i class="far fa-arrow-alt-circle-up"></i></a></span>
    <footer>
        <div class="form_social">
            <span><i class="fab fa-linkedin-in"></i></span>
            <span><i class="fab fa-github"></i></span>
            <span><i class="fab fa-youtube"></i></span>
        </div><!-- form_social -->
        <div class="copyright">
            <p>Franklin Henrique <span>&copy;2021</span></p>
        </div>
    </footer>
</div>
<!-- center -->