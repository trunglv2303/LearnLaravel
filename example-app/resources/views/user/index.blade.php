@extends('layout.main')


@section('content')
<div class="main">
    <div class="slider">
        <img class="sliderhome" src="../img/slider.webp" alt="imgss">
        <div class="btn">
            <button onclick="back()"><i class='bx bx-chevron-left'></i><button>
                    <button onclick="next()"> <i class='bx bx-chevron-right'></i></button>
        </div>
    </div>
</div>
<script>
    var mainimg = document.querySelector(".sliderhome")

    var images = ["../img/slider1.webp", "../img/slider2.webp", "../img/slider3.webp"]
    var num = 0;
    function next() {
        num++;
        if (num >= images.length) {
            num = 0;
            mainimg.src = images[num]
        } else {
            mainimg.src = images[num]
        }
    };
    function back() {
        num--;
        if (num < 0) {
            num = images.length - 1;
            mainimg.src = images[num]
        } else {
            mainimg.src = images[num]
        }
    }
</script>
<div class="bosuutap">
    <div class="bstleft">
        <a href="" class="">
            <img src="../img/home_new_banner_1.webp" alt="">
            <div class="phiaduoi">
                <div class="layer1"><b>NEW COLECTION</b></div>
                <div class="layer2"><b>SHOP NOW</b></div>
            </div>
        </a>
    </div>
    <div class="bstright">
        <a href="" class=""><img src="../img/home_new_banner_2.webp" alt="">
            <div class="phiaduoi">
                <div class="layer1"><b>SHIRT</b></div>
                <div class="layer2"><b>SHOP NOW</b></div>
            </div>
        </a>
    </div>

   

</div>
<div class="sanpham">SẢN PHẨM MỚI</div>
<div class="kod">
    <div style="background-image: url(../img/18_6b8399c75fce42a787837ed787e5a268_1024x1024.webp);" class="ptc">
        <div class="bin"><a href="">Đầm Công Sở <br>
                <p>120.000VND</p>
            </a>
        </div>

    </div>
    <div style="background-image: url(../img/22_7a671d5202554f6b96be90d6e1e5b9d9_1024x1024.webp); " class="ptc1">
        <div class="bin1"><a href="">Set Áo Luxury <br>
                <p>900.000VND</p>
            </a>
        </div>
    </div>
    <div style="background-image: url(../img/22_9298781326064ff0b5bbe1bd69f99dee_1024x1024.webp);" class="ptc2">
        <div class="bin2"><a href="">Đầm Hoa Summer<br>
                <p>120.000VND</p>
            </a>
        </div>
    </div>
    <div style="background-image: url(../img/23_311149444b0a49fc8abe4eca8140cab5_1024x1024.webp);" class="ptc3">
        <div class="bin3"><a href="">Đầm Hồng <br>
                <p>120.000VND</p>
            </a>
        </div>
    </div>
    <div style="background-image: url(\"{{asset('user-asse/img/24_51afa903ae5e41c584d456c9ab53316a_1024x1024.webp')}}\");" class="ptc4">
        <div class="bin4"><a href="">D19572<br>
                <p>120.000VND</p>
            </a>
        </div>
    </div>
    <div style="background-image: url(../img/damduoica.webp);" class="ptc5">
        <div class="bin5"><a href="">Đầm Đuôi Cá <br>
                <p>120.000VND</p>
            </a>
        </div>
    </div>
</div>

<div class="sanpham">SẢN PHẨM BÁN CHẠY</div>

