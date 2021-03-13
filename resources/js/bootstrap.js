window.axios = require('axios')
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

const Turbolinks = require('turbolinks')
Turbolinks.start()
