<?php

ob_start();

function getFormValue(array $post, array $possibleNames): string {
    foreach ($possibleNames as $name) {
        if (isset($post[$name])) {
            return trim($post[$name]);
        }
    }
    return '';
}

// Возможные имена полей
$serviceNames = ['service-name', 'service', 'nameService', 'title_service', 'service_name', 'selected-service'];
$tariffNames = ['selected-tariff', 'tariff', 'selected_tariff', 'my-tariff', 'tariff-name'];
$hotelNames = ['name_hotel', 'hotel-title', 'title_hotel', 'selected-hotel'];

// Извлечение значений
$selectedService = getFormValue($_POST, $serviceNames);
$selectedTariff = getFormValue($_POST, $tariffNames);
$selectedHotel = getFormValue($_POST, $hotelNames);

$data = implode("\n", $_POST);
$domain = $_SERVER["HTTP_HOST"];
$to = "lead@" . $domain;
$subject = "Lead";
$message = $data;
$headers = "From: sender@" . $domain;

if (mail($to, $subject, $message, $headers)) {
    // echo "The message has been sent successfully!";
}

?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Verdaluneform - भारत में प्रीमियम लैंडस्केप डिज़ाइन सेवाएँ। अपने बाहरी स्थानों को हरे-भरे स्वर्ग में बदलें।">
    <meta name="keywords" content="लैंडस्केप डिज़ाइन, गार्डन डिज़ाइन, आउटडोर स्पेस, लैंडस्केपिंग सेवाएँ, भारत, वर्दाल्यूनफॉर्म, उद्यान रखरखाव, पेड़ लगाना, लॉन केयर, प्रीमियम लैंडस्केप">
    <title>Verdaluneform - प्रीमियम लैंडस्केप डिज़ाइन सेवाएँ</title>
    

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts (Poppins) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap">

    <!-- AOS (Animate On Scroll) CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Material Symbols (Icons) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <!-- Custom CSS -->
    
<link rel="stylesheet" href="frontend/base.css">
<link rel="icon" type="image/svg+xml" href="frontend/photos/favicon.svg">
</head>
<body class="font-poppins text-gray-900 bg-white">

    <!-- Header/Navigation -->
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent text-white transition-all duration-300 py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="./" class="text-2xl font-bold text-white transition-colors duration-300 hover:text-green-300" aria-label="Verdaluneform Home">
                <img src="frontend/photos/logo.svg" alt="Verdaluneform Logo" class="h-10 w-auto inline-block mr-2">
                Verdaluneform
            </a>
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="#about" class="hover:text-green-300 transition-colors duration-300">हमारे बारे में</a></li>
                    <li><a href="#services" class="hover:text-green-300 transition-colors duration-300">सेवाएँ</a></li>
                    <li><a href="#projects" class="hover:text-green-300 transition-colors duration-300">परियोजनाएँ</a></li>
                    <li><a href="#gallery" class="hover:text-green-300 transition-colors duration-300">गैलरी</a></li>
                    <li><a href="#team" class="hover:text-green-300 transition-colors duration-300">हमारी टीम</a></li>
                    <li><a href="#faq" class="hover:text-green-300 transition-colors duration-300">अक्सर पूछे जाने वाले प्रश्न</a></li>
                    <li><a href="#contact" class="hover:text-green-300 transition-colors duration-300">संपर्क करें</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="relative h-screen bg-cover bg-center flex items-center justify-center text-white overflow-hidden" style="background-image: url('frontend/photos/media/hero-landscape-design.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-800/60 to-emerald-600/60"></div>
            <div class="relative z-10 text-center px-4">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-green-200">Verdaluneform:</span> अपने सपनों के परिदृश्य को साकार करें
                </h1>
                <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                    हम आपके बाहरी स्थानों को कला के लुभावने कार्यों में बदलने के लिए विशेषज्ञ लैंडस्केप डिज़ाइन सेवाएँ प्रदान करते हैं।
                </p>
                <a href="#contact" class="btn-ghost-cta px-8 py-4 text-lg border-2 border-white text-white rounded-full hover:bg-white hover:text-emerald-700 shadow-lg transition-all duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="600">
                    आज ही परामर्श बुक करें
                </a>
            </div>
        </section>

        <div class="py-20">
            <div class="container mx-auto px-4">
                <div id="thankYouContainer" class="thankYouMessage">
  <p id="thankYouText1" class="thankYouParagraph">धन्यवाद, आपने {{service-name-policy}} में रुचि दिखाई।</p>
  <p id="thankYouText2" class="thankYouParagraph">आपका फॉर्म सफलतापूर्वक सबमिट हो चुका है।</p>
  <p id="thankYouText3" class="thankYouParagraph">हमारा विशेषज्ञ जल्द ही आपसे संपर्क करेगा।</p>
