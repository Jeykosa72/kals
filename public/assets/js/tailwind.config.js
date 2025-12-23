tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                brand: {
                    pink: {
                        50: "#FDF2F8",
                        100: "#FCE7F3",
                        200: "#FBCFE8",
                        500: "#EC4899",
                        600: "#DB2777",
                    },
                    lilac: {
                        50: "#F5F3FF",
                        100: "#E9D5FF",
                        200: "#DDD6FE",
                        500: "#8B5CF6",
                        600: "#7C3AED",
                    },
                },
            },
            backgroundImage: {
                "dots-pattern": "url(\"data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23DB2777' fill-opacity='0.1' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E\")",
            },
        },
    },
};