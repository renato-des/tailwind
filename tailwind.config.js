module.exports = {
    purge: [],
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                caixa_blue: {
                    DEFAULT: "#005CA9",
                    50: "#8FCCFF",
                    100: "#76C1FF",
                    200: "#43A9FF",
                    300: "#1092FF",
                    400: "#0078DC",
                    500: "#005CA9",
                    600: "#004076",
                    700: "#002443",
                    800: "#000910",
                    900: "#000000",
                },
                turquesa: {
                    DEFAULT: "#54BBAB",
                    50: "#F8FCFC",
                    100: "#E6F5F3",
                    200: "#C1E7E1",
                    300: "#9DD8CF",
                    400: "#78CABD",
                    500: "#54BBAB",
                    600: "#3F9D8F",
                    700: "#30796E",
                    800: "#22544D",
                    900: "#13302B",
                },
            },
        },
    },
    variants: {
        display: ["responsive", "group-hover", "group-focus"],
        extend: {},
    },
    plugins: [],
};
