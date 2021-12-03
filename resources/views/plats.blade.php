<!doctype html>
<html lang="en">
  <head>
    <title>Liste des plats</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">SenResto</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Plats</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                      </div>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
              </form>
          </div>
      </nav>
      <div class="card">
          <img class="card-img-top" src="holder.js/100x180/" alt="">
          <div class="card-body">
              <h4 class="card-title">Liste des plats</h4>
              <p class="card-text">Vous trouverez ici la liste des plats</p>
              <table class="table table-bordered table-striped table-hover">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nom</th>
                          <th>Prix</th>
                          <th>Catégorie</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($plats as $plat)
                      <tr>
                          <td scope="row">{{$plat->id}}</td>
                          <td>{{$plat->nom}}</td>
                          <td>{{$plat->prix}} FCFA</td>
                          <td>{{$plat->categorie}}</td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
          <div class="card-footer">
              <button type="button" class="btn btn-primary float-right">Ajouter</button>
          </div>
      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
        Nouveau
      </button>

      <!-- Modal -->
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                      <div class="modal-header">
                              <h5 class="modal-title">Formulaire Ajout Plat</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                  <div class="modal-body">
                      <div class="container-fluid">
                          <form method="POST" action="{{ route('plat.enregistrer') }}">
                            @csrf
                              <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom du plat" aria-describedby="nomHelpId">
                                <small id="nomHelpId" class="text-muted">Nom du plat</small>
                              </div>
                              <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" name="prix" id="prix" class="form-control" placeholder="Prix du plat" aria-describedby="prixHelpId">
                                <small id="prixHelpId" class="text-muted">Prix du plat</small>
                              </div>
                              <div class="form-group">
                                <label for="categorie">Categorie</label>
                                <select class="form-control" name="categorie" id="categorie">
                                  <option>Plat sénégalais</option>
                                  <option>Viande</option>
                                  <option>Boisson</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                          </form>
                      </div>
                    </div>
              </div>
          </div>
      </div>

      <script>
          $('#exampleModal').on('show.bs.modal', event => {
              var button = $(event.relatedTarget);
              var modal = $(this);
              // Use above variables to manipulate the DOM

          });
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
