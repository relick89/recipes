<?php $__env->startSection('title', 'Show'); ?>
<?php $__env->startSection('content'); ?>
                
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        <?php foreach($errors->all() as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php echo Form::open(['route'=>'recipes.store', 'method'=>'POST']); ?>

              <!!  input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" !!> 
                <div class ="form-group">
                    <?php echo Form::label('title: '); ?>

                    <?php echo Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Insert title']); ?>

                </div>

                <div class ="form-group">
                    <?php echo Form::label('ingredient_list', 'Ingredients: '); ?>

                    <?php echo Form::select('ingredient_list[]',$ingredients, null,['class'=>'form-control', 'id' => 'ingredient_list','multiple']); ?>

                </div>

                <div class ="form-group">
                    <?php echo Form::label('description: '); ?>

                    <?php echo Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Insert description']); ?>

                </div>
                <?php echo Form::submit('save',['class'=>'btn btn-primary']); ?>    

                <?php echo Form::close(); ?>                
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>                
        
        <script type="text/javascript">
                 $('#ingredient_list').select2({
                    placeholder: 'Scegliere o aggiungere gli ingredienti' ,
                    tags: true,
                    tokenSeparators: [",", " "],
                    createTag: function(newIngredient) {
            return {
                id: 'new:' + newIngredient.term,
                text: newIngredient.term + ' (+)'
            };
                   }
                });
            </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>