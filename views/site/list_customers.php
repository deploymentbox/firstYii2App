<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $classes = ["active", "success", "warning", "danger", "info"] ?>
<h1>Yii2 App</h1>
<h2>List of Customers</h2>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <?php $n = 0; ?>
    <?php foreach($customers as $customer):?>
    <tr class="<?php echo $classes[$n % 5]; ?>">
        <td><?php echo $customer['name']; ?></td>
        <td><?php echo $customer['email']; ?></td>
        <td ><?php echo $customer['phone']; ?></td>
        <td ><?php echo $customer['address']; ?></td>
    </tr>
    <?php $n = $n + 1; ?>
    <?php endforeach;?>
</table>
