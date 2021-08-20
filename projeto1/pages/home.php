<div class="center">
    <section id="Home" class="all_vh">
        <div class="bg">
            <h1>Olá, eu sou <span>Franklin Henrique</span>.</h1>
            <h1>Sou um desenvolvedor web full-stack.</h1>
            <div class="see_jobs">
                <a class="call_portfolio" href="<?php echo INCLUDE_PATH ?>#Porth1">Veja o meu trabalho </a>
                <i class="fas fa-arrow-right"></i>
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
                <img src="<?php echo INCLUDE_PATH ?>assets/image/hexx1Me.svg" alt="uma foto minha">
                <h2>Quem é Franklin ?</h2>
                <p>Eu sou um desenvolvedor web full-stack jr. Tenho uma grande paixão por aprender e pelo que faço,
                    devido a isso estou sempre me atualizando com as inovações do mercado e sempre disposto a
                    adquirir novos conhecimentos.</p>
                <h3><a class="call_contact" href="<?php echo INCLUDE_PATH ?>#Contact">Vamos fazer um website sensacional juntos!</a></h3>
            </div>
            <!--w50-->
            <div class="w50 skills">
                <h2>Tecnologias</h2>
                <?php
                    $sql = MySql::conectar()->prepare('SELECT * FROM `tb_admin.skills`');
                    $sql->execute();
                    $skills = $sql->fetchAll();
                    foreach($skills as $value):
                ?>
                <div class="skillBox">
                    <span><?=$value['nome']?></span>
                    <div class="skill">
                        <div class="skill_lv w90" completed="<?= $value['nivel']?>"></div>
                    </div>
                    <!-- skill -->
                </div>
                <?php endforeach?>
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
            <?php 
            $first = true;
            $sql = MySql::conectar()->prepare('SELECT * FROM `tb_site.servicos`');
            $sql->execute();
            $servicos = $sql->fetchAll();
            foreach ($servicos as $key => $value) {
                if($first){
                    $first = false; ?>
                    <div class="w25">
                        <i id="performance" class="<?php echo $value['icon']?>"></i>
                        <p><?php echo $value['servico']?></p>
                        <a href="<?php echo INCLUDE_PATH ?>#Contact" class="btn">Entre em contato já!</a>
                    </div><!-- w25 -->
                <?} else{?>
                    <div class="w25">
                        <i class="<?php echo $value['icon']?>"></i>
                        <p><?php echo $value['servico']?></p>
                        <a href="<?php echo INCLUDE_PATH ?>#Contact" class="btn">Entre em contato já!</a>
                    </div><!-- w25 -->
                <?php 
                }?>
            <?php }?>
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
            <div class="container">
                <div class="owl-carousel">
                <?php 
                    $first = true;
                    $sql = MySql::conectar()->prepare('SELECT * FROM `tb_site.slides`');
                    $sql->execute();
                    $slides = $sql->fetchAll();
                    foreach ($slides as $key => $value) {?>
                    <div> <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['slide']?>" alt="<?php echo $value['nome']?>"> </div>
                <?php }?>
                </div>
                <!-- owl-carousel -->
            </div>
            <!-- container -->
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
            <div class="my_contacts">
                <p>Você também pode entrar em contato comigo através do whatsApp e Telegram <i class="fas fa-arrow-right"></i></p>
                <div class="wrap">
                    <a href="https://api.whatsapp.com/send?phone=5583998505251&text=Clique%20em%20continuar%20para%20entrar%20em%20contato%20comigo!" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://t.me/Bluebom" target="_blank"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div><!-- flex_contact -->
    </section><!-- contact -->
    <span class="fixed_button_up"><a href="<?php echo INCLUDE_PATH ?>#Home"><i class="far fa-arrow-alt-circle-up"></i></a></span>
    <footer>
        <div class="form_social">
            <a href="https://www.linkedin.com/in/franklin-henrique-dev-web" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/Bluebom" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.youtube.com/channel/UC4i2KAIbJSzX88ztqP9wCjg" target="_blank"><i class="fab fa-youtube"></i></a>
        </div><!-- form_social -->
        <div class="copyright">
            <p>Franklin Henrique <span>&copy;2021</span></p>
        </div>
    </footer>
</div>
<!-- center -->