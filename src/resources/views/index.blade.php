@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<body>
	<header>
		<h1>Fashionably Late</h1>
	</header>
	<div class="register-form">
		<h2>REGISTER</h2>
		<p>このページは、ユーザーが新しいアカウントを作成するためのページです。</p>
		<form>
			<label for="username">ユーザー名</label>
			<input type="text" id="username" name="username" required>
			<label for="password">パスワード</label>
			<input type="password" id="password" name="password" required>
			<label for="email">メールアドレス</label>
			<input type="email" id="email" name="email" required>
			<button type="submit">登録する</button>
		</form>
	</div>
</body>
@endsection