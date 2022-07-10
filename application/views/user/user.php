<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard - User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item">
                Dashboard
              </a>
        
              <a class="navbar-item">
                Profile
              </a>
            </div>
        
            <div class="navbar-end">
              <div class="navbar-item">
                <div class="buttons">
                  <a class="button is-primary" href="logout">
                    <strong>Logoff</strong>
                  </a>
                </div>
              </div>
            </div>
          </div>
      </nav>
      <div class="section">
        <div class="columns is-gapless">
            <div class="column">
                <h1 class="title is-inline-block">All Products</h1>
            </div>
        </div>

      <table class="table is-bordered is-striped is-hoverable is-fullwidth">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Inventory Count</th>
                  <th>Quantity Sold</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th>1</th>
                  <td>T-Shirt</td>
                  <td>38</td>
                  <td>23</td>
              </tr>
          </tbody>
      </table>
    </div>
</body>
</html>