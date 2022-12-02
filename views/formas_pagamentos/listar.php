<div class="main-content">
    <div class="container-fluid">

        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="<?php echo $icone_pagina ?> bg-blue"></i>
                        <h5><?php echo $pagina_atual ?></h5>
                        <span><?php echo $info_pagina_atual; ?></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a title="Home" href="<?php echo base_url('home'); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $pagina_atual ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <?php
        if ($message = $this->session->flashdata('error')):
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert bg-danger alert-danger text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <span><i class="ik ik-alert-octagon"></i></i>&nbsp;&nbsp;<?php echo $message; ?></span>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <?php
        if ($message = $this->session->flashdata('sucesso')):
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert bg-success alert-success text-white alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <span><i class="fas fa-check-circle"></i>&nbsp;&nbsp;<?php echo $message; ?></span>
                    </div>
                </div>
            </div>

        <?php endif; ?>



        <div class="row clearfix">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header d-block">
                        <a title="Nova forma de pagamento" href="<?php echo base_url('pagamentos/modulo'); ?>" class="btn bg-blue btn-rounded float-right text-white"><i class="ik ik-plus ik-1x"></i>Nova</a>                        
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-borderless nowrap table-sm display dt-responsive nowrap compact py-3" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="all">Nome</th>                                
                                        <th class="all text-center">Ativa</th>                                
                                        <th class="all no-sort text-right">Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($formas_pagamentos as $forma): ?>
                                        <tr>
                                            <td><?php echo $forma->forma_pagamento_id ?></td>
                                            <td><?php echo $forma->forma_pagamento_nome; ?></td>
                                            <td class="text-center"><?php echo ($forma->forma_pagamento_ativa == 1 ? '<span class="badge badge-pill badge-primary"><i class="fas fa-lock-open"></i>&nbsp;Sim</span>' : '<span class="badge badge-pill badge-danger"><i class="fas fa-lock"></i>&nbsp;Não</span>') ?></td>
                                            <td class="text-right">
                                                <a title="Editar forma de pagamento" href="<?php echo base_url('pagamentos/modulo/' . $forma->forma_pagamento_id); ?>" class="btn btn-icon btn-primary mr-2"><i class="ik ik-edit"></i></a>
                                                <a title="Excluir forma de pagamento" href="javascript:void(0)" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#forma-<?php echo $forma->forma_pagamento_id; ?>" ><i class="ik ik-trash-2"></i></a>
                                            </td>
                                        </tr>

                                    <div class="modal fade" id="forma-<?php echo $forma->forma_pagamento_id; ?>" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="demoModalLabel"><i class="ik ik-alert-octagon text-danger"></i>&nbsp;&nbsp;Exclusão de registro!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    Clique em <span class="text-danger font-weight-bold">"Sim"</span> se você deseja excluir o registro.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                    <a href="<?php echo base_url('pagamentos/del/' . $forma->forma_pagamento_id); ?>" type="button" class="btn btn-danger">Sim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

