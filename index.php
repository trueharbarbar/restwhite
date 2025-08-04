<?php
// Query params are: external_id={clickId}&ad_campaign_id={campaignId}&source={networkSource}&sub1={sn_sub1}&sub2={sn_sub2}&sub3={sn_sub3}&sub4={sn_sub4}&sub5={sn_sub5}&sub6={sn_sub6}&campaign_name={campaignName}&app_num={appNum}&app_bundle={appBundle}&adset_id={adsetId}&adset_name={adsetName}&ad_id={adId}&ad_name={adName}&network_channel={networkChannel}&is_organic={isOrganic}&gaid={gaid}&isBackUrl={isBackUrl}&fbp={fbp}&ttp={ttp}&bgp={bgp}&os_name={osName}&os_ver={osVer}&language={language}&country={country}

// Получаем токен из URL (?token=...) или используем дефолтный
$token = isset($_GET['token']) && !empty($_GET['token']) 
    ? $_GET['token'] 
    : 'vtWtsDMb6H6xBC1w';

require_once dirname(__FILE__) . '/kclient.php';

$client = new KClient('https://trackerlab.org/', $token);

$client->sendAllParams();        // to send all params from page query
$client->forceRedirectOffer();   // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();           // request to api, show the output and continue
$client->param('sub_id_9', $_SERVER['HTTP_HOST']);
$client->executeAndBreak();      // to stop page execution if there is redirect or some output
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

        <!-- About Section -->
        <section id="about" class="py-20 bg-white text-gray-900">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-emerald-800" data-aos="fade-up">हमारे बारे में: चेहरे और आवाजें</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    मिलिए उन लोगों से जो वर्दाल्यूनफॉर्म को बनाते हैं – एक टीम जो सुंदरता और स्थिरता के प्रति जुनूनी है।
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                        <img src="frontend/photos/anjali-sharma.jpg" alt="अंजलि शर्मा" class="w-32 h-32 rounded-full object-cover mb-4 border-4 border-emerald-600">
                        <h3 class="text-2xl font-semibold text-emerald-700">अंजलि शर्मा</h3>
                        <p class="text-md text-gray-600 mb-4">संस्थापक और लीड डिज़ाइनर</p>
                        <p class="italic text-gray-700">"हमारा मिशन हर जगह प्रकृति का एक टुकड़ा लाना है, जिससे ऐसे स्थान बनें जो आत्मा को शांत करें और पर्यावरण को समृद्ध करें।"</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                        <img src="frontend/photos/rajesh-kumar.jpg" alt="राजेश कुमार" class="w-32 h-32 rounded-full object-cover mb-4 border-4 border-emerald-600">
                        <h3 class="text-2xl font-semibold text-emerald-700">राजेश कुमार</h3>
                        <p class="text-md text-gray-600 mb-4">परियोजना प्रबंधक</p>
                        <p class="italic text-gray-700">"हमारा मानना है कि एक अच्छी तरह से डिज़ाइन किया गया परिदृश्य सिर्फ एक दृश्य नहीं है, यह एक अनुभव है जो जीवन की गुणवत्ता को बढ़ाता है।"</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                        <img src="frontend/photos/priya-singh.jpg" alt="प्रिया सिंह" class="w-32 h-32 rounded-full object-cover mb-4 border-4 border-emerald-600">
                        <h3 class="text-2xl font-semibold text-emerald-700">प्रिया सिंह</h3>
                        <p class="text-md text-gray-600 mb-4">बागवानी विशेषज्ञ</p>
                        <p class="italic text-gray-700">"प्रत्येक पौधे की अपनी कहानी होती है, और हम उन्हें एक सामंजस्यपूर्ण कहानी बनाने के लिए एक साथ लाने में मदद करते हैं जो विकसित होती रहती है।"</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-emerald-50 text-gray-900">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-emerald-800" data-aos="fade-up">हमारी सेवाएँ</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    हम आपके बाहरी स्थानों को बढ़ाने के लिए व्यापक लैंडस्केप डिज़ाइन और रखरखाव सेवाएँ प्रदान करते हैं।
                </p>
                <div class="flex space-x-4 justify-center mb-10" data-aos="fade-up" data-aos-delay="200">
                    <button class="tab-button px-6 py-3 rounded-full cursor-pointer transition-colors duration-300 bg-emerald-700 text-white shadow-lg" data-tab="design">लैंडस्केप डिज़ाइन</button>
                    <button class="tab-button px-6 py-3 rounded-full cursor-pointer transition-colors duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="installation">स्थापना और निर्माण</button>
                    <button class="tab-button px-6 py-3 rounded-full cursor-pointer transition-colors duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="maintenance">रखरखाव</button>
                </div>

                <div id="tab-content" class="p-8 bg-white rounded-lg shadow-xl">
                    <div id="tab-design" class="tab-panel active" data-aos="fade-in">
                        <div class="md:flex items-center gap-8">
                            <div class="md:w-1/2 mb-6 md:mb-0">
                                <img src="frontend/photos/media/custom-landscape-design.jpg" alt="लैंडस्केप डिज़ाइन" class="w-full h-72 object-cover rounded-lg shadow-md">
                            </div>
                            <div class="md:w-1/2">
                                <h3 class="text-3xl font-semibold text-emerald-700 mb-4">कस्टम लैंडस्केप डिज़ाइन</h3>
                                <p class="text-gray-700 mb-4">हमारी डिज़ाइन सेवाएँ आपकी व्यक्तिगत शैली और आपके स्थान की अनूठी विशेषताओं के अनुरूप हैं। हम आपके दृष्टिकोण को जीवन में लाने के लिए सावधानीपूर्वक योजना बनाते हैं।</p>
                                <ul class="list-disc list-inside text-gray-700 space-y-2">
                                    <li>साइट विश्लेषण और योजना</li>
                                    <li>3डी विज़ुअलाइज़ेशन और कॉन्सेप्ट डिज़ाइन</li>
                                    <li>पौधे का चयन और प्लेसमेंट</li>
                                    <li>पानी की सुविधा और प्रकाश व्यवस्था का डिज़ाइन</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="tab-installation" class="tab-panel hidden" data-aos="fade-in">
                        <div class="md:flex items-center gap-8 flex-row-reverse">
                            <div class="md:w-1/2 mb-6 md:mb-0">
                                <img src="frontend/photos/media/landscape-installation.jpg" alt="स्थापना और निर्माण" class="w-full h-72 object-cover rounded-lg shadow-md">
                            </div>
                            <div class="md:w-1/2">
                                <h3 class="text-3xl font-semibold text-emerald-700 mb-4">पेशेवर स्थापना और निर्माण</h3>
                                <p class="text-gray-700 mb-4">हमारी अनुभवी टीम डिज़ाइन योजनाओं को वास्तविकता में बदलने के लिए उच्च गुणवत्ता वाली स्थापना और निर्माण सेवाएँ प्रदान करती है।</p>
                                <ul class="list-disc list-inside text-gray-700 space-y-2">
                                    <li>कठोर लैंडस्केप (पैथवे, आँगन, दीवारें)</li>
                                    <li>सॉफ्ट लैंडस्केप (पौधे लगाना, टर्फिंग)</li>
                                    <li>सिंचाई प्रणाली की स्थापना</li>
                                    <li>आउटडोर प्रकाश व्यवस्था का एकीकरण</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="tab-maintenance" class="tab-panel hidden" data-aos="fade-in">
                        <div class="md:flex items-center gap-8">
                            <div class="md:w-1/2 mb-6 md:mb-0">
                                <img src="frontend/photos/media/garden-maintenance.jpg" alt="रखरखाव" class="w-full h-72 object-cover rounded-lg shadow-md">
                            </div>
                            <div class="md:w-1/2">
                                <h3 class="text-3xl font-semibold text-emerald-700 mb-4">नियमित लैंडस्केप रखरखाव</h3>
                                <p class="text-gray-700 mb-4">अपने परिदृश्य की सुंदरता को बनाए रखने के लिए, हम इसे पूरे साल शानदार दिखने के लिए व्यापक रखरखाव सेवाएँ प्रदान करते हैं।</p>
                                <ul class="list-disc list-inside text-gray-700 space-y-2">
                                    <li>नियमित छंटाई और कटाई</li>
                                    <li>खरपतवार नियंत्रण और उर्वरक</li>
                                    <li>सिंचाई प्रणाली की जाँच</li>
                                    <li>मौसमी सफाई और तैयारी</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industries Section (Projects/Styles) -->
        <section id="projects" class="py-20 bg-gray-900 text-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-white" data-aos="fade-up">हमारे प्रोजेक्ट्स और डिज़ाइन स्टाइल्स</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto text-gray-300" data-aos="fade-up" data-aos-delay="100">
                    हमारे विविध पोर्टफोलियो का अन्वेषण करें जो विभिन्न परिदृश्य शैलियों और सफल परियोजनाओं को प्रदर्शित करता है।
                </p>
                <div class="swiper-container relative w-full h-[500px] rounded-lg shadow-xl overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide relative bg-cover bg-center" style="background-image: url('frontend/photos/media/modern-urban-oasis.jpg');">
                            <div class="absolute inset-0 bg-black/60 flex flex-col justify-center items-center text-center p-8">
                                <h3 class="text-4xl font-bold mb-4 text-emerald-300" data-aos="fade-up" data-aos-delay="100">आधुनिक शहरी नखलिस्तान</h3>
                                <p class="text-lg max-w-2xl mb-6 text-gray-200" data-aos="fade-up" data-aos-delay="200">एक कॉम्पैक्ट शहरी स्थान को न्यूनतम डिज़ाइन और हरे-भरे पौधों के साथ एक शांतिपूर्ण विश्राम स्थल में बदलना।</p>
                                <a href="#contact" class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-full transition-colors duration-300 shadow-lg" data-aos="fade-up" data-aos-delay="300">अधिक जानें</a>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide relative bg-cover bg-center" style="background-image: url('frontend/photos/media/traditional-indian-garden.jpg');">
                            <div class="absolute inset-0 bg-black/60 flex flex-col justify-center items-center text-center p-8">
                                <h3 class="text-4xl font-bold mb-4 text-emerald-300" data-aos="fade-up" data-aos-delay="100">पारंपरिक भारतीय उद्यान</h3>
                                <p class="text-lg max-w-2xl mb-6 text-gray-200" data-aos="fade-up" data-aos-delay="200">स्थानीय वनस्पतियों और सांस्कृतिक तत्वों का उपयोग करके एक क्लासिक भारतीय उद्यान का निर्माण।</p>
                                <a href="#contact" class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-full transition-colors duration-300 shadow-lg" data-aos="fade-up" data-aos-delay="300">अधिक जानें</a>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide relative bg-cover bg-center" style="background-image: url('frontend/photos/media/peaceful-courtyard-water-feature.jpg');">
                            <div class="absolute inset-0 bg-black/60 flex flex-col justify-center items-center text-center p-8">
                                <h3 class="text-4xl font-bold mb-4 text-emerald-300" data-aos="fade-up" data-aos-delay="100">पानी की विशेषता वाला शांतिपूर्ण आंगन</h3>
                                <p class="text-lg max-w-2xl mb-6 text-gray-200" data-aos="fade-up" data-aos-delay="200">एक शांत पानी की सुविधा और आरामदायक बैठने की जगह के साथ एक शांत आंगन का डिज़ाइन।</p>
                                <a href="#contact" class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-3 rounded-full transition-colors duration-300 shadow-lg" data-aos="fade-up" data-aos-delay="300">अधिक जानें</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next text-white"></div>
                    <div class="swiper-button-prev text-white"></div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="py-20 bg-emerald-50 text-gray-900">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-emerald-800" data-aos="fade-up">हमारी गैलरी</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    हमारे कुछ सबसे प्रेरणादायक लैंडस्केप परियोजनाओं की विशेषता वाली हमारी क्यूरेटेड गैलरी का अन्वेषण करें।
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="frontend/photos/media/gallery-project-1.jpg" alt="गैलरी छवि 1" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="0">
                    <img src="frontend/photos/media/gallery-project-2.jpg" alt="गैलरी छवि 2" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="1">
                    <img src="frontend/photos/media/gallery-project-3.jpg" alt="गैलरी छवि 3" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="2">
                    <img src="frontend/photos/media/gallery-project-4.jpg" alt="गैलरी छवि 4" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="3">
                    <img src="frontend/photos/media/gallery-project-5.jpg" alt="गैलरी छवि 5" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="4">
                    <img src="frontend/photos/media/gallery-project-6.jpg" alt="गैलरी छवि 6" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="5">
                    <img src="frontend/photos/media/gallery-project-7.jpg" alt="गैलरी छवि 7" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="6">
                    <img src="frontend/photos/media/gallery-project-8.jpg" alt="गैलरी छवि 8" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="7">
                    <img src="frontend/photos/media/gallery-project-9.jpg" alt="गैलरी छवि 9" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="8">
                    <img src="frontend/photos/media/gallery-project-10.jpg" alt="गैलरी छवि 10" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="9">
                    <img src="frontend/photos/media/gallery-project-11.jpg" alt="गैलरी छवि 11" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="10">
                    <img src="frontend/photos/media/gallery-project-12.jpg" alt="गैलरी छवि 12" class="w-full h-48 object-cover rounded-lg shadow-md cursor-pointer hover:scale-105 transition-transform duration-300" data-index="11">
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="fixed inset-0 bg-black/90 flex items-center justify-center z-50 hidden opacity-0 transition-opacity duration-300">
            <button id="lightbox-close" class="absolute top-4 right-4 text-white text-4xl cursor-pointer material-symbols-outlined">close</button>
            <button id="lightbox-prev" class="absolute left-4 text-white text-5xl cursor-pointer material-symbols-outlined">arrow_back_ios</button>
            <img id="lightbox-img" src="" alt="Lightbox Image" class="max-w-[90%] max-h-[90vh] object-contain rounded-lg shadow-xl opacity-0 transition-opacity duration-300">
            <button id="lightbox-next" class="absolute right-4 text-white text-5xl cursor-pointer material-symbols-outlined">arrow_forward_ios</button>
        </div>

        <!-- Team Section -->
        <section id="team" class="py-20 bg-white text-gray-900">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-emerald-800" data-aos="fade-up">हमारी विशेषज्ञ टीम</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    मिलिए हमारे समर्पित पेशेवरों से जो आपके लैंडस्केप सपनों को वास्तविकता में बदलने के लिए काम करते हैं।
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="relative overflow-hidden group rounded-lg shadow-md bg-gray-50" data-aos="fade-up" data-aos-delay="200">
                        <img src="frontend/photos/aditya-verma.jpg" alt="आदित्य वर्मा" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-emerald-700">आदित्य वर्मा</h3>
                            <p class="text-gray-600">सीनियर लैंडस्केप आर्किटेक्ट</p>
                        </div>
                        <div class="absolute inset-0 bg-emerald-700/80 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-center">
                            <p class="text-lg font-medium">मज़ेदार तथ्य: आदित्य को अपने खाली समय में दुर्लभ पौधों की प्रजातियों की तलाश करना पसंद है!</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden group rounded-lg shadow-md bg-gray-50" data-aos="fade-up" data-aos-delay="300">
                        <img src="frontend/photos/sara-khan.jpg" alt="सारा खान" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-emerald-700">सारा खान</h3>
                            <p class="text-gray-600">लैंडस्केप डिजाइनर</p>
                        </div>
                        <div class="absolute inset-0 bg-emerald-700/80 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-center">
                            <p class="text-lg font-medium">मज़ेदार तथ्य: सारा एक पुरस्कार विजेता फूलों की व्यवस्था करने वाली भी हैं!</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden group rounded-lg shadow-md bg-gray-50" data-aos="fade-up" data-aos-delay="400">
                        <img src="frontend/photos/rohit-das.jpg" alt="रोहित दास" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-emerald-700">रोहित दास</h3>
                            <p class="text-gray-600">बागवानी पर्यवेक्षक</p>
                        </div>
                        <div class="absolute inset-0 bg-emerald-700/80 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-center">
                            <p class="text-lg font-medium">मज़ेदार तथ्य: रोहित को अपनी सब्जियों का बगीचा उगाना और नए व्यंजनों के साथ प्रयोग करना पसंद है।</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden group rounded-lg shadow-md bg-gray-50" data-aos="fade-up" data-aos-delay="500">
                        <img src="frontend/photos/pooja-gupta.jpg" alt="पूजा गुप्ता" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-emerald-700">पूजा गुप्ता</h3>
                            <p class="text-gray-600">ग्राहक संबंध</p>
                        </div>
                        <div class="absolute inset-0 bg-emerald-700/80 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-4 text-center">
                            <p class="text-lg font-medium">मज़ेदार तथ्य: पूजा एक शौकीन चावला ट्रेकर हैं और उन्हें भारतीय हिमालय में घूमना पसंद है।</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-20 bg-emerald-50 text-gray-900">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-emerald-800" data-aos="fade-up">अक्सर पूछे जाने वाले प्रश्न</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    हमारे ग्राहकों के कुछ सबसे सामान्य प्रश्नों के उत्तर प्राप्त करें।
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                        <details class="faq-item bg-white p-6 rounded-lg shadow-md transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-lg text-emerald-700 hover:text-emerald-800 transition-colors duration-200 flex justify-between items-center">
                                लैंडस्केप डिज़ाइन प्रक्रिया में कितना समय लगता है?
                                <span class="material-symbols-outlined text-gray-500 details-icon">expand_more</span>
                            </summary>
                            <div class="mt-4 text-gray-700">
                                डिज़ाइन प्रक्रिया की अवधि परियोजना के दायरे और जटिलता पर निर्भर करती है। एक छोटे से आवासीय उद्यान में कुछ सप्ताह लग सकते हैं, जबकि एक बड़े वाणिज्यिक परियोजना में कई महीने लग सकते हैं। हम प्रारंभिक परामर्श के दौरान एक अनुमानित समय-सीमा प्रदान करेंगे।
                            </div>
                        </details>
                        <details class="faq-item bg-white p-6 rounded-lg shadow-md transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-lg text-emerald-700 hover:text-emerald-800 transition-colors duration-200 flex justify-between items-center">
                                आपकी सेवाओं की लागत क्या है?
                                <span class="material-symbols-outlined text-gray-500 details-icon">expand_more</span>
                            </summary>
                            <div class="mt-4 text-gray-700">
                                लागत परियोजना के आकार, आवश्यक सेवाओं के प्रकार और उपयोग की जाने वाली सामग्रियों पर बहुत भिन्न होती है। हम एक अनुकूलित उद्धरण प्रदान करने के लिए एक प्रारंभिक साइट विज़िट और परामर्श प्रदान करते हैं। हमारा लक्ष्य आपके बजट के भीतर उच्च गुणवत्ता वाले समाधान प्रदान करना है।
                            </div>
                        </details>
                        <details class="faq-item bg-white p-6 rounded-lg shadow-md transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-lg text-emerald-700 hover:text-emerald-800 transition-colors duration-200 flex justify-between items-center">
                                क्या आप केवल आवासीय परियोजनाओं पर काम करते हैं?
                                <span class="material-symbols-outlined text-gray-500 details-icon">expand_more</span>
                            </summary>
                            <div class="mt-4 text-gray-700">
                                नहीं, हम आवासीय और वाणिज्यिक दोनों ग्राहकों के लिए लैंडस्केप डिज़ाइन और स्थापना सेवाएँ प्रदान करते हैं। हमारे पोर्टफोलियो में विभिन्न प्रकार की परियोजनाएँ शामिल हैं, छोटे घर के बगीचों से लेकर बड़े कॉर्पोरेट परिसरों तक।
                            </div>
                        </details>
                    </div>
                    <div class="space-y-4" data-aos="fade-up" data-aos-delay="300">
                        <details class="faq-item bg-white p-6 rounded-lg shadow-md transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-lg text-emerald-700 hover:text-emerald-800 transition-colors duration-200 flex justify-between items-center">
                                क्या आप मौजूदा परिदृश्य का रखरखाव भी करते हैं?
                                <span class="material-symbols-outlined text-gray-500 details-icon">expand_more</span>
                            </summary>
                            <div class="mt-4 text-gray-700">
                                हाँ, हम नियमित रखरखाव सेवाएँ प्रदान करते हैं ताकि यह सुनिश्चित किया जा सके कि आपका परिदृश्य पूरे वर्ष शानदार दिखे। इसमें छंटाई, कटाई, खरपतवार नियंत्रण, उर्वरक और सिंचाई प्रणाली की जाँच शामिल है।
                            </div>
                        </details>
                        <details class="faq-item bg-white p-6 rounded-lg shadow-md transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-lg text-emerald-700 hover:text-emerald-800 transition-colors duration-200 flex justify-between items-center">
                                क्या आप पानी की सुविधाओं और प्रकाश व्यवस्था को शामिल करते हैं?
                                <span class="material-symbols-outlined text-gray-500 details-icon">expand_more</span>
                            </summary>
                            <div class="mt-4 text-gray-700">
                                बिल्कुल! पानी की सुविधाएँ (जैसे फव्वारे, तालाब) और बाहरी प्रकाश व्यवस्था किसी भी लैंडस्केप डिज़ाइन में सुंदरता और कार्यक्षमता जोड़ सकती हैं। हम आपके स्थान के लिए सही समाधानों को एकीकृत करने में विशेषज्ञ हैं।
                            </div>
                        </details>
                        <details class="faq-item bg-white p-6 rounded-lg shadow-md transition-all duration-300">
                            <summary class="cursor-pointer font-semibold text-lg text-emerald-700 hover:text-emerald-800 transition-colors duration-200 flex justify-between items-center">
                                क्या आप पौधों के चयन में सहायता करते हैं?
                                <span class="material-symbols-outlined text-gray-500 details-icon">expand_more</span>
                            </summary>
                            <div class="mt-4 text-gray-700">
                                हाँ, हमारी टीम आपके क्षेत्र की जलवायु, मिट्टी के प्रकार और आपके वांछित सौंदर्य के लिए सबसे उपयुक्त पौधों का चयन करने में आपकी सहायता करेगी। हम टिकाऊ और कम रखरखाव वाले विकल्पों को प्राथमिकता देते हैं।
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-gray-900 text-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-6 text-white" data-aos="fade-up">हमसे संपर्क करें</h2>
                <p class="text-xl text-center mb-12 max-w-3xl mx-auto text-gray-300" data-aos="fade-up" data-aos-delay="100">
                    अपने लैंडस्केप प्रोजेक्ट पर चर्चा करने के लिए आज ही हमसे संपर्क करें। हम आपके सपनों को साकार करने के लिए यहां हैं।
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="p-8 bg-emerald-800 rounded-lg shadow-xl" data-aos="fade-right" data-aos-delay="200">
                        <h3 class="text-3xl font-semibold mb-6 text-white">परामर्श का अनुरोध करें</h3>
                        <form action="service-confirmation.php" method="POST" class="space-y-6" id="service-request-form">
                            <input type="hidden" name="selected-service" id="selected-service-input" value="कस्टम लैंडस्केप डिज़ाइन">
                            <div>
                                <label for="name" class="block text-white text-lg font-medium mb-2">आपका नाम <span class="text-red-400">*</span></label>
                                <input type="text" id="name" name="name" placeholder="उदाहरण: रवि कुमार" class="w-full px-4 py-3 rounded-lg bg-emerald-700 border border-emerald-600 text-white placeholder-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-400" required>
                                <p class="text-red-300 text-sm mt-1 hidden" id="name-error">कृपया अपना नाम दर्ज करें।</p>
                            </div>
                            <div>
                                <label for="email" class="block text-white text-lg font-medium mb-2">आपका ईमेल <span class="text-red-400">*</span></label>
                                <input type="email" id="email" name="email" placeholder="उदाहरण: your.email@example.com" class="w-full px-4 py-3 rounded-lg bg-emerald-700 border border-emerald-600 text-white placeholder-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-400" required>
                                <p class="text-red-300 text-sm mt-1 hidden" id="email-error">कृपया एक वैध ईमेल पता दर्ज करें।</p>
                            </div>
                            <div>
                                <label for="phone" class="block text-white text-lg font-medium mb-2">आपका फ़ोन नंबर</label>
                                <input type="tel" id="phone" name="phone" placeholder="उदाहरण: +91 9876543210" class="w-full px-4 py-3 rounded-lg bg-emerald-700 border border-emerald-600 text-white placeholder-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-400">
                                <p class="text-red-300 text-sm mt-1 hidden" id="phone-error">कृपया एक वैध फ़ोन नंबर दर्ज करें।</p>
                            </div>
                            <div>
                                <label for="service-interest" class="block text-white text-lg font-medium mb-2">सेवा में रुचि <span class="text-red-400">*</span></label>
                                <select id="service-interest" name="service-interest" class="w-full px-4 py-3 rounded-lg bg-emerald-700 border border-emerald-600 text-white focus:outline-none focus:ring-2 focus:ring-emerald-400" required>
                                    <option value="कस्टम लैंडस्केप डिज़ाइन">कस्टम लैंडस्केप डिज़ाइन</option>
                                    <option value="स्थापना और निर्माण">स्थापना और निर्माण</option>
                                    <option value="रखरखाव सेवाएँ">रखरखाव सेवाएँ</option>
                                    <option value="अन्य">अन्य</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-white text-lg font-medium mb-2">आपका संदेश <span class="text-red-400">*</span></label>
                                <textarea id="message" name="message" rows="5" placeholder="हमें अपनी परियोजना के बारे में बताएं..." class="w-full px-4 py-3 rounded-lg bg-emerald-700 border border-emerald-600 text-white placeholder-emerald-300 focus:outline-none focus:ring-2 focus:ring-emerald-400" required></textarea>
                                <p class="text-red-300 text-sm mt-1 hidden" id="message-error">कृपया अपना संदेश दर्ज करें।</p>
                            </div>
                            <button type="submit" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg">संदेश भेजें</button>
                        </form>
                    </div>
                    <div class="p-8 bg-gray-800 rounded-lg shadow-xl" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-3xl font-semibold mb-6 text-white">हमारी संपर्क जानकारी</h3>
                        <div class="space-y-6 text-gray-300 text-lg">
                            <p class="flex items-center"><span class="material-symbols-outlined mr-3 text-emerald-400">location_on</span> <span class="text-white">ग्रीनटेक इंटरनेशनल कंपनी, जी ५२/१, तीसरी मंजिल, शाहीन बाग, ओखला, नई दिल्ली - ११००२५</span></p>
                            <p class="flex items-center"><span class="material-symbols-outlined mr-3 text-emerald-400">call</span> <a href="tel:+९१-८०४६०३२५६०" class="hover:text-emerald-400 transition-colors duration-300">+९१-८०४६०३२५६०</a></p>
                            <p class="flex items-center"><span class="material-symbols-outlined mr-3 text-emerald-400">mail</span> <a href="mailto:info.verdaluneform@mail.in" class="hover:text-emerald-400 transition-colors duration-300">info.verdaluneform@mail.in</a></p>
                           
                        </div>
                        <div class="mt-10">
                            <h3 class="text-3xl font-semibold mb-4 text-white">ग्राहक समीक्षाएँ</h3>
                            <div class="space-y-4">
                                <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                                    <p class="italic text-gray-200 mb-2">"वर्दाल्यूनफॉर्म ने मेरे बगीचे को एक कलाकृति में बदल दिया! वे अत्यधिक पेशेवर और रचनात्मक थे।"</p>
                                    <p class="font-semibold text-emerald-300">- प्रिया आर., बेंगलुरु (2024-07-15)</p>
                                </div>
                                <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                                    <p class="italic text-gray-200 mb-2">"सेवा ठीक थी। कुछ छोटे मुद्दों को सुलझाने में थोड़ा समय लगा, लेकिन अंततः परिणाम संतोषजनक था।"</p>
                                    <p class="font-semibold text-emerald-300">- समीर के., मुंबई (2024-06-28)</p>
                                </div>
                                <div class="bg-gray-700 p-4 rounded-lg shadow-md">
                                    <p class="italic text-gray-200 mb-2">"मुझे उनके द्वारा बनाए गए पानी की सुविधा बहुत पसंद है। यह मेरे घर में बहुत शांति लाता है।"</p>
                                    <p class="font-semibold text-emerald-300">- फातिमा एस., दिल्ली (2024-07-01)</p>
                                </div>
                            </div>
                            <div class="mt-8 text-center">
                                <h3 class="text-3xl font-semibold mb-4 text-white">हमारी उपलब्धियां</h3>
                                <div class="grid grid-cols-2 gap-4 text-center">
                                    <div class="bg-emerald-700 p-4 rounded-lg shadow-md">
                                        <p class="text-4xl font-bold text-white">500+</p>
                                        <p class="text-emerald-200">सफल परियोजनाएँ</p>
                                    </div>
                                    <div class="bg-emerald-700 p-4 rounded-lg shadow-md">
                                        <p class="text-4xl font-bold text-white">10+</p>
                                        <p class="text-emerald-200">वर्ष का अनुभव</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="frontend/site.js"></script>
</body>
</html>
