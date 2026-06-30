/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            "colors": {
                "surface-dim": "#d9dade",
                "inverse-primary": "#adc6ff",
                "tertiary-fixed": "#61f9ef",
                "on-secondary-container": "#633700",
                "background": "#f9f9fe",
                "secondary-fixed": "#ffdcbf",
                "on-tertiary-container": "#f3fffd",
                "primary-fixed-dim": "#adc6ff",
                "on-primary-fixed-variant": "#004493",
                "secondary-fixed-dim": "#ffb874",
                "on-tertiary-fixed-variant": "#00504c",
                "on-primary": "#ffffff",
                "primary": "#0058bc",
                "tertiary-container": "#00837c",
                "on-secondary-fixed": "#2d1600",
                "inverse-surface": "#2e3034",
                "surface-container-lowest": "#ffffff",
                "on-error-container": "#93000a",
                "tertiary-fixed-dim": "#39dcd2",
                "primary-fixed": "#d8e2ff",
                "error": "#ba1a1a",
                "secondary-container": "#fe9400",
                "surface-container-highest": "#e2e2e7",
                "surface-container-low": "#f3f3f8",
                "on-secondary-fixed-variant": "#6a3b00",
                "on-secondary": "#ffffff",
                "primary-container": "#0070eb",
                "outline-variant": "#c1c6d7",
                "on-primary-fixed": "#001a41",
                "secondary": "#8c5000",
                "on-surface-variant": "#414755",
                "surface-variant": "#e2e2e7",
                "error-container": "#ffdad6",
                "outline": "#717786",
                "on-background": "#1a1c1f",
                "on-primary-container": "#fefcff",
                "tertiary": "#006762",
                "on-error": "#ffffff",
                "surface-bright": "#f9f9fe",
                "on-surface": "#1a1c1f",
                "surface-container": "#ededf2",
                "surface": "#f9f9fe",
                "surface-container-high": "#e8e8ed",
                "inverse-on-surface": "#f0f0f5",
                "on-tertiary": "#ffffff",
                "surface-tint": "#005bc1",
                "on-tertiary-fixed": "#00201e"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "1.5rem",
                "full": "9999px"
            },
            "spacing": {
                "gutter": "1.5rem",
                "stack-gap": "1rem",
                "container-max-width": "640px",
                "section-padding": "2rem",
                "form-element-gap": "1.25rem"
            },
            "fontFamily": {
                "body-lg": ["Inter"],
                "body-md": ["Inter"],
                "label-sm": ["Inter"],
                "display-lg": ["Montserrat"],
                "display-lg-mobile": ["Montserrat"],
                "headline-md": ["Montserrat"],
                "label-md": ["Inter"],
                "headline-sm": ["Montserrat"]
            },
            "fontSize": {
                "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
            }
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/container-queries'),
    ],
}
