
    
@if($menu->parentMenu->count())
@foreach($menu->parentMenu as $menuChildrent)
    
      <li><a href="shop.html">{{ $menuChildrent->name }}</a>
          
          @if($menuChildrent->parentMenu->count())
          @foreach($menuChildrent->parentMenu as $menuChildrent2)
            <ul>
                  <li><a href="shop.html">{{ $menuChildrent2->name }}</a>
                  </li>
            </ul>
          @endforeach
          @endif

      </li>
            
@endforeach
@endif
    
