<?php

?>

<div class="jumbotron text-center">
  <h1 class="display-2">Viedie būvdarbi</h1>
</div>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand mr-5 ml-5" href="#">Viedie būvdarbi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Sākums <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vakances
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Visi darbi</a>
            <a class="dropdown-item" href="#">Darbi Rīgā</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">...</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Meklēt" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Meklēt</button>
      </form>
    </div>
  </nav>
<div class="container p-5">
  <div class="row p-5 justify-content-center align-self-center">
    <div class="col-sm-4 ">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#devejaModal"><h3>Pasūtītāji</h3>
            <p>Ja esi darba devējs un vēlies pieteikt vakanci</p>
            <p>Klikšķini šeit!</p></button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nemejaModal"><h3>Strādnieki</h3>
            <p>Ja esi darba ņēmējs un vēlies pieteikties vakancei</p>
            <p>Klikšķini šeit!</p></button>
    </div>
  </div>


  <div class="modal fade" id="devejaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold">Devēja forma</h3>
                <button type="button" class="close" data-dismiss="modal">x</button>
              </div>
              <div class="modal-body mx-3">
                  <div class="md-form md-2">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Ēpasts</label>  
                    <input type="email" id="defaultForm-email" class="form-control validate">
                  </div>
                  <div class="md-form md-2">
                     <label data-error="wrong" data-success="right" for="defaultForm-pass">Parole</label> 
                     <input type="password" id="defaultForm-pass" class="form-control validate">
                   </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Ieiet</button>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="nemejaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold">Ņēmēja forma</h3>
                <button type="button" class="close" data-dismiss="modal">x</button>
              </div>
              <div class="modal-body mx-3">
                  <div class="md-form md-2">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Ēpasts</label>  
                    <input type="email" id="defaultForm-email" class="form-control validate">
                  </div>
                  <div class="md-form md-2">
                     <label data-error="wrong" data-success="right" for="defaultForm-pass">Parole</label> 
                     <input type="password" id="defaultForm-pass" class="form-control validate">
                   </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Ieiet</button>
              </div>
          </div>
      </div>
    </div>

  <div class="text-center">
  <h3 class="display-4">Kas mēs esam?</h3>
  <p>Lietotne, kura apvieno remontdarbu darbinieku, būvuzņēmumu un klientu elementus vienā vidē.</p> 
  <p>Atvieglosim un vienkāršosim būvdarbu un remontdarbu procesu, gan no klienta, gan izpildītāja puses.</p>
  <p>Samazināsim izmaksas būvdarbiem un remontdarbiem.</p>
  <h3 class="display-4">Ko mēs piedāvājam?</h3>
Klients var izveidot savu sludinājumu, jeb darba aprakstu, redzēt visus pieteikušos darbiniekus 
un viņu pieredzi, aptuvenās izmaksas un apskatīt precizētās izmaksas ar būvuzņēmumu savstarpību. 
Strādniekiem lietotnē būtu iespēja izvēlēties un pieteikties būvdarbam, ar aprakstu un matreiālu sarakstu. 
Būvuzņēmumi piedāvā materiālu cenas, komplektus, atlaides.</p>
  </div>
</div>