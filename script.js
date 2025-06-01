// فقط شغّل اللغات والتنقل، بدون كود إرسال النموذج لأن Google Form أخذ مكان الحجز

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

updateTexts('en');
