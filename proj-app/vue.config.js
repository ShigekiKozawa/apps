module.exports = {
  publicPath: process.env.NODE_ENV === 'production'
    ? '/proj-app/'
    : '/',
  outputDir: 'docs',
}