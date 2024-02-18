<!-- Dark mode -->
<div x-data="{ darkMode: false }">
<script>
        function setTheme(theme) {
                if (theme === 'auto') {
                    theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                }
                document.documentElement.setAttribute('data-bs-theme', theme);
                localStorage.setItem('theme', theme);
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                if (theme === 'auto') {
                    setTheme(e.matches ? 'dark' : 'light');
                }
            });
    </script>
</div>
