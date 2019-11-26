
<h1>Añadir imagenes alternativas de producto</h1>

<form name="formulario2" class="" enctype="multipart/form-data" action="/imagesadd" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{$ultimoProducto->id}}" placeholder="Id producto" required>
  <input type="file" name="image1" value="" placeholder="imagen alternativa del producto" required>
  <input type="file" name="image2" value="" placeholder="imagen alternativa del producto" required>
  <input type="file" name="image3" value="" placeholder="imagen alternativa del producto" required>
  <button type="submit" name="button">ENVIAR</button>
</form>
