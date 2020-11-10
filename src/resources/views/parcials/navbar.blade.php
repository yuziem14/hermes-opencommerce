<nav id="navbar">
  <ul>
    <li class="user">
      <a class="nav-link" href="{{ route('home') }}">
        <img
          src="{{ $fileUrl }}"
          alt="{{ Auth::user()->name }} Photo"
        >
        <p>{{ Auth::user()->username }}</p>
      </a>
    </li>
    <li class="active">
      <a class="nav-link" href="{{ route('home') }}">
        <div class="icon">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" id="home-svg" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.36597 13.2683L16.3904 7.80487L23.4147 13.2683V21.8537C23.4147 22.2676 23.2503 22.6647 22.9575 22.9574C22.6648 23.2502 22.2678 23.4146 21.8538 23.4146H10.9269C10.5129 23.4146 10.1159 23.2502 9.82317 22.9574C9.53043 22.6647 9.36597 22.2676 9.36597 21.8537V13.2683Z" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.0488 23.4146V15.6097H18.7318V23.4146" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <p>Home</p>
      </a>
    </li>
    <li>
      <a class="nav-link" href="{{ route('home') }}">
        <div class="icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 6H21" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <p>Produtos</p>
      </a>
    </li>
    <li>
      <form action="{{ route('logout') }}" method="POST">
        <button class="nav-link" type="submit">
          @method('DELETE')
          @csrf
          <div class="icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H15" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8 17L3 12L8 7" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3 12H15" stroke="#7225D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <p>Logout</p>
        </button>
      </form>
    </li>
  </ul>
</nav>
