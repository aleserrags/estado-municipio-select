<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h3>Teste formulario</h3>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Estado</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="">Selecione um estado</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Cidade</label>
                        <select name="cidade" id="cidade" class="form-control"></select>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script>
        (function(){

            // Função para pegar os municipios com base no estado
            function carregarMunicipios(id_estado) {

                return fetch(`/carregar-municipios?estado=${id_estado}`)
                    .then(response => response.json())

            }

            // Limpar select de cidades
            function limparCidades() {
                const optionsCidade = document.querySelectorAll('#cidade option')
                if (optionsCidade) {
                    optionsCidade.forEach(option => {
                        option ? option.remove : null
                        option.remove()
                    })
                }
            }

            // Preecher o select com as cidades com base no estado selecionado
            function preecherCidades(cidades) {
                const cidadeSelect = document.querySelector('#cidade')
                limparCidades()
                cidades.forEach(cidade => {
                    const option = document.createElement('option')
                    option.value = cidade.id
                    option.text = cidade.nome
                    cidadeSelect.add(option, null)
                });
            }

            // Pegando o estado selecionado
            const estadoSelect = document.querySelector('#estado')
            estadoSelect.addEventListener('change', () => {
                // Passando o estado selecionado para a função
                carregarMunicipios(estadoSelect.value)
                    .then(dados => {
                        preecherCidades(dados)
                    })

            })


        })()

    </script>
</body>

</html>
