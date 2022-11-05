<div>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            @forelse($items as $key=> $item)
                <li class="nav-heading">
                    {{$item['heading']}}
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#{{$item['navItem']}}" data-bs-toggle="collapse" href="{{$item['link']}}">
                        <i class="{{$item['icon']}}"></i>
                        <span>
                             {{$item['navItem']}}
                        </span>
                        @if(isset($item['child']))
                              <i class="bi bi-chevron-down ms-auto"></i>
                        @endif
                    </a>
                    <ul id="{{$item['navItem']}}" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                        @if(isset($item['child']))
                            @forelse($item['child'] as $child)
                                <li>
                                    <a href="{{route($child['link'])}}">
                                        <i class="{{$child['icon']}}"></i><span>{{$child['title']}}</span>
                                    </a>
                                </li>
                            @empty
                                <li>
                                    <a href="">
                                        <span>Nothing to show</span>
                                    </a>
                                </li>
                            @endforelse
                        @endif
                    </ul>
                </li>
            @empty
                <li class="nav-item">
                    <a class="nav-link">
                        <span>Nothing to show</span>
                    </a>
                </li>
            @endforelse

        </ul>

    </aside>
</div>
