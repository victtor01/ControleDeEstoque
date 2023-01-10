<footer class="footer">
    <nav  class="paginacao">
        <ul class="pagination" id="ul-pagination">
            
            <li class="page-item">
                <button class="page-link" type="button" style="width: 100%; height: 100%">
                    <a href="/produtos/page/"> <ion-icon name="chevron-back-outline"></ion-icon> </a> 
                </button>
            </li>

            <?php for($i = 1; $i < $config['numPages'] + 1; $i++): ?>
                <li class="page-item">
                    <button class="page-link liSearch" name="produto" value="<?php echo $i?>" type="button" style="width: 100%; height: 100%">
                        <?php echo $i?>
                    </button>
                </li>
            <?php endfor ?>

            <li class="page-item">
                <button class="page-link" type="button" style="width: 100%; height: 100%">
                    <a href="/produtos/page/"> <ion-icon name="chevron-forward-outline"></ion-icon> </a>
                </button>
            </li>
        
        </ul>
    </nav>
</footer>