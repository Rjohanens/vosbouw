export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                background: 'hsl(var(--background))',
                foreground: 'hsl(var(--foreground))',
                muted: {
                    DEFAULT: 'hsl(var(--muted))',
                    foreground: 'hsl(var(--muted-foreground))',
                },
                primary: {
                    DEFAULT: 'hsl(var(--primary))',
                    foreground: 'hsl(var(--primary-foreground))',
                },
                border: 'hsl(var(--border))',
                accent: {
                    DEFAULT: 'hsl(var(--accent))',
                    foreground: 'hsl(var(--accent-foreground))',
                },
                navbar: {
                    DEFAULT: 'hsl(var(--navbar))',
                    foreground: 'hsl(var(--navbar-foreground))',
                    muted: 'hsl(var(--navbar-muted))',
                },
            },
        },
        fontFamily: {
            rubik: ["Rubik", "sans-serif"],
        },
    },
    plugins: [],
};
