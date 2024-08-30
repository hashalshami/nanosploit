// postcss.config.js
// module.exports =  {
export default{
    plugins: {
        'postcss-import': {},
        tailwindcss: {},
        autoprefixer: {},
        ...(process.env.NODE_ENV === 'production' ? { cssnano: {} } : {})
    }
}
