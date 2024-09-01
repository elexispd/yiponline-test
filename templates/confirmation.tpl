<!-- templates/confirmation.tpl -->
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
                    <p class="lead">Thank you for registering, <strong>{$username|escape}</strong>!</p>
                    <p>Your registration details are as follows:</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Username:</strong> {$username|escape}</li>
                        <li class="list-group-item"><strong>Email:</strong> {$email|escape}</li>
                    </ul>
                    <div class="mt-4 text-center">
                        <a href="index.php" class="btn btn-primary">Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
