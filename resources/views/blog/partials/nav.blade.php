<ul class="navbar-nav mr-auto">
    @foreach ($items as $item)

        
    <li class="nav-item active">
      <a class="nav-link" href="{{$item->url}}">{{$item->title}} <span class="sr-only">(current)</span></a>
    </li>
    @endforeach

  </ul>