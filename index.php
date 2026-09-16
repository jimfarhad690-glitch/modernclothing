<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="kevinkanoj bietet stilvolle Herrenmode in Deutschland: men fashion clothing, men shoes, men shirts, plain t shirts und men socks. Jetzt entdecken!">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="kevinkanoj - Modetrends | Men Fashion Clothing">
  <meta property="og:description" content="kevinkanoj bietet stilvolle Herrenmode in Deutschland: men fashion clothing, men shoes, men shirts, plain t shirts und men socks. Jetzt entdecken!">
  <meta property="og:type" content="website">
  <title>kevinkanoj - Modetrends | Men Fashion Clothing</title>
  <link rel="canonical" href="https://kevinkanoj-site.com">
  <link rel="icon" type="image/svg+xml" href="{{favicon_file}}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#8B5CF6',
            'primary-dark': '#7C3AED',
          }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    .btn-primary { background-color: #8B5CF6; }
    .btn-primary:hover { background-color: #7C3AED; }
    .text-primary { color: #8B5CF6; }
    .bg-primary { background-color: #8B5CF6; }
    .border-primary { border-color: #8B5CF6; }
    .ring-primary { --tw-ring-color: #8B5CF6; }

    /* Nav underline animation */
    .nav-link {
      position: relative;
      padding-bottom: 2px;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0;
      width: 0; height: 2px;
      background-color: #8B5CF6;
      transition: width 0.25s ease;
    }
    .nav-link:hover::after { width: 100%; }

    /* Browser mockup */
    .browser-frame {
      background: #f1f5f9;
      border-radius: 12px;
      box-shadow: 0 25px 60px -12px rgba(0,0,0,0.18), 0 4px 6px -2px rgba(0,0,0,0.06);
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .browser-bar {
      background: #e2e8f0;
      padding: 10px 14px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .browser-dot {
      width: 10px; height: 10px;
      border-radius: 50%;
    }
    .browser-url {
      flex: 1;
      background: white;
      border-radius: 4px;
      height: 22px;
      margin-left: 10px;
    }

    /* FAQ chevron animation */
    .faq-chevron { transition: transform 0.3s ease; }
    .faq-chevron.open { transform: rotate(180deg); }
    .faq-body { display: none; }
    .faq-body.open { display: block; }

    /* Benefits alternating */
    .benefit-row:nth-child(even) { background-color: #f8fafc; }

    {{template_custom_css}}
  </style>
</head>
<body class="font-sans text-gray-800 antialiased bg-white">

<!-- Cookie Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t-2 border-primary p-4 shadow-2xl" style="display:none;">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-sm text-gray-600">
      Wir verwenden Cookies, um Ihnen die bestmögliche Erfahrung auf unserer Website zu bieten. Durch die weitere Nutzung stimmen Sie unserer Cookie-Richtlinie zu. <a href="privacy-policy.html" class="text-primary font-semibold hover:underline">Cookie-Richtlinie</a>.
    </p>
    <div class="flex gap-3 shrink-0">
      <button onclick="acceptCookies('necessary')" class="px-4 py-2 text-sm border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition">Nur notwendige</button>
      <button onclick="acceptCookies('all')" class="px-4 py-2 text-sm rounded-lg text-white font-semibold transition btn-primary">Alle akzeptieren</button>
    </div>
  </div>
</div>

<!-- Header -->
<header id="main-header" class="sticky top-0 z-40 bg-white border-b border-gray-100 shadow-sm">
  <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
    <!-- Logo with tech icon -->
    <a href="/" class="flex items-center gap-2">
      <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
      </div>
      <span class="text-xl font-bold text-gray-900">kevinkanoj</span>
    </a>
    <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-gray-600">
      <a href="#about" class="nav-link hover:text-gray-900 transition">Über uns</a>
      <a href="#services" class="nav-link hover:text-gray-900 transition">Kollektionen</a>
      <a href="#testimonials" class="nav-link hover:text-gray-900 transition">Bewertungen</a>
      <a href="#faq" class="nav-link hover:text-gray-900 transition">FAQ</a>
      <a href="contact.html" class="nav-link hover:text-gray-900 transition">Kontakt</a>
    </nav>
    <a href="#cta" class="hidden md:inline-flex items-center gap-2 px-5 py-2 text-sm font-semibold border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">
      Kollektion entdecken
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <button id="menu-btn" class="md:hidden p-2 rounded-lg text-gray-600 hover:text-primary hover:bg-gray-50" onclick="toggleMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-3 text-sm font-medium text-gray-600">
    <a href="#about" class="block py-2 hover:text-primary" onclick="toggleMenu()">Über uns</a>
    <a href="#services" class="block py-2 hover:text-primary" onclick="toggleMenu()">Kollektionen</a>
    <a href="#testimonials" class="block py-2 hover:text-primary" onclick="toggleMenu()">Bewertungen</a>
    <a href="#faq" class="block py-2 hover:text-primary" onclick="toggleMenu()">FAQ</a>
    <a href="contact.html" class="block py-2 hover:text-primary" onclick="toggleMenu()">Kontakt</a>
    <a href="#cta" class="block mt-2 px-4 py-2 text-white rounded-lg text-center btn-primary font-semibold" onclick="toggleMenu()">Kollektion entdecken</a>
  </div>
</header>

<!-- Hero — split layout -->
<section class="bg-gradient-to-br from-slate-50 via-white to-blue-50 py-20 md:py-28 overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-14">
    <!-- Left: text + checklist -->
    <div class="flex-1 max-w-xl">
      <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full text-white mb-5 bg-primary">Herrenmode 2025</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-5">Stilvolle Men Fashion Clothing für moderne Männer</h1>
      <p class="text-lg text-gray-500 mb-8 leading-relaxed">Entdecken Sie Premium-Herrenmode bei kevinkanoj – von eleganten Shirts bis hin zu bequemen Socken und stylischen Schuhen.</p>
      <!-- Feature checklist -->
      <ul class="space-y-3 mb-10">
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Premium-Qualität
        </li>
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Faire Preise
        </li>
        <li class="flex items-center gap-3 text-gray-700 font-medium">
          <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
          </span>
          Schnelle Lieferung
        </li>
      </ul>
      <a href="#cta" class="inline-flex items-center gap-3 px-8 py-4 text-white font-bold rounded-xl shadow-lg btn-primary transition text-lg">
        Kollektion entdecken
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="#about" class="inline-flex items-center gap-2 ml-4 text-sm text-gray-500 hover:text-gray-700 transition font-medium">Mehr erfahren</a>
    </div>
    <!-- Right: browser frame mockup -->
    <div class="flex-1 w-full max-w-lg">
      <div class="browser-frame">
        <div class="browser-bar">
          <div class="browser-dot bg-red-400"></div>
          <div class="browser-dot bg-yellow-400"></div>
          <div class="browser-dot bg-green-400"></div>
          <div class="browser-url"></div>
        </div>
        <img src="images/hero.jpg" alt="Stilvoller Mann in modischer Herrenkleidung von kevinkanoj" width="600" height="400" class="w-full object-cover block" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- About — stats bar + text + image -->
<section id="about" class="py-20 bg-white">
  <!-- Stats bar -->
  <div class="bg-gray-50 border-y border-gray-100 py-10 mb-16">
    <div class="max-w-5xl mx-auto px-4 grid grid-cols-3 gap-8 text-center">
      <div>
        <div class="text-4xl font-extrabold text-primary">10+</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Jahre Erfahrung</div>
      </div>
      <div>
        <div class="text-4xl font-extrabold text-primary">5000+</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Zufriedene Kunden</div>
      </div>
      <div>
        <div class="text-4xl font-extrabold text-primary">98%</div>
        <div class="text-sm text-gray-500 mt-1 font-medium">Kundenzufriedenheit</div>
      </div>
    </div>
  </div>
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row gap-12 items-center">
    <div class="flex-1">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Über kevinkanoj</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6 leading-tight">Mode, die Männer inspiriert</h2>
      <p class="text-gray-500 leading-relaxed mb-4">kevinkanoj steht für zeitgemäße Herrenmode, die Stil und Komfort vereint. Seit über einem Jahrzehnt begeistern wir Männer in ganz Deutschland mit hochwertiger Kleidung. Unser Sortiment umfasst alles, was der moderne Mann braucht – von klassischen Hemden bis hin zu modischen Freizeitoutfits. Wir legen großen Wert auf Qualität und Nachhaltigkeit in jedem unserer Produkte.</p>
      <p class="text-gray-500 leading-relaxed mb-4">Unsere Leidenschaft für Mode treibt uns an, stets die neuesten Trends mit zeitlosen Klassikern zu verbinden. Bei kevinkanoj finden Sie plain t shirts in vielen Farben, stilvolle men shirts für jeden Anlass sowie komfortable men socks und modische men shoes. Jedes Stück wird sorgfältig ausgewählt, um höchsten Qualitätsansprüchen zu genügen und Ihren persönlichen Stil zu unterstreichen.</p>
      <p class="text-gray-500 leading-relaxed mb-6">Wir glauben daran, dass gute Mode zugänglich sein sollte. Deshalb bieten wir faire Preise ohne Kompromisse bei der Qualität. Unser engagiertes Team arbeitet täglich daran, Ihnen das beste Einkaufserlebnis zu bieten. Egal ob Sie elegante Businesskleidung oder lässige Freizeitmode suchen – bei kevinkanoj werden Sie fündig und fühlen sich stets bestens gekleidet.</p>
      <a href="about.html" class="inline-flex items-center gap-2 font-semibold text-primary hover:underline">
        Unsere Geschichte entdecken
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
    <div class="flex-1">
      <img src="images/about.jpg" alt="Das Team von kevinkanoj präsentiert aktuelle Herrenmode" width="540" height="400" class="w-full rounded-2xl shadow-xl object-cover" loading="lazy">
    </div>
  </div>
</section>

<!-- Services — icon grid with hover lift -->
<section id="services" class="py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Kollektionen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Komplette Herrenmode aus einer Hand</h2>
      <p class="text-gray-500 mt-3 max-w-xl mx-auto">Von stylischen Schuhen bis zu bequemen Socken – entdecken Sie unser umfangreiches Sortiment an hochwertiger Herrenmode.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-primary">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Men Fashion Clothing</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Unsere Herrenmode-Kollektion umfasst die neuesten Trends und zeitlose Klassiker. Hochwertige Materialien und durchdachte Designs machen jeden Look zum Statement. Für den modernen Mann, der Stil lebt.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-blue-100">
          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Men Shoes</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Von eleganten Lederschuhen bis hin zu sportlichen Sneakern – unsere Schuhkollektion für Herren vereint Stil und Komfort. Hochwertige Verarbeitung für jeden Anlass und Lebensstil.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-purple-100">
          <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Men Shirts</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Unsere Herrenhemden überzeugen durch erstklassige Qualität und stilvolles Design. Ob Business, Freizeit oder besondere Anlässe – wir haben das perfekte Hemd für jeden Moment in Ihrem Leben.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-green-100">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Plain T-Shirts</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Schlichte, hochwertige T-Shirts in zahlreichen Farben – ein Must-have in jedem Kleiderschrank. Weiche Materialien, perfekte Passform und langlebige Qualität machen unsere plain t shirts zum Lieblingsstück.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-orange-100">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Men Socks</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Komfort beginnt von unten. Unsere Herrensocken verbinden angenehmes Tragegefühl mit modischem Design. Von klassischen Business-Socken bis zu bunten Freizeitsocken – für jeden Stil das Richtige.</p>
      </div>
      <div class="bg-white rounded-2xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 bg-pink-100">
          <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Accessoires & Styling</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Vervollständigen Sie Ihren Look mit unserer hochwertigen Accessoires-Kollektion. Gürtel, Krawatten und mehr – perfekte Ergänzungen für jeden Outfit-Stil, die Ihren persönlichen Charakter unterstreichen.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits — feature list with large checkmarks, alternating rows -->
<section class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Vorteile</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Warum kevinkanoj die richtige Wahl ist</h2>
    </div>
    <div class="rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-white">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Premium-Qualität</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Jedes Kleidungsstück wird aus hochwertigen Materialien gefertigt, die langlebig, komfortabel und stilvoll sind.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-slate-50">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Faire Preise</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Wir bieten erstklassige Herrenmode zu fairen Preisen, ohne Kompromisse bei Qualität oder Design einzugehen.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-white">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Schnelle Lieferung</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Bestellen Sie bequem online und erhalten Sie Ihre Lieblingsmode schnell und sicher direkt an Ihre Haustür.</p>
        </div>
      </div>
      <div class="benefit-row flex flex-col sm:flex-row items-start sm:items-center gap-5 px-8 py-7 bg-slate-50">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-gray-900 text-lg">Nachhaltigkeit</h3>
          <p class="text-gray-500 text-sm mt-1 leading-relaxed">Wir setzen auf umweltbewusste Produktion und nachhaltige Materialien für eine bessere Zukunft der Modeindustrie.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials — avatar + stars + quote card, middle card accented -->
<section id="testimonials" class="py-20 bg-slate-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Kundenstimmen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Was unsere Kunden sagen</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">"kevinkanoj hat meine Vorstellung von Herrenmode komplett verändert. Die plain t shirts sind unglaublich weich und die Passform ist perfekt. Ich habe inzwischen fast jede Farbe bestellt und bin jedes Mal aufs Neue begeistert. Der Kundenservice ist ebenfalls top – schnelle Antworten und freundliche Beratung. Absolute Empfehlung!"</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar1.jpg" alt="Markus Hoffmann" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Markus Hoffmann</div>
            <div class="text-xs text-gray-400">Marketingmanager, Berlin</div>
          </div>
        </div>
      </div>
      <!-- Card 2 — primary accent, active -->
      <div class="bg-primary rounded-2xl p-7 shadow-xl scale-105">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-white text-sm leading-relaxed mb-6">"Die men shoes von kevinkanoj sind genau das, was ich gesucht habe. Stilvoll, komfortabel und perfekt verarbeitet. Ich trage sie sowohl im Büro als auch in der Freizeit und bekomme ständig Komplimente. Die Lieferung war schneller als erwartet und die Verpackung sehr hochwertig. Ich bin ein treuer Kunde geworden!"</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar2.jpg" alt="Stefan Bauer" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-white/30" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-white">Stefan Bauer</div>
            <div class="text-xs text-white/60">Ingenieur, München</div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
        <div class="flex gap-1 mb-3">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-6">"Endlich eine Modemarke, die Qualität und Stil wirklich vereint. Die men shirts sind aus erstklassigen Materialien und sehen nach vielen Wäschen noch genauso gut aus wie am ersten Tag. Auch die Auswahl an men socks ist überraschend groß und stylisch. kevinkanoj ist meine erste Adresse für Herrenmode geworden."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar3.jpg" alt="Thomas Schreiber" width="44" height="44" class="w-11 h-11 rounded-full object-cover ring-2 ring-gray-100" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Thomas Schreiber</div>
            <div class="text-xs text-gray-400">Unternehmensberater, Hamburg</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ — clean accordion with animated chevron -->
<section id="faq" class="py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Häufige Fragen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Alles, was Sie wissen möchten</h2>
    </div>
    <div class="space-y-3">
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Welche Größen sind bei kevinkanoj erhältlich?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Bei kevinkanoj bieten wir eine umfangreiche Größenauswahl von XS bis 3XL an. Unser detaillierter Größenguide hilft Ihnen dabei, die perfekte Größe zu finden. Falls Sie unsicher sind, empfehlen wir, in der nächsten Größe zu bestellen – wir bieten kostenlosen Umtausch an.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie lange dauert die Lieferung nach Deutschland?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Standardlieferungen innerhalb Deutschlands dauern in der Regel 2–4 Werktage. Expresszustellung ist gegen Aufpreis innerhalb von 1–2 Werktagen möglich. Alle Bestellungen werden sorgfältig verpackt und mit einem Tracking-Code versehen, damit Sie Ihre Sendung jederzeit verfolgen können.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Kann ich Artikel zurückgeben oder umtauschen?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Ja, wir bieten eine 30-tägige Rückgabepolitik für alle ungetragenen Artikel in Originalverpackung. Der Rückversand ist kostenlos für Kunden in Deutschland. Beim Umtausch entstehen Ihnen ebenfalls keine zusätzlichen Kosten. Kontaktieren Sie einfach unseren Kundenservice, der Ihnen schnell und unkompliziert weiterhilft.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Aus welchen Materialien bestehen Ihre plain t shirts?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Unsere plain t shirts werden hauptsächlich aus 100% Baumwolle gefertigt, die besonders weich und atmungsaktiv ist. Einige Modelle enthalten einen kleinen Elasthananteil für zusätzliche Bewegungsfreiheit und eine perfekte Passform. Alle Materialien sind hautfreundlich, langlebig und maschinenwaschbar bis 40 Grad Celsius.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Bieten Sie auch Großbestellungen oder Firmenkleidung an?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Ja, wir bieten spezielle Konditionen für Großbestellungen und Firmenkleidung an. Unternehmen können von attraktiven Rabatten profitieren und individuelle Anpassungen wie Stickereien oder Bedruckungen anfragen. Kontaktieren Sie uns direkt über unser Kontaktformular, und unser Team erstellt Ihnen ein maßgeschneidertes Angebot.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie pflege ich meine men shirts richtig?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Unsere men shirts können in der Regel bei 30–40 Grad in der Waschmaschine gewaschen werden. Bitte beachten Sie stets die Pflegehinweise auf dem Etikett. Wir empfehlen, die Hemden auf links zu waschen und bei niedriger Temperatur zu bügeln. So behalten sie ihre Form, Farbe und Qualität über viele Jahre hinweg.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Gibt es ein Treueprogramm für Stammkunden?</span>
          <svg class="faq-chevron w-5 h-5 text-primary shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-body px-6 pb-5 text-gray-500 text-sm leading-relaxed">Ja! Bei kevinkanoj haben wir ein attraktives Treueprogramm eingeführt. Mit jeder Bestellung sammeln Sie Punkte, die Sie gegen Rabatte einlösen können. Stammkunden erhalten außerdem exklusiven Zugang zu neuen Kollektionen, Sonderangeboten und speziellen Events. Melden Sie sich einfach für unseren Newsletter an, um immer auf dem Laufenden zu bleiben.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA — two-column: left headline + bullets, right form -->
<section id="cta" class="py-20 bg-slate-900">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-14 items-start">
      <!-- Left -->
      <div class="flex-1">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 leading-tight">Bereit für Ihren neuen Lieblingslook?</h2>
        <p class="text-slate-400 text-lg mb-8 leading-relaxed">Melden Sie sich an und erhalten Sie exklusive Angebote und Neuigkeiten aus der Welt der Herrenmode.</p>
        <ul class="space-y-4">
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Premium-Qualität — Jedes Kleidungsstück wird aus hochwertigen Materialien gefertigt, die langlebig, komfortabel und stilvoll sind.</span>
          </li>
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Faire Preise — Wir bieten erstklassige Herrenmode zu fairen Preisen, ohne Kompromisse bei Qualität oder Design einzugehen.</span>
          </li>
          <li class="flex items-start gap-3 text-slate-300">
            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>Schnelle Lieferung — Bestellen Sie bequem online und erhalten Sie Ihre Lieblingsmode schnell und sicher direkt an Ihre Haustür.</span>
          </li>
        </ul>
      </div>
      <!-- Right: form -->
      <div class="flex-1 w-full max-w-md bg-white rounded-2xl p-8 shadow-2xl">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Jetzt anmelden</h3>
        <form class="space-y-4" onsubmit="return false;">
          <input type="text" placeholder="Ihr Name" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition" style="--tw-ring-color: #8B5CF6;" required>
          <input type="email" placeholder="Ihre E-Mail-Adresse" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:ring-2 focus:border-transparent transition" required>
          <button type="submit" class="w-full px-6 py-4 text-white font-bold rounded-xl btn-primary transition text-base">Jetzt anmelden</button>
        </form>
        <p class="text-gray-400 text-xs mt-4 text-center">Durch die Anmeldung stimmen Sie unserer <a href="privacy-policy.html" class="underline text-gray-500">Datenschutzerklärung zu</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Disclaimer -->


<!-- Footer -->
<footer id="main-footer" class="bg-white border-t border-gray-100 py-14">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
      <div class="md:col-span-2">
        <div class="flex items-center gap-2 mb-4">
          <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
          </div>
          <span class="text-xl font-bold text-gray-900">kevinkanoj</span>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed max-w-xs mb-5">kevinkanoj – Ihre erste Adresse für stilvolle Herrenmode in Deutschland. Qualität, die überzeugt.</p>
        <div class="text-sm text-gray-500 space-y-1.5">
          <div>Kurfürstendamm 45, 10719 Berlin, Deutschland</div>
          <div>+49 30 12345678</div>
          <div>info@kevinkanoj-site.com</div>
        </div>
      </div>
      <div>
        <div class="text-gray-900 font-semibold text-sm mb-4">Navigation</div>
        <ul class="space-y-2.5 text-sm text-gray-500">
          <li><a href="/" class="hover:text-primary transition">Startseite</a></li>
          <li><a href="about.html" class="hover:text-primary transition">Über uns</a></li>
          <li><a href="contact.html" class="hover:text-primary transition">Kontakt</a></li>
        </ul>
      </div>
      <div>
        <div class="text-gray-900 font-semibold text-sm mb-4">Rechtliches</div>
        <ul class="space-y-2.5 text-sm text-gray-500">
          <li><a href="privacy-policy.html" class="hover:text-primary transition">Datenschutz</a></li>
          <li><a href="terms.html" class="hover:text-primary transition">AGB</a></li>
        </ul>
      </div>
    </div>
    <div class="border-t border-gray-100 pt-6 flex flex-col md:flex-row items-center justify-between gap-2 text-xs text-gray-400">
      <span>© 2025 kevinkanoj. Alle Rechte vorbehalten.</span>
      <span>Made with care by kevinkanoj</span>
    </div>
  </div>
</footer>

<script>
  // Cookie banner
  function acceptCookies(type) {
    localStorage.setItem('cookies_accepted', type);
    document.getElementById('cookie-banner').style.display = 'none';
  }
  window.addEventListener('DOMContentLoaded', function() {
    if (!localStorage.getItem('cookies_accepted')) {
      document.getElementById('cookie-banner').style.display = 'block';
    }
  });

  // Mobile menu
  function toggleMenu() {
    var m = document.getElementById('mobile-menu');
    m.classList.toggle('hidden');
  }

  // FAQ accordion with animated chevron
  function toggleFaq(btn) {
    var body = btn.nextElementSibling;
    var chevron = btn.querySelector('.faq-chevron');
    // Close others
    document.querySelectorAll('.faq-body.open').forEach(function(el) {
      if (el !== body) {
        el.classList.remove('open');
        el.previousElementSibling.querySelector('.faq-chevron').classList.remove('open');
      }
    });
    body.classList.toggle('open');
    chevron.classList.toggle('open');
  }
</script>
</body>
</html>
