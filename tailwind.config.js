module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        container: {
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "8rem",
                xl: "15rem",
                "2xl": "20rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
