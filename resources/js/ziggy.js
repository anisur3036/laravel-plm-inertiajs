const Ziggy = {"url":"http:\/\/plm-website.test","port":null,"defaults":{},"routes":{"login":{"uri":"\/","methods":["GET","HEAD"]},"login.attempt":{"uri":"login","methods":["POST"]},"logout":{"uri":"logout","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    for (let name in window.Ziggy.routes) {
        Ziggy.routes[name] = window.Ziggy.routes[name];
    }
}

export { Ziggy };
