
<section class="container-fluid">
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Botines</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vestimenta
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Remeras</a>
            <a class="dropdown-item" href="#">Camperas</a>
          </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" id="formnavbar">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="loginFromButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
          </button>
          <form class="dropdown-menu dropdown-menu p-4" aria-labelledby="loginFromButton">
            <div class="form-group">
              <label for="exampleDropdownFormEmail2">Email address</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword2">Password</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck2">
              <label class="form-check-label" for="dropdownCheck2">
                Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
          <a class="btn btn-primary" href="register.php" role="button">Register</a>
        </div>


    </div>
  </nav>
  </div>
</section>
