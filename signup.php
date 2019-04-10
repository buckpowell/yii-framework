<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<?= $form->field($model, 'first_name') ?>
			</div>
			<div class="col-lg-5">
			<?= $form->field($model, 'password')->passwordInput() ?>
			<?= $form->field($model, 'mi') ?>
			
			</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'last_name') ?>
			<?= $form->field($model, 'address') ?>
			
		</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'suffix') ?>
			<?= $form->field($model, 'city') ?>
		</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'us_state') ?>
			<label for=""> Phone</label><?= $form->field($model,'phone')->input('phone',['placeholder' => "Enter Phone (123) 456-7890",'class' => 'form-control'])->label(false)?>    
			
		</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'zip') ?>
			<?= $form->field($model, 'business_phone') ?>
			
		</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'email') ?>
			<label for=""> SSN</label><?= $form->field($model, 'ssn')->input('dob',['placeholder' => "Enter SSN (XXX-XX-XXXX)",'class' => 'form-control'])->label(false) ?>
		</div>
		<div class="col-lg-5">
		<label for=""> Birth Date</label><?= $form->field($model,'dob')->input('dob',['placeholder' => "Enter Date of Birth (MM/DD/YYYY)",'class' => 'form-control'])->label(false)?>    
        <?= $form->field($model, 'dep') ?>
		</div>
	</div>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
 
        </div>
</div>