</div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-1">
                <a href="./" class="text-3xl font-bold text-white hover:text-emerald-300 transition-colors duration-300" aria-label="Verdaluneform Home">
                    <img src="frontend/photos/logo.svg" alt="Verdaluneform Logo" class="h-10 w-auto inline-block mr-2">
                    Verdaluneform
                </a>
                <p class="text-gray-400 mt-4">आपके बाहरी स्थानों को कला के लुभावने कार्यों में बदलना।</p>
            </div>
            <div class="col-span-1">
                <h4 class="text-xl font-semibold mb-4 text-emerald-300">त्वरित लिंक</h4>
                <ul class="space-y-2">
                    <li><a href="#about" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">हमारे बारे में</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">सेवाएँ</a></li>
                    <li><a href="#projects" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">परियोजनाएँ</a></li>
                    <li><a href="#gallery" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">गैलरी</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">संपर्क करें</a></li>
                </ul>
            </div>
            <div class="col-span-1">
                <h4 class="text-xl font-semibold mb-4 text-emerald-300">कानूनी</h4>
                <ul class="space-y-2">
                    <li><a href="privacy-policy.php" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">गोपनीयता नीति</a></li>
                    <li><a href="terms.php" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">नियम और शर्तें</a></li>
                    <li><a href="liability-disclaimer.php" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">अस्वीकरण</a></li>
                    <li><a href="cookie-preferences.php" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">कुकी नीति</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-500">
            <p>&copy; 2025 Verdaluneform. सर्वाधिकार सुरक्षित।</p>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="fixed bottom-4 right-4 bg-gray-900 text-white p-6 rounded-lg shadow-lg max-w-sm z-50 transition-transform duration-300 transform translate-x-full opacity-0">
        <h3 class="font-bold text-xl mb-3 text-emerald-300">कुकी सहमति</h3>
        <p class="text-gray-300 mb-4 text-sm">हम आपकी ब्राउज़िंग को बेहतर बनाने के लिए कुकीज़ का उपयोग करते हैं। अधिक जानने के लिए हमारी <a href="cookie-preferences.php" class="text-emerald-400 hover:underline">कुकी नीति</a> पढ़ें।</p>
        <div class="flex justify-end space-x-3">
            <button id="cookie-configure" class="px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-gray-600 transition-colors duration-200 text-sm">अनुकूलित करें</button>
            <button id="cookie-accept-all" class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition-colors duration-200 text-sm">सभी स्वीकार करें</button>
        </div>
    </div>

    <!-- Cookie Consent Modal -->
    <div id="cookie-modal" class="fixed inset-0 bg-black/70 flex items-center justify-center z-[60] hidden opacity-0 transition-opacity duration-300">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full text-gray-900 transform scale-95 opacity-0 transition-all duration-300">
            <h3 class="font-bold text-2xl mb-4 text-emerald-800">अपनी कुकी प्राथमिकताएँ प्रबंधित करें</h3>
            <p class="text-gray-700 mb-6">आप नीचे प्रत्येक कुकी श्रेणी के लिए अपनी प्राथमिकताएँ सेट कर सकते हैं।</p>

            <div class="mb-4">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="cookie-required" class="form-checkbox h-5 w-5 text-emerald-600 rounded" checked disabled>
                    <span class="ml-3 text-lg font-medium text-gray-800">आवश्यक कुकीज़</span>
                </label>
                <p class="text-gray-600 text-sm ml-8">ये वेबसाइट के उचित कार्यप्रणाली के लिए आवश्यक हैं और इन्हें बंद नहीं किया जा सकता है।</p>
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="cookie-analytics" class="form-checkbox h-5 w-5 text-emerald-600 rounded">
                    <span class="ml-3 text-lg font-medium text-gray-800">विश्लेषणात्मक कुकीज़</span>
                </label>
                <p class="text-gray-600 text-sm ml-8">ये हमें यह समझने में मदद करते हैं कि आगंतुक वेबसाइट के साथ कैसे इंटरैक्ट करते हैं, जिससे हम अपनी सेवाओं को बेहतर बना सकें।</p>
            </div>

            <div class="mb-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="cookie-advertising" class="form-checkbox h-5 w-5 text-emerald-600 rounded">
                    <span class="ml-3 text-lg font-medium text-gray-800">विज्ञापन कुकीज़</span>
                </label>
                <p class="text-gray-600 text-sm ml-8">ये आपकी रुचियों के लिए प्रासंगिक विज्ञापन दिखाने के लिए उपयोग किए जाते हैं।</p>
            </div>

            <div class="flex justify-end space-x-3">
                <button id="cookie-modal-save" class="px-6 py-3 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 transition-colors duration-200 font-semibold">पसंद सहेजें</button>
            </div>
        </div>
    </div>

    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>

    <!-- Swiper.js JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JavaScript -->
    </script>
<script src="frontend/site.js"></script>
</body>
</html>
<?php
$page = ob_get_clean();

$page = str_replace('{{service-name-policy}}', htmlspecialchars($selectedService), $page);
$page = str_replace('{{tariff-name-policy}}', htmlspecialchars($selectedTariff), $page);
$page = str_replace('{{hotel-name-policy}}', htmlspecialchars($selectedHotel), $page);

echo $page;
?>