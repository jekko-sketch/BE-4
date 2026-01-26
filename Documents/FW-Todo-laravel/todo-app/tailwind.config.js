module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'surface-900': '#070914',
        'surface-800': '#0b1220',
        'surface-700': '#0f1724',
        'muted': '#94a3b8',
        'accent': '#06b6d4',
        'accent-2': '#7c3aed'
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
      },
    },
  },
  plugins: [],
};
