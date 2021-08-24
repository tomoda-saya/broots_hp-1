@extends('layouts.app')

@section('content')

@include('header')

<!-- スクロール -->
<div class="scrolldown4"><span>Scroll</span></div>
<!-- スクロール -->
<!-- 幾何学模様 -->
<div id="particles-js">
</div>
<div id="wrapper">
    <div class="wrapper2">
        <!-- top start -->
        <div class="top">
            <div class="top-left">
                <h3>ITで「心」を繋ぐ…</h3>
                <img src="images/make a wedsite.png" alt="make_a_website">
            </div>
            <div id="1" class="top-right">
                <table class="news">
                    <tr>
                        <th class="news_title" scope="row">NEWS</th>
                        <td class="news_li">2021.5.17<br>・HP開設しました<br>
                            2021.5.19<br>・制作実績更新しました
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- top end -->
        <!-- about start -->
        <div class="about">
            <div class="section_title">
                <p class="paragraph_line"></p>
                <p class="section_title_part1">About</p>
                <p class="section_title_part2" id="1">経営理念</p>
                <p class="section_title_part3"></p>
            </div>
            <p class="keieisetumei">コロナ禍により人との物理的距離が</p>
            <p class="keieisetumei">求められる新たな時代</p><br>
            <p class="keieisetumei">IT技術によりその離れた距離の分、</p> 
            <p class="keieisetumei">人と人との距離を縮める</p> 
            <p class="keieisetumei">そんな社会的役割を担うことを</p>
            <p class="keieisetumei">使命として活動しております</p>
            <p class="saiyou">採用情報</p>
            <p class="saiyou-boder"></p>
            <p class="y1"></p>
            <p class="otoiawase">お問い合わせ</p>
            <p class="otoiawase-boder"></p>
            <p class="y2"></p>
            <img src="images/yoshiisan.png" class="yoshiisan">
            <p class="yoshiisyatyou">吉井 良</p>
            <p class="yoshiisyatyou2">社長</p>
        </div>
        <!-- about end -->
        <!-- service start -->
        <div class="service">
            <div class="section_title">
                <p class="paragraph_line"></p>
                <p class="section_title_part1">Service</p>
                <p class="section_title_part2" id="1">事業内容</p>
                <p class="section_title_part3"></p>
            </div>
            <div class="services">
                <div class="service_part">
                    <div class="service_left_1">
                        <img src="images/hp.png" class="service_img">
                    </div>
                    <div class="service_right_1">
                        <div class="sub_title">
                            <p class="service_title_line"></p>
                            <h3><a class="service_1_title" href="web_make">ホームページ制作</a></h3>
                        </div>
                        <div class="service_content">
                            <p>街の小さな美容院・飲食店・商店街等、<br>
                            個人店からもご依頼を頂いております<br>
                            <br>
                            お気軽にお問い合わせください！</p>
                        </div>
                    </div>
                </div> 
                <div class="service_part">
                    <div class="service_left_2">
                        <img src="images/apuri.png" class="service_img">
                    </div>
                    <div class="service_right_2">
                        <div class="sub_title">
                            <p class="service_title_line"></p>
                            <h3>アプリ・Webサービス開発</h3>
                        </div>
                        <div class="service_content">
                            <p>今後展開していく予定です<br>
                            <br>
                            ご相談があれば、<br>
                            お気軽にお問い合わせください！</p>
                        </div>
                    </div>
                    <div class="cb"></div>
                </div>
                <div class="service_part">
                    <div class="service_left_3">
                        <img src="images/logo.png" class="service_img">
                    </div>
                    <div class="service_right_3">
                        <div class="sub_title">
                            <p class="service_title_line"></p>
                            <h3 class="service_3_title"><a class="service_1_title" href="logo_make">名刺・ロゴ制作</a></h3>
                        </div>
                        <div class="service_content">
                            <p>ロゴマークからイラスト付きまで、<br>
                            幅広く対応します<br>
                            <br>
                            お気軽にお問い合わせください！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service end -->
        <!-- works start -->
        <div class="works">
            <div class="section_title">
                <p class="paragraph_line"></p>
                <p class="section_title_part1">Works</p>
                <p class="section_title_part2" id="1">実績紹介</p>
                <p class="section_title_part3"></p>
            </div>
            <div>
                <ul class="slider2"> <!--スライド-->
                    <li><img src="images/no-imges.png" alt="no-imges"></li>
                    <li><img src="images/no-imges.png" alt="no-imges"></li>
                    <li><img src="images/no-imges.png" alt="no-imges"></li>
                    <li><img src="images/no-imges.png" alt="no-imges"></li>
                    <li><img src="images/no-imges.png" alt="no-imges"></li>
                    <li><img src="images/no-imges.png" alt="no-imges"></li>
                    <!--/slider-->
                </ul>    
            </div>
            <!-- works end -->
        </div>
        <!-- wrapper2 -->
    </div>
    <!-- wrapper -->
</div>
<!-- info start -->
<div class="info">
    <p class="bak"></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.51673788735!2d136.88553011597466!3d35.168671265516906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376dec8808aa9%3A0x1ef1fd38f33dde3!2z44CSNDUwLTAwMDIg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5p2R5Yy65ZCN6aeF77yU5LiB55uu77yS77yV4oiS77yR77yXIOS4ieWWnOODk-ODqyA26ZqO!5e0!3m2!1sja!2sjp!4v1624437297222!5m2!1sja!2sjp" class="mapu"></iframe>
    <p class="info1">株式会社 B.roots</p>
    <p class="info2">〒450-0002  名古屋市中村区名駅4-25-17 三喜ビル6階</p>
    <p class="info3">TEL｜052-551-0322  /  MAIL｜mori@nex-seed.co.jp</p>
    <p class="bak2"></p>
<!-- info end -->
</div>
    
@include('footer')

<!-- </div> wrapper -->
    <!-- スライドショー実装 -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--自作のJS-->
    <script src="js/6-1-7.js"></script>
    <!-- スライドショー実装 -->
    <!-- 幾何学模様 -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!--自作のJS-->
    <script src="js/5-4.js"></script>
    <!-- 幾何学模様 -->
    <!-- スクロール2 -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--自作のJS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollgress/2.0.0/scrollgress.min.js"></script>
    <script src="js/9-1-5.js"></script>
    <!-- スクロール2 -->

@endsection
