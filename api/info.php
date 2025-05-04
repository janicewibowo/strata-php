<?php
// Allow cross-origin requests from any origin
header("Access-Control-Allow-Origin: *");

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Strata Info</title>";
echo "<style>
        body { font-family: sans-serif; background: #f9f9f9; padding: 2rem; }
        .card { background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 600px; margin: auto; }
        h1 { color: #0070f3; }
      </style>";
echo "</head>";
echo "<body>";
echo "<div class='card'>";
echo "<h1>Welcome to Sunrise Apartments</h1>";
echo "<p>This page is served from a standalone PHP file deployed via Vercel.</p>";
echo "<ul>";
echo "<li>Building Address: 178 Campbell Parade, Bondi Beach NSW 2026</li>";
echo "<li>Number of Units: 30</li>";
echo "<li>Strata Committee Members: Chairperson, Treasurer, Secretary</li>";
echo "</ul>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
