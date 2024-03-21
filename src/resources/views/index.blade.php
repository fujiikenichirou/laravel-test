@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<body>
	<div class="contact-form">
		<p class="contact-logo">Contact</p>
		<form class="contact-form__inner" action="/confirm" method="post">
        @csrf
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
            <div class="tell-form">
			    <label class="tell" for="tell">電話番号</label>
              <div class="tell__item">
			    <input type="tell" id="tell" name="tell" placeholder="08012345678" required>
              </div>
            </div>
              <div class="address-form">
			    <label class="address" for="address">住所</label>
              <div class="address__item">
			    <input type="address" id="address" name="address" placeholder="  例: 東京都渋谷区千駄ヶ谷1-2-3" required>
              </div>
            </div>
              <div class="address__bottom-form">
			    <label class="address__bottom" for="address__bottom">建物名</label>
              <div class="address__bottom">
			    <input type="address__bottom" id="address__bottom " name="address__bottom" placeholder="  例: 千駄ヶ谷マンション101" required>
              </div>
            </div>
              <div class="contact__kinds-form">
			    <label class="contact__kinds" for="contact__kinds">お問い合わせの種類</label>
              <div class="contact__kinds__item">
			    <input type="contact__kinds" id="contact__kinds" name="contact__kinds" placeholder="  選択してください" required>
              </div>
            </div>
            </div>
              <div class="contact__contents-form">
			    <label class="contact__contents" for="contact__contents">お問い合わせ内容</label>
              <div class="contact__contents__item">
			    <input type="contact__contents" id="contact__contents" name="contact__contents" placeholder="  お問い合わせ内容をご記載ください" required>
              </div>
            </div>
            <div class="register__button">
			    <button class="register__button-submit" type="submit">登録</button>
            </div>
		</form>
	</div>
</body>
@endsection