<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      @if (count($bprincipal) > 0)
          @foreach ($bprincipal as $itembprincipal => $principal)
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item {{ ($itembprincipal === 0) ? 'active': '' }}" style="background-image: url('{{ $principal->path }}')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4"></h2>
                <p class="lead"></p>
              </div>
            </div>

          @endforeach
      @else
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('/Imagenes_Pagina/banner_inicio.jpeg')}}')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4"></h2>
              <p class="lead"></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('/Imagenes_Pagina/aviso_de_privacidad.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4"></h2>
              <p class="lead"></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('/Imagenes_Pagina/banner icatechtransparencia4.png') }}')">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4"></h2>
              <p class="lead"></p>
            </div>
          </div>
      @endif
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previo</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
    </a>
</div>