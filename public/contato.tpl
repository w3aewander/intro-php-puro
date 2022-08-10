
<form id="contato" action="/sendmail" method="post">
<h1>Contato</h1>

<div class="form-group">
  <label for="nome" class="col-sm-2 control-label">Nome</label>
  <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
</div>

<div class="form-group">
  <label for="email" class="col-sm-2 control-label">Email</label>
  <input type="email" class="form-control" placeholder="alguem@email.com" name="email" id="email">
</div>

<div class="form-group">
  <label for="celular" class="col-sm-2 control-label">Celular</label>
  <input type="tel" class="form-control" placeholder="(99)99999-9999" name="celular" id="celular">
</div>

<div class="form-group">
  <label for="assunto" class="col-sm-2 control-label">Assunto</label>
  <input type="text" class="form-control" placeholder="assunto aqui" name="assunto" id="assunto">
</div>

<div class="form-group">
  <label for="mensagem" class="col-sm-2 control-label">Mensagem</label>
  <textarea  rows="5" class="form-control" placeholder="Sua mensagem aqui" name="mensagem" id="mensagem"></textarea>
</div>

<div class="btn-group gap-1 mt-1">
  <button type="reset" class="btn btn-primary btn-sm">Limpar</button>
  <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
</div>
</form>

