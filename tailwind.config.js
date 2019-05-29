const defaultTheme = require('tailwindcss/defaultTheme')
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      blue: colors.blue,
      primary: '#e24848',
    },
    container: {
      center: true,
    },
    extend: {
      fontFamily: {
        sans: [
          'Open Sans',
          ...defaultTheme.fontFamily.sans,
        ]
      }
    }
  },
  variants: {},
  corePlugins: {
    alignContent: false,
    alignSelf: false,
    appearance: false,
    backgroundSize: false,
    borderCollapse: false,
    cursor: false,
    flexGrow: false,
    flexShrink: false,
    fontSmoothing: false,
    order: false,
    outline: false,
    pointerEvents: false,
    resize: false,
    tableLayout: false,
    textDecoration: false,
    textTransform: false,
    userSelect: false,
    verticalAlign: false,
    whitespace: false,
    wordBreak: false,
  }
}