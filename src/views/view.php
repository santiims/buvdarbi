<?php

?>

<!--------------------------NAVBAR--------------------------------------------->
<nav class="navbar fixed-top navbar-expand-lg navbar-light py-3" style="background-color: #e3f2fd;">
    <a class="navbar-brand mx-5" href="#"><i class="fas fa-paint-roller"></i> Viedie būvdarbi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-home"></i> Sākums <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vakances
          </a>
          <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Visi darbi</a>
            <a class="dropdown-item" href="#">Darbi Rīgā</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">...</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Būvuzņēmumi
            </a>
            <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Visi būvuzņēmumi</a>
              <a class="dropdown-item" href="#">DEPO</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">...</a>
            </div>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="#whoarewe"> Par mums </a><!--drop down to "Kas mēs esam?"-->
            </li>
      </ul>
      <ul class="nav navbar-nav mr-5">
        <li class="nav-item">
          <a class="nav-link" href="#" id="signup" data-toggle="modal" data-target="#signupModal"><i class="fas fa-user"></i> Reģistrēties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="login" data-toggle="modal" data-target="#loginModal"><span class="fas fa-sign-in-alt"></span> Ieiet</a>
        </li>
      </ul>
    </div>
  </nav>
<!-------------------------END NAVBAR------------------------------------------------------->
<!------------------------signup login MODALS----------------------------------------------->
<!---------------------------------signup------------------------>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title font-weight-bold">Piereģistrētities</h3>
          <button type="button" class="close" data-dismiss="modal">x</button>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                  <label for="name">Vārds</label>
                  <input type="text" class="form-control" id="name" placeholder="Vārds">
                  <spam class="error"></spam>
              </div>
              <div class="form-group">
                    <label for="surname">Uzvārds</label>
                    <input type="text" class="form-control" id="surname" placeholder="Uzvārds">
                    <spam class="error"></spam>
              </div>
              <div class="form-group">
                <label for="email">E-pasts</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-pasts">
                <spam class="error"></spam>
              </div>
              <div class="form-group">
                  <label for="email">Telefona numurs</label>
                  <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Telefona numurs">
                  <spam class="error"></spam>
                </div>
              <div class="form-group">
                <label for="password">Parole</label>
                <input type="password" class="form-control" id="password" placeholder="Parole">
                <spam class="error"></spam>
              </div>
              <div class="form-group">
                  <label for="password2">Apstiprināt paroli</label>
                  <input type="password" class="form-control" id="password2" placeholder="Apstiprināt paroli">
                  <spam class="error"></spam>
              </div>
          <a class="modal-item" href="#">Esi jau reģistrējies?</a>
          <input type="submit" class="btn btn-danger btn-primary" value="Apstiprināt">
          </form>
      </div>
      <div class="modal-footer d-flex justify-content-center">
      </div>
    </div>
  </div>
</div>
<!---------------------------------login------------------------>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title font-weight-bold">Ieiet</h3>
            <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="email">E-pasts</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-pasts">
                  <spam class="error"></spam>
                </div>
                <div class="form-group">
                  <label for="password">Parole</label>
                  <input type="password" class="form-control" id="password" placeholder="Parole">
                  <spam class="error"></spam>
                </div>
            </form>
            <a class="modal-item" href="#">Vēl neesi reģistrējies?</a>
            <br>
            <a class="modal-item" href="#">Aizmirsi paroli?</a>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-danger btn-primary">Apstiprināt</button>
        </div>
      </div>
    </div>
  </div>
<!----------------------END signup login MODALS------------------------------------------------->
<div class="content" style="word-wrap: break-word;">
<div class="container">
<!-----------------------------HEADER-------------------------------------------------------->
<div class="jumbotron text-center" style="margin-top: 60px;background: white;">
  <!-- background: #464646 -->
    <h1 class="display-2" style="font-weight: 600;">Viedie būvdarbi</h1>
    <h3 class="cool font-weight-light">Piesaki būvdarbus un izvēlies strādnieku!</h3>
  
  <div class="row p-5 justify-content-center align-self-center">
      <div class="colons col-sm-4 py-3" style="border: 3px solid black">
          <h3>Meklē strādniekus?</h3>
          <p style="font-weight:400;">Ja esi darba devējs un vēlies pieteikt vakanci</p>
          <button type="button" class="button sm-3" data-toggle="modal" data-target="#devejaModal">PIESAKI VAKANCI</button>
      </div>
      <div class="colons col-sm-4 offset-md-1 py-3" style="border: 3px solid black">
          <h3>Meklē kur piestrādāt?</h3>
          <p style="font-weight:400;">Ja esi darba ņēmējs un vēlies pieteikties vakancei</p>
          <button type="button" class="button sm-3" data-toggle="modal" data-target="#nemejaModal">PIESAKIES VAKANCEI</button>
      </div>
  </div>
