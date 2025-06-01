<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>Cinematic Touches</title>
<style>
  /* ======= CSS ======= */
  * {
    margin: 0; padding: 0; box-sizing: border-box;
  }
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #0a0a0a;
    color: #00bfff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
  header {
    background: #000814;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 8px rgba(0,191,255,0.3);
    flex-wrap: wrap;
  }
  header h1 {
    font-size: 1.7rem;
    letter-spacing: 2px;
    flex: 1 1 100%;
    margin-bottom: 10px;
  }
  .lang-switcher {
    display: flex;
    gap: 8px;
    margin-right: 10px;
  }
  .lang-switcher button {
    background: none;
    border: 1.5px solid #00bfff;
    color: #00bfff;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .lang-switcher button.active,
  .lang-switcher button:hover {
    background: #00bfff;
    color: #000814;
  }
  .container {
    flex: 1;
    display: flex;
    max-width: 900px;
    margin: 20px auto;
    background: #001f3f;
    border-radius: 12px;
    box-shadow: 0 0 30px #00bfff88;
    overflow: hidden;
  }
  .sidebar {
    width: 180px;
    background: #000814;
    border-right: 2px solid #00bfff;
  }
  .sidebar ul {
    list-style: none;
  }
  .sidebar li {
    margin: 15px 0;
  }
  .menu-btn {
    width: 100%;
    background: none;
    border: none;
    color: #00bfff;
    padding: 15px 20px;
    font-size: 1.05rem;
    text-align: left;
    cursor: pointer;
    transition: background-color 0.3s ease;
    letter-spacing: 1px;
  }
  .menu-btn:hover,
  .menu-btn.active {
    background-color: #00bfff;
    color: #000814;
    font-weight: bold;
  }
  .content {
    flex: 1;
    padding: 20px 25px;
    overflow-y: auto;
    color: #cceeff;
  }
  .section {
    display: none;
    animation: fadeIn 0.6s ease forwards;
  }
  .section.active {
    display: block;
  }
  .section h2 {
    color: #00d4ff;
    margin-bottom: 15px;
  }
  .section p {
    font-size: 1.15rem;
    margin-bottom: 15px;
  }
  iframe {
    border: none;
    border-radius: 8px;
  }
  /* Animations */
  @keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
  }
  /* RTL for Arabic */
  body[dir="rtl"] {
    direction: rtl;
  }
  body[dir="rtl"] .sidebar {
    border-right: none;
    border-left: 2px solid #00bfff;
  }
  body[dir="rtl"] .menu-btn {
    text-align: right;
  }
  /* Responsive */
  @media (max-width: 600px) {
    .container {
      flex-direction: column;
    }
    .sidebar {
      width: 100%;
      border-right: none;
      border-bottom: 2px solid #00bfff;
    }
    .menu-btn {
      text-align: center;
    }
    header {
      flex-direction: column;
      align-items: flex-start;
    }
  }
</style>
</head>
<body>

<header>
  <h1 data-i18n="appTitle">Cinematic Touches</h1>
  <div class="lang-switcher">
    <button class="lang-btn active" data-lang="en">EN</button>
    <button class="lang-btn" data-lang="ar">عربي</button>
    <button class="lang-btn" data-lang="ku">کوردی</button>
  </div>
</header>

<div class="container">

  <nav class="sidebar" aria-label="Main navigation">
    <ul>
      <li><button class="menu-btn active" data-section="home" data-i18n="menuHome">Home</button></li>
      <li><button class="menu-btn" data-section="booking" data-i18n="menuBooking">Bookings</button></li>
      <li><button class="menu-btn" data-section="contact" data-i18n="menuContact">Contact</button></li>
      <li><button class="menu-btn" data-section="map" data-i18n="menuMap">Map</button></li>
    </ul>
  </nav>

  <main class="content" id="content" tabindex="0">

    <section id="home" class="section active">
      <h2 data-i18n="homeTitle">Welcome to Cinematic Touches</h2>
      <p data-i18n="homeDesc">
        Cinematic Touches offers specialized services in graduation projects, video production, and presentations.<br/>
        We provide full support for students, including theoretical and practical project preparation, as well as professional presentation videos.<br/>
        Our mission is to help students succeed by delivering creative, high-quality work for their academic and cinematic needs.
      </p>
    </section>

    <section id="booking" class="section">
      <h2 data-i18n="bookingTitle">Project & Video Production Bookings</h2>
      
      <!-- Google Form embedded -->
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfkEnh_n6mDLSczcdyXvfOdKvFN3RLcqGPiR2jXnQbbfD2fDA/viewform?embedded=true" width="100%" height="950" loading="lazy" title="Booking Form"></iframe>
    </section>

    <section id="contact" class="section">
      <h2 data-i18n="contactTitle">Contact Us</h2>
      <p><strong data-i18n="contactPhoneLabel">Phone:</strong> <a href="tel:+9647731542483" id="phone-link" class="phone-link">+964 773 154 2483</a></p>
      <p><strong>Email:</strong> <a href="mailto:hussienalansari12@gmail.com" id="email-link" class="email-link">hussienalansari12@gmail.com</a></p>
      <p><strong data-i18n="contactInstagramLabel">Instagram:</strong> <a href="https://instagram.com/cinematic_touches" target="_blank" rel="noopener">@cinematic_touches</a></p>
    </section>

    <section id="map" class="section">
      <h2 data-i18n="mapTitle">Our Location</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6306954.17636996!2d42.02298425001211!3d33.118084760544756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1557823d54f54a11%3A0x6da561bba2061602!2z2YXYs9mK2YbYp9mE2KrYp9iq2YrYqNmI2KfZhNi52YTZhtiq2LHYtdmI2KfYqNmF2YrYqSDYp9mE2LHZiiDYqNin2YTYp9iz2KfZhtin2K8!5e0!3m2!1sen!2sus!4v1684917981234!5m2!1sen!2sus"
        width="100%"
        height="320"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Cinematic Touches Location"
      ></iframe>
    </section>

  </main>

