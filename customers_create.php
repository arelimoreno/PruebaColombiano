<?php include("partials/header.php") ?>
<section class="hero is-primary">
  <div class="hero-body">
    <p class="title">Crear interesados</p>
    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <form id="createCustomers">
      <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
          <input class="input" type="text" name="first_name" id="first" placeholder="Ingresa tu nombre" />
        </div>
      </div>
      <div class="field">
        <label class="label">Apellido</label>
        <div class="control">
          <input class="input" type="text" name="last_name" id="last" placeholder="Ingresa tu apellido" />
        </div>
      </div>
      <div class="field">
        <label class="label">Correo electronico</label>
        <div class="control">
          <input class="input" type="email" name="email" id="email" placeholder="Escribir correo" />
        </div>
      </div>
      <div class="field">
        <label class="label">Teléfono o celular</label>
        <div class="control">
          <input class="input" type="tel" name="phone" id="phone" placeholder="ingresa numero" />
        </div>
      </div>

      <div class="field">
        <label class="label">Ciudad</label>
        <div class="control">
          <input class="input" type="text" name="city" id="city" placeholder="Ingresa ciudad" />
        </div>
      </div>
      <div class="field">
        <label class="label">Agenda una cita para asesorarte</label>
        <div class="control">
          <input class="input" type="text" name="date" id="date" placeholder="Ingresa fecha" />
        </div>
      </div>
      <div class="control">
        <button type="submit" id="saved" class="button is-primary">Guardar interesado</button>
      </div>
    </form>
    <article id="alertSaved" class="message is-success">
      <div class="message-body">
        <h2>Éxito</h2>
        Se ha creado exitosamente el usuario
      </div>
    </article>

    <article id="alertDanger" class="message is-danger">
      <div class="message-body">
        <h2>!Opps!</h2>
        Lo sentimos todos los campos son requeridos
      </div>
    </article>
  </div>
</section>



<?php include("partials/footer.php"); ?>