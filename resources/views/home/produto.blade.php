@extends ('layouts.generic')

@section('title', 'Produtos')

@section('content')

<body class="body_produto">
    <div class="search_bar">
        <form action="">
            <input title='pesquisar' id='lbl_pesquisa' class="pesquisar_label" type="text" placeholder="Pesquisar produtos aqui">
                <script>
                    var input = document.getElementById("lbl_pesquisa");
                    input.addEventListener("keypress", function(event) {
                        if (event.key === "Enter") {
                            event.preventDefault();
                            document.getElementById("pesquisar").click();
                        }
                    });
                </script>

            <a class='pesquisar' href="" onclick="searchProduto(event)"><img class='pesquisa_img' src="img/pesquisa.png" alt="pesquisar"></a>
            <script>
                function searchProduto(event) {
                    event.preventDefault();
                    var searchValue = document.getElementById("lbl_pesquisa").value;
                    window.location.href = "/produto?search=" + encodeURIComponent(searchValue);
                }
            </script>
        </form>
    </div>
    <div class="produtos_list">
        <p>Aqui vão ficar os produtos</p>
    </div>
</body>

@endsection