<?php $render('header'); ?>

<div class="content" style="width: 550px; min-height: 500px; overflow: auto; border:solid 1px #ccc; 
margin: auto; margin-top: 10px;">
   <div class="add">
        <h3 style="padding: 15px;">Editar Encomenda:</h3>
        <hr>
        <form action="<?=$base;?>//encomenda/<?=$encomenda['id'];?>/editar" method="POST"  class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
                    <label for="aligned-encomendador">Encomendador</label>
                    <input type="text" name="encomendador" value="<?=$encomenda['encomendador'];?>" />
                </div>
                <div class="pure-control-group">
                    <label for="aligned-valor">Valor</label>
                    <input type="number" name="valor" value="<?=$encomenda['valor'];?>" />
                </div>
                <div class="pure-control-group">
                    <label for="aligned-inicio">Data de início</label>
                    <input type="date" name="inicio" value="<?=$encomenda['inicio'];?>"/>
                </div>
                <div class="pure-control-group">
                    <label for="aligned-entrega">Data de entrega prevista</label>
                    <input type="date" name="entrega" value="<?=$encomenda['entrega'];?>"/>
                </div>
                <div class="pure-control-group">
                    <label for="aligned-descricao">Descrição</label>
                    <input class="pure-input-1-2" name="descricao" value="<?=$encomenda['descricao'];?>"></input>
                </div>
                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Salvar</button>
                </div>
            </fieldset>
        </form>
   </div>
</div>

<?php $render('footer'); ?>
