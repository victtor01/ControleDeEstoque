<div class="barra-lateral">
    <header>
        <div class="imagem">
            <img src="/assets/img/imgSystem/estoqueLogin.png" width="150" height="150">
        </div>
        <h2 style="margin-top: 10px;">Victor</h2>
    </header>
    <section>
        <a href="/">
            <ion-icon name="desktop-outline"></ion-icon> <span> Home </span>
        </a>
        <a href="/produtos">
            <ion-icon name="bag-outline"></ion-icon> <span> Produtos </span>
        </a>
        <a href="/categorias">
            <ion-icon name="bookmark-outline"></ion-icon> <span> Categorias </span>
        </a>
        <a href="/fornecedores">
            <ion-icon name="person-outline"></ion-icon> <span> Fornecedores </span>
        </a>

        <button class="clientes-funcionarios" id="botao-financeiro" onclick="Financeiro()">
            <ion-icon name="cash-outline"></ion-icon></ion-icon> <span> Financeiro </span>
            <ion-icon name="chevron-forward-outline" id="ion-icon-seta-financeiro" width='10px'></ion-icon>    
        </button>
        <div class="href-clientes-funcionarios" id="href-financeiro">
            <a href="/caixa">
                <span> Dashboard </span>
            </a>
            <a href="/entrada">
                <span> Entradas </span>
            </a>
            <a href="/saida">
                <span> saidas </span>
            </a>
        </div>

        <button class="clientes-funcionarios" id="botao-contas" onclick="ClientesFuncionarios()">
            <ion-icon name="person-add-outline"></ion-icon> <span> Contas </span>
            <ion-icon name="chevron-forward-outline" id="ion-icon-seta" width='10px'></ion-icon>    
        </button>
        <div class="href-clientes-funcionarios" id="href-clientes-funcionarios">
            <a href="funcionarios.php">
                <span> Funcionários </span>
            </a>
            <a href="clientes.php">
                <span> Clientes </span>
            </a>
        </div>

        <a href="/logout" class="sair">
            <ion-icon name="exit-outline" style="color: #fff"></ion-icon > <span style="color: #fff"> Sair </span>
        </a>
        
    </section>
</div>