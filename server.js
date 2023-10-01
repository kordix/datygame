const { log } = require('console');
const express = require('express');
const app = express();
app.use(express.static('public'));
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

let connectcounter = 0;
io.on('connection', (socket) => {
    connectcounter++;

    const io = require('socket.io')();


    socket.on('endturn', (player) => {
        console.log('endturn');
        socket.broadcast.emit('load', player);
    });


});

server.listen(3001, () => {
    console.log('listening on *:3001');
});