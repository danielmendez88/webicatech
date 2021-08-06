<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="{{ asset('assets/img/images/admin.jpg') }}" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
            <p class="designation">{{ Auth::user()->email }}</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Menú Principal</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard_principal') }}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Inicio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('main_form_admin') }}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Administrador de Secciones</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('main_index_banner') }}">
          <i class="menu-icon typcn typcn-th-large-outline"></i>
          <span class="menu-title">Administrador de Banner</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('main_user_index') }}">
          <i class="menu-icon typcn typcn-th-large-outline"></i>
          <span class="menu-title">Administrador de Usuarios</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('comunicado_indice') }}" class="nav-link">
          <i class="menu-icon typcn typcn-th-large-outline"></i>
          <span class="menu-title">Comunicados</span>
        </a>
      </li>
      @foreach ($allcategories as $items)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dinamic_dashboard_form', [$items->slug_path, $items->page_content, $items->id]) }}">
            <i class="menu-icon typcn typcn-bell"></i>
            <span class="menu-title">{{ $items->titulo }}</span>
          </a>
        </li>
      @endforeach
      
      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="menu-icon typcn typcn-bell"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/font-awesome.html">
          <i class="menu-icon typcn typcn-user-outline"></i>
          <span class="menu-title">Icons</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/login.html"> Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/register.html"> Register </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
            </li>
          </ul>
        </div>
      </li> --}}
    </ul>
</nav>