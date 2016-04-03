<?php $__env->startSection('title', 'Add Recipe'); ?>

<?php $__env->startSection('content'); ?>
                
<?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Recipe</div>
                <div class="panel-body col-md-10 col-md-offset-1">

                    <?php echo Form::open(['route'=>'recipes.store', 'method'=>'POST']); ?>

                   
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

                        <?php echo Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Insert description']); ?>

                    </div>
                    <?php echo Form::submit('save',['class'=>'btn btn-primary']); ?>    

                    <?php echo Form::close(); ?>


                </div>
            </div>
        </div>
    </div>
</div>                   
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>