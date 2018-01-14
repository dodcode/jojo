'use strict'
module.exports = {
    host: 'http://dodcode.me',
    mode: 'dev',
    log: function (msg) {
        if (this.mode == 'dev') {
            console.log(msg)
        }
    }
}