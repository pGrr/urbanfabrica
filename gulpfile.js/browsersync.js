'use strict';

const server = require('browser-sync').create();

function init(done) {
    server.init({
        proxy: "urbanfabricacom.local"
    });
    done();
};

function reload(done) {
    server.reload();
    done();
};

module.exports = {
    init: init,
    reload: reload,
}

