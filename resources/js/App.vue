<template>
  <div class="home">
    <!-- ENCABEZADO -->
    <header>
      <img
        src="./assets/capuchino-logo.png"
        alt="Logo Capuchino"
        class="logo"
      />
      <h1>CapuColeros Tejidos</h1>
      <p class="slogan">Hecho con amor por {{ nombre }} 🐾</p>
    </header>

    <!-- BIENVENIDA -->
    <main>
      <section class="presentacion">
        <h2>Bienvenida</h2>
        <p>
          Te damos la bienvenida a nuestro rinconcito de hilos y amor. Aquí
          podrás ver algunos de nuestros productos y contactarnos fácilmente.
        </p>
      </section>

      <!-- PRODUCTOS DINÁMICOS -->
      <section class="productos">
        <h2>Productos Destacados</h2>
        <ul>
          <li
            v-for="(producto, index) in productos"
            :key="index"
            class="producto"
          >
            🧶 {{ producto.nombre }} - {{ producto.precio }}
          </li>
        </ul>
      </section>

      <!-- BOTÓN Y SECCIÓN DE CONTACTO -->
      <section class="contacto">
        <button
          class="btn-contacto"
          @click="mostrarContacto = !mostrarContacto"
        >
          {{ mostrarContacto ? "Ocultar contacto" : "Contáctanos" }}
        </button>

        <div v-if="mostrarContacto" class="formulario">
          <p>
            Puedes escribirnos a: <strong>capucolerostejidos@gmail.com</strong>
          </p>
          <p>o mandarnos un mensaje por Instagram @capucolerostejidos🧵</p>
        </div>
      </section>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer>© 2025 CapuColeros Tejidos | Diseñado con patitas y ternura</footer>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      nombre: "Capuchino",
      mostrarContacto: false,
      productos: [
        { nombre: "Bufanda Arcoíris", precio: "$250 MXN" },
        { nombre: "Gorrito Oso Panda", precio: "$180 MXN" },
        { nombre: "Bolsa Llama", precio: "$320 MXN" },
        { nombre: "Gato cactus Tejido", precio: "$150 MXN" },
      ],
    };
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Pacifico&family=Open+Sans&display=swap");

.home {
  font-family: "Open Sans", sans-serif;
  text-align: center;
  background-color: #fff9f5;
  color: #3a3a3a;
  min-height: 100vh;
  padding: 20px;
}

header {
  background-color: #ffe6e1;
  padding: 30px;
  border-radius: 15px;
  margin-bottom: 20px;
}

.logo {
  width: 120px;
  border-radius: 50%;
  margin-bottom: 10px;
}

h1 {
  font-family: "Pacifico", cursive;
  font-size: 2.5rem;
  color: #d16c6c;
}

.slogan {
  font-size: 1.2rem;
  color: #7a5c58;
  margin-top: 5px;
}

main {
  margin-top: 30px;
}

.presentacion,
.productos,
.contacto {
  margin-bottom: 30px;
}

.productos ul {
  list-style: none;
  padding: 0;
  max-width: 400px;
  margin: 0 auto;
}

.producto {
  background-color: #fff0eb;
  padding: 10px;
  margin: 10px 0;
  border-radius: 10px;
}

.btn-contacto {
  background-color: #d16c6c;
  color: white;
  border: none;
  padding: 10px 25px;
  border-radius: 20px;
  cursor: pointer;
  font-size: 1rem;
  margin-bottom: 10px;
}

.btn-contacto:hover {
  background-color: #a94f4f;
}

.formulario {
  background-color: #ffeae6;
  padding: 15px;
  border-radius: 10px;
  margin-top: 10px;
}

footer {
  font-size: 0.9rem;
  color: #999;
  margin-top: 40px;
}
</style>