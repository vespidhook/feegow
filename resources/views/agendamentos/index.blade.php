<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feegow_Challenge</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>

<body class="home">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
                <strong>{{session('success')['messages']}}!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-2"></div>
            <nav class="navbar navbar-expand-lg navbar-info bg-info col-8">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <label style="color:#fff;"><strong>Consulta de:</strong>&nbsp;</label>
                            <select class="form-control mr-sm-2" id="speciality_id">
                                <option value="">Selecione a Especialidade</option>
                                @foreach ($specialtiesList->content as $specialitie)
                                    <option value="{{$specialitie->especialidade_id}}">{{$specialitie->nome}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-success my-2 my-sm-0 btn_2 rounded" type="button" id="btnAgendar">BUSCAR</button>
                        </form>
                        <li>
                    </ul>
                </div>
            </nav>
            <div class="col-2"></div>
        </div>
        <br>

        <div class="row cards">
        </div>

        <div class="model" style="display:none">
            <div class="card col-4 dr">
                <div class="card-body">
                <img class="avatar" src="https://image.flaticon.com/icons/svg/387/387561.svg" width="100" height="100"
                    alt="Doctor free icon" title="Doctor free icon">
                <div class="username"><span>José José Jose José de José</span></div>
                <P class="CRM"><span>CRM:1245635241-5</span></P>
                <button class="btn btn-success my-2 my-sm-0 btn_1 rounded btnAgendar" onclick="mostrarForm(this)">Agendar</button>
                </div>
            </div>
        </div>
        <br>

        <div class="row form-agendar" style="display:none;">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card" id="card_form">
                    <div class="card-body">
                        <h3>Preencha seus dados</h3>
                        <form method="POST" action="{{route('agendamentos.store')}}">
                            @csrf
                            <input type="hidden" name="speciality_id">
                            <input type="hidden" name="professional_id">
                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="form-group">
                                        <label for="nomeField">Nome completo:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Ex: José Silva" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="form-group">
                                        <label for="nomeField">Como conheceu?</label>
                                        <select type="text" class="form-control" name="source_id" required>
                                            <option value="">Como conheceu?</option>
                                            @foreach ($pacientsListSource->content as $source)
                                                <option value="{{$source->origem_id}}">{{$source->nome_origem}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="form-group">
                                        <label for="nomeField">Nascimento:</label>
                                        <input type="date" class="form-control" name="birthdate" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="form-group">
                                        <label for="nomeField">CPF:</label>
                                        <input type="text" class="form-control" name="cpf" placeholder="Ex: 123.456.789-22" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success my-2 my-sm-0 btn_2 rounded" id="solicitarHorario">Solicitar horários</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/func.js')}}"></script>
</body>
</html>
