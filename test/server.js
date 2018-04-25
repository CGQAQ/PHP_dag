// const socketio = require('socket.io');
// const http = require('http');
//
// const Port = 61111;
// const server = http.createServer();
// const io = socketio(server);

var io = require('socket.io')();


var name = io.of('connet');

name.on('connection', client => {
    console.log(client.clients);
});

io.on('connection', client => {
    console.log(client.clients);
});



io.listen(61111);

// var app = require('express')();
// var server = require('http').createServer(app);
// var io = require('socket.io')(server);
// io.on('connection', function(){ /* … */ });
// server.listen(3000);