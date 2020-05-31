<?php $render('header'); ?>

<div class="content" style="width: 550px; min-height: 500px; overflow: auto; border:solid 1px #ccc; 
margin: auto; margin-top: 10px;">
   <div class="add">
        <h3 style="padding: 15px;">Nova Encomenda:</h3>
        <hr>
        <form action="<?=$base;?>/novo" method="POST"  class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
                    <label for="aligned-encomendador">Encomendador</label>
                    <input type="text" name="encomendador" placeholder="Quem encomendou?" />
                </div>
                <div class="pure-control-group">
                    <label for="aligned-valor">Valor</label>
                    <input type="number" name="valor" placeholder="Quanto vai custar?" />
                </div>
                <div class="pure-control-group">
                    <label for="aligned-inicio">Data de início</label>
                    <input type="date" name="inicio"/>
                </div>
                <div class="pure-control-group">
                    <label for="aligned-entrega">Data de entrega prevista</label>
                    <input type="date" name="entrega"/>
                </div>
                <div class="pure-control-group">
                    <label for="aligned-descricao">Descrição</label>
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