</div>
<!----------------------------END HEADER-------------------------------------------------------->
<!-------------------------deveja nemeja MODALS-------------------------------------------------->
<!---------------------------------deveja------------------------>
  <div class="modal fade" id="devejaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold">Aizpildi formu</h3>
                <button type="button" class="close" data-dismiss="modal">x</button>
              </div>
              <div class="modal-body mx-3">
                  <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle mb-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sfēra
                    </button>
                    <div class="inline ml-3"></div><!--CHOICE-->
                    <!-- style="cursor: pointer;" -->
                    <div class="dropdown-menu myDropdown scrollable-menu" role="menu" aria-labelledby="dropdownMenuButton">
                      <input type="text" placeholder="Search.." class="searchInput" onkeyup="filterFunction(0)">
                      <a class="dropdown-item" href="#">Santehniķis</a>
                      <a class="dropdown-item" href="#">...</a>
                      <a class="dropdown-item" href="#">...</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle mb-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Atrašanās vieta
                    </button>
                    <div class="inline ml-3"></div><!--CHOICE-->
                    <div class="dropdown-menu myDropdown scrollable-menu" aria-labelledby="dropdownMenuButton">
                      <input type="text" placeholder="Search.." class="searchInput" onkeyup="filterFunction(1)">
                      <a class="dropdown-item" href="#">Rīga</a>
                      <a class="dropdown-item" href="#">Jelgava</a>
                      <a class="dropdown-item" href="#">Bauska</a>
                      <a class="dropdown-item" href="#">...</a>
                      <a class="dropdown-item" href="#">...</a>
                      <a class="dropdown-item" href="#">...</a>
                      <a class="dropdown-item" href="#">...</a>
                      <a class="dropdown-item" href="#">...</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Apraksts:</label>
                    <br>
                    <textarea class="form-control" placeholder="Problēma" rows="2" id="message-text1"></textarea><br>
                    <textarea class="form-control" placeholder="1.Materiāls..." rows="2" id="message-text2"></textarea><br>
                    <input type="text" placeholder="Atalgojums">
                  </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger btn-primary">Pieteikt</button><!-----login-->
              </div>
          </div>
      </div>
  </div>
<!---------------------------------nemeja------------------------>
  <div class="modal fade" id="nemejaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title font-weight-bold">Aizpildi formu</h3>
                <button type="button" class="close" data-dismiss="modal">x</button>
              </div>
              <div class="modal-body mx-3">
                <div class="dropdown">
                  <button class="btn btn-danger dropdown-toggle mb-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sfēra
                  </button>
                  <div class="inline ml-3"></div><!--CHOICE-->
                  <div class="dropdown-menu myDropdown scrollable-menu" aria-labelledby="dropdownMenuButton">
                    <input type="text" placeholder="Search.." class="searchInput" onkeyup="filterFunction(2)">
                    <a class="dropdown-item" href="#sante">Santehniķis</a>
                    <a class="dropdown-item" href="#">...</a>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-danger dropdown-toggle mb-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Atrašanās vieta
                  </button>
                  <div class="inline ml-3"></div><!--CHOICE-->
                  <div class="dropdown-menu myDropdown scrollable-menu" aria-labelledby="dropdownMenuButton">
                    <input type="text" placeholder="Search.." class="searchInput" onkeyup="filterFunction(3)">
                    <a class="dropdown-item" href="#">Rīga</a>
                    <a class="dropdown-item" href="#">Jelgava</a>
                    <a class="dropdown-item" href="#">Bauska</a>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger btn-primary">Pieteikties</button><!-----login-->
              </div>
          </div>
      </div>
    </div>
<!-----------------------END deveja nemeja MODALS---------------------------------------------->
<!------------------------------INFO TEXT------------------------------------------------------>
<div style="margin-top: 100px; margin-bottom: 60px;">
  <spam class="py-5" id="whoarewe"></spam>
  <h3 class="display-4 text-center" >Kas mēs esam?</h3>
    <p class="text-justify">Sistēma “Viedie būvdarbi” ir rīks uzlabotai strādnieku atlasei remontdarbiem un abu pušu 
    (Darba devēja un darba ņēmēja) uzticamai darījuma uzskaitei. Tā nodrošina darba devēja vajadzīgā darbinieka 
    atlasi pēc darbinieka darbības sfēras un atsauksmēm, saskarsmi, kura procesā tiek uzskaitītas 
    darba devēja prasības, darbinieka izvēlēto materiālu uzskaite un cena, darba samaksas uzskaite un 
    reģistrēšana ar VID (valsts ieņēmumu dienests).</p>
    <ul>
      <li>Atvieglosim un vienkāršosim būvdarbu un remontdarbu procesu, gan no klienta, gan izpildītāja puses.</li>
      <li>Samazināsim izmaksas būvdarbiem un remontdarbiem.</li>
    </ul>

  <h3 class="display-4 text-center">Ko mēs piedāvājam?</h3>
    <h3 class="font-italic">Darba devējiem:</h3>
        <ul>
          <li>izveidot savu sludinājumu, jeb darba aprakstu;</li>
          <li>redzēt visus pieteikušos darbiniekus un viņu pieredzi, aptuvenās izmaksas;</li>
          <li>apskatīt precizētās izmaksas ar būvuzņēmumu savstarpību.</li>
        </ul>
    <h3 class="font-italic">Darba ņēmējiem:</h3>
      <ul><li>izvēlēties un pieteikties būvdarbam, ar aprakstu un materiālu sarakstu.</li></ul>
    <h3 class="font-italic">Būvuzņēmumi:</h3>
    <ul><li>piedāvā materiālu cenas, komplektus, atlaides.</li></ul>
  <h3 class="display-4 text-center">Kāds ir mūsu mērķis?</h3>
    <p class="text-justify">Produkta “Viedie būvdarbi” mērķis ir radīt platformu, lai savienotu darba devējus ar vajadzīgajiem 
    saimniecības vai būvindustrijas strādniekiem, kā arī nodrošināt ērtu vidi atbilstošā strādnieka 
    atlasīšanai, atsaukmju sistēmu par sistēmā esošiem strādniekiem un uzticamu abu pušu darījuma 
    (materiāla, darba un finanšu) uzskaiti.</p>
</div>
<!---------------------END INFO TEXT------------------------------------------>
</div>
</div>