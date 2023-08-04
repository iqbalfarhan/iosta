/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [{
            light:{
                "primary": "red",
                "neutral": "#3D4451",
                "base-100": "#FFFFFF",
            }
        }, {
            dark:{
                "primary": "red",
                "neutral": "#fff",
                "base-100": "#3D4451",
            }
        }]
    }
};
