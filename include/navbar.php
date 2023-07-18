  <!-- NAV -->
  <header class="d-flex justify-content-around bg-dark">
      <nav class="navbar navbar-expand-lg bg-dark w-75" data-bs-theme="dark">
        <!-- Ajouter l'attribut fixed-top pour fixer la nav en haut de la page -->
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
              <a class="navbar-brand" href="#">BRAND</a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link 3</a>
                </li>
              </ul>
              <!-- SE CONNECTER -->
              <div class="dropdown">
                <button type="button" class="btn btn-outine-secondary text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" style="width: 250px;">
                  Se connecter
                </button>
                <form class="dropdown-menu p-4">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="user@email.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="password">
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                      <label class="form-check-label" for="dropdownCheck2">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-secondary">Sign in</button>
                </form>
              </div>
              <!-- SEARCH -->
              <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </form> -->
            </div>
          </div>
        </nav>
    </header>