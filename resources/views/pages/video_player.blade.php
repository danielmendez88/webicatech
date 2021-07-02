{{-- CREADO Y DISEÑADO POR MIS. DANIEL MÉNDEZ CRUZ --}}
<div class="row">
    <div class="col-sm-12">
        {{-- REPRODUCTOR --}}
        <div class="vid-container">
            <iframe loading="lazy" id="vid_frame" width="100%" height="315" src="https://www.youtube.com/embed/Ey7YkBRA3l0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        {{-- REPRODUCTOR END --}}
        {{-- LISTA DE REPRODUCCIÓN --}}
        <div class="vid-list-container">
	        <div class="vid-list">
	         	@if (count($bvideoteca) > 0)
                 @foreach ($bvideoteca as $collection)
                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/{{ $collection->youtubeid }}?autoplay=1&rel=0&showinfo=0&autohide=1'">
                      <div class="thumb"><img src="http://img.youtube.com/vi/{{ $collection->youtubeid }}/0.jpg"></div>
                      <div class="desc">{{ $collection->nombre }}</div>
                    </div>
                 @endforeach
            @else
              <div class="vid-item" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/DLoLG8tu_3Y?autoplay=1&rel=0&showinfo=0&autohide=1'">
                <div class="thumb"><img src="http://img.youtube.com/vi/0RC5oxzheUs/0.jpg"></div>
                <div class="desc">Jessica Hernandez & the Deltas - Dead Brains</div>
              </div>
            
              <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/_Tz7KROhuAw?autoplay=1&rel=0&showinfo=0&autohide=1'">
                <div class="thumb"><img src="http://img.youtube.com/vi/_Tz7KROhuAw/0.jpg"></div>
                <div class="desc">Barbatuques - CD Tum P&aacute; - Sambalel&ecirc;</div>
              </div>

              <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/F1f-gn_mG8M?autoplay=1&rel=0&showinfo=0&autohide=1'">
                <div class="thumb"><img src="http://img.youtube.com/vi/F1f-gn_mG8M/0.jpg"></div>
                <div class="desc">Eleanor Turner plays Baroque Flamenco</div>
              </div>

              <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/fB8UTheTR7s?autoplay=1&rel=0&showinfo=0&autohide=1'">
                <div class="thumb"><img src="http://img.youtube.com/vi/fB8UTheTR7s/0.jpg"></div>
                <div class="desc">Sleepy Man Banjo Boys: Bluegrass</div>
              </div>

            <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/eg6kNoJmzkY?autoplay=1&rel=0&showinfo=0&autohide=1'">
              <div class="thumb"><img src="http://img.youtube.com/vi/eg6kNoJmzkY/0.jpg"></div>
              <div class="desc">Jessica Hernandez & the Deltas - Dead Brains</div>
            </div>
              
            <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/_Tz7KROhuAw?autoplay=1&rel=0&showinfo=0&autohide=1'">
              <div class="thumb"><img src="http://img.youtube.com/vi/_Tz7KROhuAw/0.jpg"></div>
              <div class="desc">Barbatuques - CD Tum P&aacute; - Sambalel&ecirc;</div>
            </div>
            @endif
	 	    </div>
        </div>
        {{-- LISTA DE REPRODUCCIÓN END --}}
        {{-- FLECHAS DE REPRODUCCIÓN --}}
        <div class="arrows">
        	<div class="arrow-left"><i class="fa fa-chevron-left fa-lg"></i></div>
        	<div class="arrow-right"><i class="fa fa-chevron-right fa-lg"></i></div>
        </div>
        {{-- FLECHAS DE REPRODUCCIÓN END --}}
        
    </div>
</div>
