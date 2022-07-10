<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
              Home
            </a>
      
            <a class="navbar-item">
              Documentation
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Jobs
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary" href="login">
                  <strong>Login</strong>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="section">
      <div class="error"><?=$this->session->flashdata('input_errors');?></div>
        <div class="columns">
          <div class="column is-one-quarter">
            <h1 class="title">Register</h1>
            <div class="field">
              <form action="validate" method="post">

                <label class="label">Email Address</label>
                <div class="field-body">
                  <div class="field">
                    <p class="control">
                      <input class="input" type="email" name="email" placeholder="Recipient email">
                    </p>
                  </div>
                </div>
            </div>
            <div class="field">
                <label class="label">First Name</label>
                <div class="field-body">
                  <div class="field">
                    <p class="control">
                      <input class="input" type="text" name="firstname" placeholder="First Name">
                    </p>
                  </div>
                </div>
            </div>
            <div class="field">
                <label class="label">Last Name</label>
                <div class="field-body">
                  <div class="field">
                    <p class="control">
                      <input class="input" type="text" name="lastname" placeholder="Last Name">
                    </p>
                  </div>
                </div>
            </div>
            <div class="field">
              <label class="label">Password</label>
              <div class="field-body">
                <div class="field">
                  <p class="control">
                    <input class="input" type="password" name="password" placeholder="Password">
                  </p>
                </div>
              </div>
            </div>
            <div class="field">
                <label class="label">Confirm Password</label>
                <div class="field-body">
                  <div class="field">
                    <p class="control">
                      <input class="input" type="password" name="confirm_password" placeholder="Password">
                    </p>
                  </div>
                </div>
              </div>
            <div class="buttons is-right">
              <input type="submit" class="button is-info is-light" value="Login">
            </div>
              </form>
            <div class="columns has-text-centered">
              <div class="column">
                <p class="has-text-link"><a href="login">Already have an account? Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>