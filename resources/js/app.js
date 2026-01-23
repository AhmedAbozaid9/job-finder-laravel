import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuButton && mobileMenu) {
        const toggleMenu = () => {
            const isHidden = mobileMenu.classList.contains("opacity-0");
            if (isHidden) {
                // Open menu
                mobileMenu.classList.remove(
                    "opacity-0",
                    "-translate-y-4",
                    "invisible",
                );
                mobileMenu.classList.add("opacity-100", "translate-y-0");
            } else {
                // Close menu
                mobileMenu.classList.remove("opacity-100", "translate-y-0");
                mobileMenu.classList.add(
                    "opacity-0",
                    "-translate-y-4",
                    "invisible",
                );
            }
        };

        const closeMenu = () => {
            if (!mobileMenu.classList.contains("opacity-0")) {
                mobileMenu.classList.remove("opacity-100", "translate-y-0");
                mobileMenu.classList.add(
                    "opacity-0",
                    "-translate-y-4",
                    "invisible",
                );
            }
        };

        mobileMenuButton.addEventListener("click", (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        document.addEventListener("click", (e) => {
            if (
                !mobileMenu.contains(e.target) &&
                !mobileMenuButton.contains(e.target)
            ) {
                closeMenu();
            }
        });

        // Close on escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                closeMenu();
            }
        });
    }

    // Auth Tabs Logic
    const initTabs = () => {
        const triggers = document.querySelectorAll("[data-tab-trigger]");
        if (!triggers.length) return;

        triggers.forEach((trigger) => {
            trigger.addEventListener("click", () => {
                const targetType = trigger.dataset.tabTrigger; // 'seeker' or 'recruiter'
                const roleInput = document.getElementById("role");

                // Update hidden input if it exists (on register page)
                if (roleInput) {
                    roleInput.value = targetType;
                }

                // Update tab styling
                triggers.forEach((t) => {
                    if (t.dataset.tabTrigger === targetType) {
                        t.setAttribute("data-active", "true");
                        t.classList.add(
                            "bg-dark-elevated",
                            "text-white",
                            "shadow-lg",
                        );
                        t.classList.remove(
                            "text-text-muted",
                            "hover:text-white",
                        );
                    } else {
                        t.setAttribute("data-active", "false");
                        t.classList.remove(
                            "bg-dark-elevated",
                            "text-white",
                            "shadow-lg",
                        );
                        t.classList.add("text-text-muted", "hover:text-white");
                    }
                });
            });
        });
    };

    initTabs();
});
