<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <h5 class="card-title">Cadastro de Cliente</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="tabelaprodutos">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->idade}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>
                                        <button></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>