<div class="trungdz">
    <div class="wrapper">
        <i id="left" class="fa-sharp fa-solid fa-chevron-left"></i>
        <div class="caroule">
            <div class="imgslider">
                <div class="item1">

                    <a href="../HTML/sanphamdam1.html"><img src="{{asset('user-asset/img/dam1.webp')}}" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href="../HTML/sanphamdam1.html"> <span> <b>ĐẦM HOA NHÍ VAI NHÚN D20382</b></span></a>
                    <br>
                    <h4>1,899,000₫</h4>
                </div>
            </div>
            <div class="imgslider1">
                <div class="item1">
                    <a href=""><img src="../img/ao6.webp" alt="img1"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>

                </div>
                <div class="info1">
                    <a href=""><span> <b>ÁO PHÔNG IN HÌNH TS60162</b> </span></a>
                    <br>
                    <h4>299,000₫</h4>
                </div>
            </div>
            <div class="imgslider">
                <div class="item1">
                    <a href=""><img src="../img/dam4.webp" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href=""> <span> <b>QUẦN ỐNG ĐỨNG Q17012</b></span></a>
                    <br>
                    <h4>699,000₫</h4>
                </div>
            </div>
            <div class="imgslider">
                <div class="item1">
                    <a href=""><img src="../img/dam5.webp" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href=""> <span> <b>SƠ MI CHẤM BI SM00362 </b></span></a>
                    <br>
                    <h4>599,000₫</h4>
                </div>
            </div>
            <div class="imgslider">
                <div class="item1">
                    <a href=""><img src="../img/dam7.webp" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href=""><span> <b>ĐẦM MIDI KHÔNG TAY D18602</b></span></a>
                    <br>
                    <h4>1,399,000₫</h4>
                </div>
            </div>
            <div class="imgslider">
                <div class="item1">
                    <a href=""><img class="imge" src="../img/18_6b8399c75fce42a787837ed787e5a268_1024x1024.webp"
                            alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href=""> <span> <b>ĐẦM KẺ CỐ VEST </b></span></a>
                    <br>
                    <h4>1,999,000₫</h4>
                </div>
            </div>

            <div class="imgslider">
                <div class="item1">
                    <a href=""><img src="../img/dam2.webp" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>

                <div class="info">
                    <a href=""> <span> <b>ĐẦM CỔ VEST TAY BỒNG D19972</b></span></a>
                    <br>
                    <h4>1,399,000₫</h4>
                </div>
            </div>
            <div class="imgslider">
                <div class="item1">
                    <a href=""><img src="../img/dam3.webp" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href=""> <span> <b>ĐẦM HỌA TIẾT D18542 </b></span></a>
                    <br>
                    <h4>1,399,000₫</h4>
                </div>
            </div>

            <div class="imgslider">
                <div class="item1">
                    <a href=""><img src="../img/dam6.webp" alt="img"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href=""><span> <b>ĐẦM HỒNG PHỐI XẾP LI D20422</b> </span></a>
                    <br>
                    <h4>1,599,000₫</h4>
                </div>
            </div>
            <i id="right" class="fa-sharp fa-solid fa-chevron-right"></i>
        </div>
    </div>
</div>
<div class="sanpham">ÁO THUN CAO CẤP</div>

<div class="trungdz1">
    <div class="wrapper1">
        <i id="left1" class="fa-sharp fa-solid fa-chevron-left"></i>
        <div class="caroule1">
            <div class="imgslider1">
                <div class="item12">
                    <a href=""><img class="imge" src="../img/ao1.webp" alt="img1"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>

                </div>
                <div class="info1">
                    <a href=""><span> <b>ÁO PHÔNG VÀNG TS60132</b> </span></a>
                    <br>
                    <h4>399,000₫</h4>
                </div>
            </div>
            <div class="imgslider1">
                <div class="item12">
                    <a href=""><img src="../img/ao2.webp" alt="img1"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>

                </div>
                <div class="info1">
                    <a href=""><span> <b>ÁO PHÔNG IN HÌNH TS60162</b> </span></a>
                    <br>
                    <h4>299,000₫</h4>
                </div>
            </div>
            <div class="imgslider1">
                <div class="item12">

                    <a href=""><img src="../img/ao3.webp" alt="img1"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>

                </div>
                <div class="info1">
                    <a href=""><span> <b>ÁO THUN ĐEN IN HỌA TIẾT TS60172</b> </span></a>
                    <br>
                    <h4>329,000₫</h4>
                </div>
            </div>
            <div class="imgslider1">
                <div class="item12">

                    <a href=""><img src="../img/ao4.webp" alt="img1"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>

                </div>
                <div class="info1">
                    <a href=""><span> <b>ÁO PHÔNG CỔ TRÒN TS60092</b> </span></a>
                    <br>
                    <h4>299,000₫</h4>
                </div>
            </div>
            <div class="imgslider1">
                <div class="item12">
                    <a href=""><img src="../img/ao5.webp" alt="img1"></a>
                    <div class="mangche">
                        <a href="">
                            <div class="tuvan">Tư Vấn</div>
                        </a>
                    </div>

                </div>
                <div class="info1">
                    <a href=""><span> <b>ÁO PHÔNG VÀNG TS60132</b> </span></a>
                    <br>
                    <h4>329,000₫</h4>
                </div>
            </div>


            <i id="right1" class="fa-sharp fa-solid fa-chevron-right"></i>
        </div>
    </div>
