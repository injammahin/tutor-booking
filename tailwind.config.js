module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        monty: {
          purple: "#5B1B8B",
          darkPurple: "#3B0F61",
          black: "#0B1220",
          soft: "#F8F5FC",
          gold: "#F7B731",
          red: "#E73223",
          green: "#16A34A",
        },
      },
      boxShadow: {
        premium: "0 24px 80px rgba(91, 27, 139, 0.14)",
        soft: "0 18px 50px rgba(15, 23, 42, 0.08)",
      },
    },
  },
  plugins: [],
};