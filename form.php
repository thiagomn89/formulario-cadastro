<?php include_once('includes/header.php'); ?>
    <div class="card mt-3">
        <div class="card-header">
            Cadastrar Funcionário
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="form-group">
                        <span> Nome do Funcionário </span>
                        <input type="text" value="" name="" class="form-control"></input>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-group">
                        <span> Cargo do Funcionário </span>
                        <input type="text" value="" name="" class="form-control"></input>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="form-group">
                        <span> Salário do Funcionário </span>
                        <input type="text" value="" name="" class="form-control" pattern="/[0-9]{1,12}.[0-9]{2}/"></input>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-success" value="Cadastrar Usuário">  </input>
        </div>
    </div>
<?php include_once('includes/footer.php'); ?>