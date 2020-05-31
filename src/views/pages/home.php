<?php $render('header'); ?>

<div class="content" style="width: 550px; min-height: 500px; overflow: auto; border:solid 1px #ccc; 
margin: auto; margin-top: 10px;">
   <div class="data">
        <div style="width: 100%; height: 65px; background-color: #999; 
        color: #fff ;display: flex; align-items: center; justify-content: center;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        ">
           <h2 style="margin: 0;">Registro de encomendas</h2>
        </div>
        <table class="pure-table pure-table-horizontal">
         <thead>
            <tr style="font-size: 14px;">
               <th>ID</th>
               <th>ENCOMENDADOR</th>               
               <th>VALOR (R$)</th>
               <th>ENTREGA PREVISTA</th>
               <th>AÇÕES</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach($encomendas as $encomenda): ?>
               <tr>
                  <td><?=$encomenda['id']?></td>
                  <td><?=$encomenda['encomendador']?></td>
                  <td><?=$encomenda['valor']?></td>
                  <td><?=$encomenda['entrega']?></td>
                  <td>
                     <a href="<?=$base;?>/encomenda/<?=$encomenda['id']?>/editar" style="text-decoration: none;">
                        <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698873-icon-136-document-edit-512.png" width="20" style="margin-right: 5px;">
                     </a>
                     <a href="<?=$base;?>/encomenda/<?=$encomenda['id']?>/excluir" style="text-decoration: none;" onclick="return confirm('Deseja realmente excluir a encomenda?')">
                        <img src="https://lh3.googleusercontent.com/proxy/ZS_AMGkkZj06yY6CGG5p42pV705rTXzz4_7Zdz5xVN9JBvYZAXssKXIUEy-yFFzAsbq6n0OYjC25PB2b8ohhuL18smEGAJAj2B9dvMP3cjJSOY_2xw" width="20">
                     </a>
                  </td>
               </tr>   
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>

<?php $render('footer'); ?>
