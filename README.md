# Altilunium D
Anonymous chat room. Powered by ***[Gun Decentralized Database](https://gun.eco)***. Live demo : ***[altilunium.my.id/d](https://altilunium.my.id/d)***

## How to use
* Create your own chat-room by specifying the room ID : ***[altilunium.my.id/d?g=room_id](https://altilunium.my.id/d/?g=room_id)***
* Image uploading : paste images to chatbox 
* Clear current chatlog by typing `clear` command to the chatbox.

# How to self-host
1. ***Static web*** : Clone this repository. Enable the github pages. 
2. ***Gun Server*** : Install nodeJS. Clone this repository : ***[https://github.com/amark/gun](https://github.com/amark/gun)***. Execute `node --inspect examples/http.js`. You can run several gun server at once.
3. Open `index.html`. Point it to your gun server address. For example : `gun = Gun(['https://nodeA.example.com/gun', 'https://nodeB.example.com/gun', 'https://nodeC.example.com/gun' ]);`
4. *Optional* Monitoring service : Modify `logAct()` function on `index.html` to set-up your own platform monitoring services.
