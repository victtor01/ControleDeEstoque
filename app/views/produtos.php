<section class="section_principal">
    <form action="" method="POST">
        <header class="header-titulo titulo-section">
            <h1>
                Produtos
            </h1>
        </header>
        <div class="botoes-principais">
            <div class="div">
                <button type="button" class="botao" id="button-entrada" onclick="abrirmodal('button-entrada')">
                    <ion-icon name="add-outline" style="width: 30px; height: 100%;"></ion-icon>
                    Cadastro
                </button>
            </div>
            <div class="div-pesquisar div">
                <input id="busca" type="text" placeholder="Pesquise..." class="pesquisar" value="<?php if(isset($_GET['buscar'])){ echo $_GET['buscar'];}?>">
            </div>
            <div class="div">
                <button type="submit" class="botao" id="modalremessa" value="submit-saida-produto" name="submit-entrada-produto">
                <ion-icon name="enter-outline" style="width: 30px; height: 100%;"></ion-icon>
                    Entrada
                </button>
            </div>
            <div class="div">
                <button type="submit" class="botao" id="modalsaida" value="submit-saida-produto" name="submit-saida-produto">
                    <ion-icon name="exit-outline" style="width: 30px; height: 100%;"></ion-icon>
                    Saída
                </button>
            </div>
        </div>

        <section class="section-produtos" 
        id="produtos">
                <table id="tabela-produtos">
                    <thead>
                        <tr class='tr'>
                            <th style="min-width: 30px;"></th>
                            <th> Nome </th>
                            <th> Categoria</th>
                            <th> Tamanho</th>
                            <th > Quantidade</th>
                            <th style ="max-width: 40px"> Preço de Compra</th>
                            <th max-width='40px'> Lucro (%) </th>
                            <th> Preço de venda: </th>
                            <th> Data</th>
                            <th style='min-width: 100px;'> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($produto as $key => $data):
                                ?>
                                <tr>
                                    <td>
                                    <td>
                                        <?php echo $produto[$key]['nome']; ?>
                                    </td>
                                    <td>
                                        <?php echo $produto[$key]['categoria']; ?>
                                    </td>
                                    <td>
                                        <?php echo $produto[$key]['tamanho']; ?>
                                    </td>
                                    <td>
                                        <?php echo $produto[$key]['quantidade']; ?>
                                    </td>
                                    <td>
                                        <?php echo $produto[$key]['valor_investido']; ?>
                                    </td>
                                    <td>
                                        <?php echo $produto[$key]['lucro_esperado']; ?>
                                    </td>
                                    <td>
                                        <?php echo  (($produto[$key]['lucro_esperado']/100) * $produto[$key]['valor_investido']) +  $produto[$key]['valor_investido']; ?>
                                    </td>
                                    <td>
                                        <?php echo $produto[$key]['data_produto']; ?>
                                    </td>
                                    <td>
                                        <button>
                                            <a href="/produto/editar/<?php echo $produto[$key]['id_produto']?>"> EDITAR </a>
                                        </button>
                                        <button>
                                            <a href="/produto/excluir/<?php echo $produto[$key]['id_produto']?>"> EXCLUIR</a>
                                        </button>
                                    </td>
                                <tr>
                                <?php
                            endforeach
                        ?>
                    </tbody>
                </table>
        </section>
    </form>
</section>