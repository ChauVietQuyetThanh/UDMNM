/**
 * Professional Loading Animation
 * Controls page loading transitions
 */

class LoadingManager {
    constructor() {
        this.loadingElement = document.getElementById('page-loading');
        this.isLoading = false;
        this.init();
    }

    init() {
        // Show loading on page navigation
        this.bindNavigationEvents();
        
        // Hide loading when page is fully loaded
        this.bindPageLoadEvents();
        
        // Auto-hide loading after 3 seconds (fallback)
        this.setFallbackTimer();
    }

    bindNavigationEvents() {
        // Listen for all navigation links
        const navigationLinks = document.querySelectorAll('a[href]');
        
        navigationLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                
                // Only show loading for internal links
                if (this.isInternalLink(href)) {
                    this.showLoading();
                }
            });
        });

        // Listen for form submissions
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', () => {
                this.showLoading();
            });
        });
    }

    bindPageLoadEvents() {
        // Hide loading when page is fully loaded
        if (document.readyState === 'complete') {
            this.hideLoading();
        } else {
            window.addEventListener('load', () => {
                this.hideLoading();
            });
        }

        // Hide loading on back/forward navigation
        window.addEventListener('pageshow', (event) => {
            if (event.persisted) {
                this.hideLoading();
            }
        });
    }

    setFallbackTimer() {
        // Auto-hide loading after 5 seconds as fallback
        setTimeout(() => {
            if (this.isLoading) {
                this.hideLoading();
            }
        }, 5000);
    }

    isInternalLink(href) {
        // Check if link is internal (same domain)
        if (!href || href.startsWith('#') || href.startsWith('javascript:') || href.startsWith('mailto:') || href.startsWith('tel:')) {
            return false;
        }
        
        try {
            const url = new URL(href, window.location.origin);
            return url.origin === window.location.origin;
        } catch (e) {
            return false;
        }
    }

    showLoading() {
        if (this.isLoading) return;
        
        this.isLoading = true;
        this.loadingElement.classList.add('active');
        
        // Add loading class to body to prevent scrolling
        document.body.classList.add('loading-active');
    }

    hideLoading() {
        if (!this.isLoading) return;
        
        this.isLoading = false;
        this.loadingElement.classList.remove('active');
        
        // Remove loading class from body
        document.body.classList.remove('loading-active');
    }

    // Public method to manually show loading
    start() {
        this.showLoading();
    }

    // Public method to manually hide loading
    stop() {
        this.hideLoading();
    }
}

// Initialize loading manager when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.loadingManager = new LoadingManager();
});

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = LoadingManager;
}
