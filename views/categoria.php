<div class="container">
    <div class="row">
        <h1><?php echo $categoria;?></h1><br/>
        <?php foreach ($produtos as $produto): ?>
        <div class="col-sm-3">
            <a href="<?php echo BASE_URL."/produto/ver/".$produto['id']; ?>">
                <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo $produto['nome']; ?></div>
                    <div class="panel-body" style="overflow: hidden;">
                        <img src="<?php echo BASE_URL."/assets/images/produto/".$produto['imagem']; ?>" class="img-responsive center-block" >
                    </div>
                    <div class="panel-footer"><span class="text-success">Preço: R$ <?php echo $produto['preco']; ?></span></div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>