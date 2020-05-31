<div class="pure-menu pure-menu-horizontal" 
    style="width: 500px; height: 40px; margin: auto; 
    border: 1px solid #ccc; display: flex; justify-content: center;" >
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected">
            <a href="<?=$base;?>" class="pure-menu-link">Home</a>
        </li>
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="#" id="menuLink1" class="pure-menu-link">Encomendas</a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item">
                    <a href="<?=$base;?>/novo" class="pure-menu-link">Nova Encomenda</a>
                </li>
            </ul>
        </li>
    </ul>
</div>