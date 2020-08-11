@extends('layout.index')

@section('content')
<style>
  .invalid-feedback {
    display: block;
    font-size: 14px;
  }
</style>
<header class="page-header">
	<div class="container">
		<h1 class="logo">
			<a href="/"><img src="wp-content/images/logo.png" alt=""></a>
		</h1>
		<p class="info"><img src="wp-content/images/phone-number.png" alt=""></p>
	</div>
</header>

<div class="main-visual">
    <figure><img src="wp-content/images/main-bg.png" alt=""></figure>
    <div class="container">
        <ul class="">
            <li style="margin:auto;"><a href="mailto:info@anaheim.cloud" tartget="_blank"><img src="wp-content/themes/uru/images/btn01.png" alt=""></a></li>
            <li style="margin:auto;"><a href="https://lin.ee/msacXYU" target="_blank"><img src="wp-content/themes/uru/images/btn02.png" alt=""></a></li>
        </ul>
    </div>
</div><!-- /.main-visual -->
<main class="page-main">
    <section class="section02">
        <div class="container">
            <div class="box-top">
                <div class="content" style="margin:auto">
                    <h1 class="ins-title">ホテルとアクティビティの主要なオンライン予約システム！</h1>
                    <ul class="ins-content">
                        <li>すぐに予約と支払いのために自分の携帯電話に予約アプリ内蔵。 </li>
                        <li>お客様にリアルタイムの可用性を提。</li>
                        <li>いつでも商品券を販売してシーズン外シーズンも収入をあげることができます。</li>
                        <li>SAMAでビジネスを運営する時間を節約してください。 </li>
                    </ul>
                </div>
                <!-- <figure><img src="wp-content/themes/uru/images/section02-img_01.png" alt=""></figure> -->
            </div>
            <div style="text-align: center;">
              <h1 class=" ins-title">オンラインとオフラインで簡単に予約</h1>
            </div>
            <!-- <h1 class="only-sp">ご安心ください。U-ru「ウール」では急な事態にも即日で対応致します</h1> -->
            <div class="main-img" style="margin-top:20px">
                <figure style="margin-bottom:0px"><img src="wp-content/images/phone-middle.png" alt=""></figure>
                {{-- <a href="https://lin.ee/msacXYU" target="_blank">Contact Us</a> --}}
            </div>
        </div>
    </section>
    <!-- /.section02 -->
    <section class="section03">
        <div class="container">
            <ul>
                <li><a href="tel:0904-408-0001"><img src="wp-content/themes/uru/images/section03-btn_01.png" alt=""></a></li>
                <li><a href="tel:0904-408-0001"><img src="wp-content/themes/uru/images/section03-btn_02.png" alt=""></a></li>
                <li><a href="tel:0904-408-0001"><img src="wp-content/themes/uru/images/section03-btn_03.png" alt=""></a></li>
            </ul>
            <figure >
                <img src="wp-content/images/booking-phone.png" alt="">
            </figure>
        </div>
    </section><!-- /.section03 -->
    
    <section class="section05">
        <div class="container">
            <h1 class="ins-title" style="color:rgb(238, 229, 108); text-align: center; margin-bottom: 20px;">SAMAは電話予約を、ほとんどの予約をオンラインで移動することができます。</h1>
            <ul>
                <li>
                    <figure>
                        <img src="wp-content/images/hotel-1.jpg" alt="" style="height: 380px;width: 100%;">
                        <p class="hotel-title">日本の喜びホテル</p>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="wp-content/images/hotel-2.jpg" alt="" style="height: 380px; width: 100%;">
                        <p class="hotel-title">ペニンシュラ東京ホテル</p>
                    </figure>
                </li>
            </ul>
        </div>
        <div class="container">
          <h2></h2>
          <ul>
              <li>
                  <figure>
                      <img src="wp-content/images/hotel-3.jpg" alt="" style="height: 380px; width: 100%;">
                      <p class="hotel-title">旅館ホテル</p>
                  </figure>
              </li>
              <li>
                  <figure>
                      <img src="wp-content/images/room-business-hotel.jpg" alt="" style="height: 380px; width: 100%;">
                      <p class="hotel-title">ビジネスホテル</p>
                  </figure>
              </li>
          </ul>
      </div>
    </section><!-- /section05 -->
    <section class="section06">
            <figure> <h1 class="ins-title">ホテルとアクティビティの主要なオンライン予約システム！</h1></figure>
    </section><!-- /.section06 -->
    <section class="section07">
        <div class="container">
            <ul>
                <li>
                    <h2>内蔵の統合機能</h2>
                    <figure><img src="wp-content/images/phone-2.png" alt=""></figure>
                    <p class="phone-text">会計および電子メールソフトウェアのための内蔵の統合機能でデータ入力の減少</p>
                     <!-- <div class="btn"><a href="tel:0778-43-5731">「ご相談はこちら」</a></div> -->
                </li>
                <li>
                    <h2>パーソナライズされた自動化</h2>
                    <figure><img src="wp-content/images/phone-3.png" alt=""></figure>
                    <p class="phone-text">パーソナライズされたメール、予約通知、領収書、リマインダーを自動化</p>
                    <!-- <div class="btn"><a href="tel:0778-43-5731">「ご相談はこちら」</a></div> -->
                </li>
                <li>
                    <h2>お客様情報の収集</h2>
                    <figure><img src="wp-content/images/phone-4.png" alt=""></figure>
                    <p class="phone-text">デジタル権利放棄とフォームを介して顧客情報を自動的に収集</p>
                    <!-- <div class="btn"><a href="https://lin.ee/msacXYU" target="_blank">「買取商品の写真を送る」</a></div> -->
                </li>
                <li>
                    <h2>Google Map</h2>
                    <figure><img src="wp-content/images/phone-1.png" alt=""></figure>
                    <p class="phone-text">正確な位置と検索時間の節約、便利な情報を提供</p>
                    <!-- <div class="btn"><a href="https://lin.ee/msacXYU" target="_blank">「U-ruとお友達になる」</a></div> -->
                </li>
            </ul>
        </div>
    </section><!-- /.section07 -->
   
    <section class="section11">
        <div class="container">
            <h2><img src="wp-content/images/logo.png" alt=""></h2>
            <p>今すぐ、SAMA<br class="only-sp">とあなたの悩みを解決しようと.</p>
            <ul>
                <li><a href="tel:0904-408-0001"><img src="wp-content/themes/uru/images/btn-phone.png" alt=""></a></li>
                <li><a href="https://lin.ee/msacXYU"><img src="wp-content/themes/uru/images/btn-line.png" alt=""></a></li>
            </ul>
        </div>
    </section><!-- /.section11 -->
    
    <section class="section12">
        <div class="container">
          <div class="row col-lg-12">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <h2 class="ins-title">お問い合わせ</h2>
            @if(Session::has('flash_message'))
            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
            @endif
            <form method="post" action="/contact" style="margin-bottom:0px">
              {{ csrf_field() }}

              <div class="form-group">
                <label style="font-size:18px">名前</label>
                <input type="text" class="form-control contact-input" name="name" style="font-size:18px" >
                @if($errors->has('name'))
                <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                @endif
              </div>

              <div class="form-group">
                <label style="font-size:18px">Email :</label>
                <input type="text" class="form-control contact-input" name="email" style="font-size:18px" >
                @if($errors->has('email'))
                <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                @endif
              </div>


              <div class="form-group">
                <label style="font-size:18px">主題</label>
                <input type="text" class="form-control contact-input" name="subject" style="font-size:18px">
                @if($errors->has('subject'))
                <small class="form-text invalid-feedback">{{$errors->first('subject')}}</small>
                @endif
              </div>



              <div class="form-group">
                <label style="font-size:18px">メッセージ</label>
                <textarea name="message" class="form-control" rows="5" style="border-radius:0px; border:solid 1px white; font-size:18px"></textarea>
                @if($errors->has('message'))
                <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                @endif
              </div>
            
              <button class="btn btn-primary send-btn">送&nbsp;&nbsp;&nbsp;信</button>
            </form>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
    </section><!-- /.section12 -->
</main>
<!-- /.page-main -->

<footer class="page-footer">
	<div class="container">
		<h2><img src="wp-content/images/logo-1.png" alt=""></h2>
		<ul class="ft-info" style="font-size:16px;">
			<li>連携電話番号:<span>0904-408-0001</span></li>
			<li>Email: <span>info@anaheim.cloud</span></li>
			<!-- <li>遺品整理士認定<span>（一般社団法人 遺品整理士認定協会）</span></li> -->
		</ul>
  </div>
  <p class="copy_team">Copyright@2020.crystal team</p>
</footer>
@endsection

