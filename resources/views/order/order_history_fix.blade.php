@extends('layouts.app')
@section('content')
<main>
	<div class="container">
		<div class="mx-auto">
			<h2 class="pt-5">ただいま画面修正中...</h2>
			<h3 class="pt-5">申し訳ございません。復旧までお待ちください。</h3>
			<h3 class="pt-5">{!! link_to_route('home', 'TOPに戻る', [], ['class' => 'btn btn-primary btn-lg']) !!}</h3>
		</div>
	</div>
</main>
@endsection