</div>
<div class="k199">
    <img src="../img/199l.jpg" alt="">
</div>
<div class="blog">
    <h1>LVT-BLOG</h1><br>
    <h3>ĐÓN ĐẦU PHONG CÁCH XU HƯỚNG</h3>
</div>

<div class="trungdzblog">
    <div class="wrapperblog">
        <i id="leftblog" class="fa-sharp fa-solid fa-chevron-left"></i>
        <div class="carouleblog">
            <div class="imgsliderblog">
                <div class="item1blog">
                    <a href=""><img class="imge" src="../img/Blog1.webp" alt="img"></a>


                </div>
                <div class="infoblog">
                    <span> <b>MINIMAL CHIC</b></span>


                </div>
            </div>
            <div class="imgsliderblog">
                <div class="item1blog">
                    <a href=""><img src="../img/blog2.webp" alt="img"></a>


                </div>
                <div class="infoblog">
                    <span><b>3 CÁCH DIỆN SƠ MI ĐẸP ĐÚNG CHUẨN</b></span>

                </div>
            </div>
            <div class="imgsliderblog">
                <div class="item1blog">
                    <a href=""><img src="../img/blog3.webp" alt="img"></a>

                </div>
                <div class="infoblog">
                    <span><b>SUIT-XU HƯỚNG THỜI TRANG CHO QUÝ CÔ </b> </span> <br>
                    <span>
                        <b> QUYỀN LỰC</b> </span>

                </div>
            </div>
            <div class="imgsliderblog">
                <div class="item1blog">
                    <a href=""><img src="../img/blog4.jpg" alt="img"></a>
                </div>
                <div class="infoblog">
                    <span> <b>RỰC RỠ ĐÓN HÈ CÙNG VÁY HOA</b></span>

                </div>
            </div>
            <div class="imgsliderblog">
                <div class="item1blog">
                    <a href=""><img src="../img/BLOG5.webp" alt="img"></a>
                </div>
                <div class="infoblog">
                    <span> <b> SUMMER FESTIVAL-ÁO PHÔNG CHỈ 299K</b> </span>

                </div>
            </div>
            <div class="imgsliderblog">
                <div class="item1blog">
                    <a href=""><img src="../img/blog6.webp" alt="img"></a>
                </div>
                <div class="infoblog">
                    <span> <b>KHÁM PHÁ 4 HỌA TIẾT THỐNG LĨNH MÙA HÈ</b></span>

                </div>
            </div>

            <i id="rightblog" class="fa-sharp fa-solid fa-chevron-right"></i>
        </div>
    </div>
</div>
<div class="dangkibangtien">
    <div class="MAP">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7333963918236!2d108.24978007500275!3d15.97529308469066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1686645400615!5m2!1svi!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="chu">
        <div class="dangkibangtin"> Đăng Kí Bảng Tin </div>
        <div class="dangkibangtinmail">
            Đăng kí bảng tin để nhận mẫu thiết kế mới nhất
        </div>

        <input type="text" placeholder="Vui lòng nhập email.... " />
        <input
            style="height: 40px;width: 50px ; background-color: rgb(0, 0, 0);color: aliceblue; margin-left:-2px ;"
            type="submit" value="Gửi"> <br>
        <div class="icon">
            <a href="" class="facebook">
                <div class="fa-brands fa-facebook"></div>
            </a>
            <a href="" class="instagram">
                <div class="fa-brands fa-instagram"></div>
            </a>
            <a href="" class="youtube">
                <div class="fa-brands fa-youtube"></div>
            </a>
        </div>



    </div>
</div>
</div>
@endsection
