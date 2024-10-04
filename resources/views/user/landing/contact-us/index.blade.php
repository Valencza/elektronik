@extends('user.layouts.app')
@section('content')
<!-- page-title -->
<div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">Hubungi Kami</div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- map -->
        <section class="flat-spacing-9">
            <div class="container">
                <div class="tf-grid-layout gap-0 lg-col-2">
                    <div class="w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0881917241136!2d112.62473041044029!3d-7.989828979648925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1727972155125!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="894" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="tf-content-left">
                        <div class="sticky-top">
                            <h5 class="mb_20">Kunjungi Toko Kami</h5>
                            <div class="mb_20">
                                <p class="mb_15"><strong>Alamat</strong></p>
                                <p>Jl. Tanimbar No.22, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117, Indonesia</p>
                            </div>
                            <div class="mb_20">
                                <p class="mb_15"><strong>Phone</strong></p>
                                <p>(62) 878-6424-7438</p>
                            </div>
                            <div class="mb_20">
                                <p class="mb_15"><strong>Email</strong></p>
                                <p>Digitech.Inc@yahoo.com</p>
                            </div>
                            <div class="mb_36">
                                <p class="mb_15"><strong>Open Time</strong></p>
                                <p class="mb_15">Buka Bendino, </p>
                                <p>Tutup Pas Kiamat</p>
                            </div>
                            <div>
                                <ul class="tf-social-icon d-flex gap-20 style-default">
                                    <li><a href="#" class="box-icon link round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                    <li><a href="#" class="box-icon link round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                    <li><a href="#" class="box-icon link round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                    <li><a href="#" class="box-icon link round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /map -->
        <!-- form -->
        <section class="bg_grey-7 flat-spacing-9">
            <div class="container">
                <div class="flat-title">
                    <span class="title">Hubungi Kami</span>
                    <p class="sub-title text_black-2">Jika Anda memiliki produk hebat yang Anda buat atau ingin bekerja sama dengan kami, silakan kirimkan pesan kepada kami.</p>
                </div>
                <div>
                    <form class="mw-705 mx-auto text-center form-contact" id="contactform" action="" method="post">
                        @csrf
                        <div class="d-flex gap-15 mb_15">
                            <fieldset class="w-100">
                                <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama Anda"/>
                            </fieldset>
                            <fieldset class="w-100">
                                <input type="email" name="email" id="email" required placeholder="Masukkan Email Anda"/>
                            </fieldset>
                        </div>
                        <div class="mb_15">
                            <textarea placeholder="Masukkan Pesan Anda" name="message" id="message" required cols="30" rows="10"></textarea>
                        </div>
                        <div class="send-wrap">
                            <button type="submit" class="tf-btn radius-3 btn-fill animate-hover-btn justify-content-center">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /form -->
@endsection
