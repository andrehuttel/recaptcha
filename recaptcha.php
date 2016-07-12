<!-- inicio pagina -->
<div id="page" class="clearfix" style="margin-top:100px">
  <div class="page-header">
    <h1>Fale Conosco</h1>
  </div>
</div>

<script type="text/javascript" src="<?php echo URL; ?>assets/js/ajax.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>assets/js/fale.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="main-content">
  <div class="container">
    <div class="row-fluid sidebar-right">
      <div class="span9 primary-column">
        <div id="fale_conosco">
          <p><strong>Entre em contato através do formulário abaixo:</strong></p>

          <form id="formFale" name="formFale" method="post" class="form-horizontal" action="javascript:void%200">
            <fieldset>
              <div class="control-group">
                <label for="nome">*Nome</label>
                <input name="nome" type="text" class="span10" id="nome" maxlength="100" />
              </div>

              <div class="control-group">
                <label for="nome">*Empresa</label>
                <input name="empresa" type="text" class="span10" id="empresa" maxlength="100" />
              </div>

              <div class="control-group">
                <label for="nome">*E-mail</label>
                <input name="email" type="email" class="span10" id="email" maxlength="100" />
              </div>

              <div class="control-group">
                <label for="nome">*Telefone</label>
                <input name="tel" type="text" class="span10" id="tel" maxlength="50" />
              </div>

              <div class="control-group">
                <label for="nome">*Mensagem</label>
                <textarea name="msg" cols="45" rows="5" class="span10" id="msg"></textarea>
              </div>

              <div class="control-group">
                  <div class="g-recaptcha" data-sitekey="your_site_url"></div>
              </div>

              <div class="control-group">
                <span id="retornoContato"></span>
              </div>

              <input type="button" class="btn custom-btn btn-primary" id="btnEnviar" value="Enviar" />
              <p>*campos obrigatórios.</p>
            </fieldset>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript">

var $url = '<?php echo URL; ?>';
  $(document).ready(function(){
    $('#btnEnviar').click(function(){
      if(grecaptcha.getResponse() == ""){
        event.preventDefault();
        alert('Por favor marque a opção "Não sou um robô".');
      } else{
        enviaFale($url);
      }
    });
  });
</script>
<!-- fim pagina -->