<?php

  // Check if there is a session resumed and if not start the session
  if (session_status() === PHP_SESSION_NONE) session_start();

  // Store the errors and clear the session variable
  $errors = $_SESSION['errors'] ?? null;

  // Store the success messages and clear the session variable
  $successes = $_SESSION['successes'] ?? null;

  // Clear the session variables
  unset($_SESSION['errors']);
  unset($_SESSION['successes']);
?>

<!-- Build the response boxes -->
<?php foreach ([$errors, $successes] as $type): ?>
  <?php if ($type && count($type) > 0): ?>
    <div class="alert alert-danger">
      <?php foreach ($type as $msg) echo "{$msg}<br>" ?>
    </div>
  <?php endif ?>
<?php endforeach ?>