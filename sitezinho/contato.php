<?php
$title = "Contato | Seu site ";
$active = "contato";
$alternativeUrl = false;
$content = "Descrição aqui";
include "header.php"; ?>
<!--Conteudo-->
<div class="row">
    <div class="container">
        <div class="col s12 center-align">
            <h3>
                Fale conosco
            </h3>
            <h6>
                Preencha os campos abaixo e retornaremos em breve
            </h6>
        </div>
    </div>
</div>
<div class="row" style="padding: 30px 0;margin-bottom: 0;">
    <div class="container spaced-section">
        <div class="col s12 m5">
            <iframe src="https://www.google.com.br/maps/place/Estr.+da+Baronesa+-+Parque+Bologne,+S%C3%A3o+Paulo+-+SP,+04941-175/@-23.7030577,-46.7920318,14z/data=!3m1!4b1!4m6!3m5!1s0x94ce52717f47d6c5:0xbf2b8eb05deab83!8m2!3d-23.7032466!4d-46.7722983!16s%2Fg%2F11g8kx7_50?entry=ttu" style="border:0;width: 100%;" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            <p style="margin-top: 20px;">
                <b>Endereço:</b>
                R.Sua Rua, 000 - Seu Bairro <br />
                São Paulo - SP, (CEP)
            </p>
        </div>
        <div class="col s12 m7">
            <div class="row center-align">
                <form id="envia-email-form" action="" method="post" class="col s12">
                    <div class="input-field col s12">
                        <i class="material-icons prefix fa fa-user-circle" style="color: #eb268f" aria-hidden="true"></i>
                        <input name="nomeremetente" title="Nome" type="text" class="validate" required />
                        <label for="nomeremetente">Nome</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix fa fa-envelope" style="color: #eb268f" aria-hidden="true"></i>
                        <input name="emailremetente" title="Email" type="text" class="validate" required>
                        <label for="emailremetente" data-error="E-mail invalido" data-success="E-mail valido">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix fa fa-phone" style="color: #eb268f" aria-hidden="true"></i>
                        <input name="telefoneremetente" title="Telefone" type="text" class="validate" required>
                        <label for="telefoneremetente">Telefone</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix fa fa-commenting" style="color: #eb268f" aria-hidden="true"></i>
                        <textarea name="mensagem" class="materialize-textarea validate" required></textarea>
                        <label for="mensagem">Mensagem</label>
                    </div>
                    <!--
                                            <div class="input-field col s12 captcha">
                                                <div class="g-recaptcha" data-sitekey="6LdzPyIUAAAAAHjmz3GgGR844JE88p2Wu4RhU5Ep"></div>
                                            </div>
                                            -->
                    <button class="btn waves-effect waves-light black" style="margin-top: 20px;" type="submit" name="action">Enviar
                        <i class="material-icons right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Conteudo-->
<!-- end page content -->
<?php include "footer.php"; ?>