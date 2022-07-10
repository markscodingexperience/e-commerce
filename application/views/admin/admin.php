<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                  <h1 class="title is-inline-block">Manage Products</h1>
                  <button type="submit" class="button is-info is-pulled-right">Add New</button>
              </div>
          </div>

        <table class="table is-bordered is-striped is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Inventory Count</th>
                    <th>Quantity Sold</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>T-Shirt</td>
                    <td>38</td>
                    <td>23</td>
                    <td class="has-text-centered"><div class="buttons is-inline-block">
                        <button type="submit" class="button is-primary is-responsive is-half is-rounded">Edit</button>
                        <button type="submit" data-target="modal-delete" class="button is-danger is-responsive is-half is-rounded modal-delete">Delete</button>
                    </div></td>
                </tr>
            </tbody>
        </table>
      </div>

      <div id="modal-delete" class="modal">
        <div class="modal-background"></div>
      
        <div class="modal-content">
          <div class="box">
            <p>Modal JS example</p>
            <!-- Your content -->
          </div>
        </div>
      
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
      <script>
          document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.modal-delete') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});
      </script>
</body>
</html>