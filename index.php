<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submit Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg p-4 rounded">
    <h2 class="mb-4 text-center text-primary">Submit Your Info</h2>
    <form method="POST" action="submit.php">
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary w-100">Send</button>
    </form>
  </div>
</div>

</body>
</html>
