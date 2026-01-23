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
});
