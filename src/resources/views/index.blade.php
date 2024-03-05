@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<body>
	<div class="register-form">
		<p class="register-logo">REGISTER</p>
		<form class="register-form__inner">
            <div class="username-form">
			    <label class="username" for="username">お名前</label>
              <div class="username__item">
			    <input type="text" id="username" name="username" placeholder="  例:山田  太郎" required>
              </div>
            </div>
            <div class="email-form">
			    <label class="email" for="email">メールアドレス</label>
              <div class="email__item">
			    <input type="email" id="email" name="email" placeholder="  例: test@example.com" required>
              </div>
            </div>
            <div class="password-form">
			    <label class="password" for="password">パスワード</label>
              <div class="password__item">
			    <input type="password" id="password" name="password" placeholder="  例: coachtech1106" required>
              </div>
            </div>
            <div class="register__button">
			    <button class="register__button-submit" type="submit">登録</button>
            </div>
		</form>
	</div>
</body>
@endsection