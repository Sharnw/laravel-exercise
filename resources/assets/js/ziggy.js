    var Ziggy = {
        namedRoutes: {"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"contacts.index":{"uri":"contacts","methods":["GET","HEAD"],"domain":null},"contacts.create":{"uri":"contacts\/create","methods":["GET","HEAD"],"domain":null},"contacts.edit":{"uri":"contacts\/{id}\/edit","methods":["GET","HEAD"],"domain":null},"contacts.store":{"uri":"contacts\/store","methods":["PUT"],"domain":null},"contacts.update":{"uri":"contacts\/{id}\/update","methods":["POST"],"domain":null},"contacts.destroy":{"uri":"contacts\/destroy","methods":["DELETE"],"domain":null},"home":{"uri":"home","methods":["GET","HEAD"],"domain":null}},
        baseUrl: 'http://dev.phitest/',
        baseProtocol: 'http',
        baseDomain: 'dev.phitest',
        basePort: false,
        defaultParameters: []
    };

    export {
        Ziggy
    }
