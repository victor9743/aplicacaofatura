

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<?php $__env->startSection('content'); ?> 

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="container card bg-dark text-white p-3" style="margin-top: 40px">
    <div class="tab-pane" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <div class="text-left mb-3">
            <h2 class="fw-bold mt-4 mb-3 text-uppercase" style="font-size: 20pt">Salvar Fatura</h2>
        </div>
        <?php
        $rota = "";
            if(isset($fatura->id)) {
               $rota = "/fatura/salvar/{{$fatura->id}}";
                
            } else {
                $rota = "/fatura/salvar";
            }
        ?>

        <form action="<?php echo e($rota); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(isset($fatura->id) ): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>
            <div class="row">
                <input type="hidden" id="id_Fatura" name="id_Fatura" value="<?php echo e(isset($fatura->id) ? $fatura->id : 0); ?>">

                <div class="col-sm-6">
                    <div class="form-outline mb-4 col-sm-8">
                        <label class="form-label" for="descricao">Descricao</label>
                        <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Valor referente ao mes..." value="<?php echo e(isset($fatura->descricao) ? $fatura->descricao : ''); ?>"/>
                        
                    </div>

                    <div class="form-outline mb-4 col-sm-4">
                        <label class="form-label" for="valorFatura">Valor da fatura</label>
                        <input type="number" id="valorFatura" name="valorFatura" class="form-control" value="<?php echo e(isset($fatura->valorFatura) ? $fatura->valorFatura : ''); ?>"/>
                    
                    </div>

                    <div class="form-outline mb-4 col-sm-8">
                        <label class="form-label" for="imgFatura">Imagem da fatura</label><br>
                        <input type="file" name="imgFatura" id="imgFatura" value="<?php echo e(isset($fatura->imgFatura) ? $fatura->imgFatura : ''); ?>"/>
                        <?php if(isset($fatura->imgFatura)): ?>
                            <img src="/img/faturas/<?php echo e($fatura->imgFatura); ?>" alt="<?php echo e($fatura->descricao); ?>" style="width: 100px; margin-top:10px">
                        <?php endif; ?>
                        
                    </div>


                    <div class="form-outline mb-4 col-sm-4">
                        <label class="form-label" for="vencimento">Vencimento</label>
                        <input type="date" id="vencimento" name="vencimento" class="form-control" value="<?php echo e(isset($fatura->vencimento) ? $fatura->vencimento : ''); ?>" />
                        
                        
                    </div>
                </div>
            
                <div class="col-sm-6">
                    <div class="form-outline mb-4 col-sm-8">
                        <label class="form-label" for="imgRecibo">Imagem do recibo</label><br>
                        <input type="file" id="imgRecibo" name="imgRecibo" value="<?php echo e(isset($fatura->imgRecibo) ? $fatura->imgRecibo : ''); ?>"/>
                        <?php if(isset($fatura->imgRecibo)): ?>
                            <img src="/img/faturas/<?php echo e($fatura->imgRecibo); ?>" alt="<?php echo e($fatura->descricao); ?>" style="width: 100px; margin-top:10px">
                        <?php endif; ?>
                        
                    </div>

                    <div class="form-outline mb-4 col-sm-4">
                        <label class="form-label" for="dataPagamento">Data do pagamento</label>
                        <input type="date" id="dataPagamento" name="dataPagamento" class="form-control" value="<?php echo e(isset($fatura->dataPagamento) ? $fatura->dataPagamento : ''); ?>"/>
                        
                    </div>

                                 
                </div>
          
                <div class="row">
                    <div class="form d-flex justify-content-left  col-sm-6">
                        <a href="/fatura/index" class="btn btn-primary btn-block mb-3">Voltar</a>
                    </div>
                    <div class="form d-flex justify-content-end  col-sm-6">
                        <button type="submit" class="btn btn-primary btn-block mb-3">Salvar</button>
                        
                    </div>
                </div>            
            </div>
        </form>
    </div>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script>

  <script>
      
  /*
    AmagiLoader.show();
    setTimeout(() => {
       AmagiLoader.hide();
    }, 1000);*/
   </script>
   
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\supor\OneDrive\Área de Trabalho\aplicacaofatura\resources\views/dashboard/new.blade.php ENDPATH**/ ?>