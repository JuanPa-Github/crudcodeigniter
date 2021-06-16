<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">





<div class="mx-auto" style="width: 400px;">
<form class="row g-3">




<div class="card border-primary mb-3" style="max-width:40rem;">
  <div class="card-header"><h3>Actualizar Usuario</h3></div>
  <div class="card-body text-primary">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
  



  <div class="col-md-6" style="padding:14; width: 100%;">
    <label for="validationServer01" class="form-label">Nombre</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-6" style="padding:14; width: 100%;">
    <label for="validationServer02" class="form-label">Apellidos</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-6" style="padding:14; width: 100%;">
    <label for="email" class="form-label">Email</label>
    <div class="input-group has-validation">
      <!--<span class="input-group-text" id="inputGroupPrepend3">@</span>-->
      <input type="text" class="form-control is-valid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>

  <div class="col-md-6" style="padding:14; width: 100%;">
    <label for="validationServer03" class="form-label">Edad</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  

  <div class="col-12" style="width:400px">
    <button class="btn btn-primary" type="submit">Crear</button>
  </div>

  </div>
</div>

</div>


</form>