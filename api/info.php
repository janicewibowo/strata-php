<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Strata Info</title>
  <style>
    body {
      font-family: sans-serif;
      background: #f9f9f9;
      padding: 2rem;
    }
    .card {
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: auto;
    }
    h1 {
      color: #0070f3;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Welcome to Sunrise Apartments</h1>
    <p>This page is served from a standalone PHP file deployed via Vercel.</p>
    <ul>
      <li><strong>Building Address:</strong> 178 Campbell Parade, Bondi Beach NSW 2026</li>
      <li><strong>Number of Units:</strong> 30</li>
      <li><strong>Strata Committee Members:</strong> Chairperson, Treasurer, Secretary</li>
    </ul>
  </div>
</body>
</html>
