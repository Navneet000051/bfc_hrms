<!-- master.blade.php -->

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                @foreach ($sidebar as $firstLevel)
                    <li class="{{ (isset($firstLevel['submenu']) && count($firstLevel['submenu']) > 0) ? 'submenu' : '' }}">
                        <a href="{{ route($firstLevel['url']) }}">
                            <i class="{{ $firstLevel['icon'] }}"></i>
                            <span>{{ $firstLevel['name'] }}</span>
                            @if (isset($firstLevel['submenu']) && count($firstLevel['submenu']) > 0)
                                <span class="menu-arrow"></span>
                            @endif
                        </a>

                        @if (isset($firstLevel['submenu']))
                            <ul>
                                @forelse ($firstLevel['submenu'] as $secondLevel)
                                    <li class="{{ (isset($secondLevel['submenu']) && count($secondLevel['submenu']) > 0) ? 'submenu' : 'nosubmenu' }}">
                                        <a href="{{ route($secondLevel['url']) }}">
                                            <span>{{ $secondLevel['name'] }}</span>
                                            @if (isset($secondLevel['submenu']) && count($secondLevel['submenu']) > 0)
                                                <span class="menu-arrow"></span>
                                            @endif
                                        </a>

                                        @if (isset($secondLevel['submenu']))
                                            <ul>
                                                @foreach ($secondLevel['submenu'] as $thirdLevel)
                                                    <li>
                                                        <a href="{{ route($thirdLevel['url']) }}">{{ $thirdLevel['name'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @empty
                                    {{-- Handle the case where $firstLevel['submenu'] is empty --}}
                                @endforelse
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
