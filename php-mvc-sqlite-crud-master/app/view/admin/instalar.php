<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Instalar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo URL; ?>admin">Admin</a></li>
                    <li class="breadcrumb-item active">Instalar</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Instalação do sistema</h4>
                        <!-- <p class="card-category">Instale o sistema de PHP - MVC</p> -->
                    </div>
                    <div class="card-body">
                        <?php if (isset($retorno)) { ?>
                            <div class="alert alert-info">
                                <span><?php echo $retorno; ?></span>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?php echo URL; ?>admin/instalar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nome do site</label>
                                        <input name="site" type="text" class="form-control" id="site" placeholder="Ex.: Portal de Notícias">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Endereço do site</label>
                                        <input name="host" type="text" class="form-control" id="site" placeholder="Ex.: https://www.noticias.com.br">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nome completo</label>
                                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Ex.: João da Silva">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Usuário</label>
                                        <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Ex.: admin">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Senha</label>
                                        <input name="senha" type="password" class="form-control" id="senha" placeholder="Ex.: senha-muito-dificil">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">E-mail</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Ex.: noticias@noticias.com.br">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Senha do e-mail</label>
                                        <input name="email_senha" type="password" class="form-control" id="emailSenha" placeholder="Ex.: senha-muito-mais-dificil">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Servidor de e-mail</label>
                                        <input name="email_host" type="text" class="form-control" id="emailHost" placeholder="Ex.: mail.noticias.com.br">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Porta do e-mail</label>
                                        <input name="email_porta" type="text" class="form-control" id="emailPorta" placeholder="Ex.: 587">
                                    </div>
                                </div>
                            </div>
                            <button name="instalar" type="submit" class="btn btn-primary pull-right">Instalar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
