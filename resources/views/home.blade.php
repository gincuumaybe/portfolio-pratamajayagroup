@extends('layouts.app')
@section('content')
    <section id="home">
        <div class="photo home1"></div>
        <div class="photo home2"></div>
        <div class="photo home3"></div>
        <div class="photo home4"></div>
        <div class="home-text">
            <h1>SERVICE AC PANGGILAN TERPERCAYA</h1>
            <p>PRATAMA JAYA GRUP adalah spesialis dalam berbagai layanan AC, perbaikan AC, pembersihan, pemasangan,
                perawatan, dan instalasi.</p>
        </div>
    </section>

    <section id="services">
        <div class="parent-services-list">
            <div class="child-header-text">Layanan Kami</div>
            <div class="child-boxes1">
                <div class="item-boxes1">
                    <div class="item-number">1</div>
                    <div class="item-content">Instalasi AC</div>
                    <div class="item-footer">
                        <span class="material-symbols-outlined">
                            climate_mini_split
                        </span>
                    </div>
                </div>
                <div class="item-boxes1">
                    <div class="item-number">2</div>
                    <div class="item-content">Service AC</div>
                    <div class="item-footer">
                        <span class="material-symbols-outlined">
                            handyman
                        </span>
                    </div>
                </div>
                <div class="item-boxes1">
                    <div class="item-number">3</div>
                    <div class="item-content">Pergantian Sparepart</div>
                    <div class="item-footer">
                        <span class="material-symbols-outlined">
                            home_improvement_and_tools
                        </span>
                    </div>
                </div>
            </div>
            <div class="child-boxes2">
                <div class="item-boxes2">
                    <div class="item-number">4</div>
                    <div class="item-content">Instalasi AC</div>
                    <div class="item-footer">
                        <span class="material-symbols-outlined">
                            gas_meter
                        </span>
                    </div>
                </div>
                <div class="item-boxes2">
                    <div class="item-number">5</div>
                    <div class="item-content">Service AC</div>
                    <div class="item-footer">
                        <span class="material-symbols-outlined">
                            soap
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.8541947801139!2d112.47891249839479!3d-7.497412099999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780ce3e753bd8b%3A0x486d3e8363ef1b0f!2sKantor%20Kecamatan%20Bangsal!5e0!3m2!1sen!2sid!4v1764310532462!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="address">
                <div class="address-icon">
                    <span class="material-symbols-sharp address-icon">
                        home
                    </span>
                </div>
                <div class="address-text">Desa Bangsal RT 9 RW 2 ( sebelah kanan Kecamatan Bangsal ) Kabupaten Mojokerto,
                    Jawa Timur</div>
            </div>
        </div>

        <div class="about-us-social">
            <div class="social-card wa">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg>
                </div>
                <div class="name">WhatsApp</div>
                <a href="https://wa.me/6281998161825?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda"
                    target="_blank" class="phone">
                    Pratama Jaya Group
                </a>
            </div>

            <div class="social-card ig">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </div>
                <div class="name">Instagram</div>
                <a href="https://instagram.com/pratama_cool_engineering" target="_blank" class="phone">
                    Pratama Jaya Group
                </a>
            </div>

            <div class="social-card tiktok">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path
                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                    </svg>
                </div>
                <div class="name">TikTok</div>
                <a href="https://www.tiktok.com/@angkycuy" target="_blank" class="phone">
                    Pratama Jaya Group
                </a>
            </div>
        </div>
    </section>

    <section id="review">
        <div class="photo-review" id="carousel">
            <div class="photo1"></div>
            <div class="photo2"></div>
            <div class="photo3"></div>
            <div class="photo4"></div>
        </div>

        <div class="carousel-dots" id="dots">
            <span class="active"></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <script>
            const carousel = document.getElementById("carousel");
            const dots = document.querySelectorAll("#dots span");

            carousel.addEventListener("scroll", () => {
                const cardWidth = carousel.firstElementChild.offsetWidth + 16; // includes gap
                const index = Math.round(carousel.scrollLeft / cardWidth);

                dots.forEach((d, i) => d.classList.toggle("active", i === index));
            });
        </script>

        <div class="text-review">
            <header>Testimoni Pelanggan</header>
            <div>Pelayanan cepat, bisa datang langsung</div>
            <div>Orangnya ramah, langsung paham pas dikasih tau keluhannya apa-apa saja</div>
            <div>Kerjanya sat set, jos jis</div>
            <div>Puas dengan hasil kerjanya, harganya juga murah</div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-logo">
            <img src="{{ Vite::asset('resources/images/logo1.png') }}" alt="Logo" width="50" height="50">
            <span>Pratama Jaya Group</span>
        </div>
    </footer>
@endsection
