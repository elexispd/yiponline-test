<?php
/* Smarty version 5.4.1, created on 2024-09-01 11:43:44
  from 'file:confirmation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66d453709cd3e2_57160599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce32ba77965239fdb6ea6fd4839e6f2d431a43e' => 
    array (
      0 => 'confirmation.tpl',
      1 => 1725191018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66d453709cd3e2_57160599 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\user-registration\\templates';
?><!-- templates/confirmation.tpl -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Registration Confirmation</h2>
                </div>
                <div class="card-body">
                    <p class="lead">Thank you for registering, <strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('username'), ENT_QUOTES, 'UTF-8', true);?>
</strong>!</p>
                    <p>Your registration details are as follows:</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Username:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('username'), ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
</li>
                    </ul>
                    <div class="mt-4 text-center">
                        <a href="index.php" class="btn btn-primary">Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
