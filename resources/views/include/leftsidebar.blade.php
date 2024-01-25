<!-- master.blade.php -->

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main{{ Auth::user()->role_id }}</span>
                </li>

                @foreach ($sidebar as $firstLevel)
                    <li class="submenu">
                        <a href="{{ $firstLevel['url'] }}">
                            <i class="{{ $firstLevel['icon'] }}"></i>
                            <span>{{ $firstLevel['name'] }}</span>
                            <span class="menu-arrow"></span>
                        </a>

                        @if (isset($firstLevel['submenu']))
                            <ul>
                                @foreach ($firstLevel['submenu'] as $secondLevel)
                                    <li class="submenu">
                                        <a href="{{ $secondLevel['url'] }}">
                                            <span>{{ $secondLevel['name'] }}</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        @if (isset($secondLevel['submenu']))
                                            <ul>
                                                @foreach ($secondLevel['submenu'] as $thirdLevel)
                                                    <li>
                                                        <a href="{{ $thirdLevel['url'] }}">{{ $thirdLevel['name'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
