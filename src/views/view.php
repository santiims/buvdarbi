<?php

?>

<div class="jumbotron text-center">
  <h1 class="display-2">Viedie būvdarbi</h1>
</div>
  
<div class="container p-5">
  <div class="row p-5 justify-content-center align-self-center">
    <div class="col-sm-4 ">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#devejaModal"><h3>Darba devējiem</h3>
            <p>Ja esi darba devējs un vēlies piereģistrēties</p>
            <p>Klikšķini šeit!</p></button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nemejaModal"><h3>Darba ņēmējiem</h3>
            <p>Ja esi darba ņēmējs un vēlies piereģistrēties</p>
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