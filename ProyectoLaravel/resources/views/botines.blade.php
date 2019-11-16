<div class="">
  @forelse ($botines as $botin)
    <img src="/storage/products/{{$botin->main_image}}" alt="">
  @empty
    <p>No hay botines</p>
  @endforelse
</div>
