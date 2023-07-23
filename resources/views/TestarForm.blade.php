<form action="{{ URL::to('/savecliente') }}" id="idForm" method="post" >
    @csrf
    <div class="form-row">

        <div class="form-group col-sm-6">
            <label class="InputObj" for="direcao">nome cliente</label>
            <input type="text" class="form-control" placeholder="nome cliente" name="nome" aria-label="nome">
        </div>

        <div class="form-group col-sm-6">
            <label class="InputObj">valor_pag</label>
            <input type="text" class="form-control" placeholder="valor_pag" name="valor_pag" aria-label="valor_pag">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label class="InputObj">dis_raiz</label>
            <input type="text" class="form-control" placeholder="dis_raiz" name="dis_raiz" aria-label="dis_raiz">
        </div>
        <div class="form-group col-sm-6 justify-content-center">
            <label class="InputObj">endereco</label>
            <input type="text" class="form-control" placeholder="endereco" name="endereco" aria-label="endereco">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-sm-12">
            <label class="InputPeso" for="descricao">num1</label>
            <input type="text" class="form-control" placeholder="endereco" name="num1" aria-label="endereco">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-12">
            <label class="InputPeso" for="descricao">num2</label>
            <input type="text" class="form-control" placeholder="endereco" name="num2" aria-label="endereco">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-12">
            <label class="InputPeso" for="descricao">contrato</label>
            <input type="text" class="form-control" placeholder="endereco" name="contrato" aria-label="endereco">
        </div>
    </div>

    <div class="form-row justify-content-center">
        <div id="res"></div>
        <div class="col-sm-0 justify-content-center">

            <button style="padding-left: 50px; padding-right: 50px; background: #02826b;" class="btn btn-success my-5" ><i class="fa fa-floppy-o m-1" aria-hidden="true" ></i>Salvar</button>

        </div>

    </div>

</form>
<br>
<form action="{{ URL::to('/savepaymente') }}" id="idForm" method="post" >
    @csrf
    <div class="form-row">

        <div class="form-group col-sm-6">
            <label class="InputObj" for="direcao">data_pag</label>
            <input type="date" class="form-control" placeholder="nome cliente" name="data_pag" aria-label="nome">
        </div>

        <div class="form-group col-sm-6">
            <label class="InputObj">valor_pag</label>
            <input type="text" class="form-control" placeholder="valor_pag" name="valor_pag" aria-label="valor_pag">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label class="InputObj">tipo</label>
            <input type="text" class="form-control" placeholder="dis_raiz" name="tipo" aria-label="dis_raiz">
        </div>
        <div class="form-group col-sm-6">
            <label class="InputObj">data_ven</label>
            <input type="text" class="form-control" placeholder="dis_raiz" name="data_ven" aria-label="dis_raiz">
        </div>
        <div class="form-group col-sm-6 justify-content-center">
            <label class="InputObj">id_client_fk</label>
            <input type="number" class="form-control" placeholder="endereco" name="id_client_fk" aria-label="endereco">
        </div>
    </div>

    <div class="form-row justify-content-center">
        <div id="res"></div>
        <div class="col-sm-0 justify-content-center">

            <button style="padding-left: 50px; padding-right: 50px; background: #02826b;" class="btn btn-success my-5" ><i class="fa fa-floppy-o m-1" aria-hidden="true" ></i>Salvar</button>

        </div>

    </div>

</form>