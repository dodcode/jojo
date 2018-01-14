'use strict'
module.exports = {
    host: '',//http://dodcode.me
    mode: 'prod',
    log: function (msg) {
        if (this.mode == 'dev') {
            console.log(msg)
        }
    }
}