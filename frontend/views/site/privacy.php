 <?php

 use frontend\models\Post;

 $model = Post::find()->where(['type'=>'privacy'])->orderBy(['id'=>SORT_ASC])->limit(1)->one();
 ?>
 <?php if (!is_null($model)):?>

 	<?php $this->title= $model->titulo;?>
 	<code>Página generada en <?=Yii::$app->formatter->asDateTime(time(),'medium');?></code>
 	<div class="row">
 		<article class="blog">
 			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
 				<p>Redactado en <span class="label label-success"><?=Yii::$app->formatter->asDate($model->created_at);?></span></p>
 				<h1 class="heading"><?=$model->titulo;?></h1>
 				<p><?=$model->text?></p>
 			</div>
 		</article>
 	</div><hr>
 	
 <?php endif; ?>


