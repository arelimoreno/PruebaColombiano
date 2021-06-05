<?php include("partials/header.php") ?>

<section class="hero is-primary">
  <div class="hero-body">
    <h2 class="title">Crear Propiedades</h2>
    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <form id="createProperties">
      <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
          <input class="input" type="text" name="name" id="name" placeholder="Ingresa tu nombre" required />
        </div>
      </div>
      <div class="field">
        <label class="label">Dirección</label>
        <div class="control">
          <input class="input" type="text" name="address" id="address" placeholder="Ingresa tu dirección" />
        </div>
      </div>
      <div class="field">
        <label class="label">Constructora</label>
        <div class="control">
          <input class="input" type="text" name="builder" id="builder" placeholder="Constructora del inmobiliario" />
        </div>
      </div>
      <div class="field">
        <label class="label">Descripción</label>
        <div class="control">
          <textarea class="textarea" name="description" id="description" placeholder="Constructora del inmobiliario"></textarea>
        </div>
      </div>
      <div class="field">
        <label class="label">Contacto</label>
        <div class="control">
          <input class="input" type="text" name="contact" id="contact" placeholder="Contacto constructora" />
        </div>
      </div>
      <div class="control">
        <button type="submit" id="saved" class="button is-primary">Guardar propiedad</button>
      </div>
    </form>

    <article id="alertSaved" class="message is-success">
      <div class="message-body">
        <h2>Éxito</h2>
        Se ha ceado exitosamente la propiedad
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