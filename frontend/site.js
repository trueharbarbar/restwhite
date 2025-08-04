/* frontend/site.js */

document.addEventListener('DOMContentLoaded', () => {

    // Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Smooth Scrolling for Navigation Links
    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - (navbar ? navbar.offsetHeight : 0); // Adjust for fixed navbar height
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Services Tab Switching Logic
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanels = document.querySelectorAll('.tab-panel');
    const selectedServiceInput = document.getElementById('selected-service-input');

    if (tabButtons.length > 0 && tabPanels.length > 0 && selectedServiceInput) {
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active classes from all buttons and hide all panels
                tabButtons.forEach(btn => {
                    btn.classList.remove('bg-emerald-700', 'text-white', 'shadow-lg');
                    btn.classList.add('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
                });
                tabPanels.forEach(panel => {
                    panel.classList.add('hidden');
                    panel.classList.remove('active', 'opacity-100');
                });

                // Add active class to clicked button and show corresponding panel
                button.classList.add('bg-emerald-700', 'text-white', 'shadow-lg');
                button.classList.remove('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
                const targetTab = button.dataset.tab;
                const activePanel = document.getElementById(`tab-${targetTab}`);
                if (activePanel) {
                    activePanel.classList.remove('hidden');
                    activePanel.classList.add('active', 'opacity-100');
                    // Update hidden input for form
                    const serviceName = button.textContent.trim();
                    selectedServiceInput.value = serviceName;
                }
            });
        });

        // Set initial active tab
        tabButtons[0].click();
    }

    // Gallery Lightbox Logic
    const galleryImages = document.querySelectorAll('#gallery img');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');
    let currentImageIndex = 0;
    const imagesArray = Array.from(galleryImages).map(img => img.src);

    if (galleryImages.length > 0 && lightbox && lightboxImg && lightboxClose && lightboxPrev && lightboxNext) {
        galleryImages.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentImageIndex = index;
                openLightbox(imagesArray[currentImageIndex]);
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        lightboxPrev.addEventListener('click', showPrevImage);
        lightboxNext.addEventListener('click', showNextImage);

        document.addEventListener('keydown', (e) => {
            if (lightbox.classList.contains('show')) {
                if (e.key === 'Escape') {
                    closeLightbox();
                } else if (e.key === 'ArrowLeft') {
                    showPrevImage();
                } else if (e.key === 'ArrowRight') {
                    showNextImage();
                }
            }
        });

        function openLightbox(src) {
            lightboxImg.src = src;
            lightbox.classList.add('show');
            setTimeout(() => {
                lightboxImg.classList.add('show');
            }, 50);
        }

        function closeLightbox() {
            lightboxImg.classList.remove('show');
            setTimeout(() => {
                lightbox.classList.remove('show');
            }, 300);
        }

        function showPrevImage() {
            currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : imagesArray.length - 1;
            lightboxImg.classList.remove('show');
            setTimeout(() => {
                lightboxImg.src = imagesArray[currentImageIndex];
                lightboxImg.classList.add('show');
            }, 150);
        }

        function showNextImage() {
            currentImageIndex = (currentImageIndex < imagesArray.length - 1) ? currentImageIndex + 1 : 0;
            lightboxImg.classList.remove('show');
            setTimeout(() => {
                lightboxImg.src = imagesArray[currentImageIndex];
                lightboxImg.classList.add('show');
            }, 150);
        }
    }

    // Swiper Initialization
    const swiperContainer = document.querySelector('.swiper-container');
    if (swiperContainer) {
        new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    // Form Validation
    const serviceRequestForm = document.getElementById('service-request-form');
    if (serviceRequestForm) {
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const messageInput = document.getElementById('message');

        const nameError = document.getElementById('name-error');
        const emailError = document.getElementById('email-error');
        const phoneError = document.getElementById('phone-error');
        const messageError = document.getElementById('message-error');

        function validateField(inputElement, errorElement, validationFn) {
            if (inputElement && errorElement) {
                if (!validationFn(inputElement.value.trim())) {
                    errorElement.classList.remove('hidden');
                    inputElement.classList.add('border-red-400');
                    return false;
                } else {
                    errorElement.classList.add('hidden');
                    inputElement.classList.remove('border-red-400');
                    return true;
                }
            }
            return true; // If elements don't exist, consider valid
        }

        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function validatePhone(phone) {
            // Simple validation for Indian phone numbers (10 digits, optional +91 prefix)
            const re = /^(?:\+91)?[0-9]{10}$/;
            return phone === '' || re.test(String(phone));
        }

        serviceRequestForm.addEventListener('submit', function (e) {
            let isValid = true;

            isValid = validateField(nameInput, nameError, (val) => val.length > 0) && isValid;
            isValid = validateField(emailInput, emailError, validateEmail) && isValid;
            isValid = validateField(phoneInput, phoneError, validatePhone) && isValid;
            isValid = validateField(messageInput, messageError, (val) => val.length > 0) && isValid;

            if (!isValid) {
                e.preventDefault();
            }
        });

        // Real-time validation on blur
        nameInput?.addEventListener('blur', () => validateField(nameInput, nameError, (val) => val.length > 0));
        emailInput?.addEventListener('blur', () => validateField(emailInput, emailError, validateEmail));
        phoneInput?.addEventListener('blur', () => validateField(phoneInput, phoneError, validatePhone));
        messageInput?.addEventListener('blur', () => validateField(messageInput, messageError, (val) => val.length > 0));

        // Update hidden service input when select changes
        const serviceInterestSelect = document.getElementById('service-interest');
        if (serviceInterestSelect && selectedServiceInput) {
            serviceInterestSelect.addEventListener('change', () => {
                selectedServiceInput.value = serviceInterestSelect.value;
            });
        }
    }

    // Cookie Consent Logic
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieAcceptAllBtn = document.getElementById('cookie-accept-all');
    const cookieConfigureBtn = document.getElementById('cookie-configure');
    const cookieModal = document.getElementById('cookie-modal');
    const cookieModalSaveBtn = document.getElementById('cookie-modal-save');
    const cookieAnalyticsCheckbox = document.getElementById('cookie-analytics');
    const cookieAdvertisingCheckbox = document.getElementById('cookie-advertising');

    // Function to set a cookie
    function setCookie(name, value, days) {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + (value || '') + expires + '; path=/';
    }

    // Function to get a cookie
    function getCookie(name) {
        const nameEQ = name + '=';
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Function to save cookie preferences (randomly use cookie or localStorage)
    function saveCookiePreferences(preferences) {
        const useLocalStorage = Math.random() < 0.5; // 50% chance to use localStorage

        if (useLocalStorage) {
            try {
                localStorage.setItem('cookieConsent', JSON.stringify(preferences));
            } catch (e) {
                console.error('Error saving to localStorage:', e);
                // Fallback to cookie if localStorage fails
                setCookie('cookieConsent', JSON.stringify(preferences), 365);
            }
        } else {
            setCookie('cookieConsent', JSON.stringify(preferences), 365);
        }
        hideCookieBanner();
    }

    // Function to load cookie preferences
    function loadCookiePreferences() {
        let preferences = null;
        try {
            preferences = JSON.parse(localStorage.getItem('cookieConsent'));
        } catch (e) {
            // Fallback to cookie if localStorage fails or is not found
            const cookieValue = getCookie('cookieConsent');
            if (cookieValue) {
                try {
                    preferences = JSON.parse(cookieValue);
                } catch (e) {
                    console.error('Error parsing cookie consent:', e);
                }
            }
        }
        return preferences;
    }

    // Function to show the cookie banner
    function showCookieBanner() {
        if (cookieBanner) {
            cookieBanner.classList.remove('hidden');
            setTimeout(() => {
                cookieBanner.classList.add('show');
            }, 50);
        }
    }

    // Function to hide the cookie banner
    function hideCookieBanner() {
        if (cookieBanner) {
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.classList.add('hidden');
            }, 300);
        }
    }

    // Function to show the cookie modal
    function showCookieModal() {
        if (cookieModal) {
            cookieModal.classList.remove('hidden');
            setTimeout(() => {
                cookieModal.classList.add('show');
            }, 50);
        }
    }

    // Function to hide the cookie modal
    function hideCookieModal() {
        if (cookieModal) {
            cookieModal.classList.remove('show');
            setTimeout(() => {
                cookieModal.classList.add('hidden');
            }, 300);
        }
    }

    // Initialize cookie banner state
    const consent = loadCookiePreferences();
    if (!consent) {
        showCookieBanner();
    } else {
        // If consent exists, apply preferences (e.g., enable/disable analytics scripts)
        console.log('Cookie preferences loaded:', consent);
        // Here you would integrate with actual analytics/advertising scripts
        // For example:
        // if (consent.analytics) { enableGoogleAnalytics(); }
        // if (consent.advertising) { enableAdTracking(); }
    }

    // Event listeners for cookie banner buttons
    if (cookieAcceptAllBtn) {
        cookieAcceptAllBtn.addEventListener('click', () => {
            saveCookiePreferences({ required: true, analytics: true, advertising: true });
        });
    }

    if (cookieConfigureBtn) {
        cookieConfigureBtn.addEventListener('click', () => {
            const currentPreferences = loadCookiePreferences();
            if (currentPreferences) {
                if (cookieAnalyticsCheckbox) cookieAnalyticsCheckbox.checked = currentPreferences.analytics;
                if (cookieAdvertisingCheckbox) cookieAdvertisingCheckbox.checked = currentPreferences.advertising;
            }
            showCookieModal();
        });
    }

    if (cookieModalSaveBtn) {
        cookieModalSaveBtn.addEventListener('click', () => {
            const preferences = {
                required: true, // Always true
                analytics: cookieAnalyticsCheckbox ? cookieAnalyticsCheckbox.checked : false,
                advertising: cookieAdvertisingCheckbox ? cookieAdvertisingCheckbox.checked : false,
            };
            saveCookiePreferences(preferences);
            hideCookieModal();
        });
    }

    // Close modal if clicked outside content
    if (cookieModal) {
        cookieModal.addEventListener('click', (e) => {
            if (e.target === cookieModal) {
                hideCookieModal();
            }
        });
    }
});
