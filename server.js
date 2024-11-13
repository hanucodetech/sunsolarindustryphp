const express = require('express');
const php = require('php-cgi');
const path = require('path');

const app = express();

// Serve static files (images, CSS, JS, etc.)
app.use('/assets', express.static(path.join(__dirname, 'assets')));

// Serve PHP files
app.all('*.php', (req, res) => {
  php.handle(req, res);
});

// Default route for other requests (if needed)
app.get('*', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.php'));
});

app.listen(3000, () => {
  console.log('Server running at http://localhost:3000');
});
