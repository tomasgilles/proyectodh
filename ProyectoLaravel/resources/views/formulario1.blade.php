<h1>Añadir producto</h1>
<form enctype="multipart/form-data" class="" action="/productadd" method="post">
  @csrf
  <input type="text" name="name" value="" placeholder="Nombre producto*" required>
  <input type="text" name="description" value="" placeholder="Descripción producto*" required>
  <input type="hidden" name="size" value="38" required>
  <input type="text" name="price" value="" placeholder="Precio* (sin $ y con . si es necesario)" required>
  <input type="text" name="stock" value="" placeholder="Stock*" required>
  <select class="" name="brand" required>
    <option value="nike">Nike</option>
    <option value="adidas">Adidas</option>
    <option value="puma">Puma</option>
    <option value="remeras">Remeras</option>
    <option value="camperas">Camperas</option>
    <option value="medias">Medias</option>
    <option value="pelotas">Pelotas</option>
    <option value="otros">Otros</option>
    <option value="kit">Kit</option>

  </select>
  <select class="" name="product_type" required>
    <option value="botines">Botines</option>
    <option value="vestimenta">Vestimenta</option>
    <option value="accesorios">Accesorios</option>
  </select>
  <input type="file" name="main_image" value="" placeholder="imagen principal del producto" required>
  <button type="submit" name="button">ENVIAR</button>
</form>
