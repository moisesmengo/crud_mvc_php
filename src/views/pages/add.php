<?php $render('header'); ?>

<div class="content" style="width: 470px; min-height: 500px; overflow: auto; border:solid 1px #ccc; 
margin: auto; padding: 15px; margin-top: 10px;">
   <div class="add">
        <h3>Nova Encomenda:</h3>
        <hr>
        <form action="<?=$base;?>/novo" method="POST"  class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
                    <label for="aligned-name">Encomendador</label>
                    <input type="text" name="encomendador" placeholder="Quem encomendou?" />
                </div>
                <div class="pure-control-group">
                    <label for="aligned-password">Valor</label>
                    <input type="number" name="valor" placeholder="Quanto vai custar?" />
                </div>
                <div class="pure-control-group">
                    <label for="aligned-email">Data de início</label>
                    <input type="date" name="inicio"/>
                </div>
                <div class="pure-control-group">
                    <label for="aligned-foo">Data de entrega</label>
                    <input type="date" name="entrega"/>
                </div>
                <div class="pure-control-group">
                    <label for="aligned-foo">Descrição</label>
                    <textarea class="pure-input-1-2" name="descricao" placeholder="De que se trata?"></textarea>
                </div>
                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Salvar</button>
                </div>
            </fieldset>
        </form>
   </div>
</div>

<?php $render('footer'); ?>
