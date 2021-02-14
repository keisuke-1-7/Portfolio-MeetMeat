<header>
    <img class="header_logo" src="{{ asset('/meet_images/meet_logo.png') }}" alt="">
    <h1>
        <a href="/">MeetMeat</a>
    </h1>
    @if (Auth::check())
        <p>{{ !empty(Auth::user()) ? Auth::user()->last_name . Auth::user()->first_name : 'ユーザー' }} さん</p>
        <nav>
            <ul>
                <li class="nav-item">{!! link_to_route('show', '商品検索', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('cartlist', 'カート', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('o_history', '注文履歴', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('user_info', 'ユーザ情報', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
        </nav>
    @else
        <nav class="pc-nav">
            <ul>
                <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('signup', '新規登録', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </nav>
    @endif
</header>

