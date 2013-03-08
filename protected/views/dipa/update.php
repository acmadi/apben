<?php
$this->breadcrumbs=array(
	'DIPA'=>array('admin'),
    $model->nomor_dipa . " ({$model->tanggal_dipa})" => array('/dipa/view/' . $model->uid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dipa','url'=>array('index')),
	array('label'=>'Create Dipa','url'=>array('create')),
	array('label'=>'View Dipa','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Dipa','url'=>array('admin')),
);
?>

<h1>Update DIPA</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>