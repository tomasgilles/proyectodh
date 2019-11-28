<h1>Eliminar producto</h1>

<form class="" action="/productdelete" method="post">
  @csrf
  <input type="text" name="name" value="" placeholder="Nombre producto" required>
  <button class="btn btn-danger" type="submit" name="button">ELIMINAR</button>
</form>
