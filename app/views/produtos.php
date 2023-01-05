<section class="section_principal">
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
                <input id="busca" value="" type="search" placeholder="Pesquise..." class="pesquisar">
                <button onclick="buscar()" type="button" class="button justifycenter" style="font-size: 1.3rem; background-color: #f0f2f5;padding: 1rem; border-radius: 20px; height: 3rem; margin: auto">
                <ion-icon name="search-outline"></ion-icon>
                </button>
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
        <section class="section-produtos" style="margin-top: 1rem;">
                <table id="tabela-produtos">
                    <thead>
                        <tr class='tr'>
                            <th style="min-width: 30px;"></th>
                            <th> Nome </th>
                            <th> Categoria</th>
                            <th> Tamanho</th>
                            <th > Quantidade</th>
                            <th style ="min-width: 40px"> Preço de Compra</th>
                            <th max-width='40px'> Lucro (%) </th>
                            <th> Preço de venda: </th>
                            <th> Data </th>
                            <th style='max-width: 10px; color: #000'> Ações </th>
                        </tr>
                    </thead>
                    <tbody id="produtos">

                    </tbody>
                </table>

                <footer class="footer">
                    <nav  class="paginacao">
                            <ul class="pagination">
                                
                                <li class="page-item">
                                    <button class="page-link" type="button" style="width: 100%; height: 100%">
                                        <a href="/produtos/page/<?php echo $page['start'] < 1 || $page['start'] > $page['numPages'] ? 1 : $page['start'] - 1 ?>"> <ion-icon name="chevron-back-outline"></ion-icon> </a> 
                                    </button>
                                </li>

                                <?php for($i = 1; $i < $page['numPages'] + 1; $i++): ?>
                                    <li class="page-item">
                                        <button class="page-link" onclick="buscar(<?php echo $i ?>)" type="button" style="width: 100%; height: 100%">
                                            <?php echo $i?>
                                        </button>
                                    </li>
                                <?php endfor ?>

                                <li class="page-item">
                                    <button class="page-link" type="button" style="width: 100%; height: 100%">
                                        <a href="/produtos/page/<?php echo $page['start'] < 1 || $page['start'] > $page['numPages'] ? 1 : $page['start'] + 1 ?>"> <ion-icon name="chevron-forward-outline"></ion-icon> </a>
                                    </button>
                                </li>
                            
                            </ul>
                    </nav>
                </footer>

        </section>
</section>