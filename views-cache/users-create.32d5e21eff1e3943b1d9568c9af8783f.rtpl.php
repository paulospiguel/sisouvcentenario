<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Usuários
       </h1>
       <ol class="breadcrumb">
            <li><a href="/AdminPainel"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/AdminPainel/users">Usuários</a></li>
            <li class="active"><a href="/AdminPainel/users/create">Cadastrar</a></li>
       </ol>
  </section>

  <!-- Main content -->
  <section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-success">
             <div class="box-header with-border">
                 <h3 class="box-title">Novo Usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/AdminPainel/users/create" method="post">
                 <div class="box-body">
                     <div class="form-group">
                         <label for="desperson">Nome</label>
                         <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                         <label for="destypedoc">Tipo Documento</label></br>           
                         <select name="destypedoc" id="destypedoc">
                              <option>Selecione...</option>
                              <option id="rg" value="1">RG</option>
                              <option value="2">CPF</option>
                              <option value="3">Passaporte</option>
                         </select>
                    </div>
                    <div class="form-group">
                       <label for="nrdocument">Número Documento</label>
                       <input type="number" class="form-control" id="nrdocument" name="nrdocument" placeholder="Digite o Nº do Doumento">
                  </div>
                  <div class="form-group" id="hidden_div" style="display: none;">
                     <label for="desemitter">Orgão Emissor</label>
                     <input type="text" name="desemitter" id="desemitter" placeholder="">
                </div>
                <div class="form-group">
                  <label for="deslogin">Login</label>
                  <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login">
             </div>
             <div class="form-group">
                  <label for="nrphone">Telefone</label>
                  <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone">
             </div>
             <div class="form-group">
                  <label for="desemail">E-mail</label>
                  <input type="email" class="form-control" id="desemail" name="desemail" placeholder="Digite o e-mail">
             </div>
             <div class="form-group">
                  <label for="despassword">Senha</label>
                  <input type="password" class="form-control" id="despassword" name="despassword" placeholder="Digite a senha">
             </div>
             <div class="form-group checkbox">
                 <label for="inadmin">Perfil</label></br>
                 <select name="inadmin">
                      <option style="display: none" value="0">Master</option>
                      <option selected="selected" value="1">Administrador</option>
                      <option value="2">Ouvidor</option>
                      <option value="3">Cidadão</option>
                      <option value="4">Consulta</option>
                 </select>          
            </div>
       </div>
       <!-- /.box-body -->
       <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
       </div>
  </form>
</div>
</div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
     window.onload=function(){
          document.getElementById('destypedoc').addEventListener('change', function () {
              var style = this.value == 'rg' ? 'block' : 'none';
              document.getElementById('hidden_div').style.display = style;
         });
     }
</script>