</div>

<footer>
  <p>© 2025 Cinematic Touches | All Rights Reserved</p>
</footer>

<script>
  /* ======= JavaScript ======= */
  const translations = {
    en: {
      appTitle: "Cinematic Touches",
      menuHome: "Home",
      menuBooking: "Bookings",
      menuContact: "Contact",
      menuMap: "Map",
      homeTitle: "Welcome to Cinematic Touches",
      homeDesc:
        "Cinematic Touches offers specialized services in graduation projects, video production, and presentations.\nWe provide full support for students, including theoretical and practical project preparation, as well as professional presentation videos.\nOur mission is to help students succeed by delivering creative, high-quality work for their academic and cinematic needs.",
      bookingTitle: "Project & Video Production Bookings",
      contactTitle: "Contact Us",
      contactPhoneLabel: "Phone:",
      contactInstagramLabel: "Instagram:",
      mapTitle: "Our Location",
    },
    ar: {
      appTitle: "لمسات سينمائية",
      menuHome: "الرئيسية",
      menuBooking: "الحجوزات",
      menuContact: "تواصل معنا",
      menuMap: "الخريطة",
      homeTitle: "مرحبًا بكم في لمسات سينمائية",
      homeDesc:
        "تقدم لمسات سينمائية خدمات متخصصة في مشاريع التخرج، إنتاج الفيديوهات، والعروض التقديمية.\nنقدم دعم كامل للطلاب بما يشمل إعداد المشاريع النظرية والعملية، بالإضافة إلى فيديوهات العروض التقديمية الاحترافية.\nمهمتنا هي مساعدة الطلاب على النجاح من خلال تقديم أعمال إبداعية وعالية الجودة تناسب احتياجاتهم الأكاديمية والسينمائية.",
      bookingTitle: "حجوزات المشاريع وإنتاج الفيديوهات",
      contactTitle: "تواصل معنا",
      contactPhoneLabel: "الهاتف:",
      contactInstagramLabel: "إنستغرام",
      mapTitle: "موقعنا",
    },
    ku: {
      appTitle: "لەمسەکانی سینەمایی",
      menuHome: "سەرەکی",
      menuBooking: "پێشکەشکردن",
      menuContact: "پەیوەندی",
      menuMap: "نەخشە",
      homeTitle: "بەخێربێیت بۆ لەمسەکانی سینەمایی",
      homeDesc:
        "لەمسەکانی سینەمایی خزمەتگوزاری تایبەتی بە پڕۆژەکانی خوێندکاران، دروستکردنی ڤیدیۆ و پرزنتەیشنی پڕۆژەکان دەنێت.\nئێمە پشتگیری تەواو بە خوێندکاران دەنەوە و پڕۆژەکانیان بە شێوەی نەتەوەیی و پرکتیگ دروست دەکەین.\nئامانجمان یارمەتیدانی خوێندکارانە بۆ سەرکەوتن بە شێوەیەکی خلاق و بە جۆری جۆراوجۆر بۆ پێویستی ئەکادیمی و سینەمایییان.",
      bookingTitle: "پێشکەشکردنی پڕۆژە و ڤیدیۆ",
      contactTitle: "پەیوەندی پێوە بکە",
      contactPhoneLabel: "ژمارەی تەلەفۆن:",
      contactInstagramLabel: "ئینستاگرام",
      mapTitle: "شوێنی ئێمە",
    }
  };

  function updateTexts(lang) {
    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (translations[lang] && translations[lang][key]) {
        el.textContent = translations[lang][key];
      }
    });

    if (lang === 'ar') {
      document.documentElement.setAttribute('dir', 'rtl');
    } else {
      document.documentElement.setAttribute('dir', 'ltr');
    }
  }

  const buttons = document.querySelectorAll('.menu-btn');
  const sections = document.querySelectorAll('.section');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      sections.forEach(s => s.classList.remove('active'));

      btn.classList.add('active');
      const sectionId = btn.getAttribute('data-section');
      document.getElementById(sectionId).classList.add('active');
      document.getElementById(sectionId).focus();
    });
  });

  const langButtons = document.querySelectorAll('.lang-btn');
  langButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      langButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      updateTexts(btn.getAttribute('data-lang'));
    });
  });

  updateTexts('en'); /* Default Language */
</script>

</body>
</html>
