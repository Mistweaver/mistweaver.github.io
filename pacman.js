$(document).ready(function() {
    // grab elements
    let container = document.getElementById("arena");
    let box = document.getElementById("pacman");
    let pacman = document.getElementById("pacman");
    let pacmanDisplay = document.getElementById("pacmanDisplay");
    let fpsDisplay = document.getElementById('fpsDisplay');
    let lifeDisplay = document.getElementById('lifeDisplay');
    // debug elements
    let centerDot = document.getElementById('centerDot');
    let positionDot = document.getElementById('positionDot');
    let boxPos = 10;
    let pacmanXPosition = pacman.offsetLeft; // - (pacman.offsetWidth / 2); 
    let pacmanYPosition = pacman.offsetTop; // - (pacman.offsetHeight / 2);
    let pacmanLastXPosition; // = pacman.offsetLeft;
    let pacmanLastYPosition; // = pacman.offsetTop;
    let lastBoxPos = 10;
    let boxVelocity = 0.2;
    let limit = 300;
    let lastFrameTimeMs = 0;
    let maxFPS = 60;
    let delta = 0;
    let timestep = 1000 / 60;
    let fps = 60;
    let framesThisSecond = 0;
    let lastFpsUpdate = 0;
    let playerXPosition = 200;
    let playerYPosition = 23;
    let playerInsideArena = false;
    pacman.style.transform = "rotate(0deg)";
    function update(delta) {
        // console.log("Update");
        // console.log("Delta: " + delta);
        if(playerInsideArena) {
            boxVelocity = 0.2;
            // console.log("Player position: " + playerXPosition + "," + playerYPosition);
            // console.log("Pacman position: " + pacman.offsetLeft + " " + pacman.offsetTop);
            // console.log("Pacman dimensions: " + pacman.offsetHeight + " " + pacman.offsetWidth);
            pacmanLastXPosition = pacmanXPosition;
            pacmanLastYPosition = pacmanYPosition;
            if(playerXPosition > pacmanXPosition) {
                pacmanXPosition += boxVelocity * delta;
            } else {
                pacmanXPosition -= boxVelocity * delta;
            }
            if (playerYPosition > pacmanYPosition) {
                pacmanYPosition += boxVelocity * delta;
            } else {
                pacmanYPosition -= boxVelocity * delta;
            }
        } else {
            pacmanXPosition += boxVelocity * delta;
            if (pacmanXPosition >= limit || pacmanXPosition <= 0) boxVelocity = -boxVelocity;
        }
        
        // check arena boundary conditions
        // console.log("Pacman dimensions: " + pacman.offsetWidth + " (width), " + pacman.offsetHeight + " (height)");
        // console.log("Pacman center: " + (pacman.offsetWidth / 2) + " " + (pacman.offsetHeight / 2) );
        // if (center of pacman + radius is less than top boundary, less than left boundary, greater than right boundary, greater than bottom boundary)
            // reverse direction
        // check div boundary conditions
        // if center collides with object in arena, reverse direction
        // if center collides with player, lose a life
    }

    function draw(interp) {
        positionDot.style.left = pacman.offsetLeft + 'px';
        positionDot.style.top =pacman.offsetTop + 'px';
        centerDot.style.left =  pacman.offsetLeft + (pacman.offsetWidth / 2) + 'px';
        centerDot.style.top =pacman.offsetTop + (pacman.offsetHeight / 2) + 'px';
        pacman.style.left = (pacmanLastXPosition + (pacmanXPosition - pacmanLastXPosition) * interp) + 'px';
        pacman.style.top = (pacmanLastYPosition + (pacmanYPosition - pacmanLastYPosition) * interp) + (pacman.offsetWidth / 2) + 'px'; //- (pacman.offsetWidth / 2)
        
        let style = "rotate(" + ((Math.atan2((playerXPosition - pacmanXPosition), (playerYPosition - pacmanYPosition)) * (180 / Math.PI) * -1) + 90)+ "deg)"
        pacmanDisplay.style.transform = style;
        pacmanDisplay.style.webkitTransform = style;
        pacmanDisplay.style.mozTransform = style;
        pacmanDisplay.style.msTransform = style;
        pacmanDisplay.style.oTransform = style;
        
        fpsDisplay.textContent = Math.round(fps) + ' FPS';
    }

    function panic() {
        delta = 0;
    }

    function begin() {
    }

    function end(fps) {
        if (fps < 25) {
            // box.style.backgroundColor = 'black';
        }
        else if (fps > 30) {
           //  box.style.backgroundColor = 'red';
        }
    }

    function mainLoop(timestamp) {
        // Throttle the frame rate.    
        if (timestamp < lastFrameTimeMs + (1000 / maxFPS)) {
            requestAnimationFrame(mainLoop);
            return;
        }
        delta += timestamp - lastFrameTimeMs;
        lastFrameTimeMs = timestamp;

        begin(timestamp, delta);

        if (timestamp > lastFpsUpdate + 1000) {
            fps = 0.25 * framesThisSecond + 0.75 * fps;

            lastFpsUpdate = timestamp;
            framesThisSecond = 0;
        }
        framesThisSecond++;

        var numUpdateSteps = 0;
        while (delta >= timestep) {
            update(timestep);
            delta -= timestep;
            if (++numUpdateSteps >= 240) {
                panic();
                break;
            }
        }

        draw(delta / timestep);

        end(fps);

        requestAnimationFrame(mainLoop);
    }

    requestAnimationFrame(mainLoop);

    /************* calculate player mouse position ***********/
    container.addEventListener("mousemove", function(event) {
        playerXPosition = event.offsetX; // + Math.floor(event.offsetWidth / 2);
        playerYPosition = event.offsetY; // + Math.floor(event.offsetHeight / 2);
        // console.log("Mouse offset position: " + event.offsetX + " " + event.offsetY);

    })
    container.addEventListener("mouseenter", function() {
        playerInsideArena = true;
        playerXPosition = -1;
        playerYPosition = -1;
    })
    container.addEventListener("mouseleave", function() {
        playerInsideArena = false;
        playerXPosition = -1;
        playerYPosition = -1;
    })
    var mouse = {
        _x: 0,
        _y: 0,
        x: 0,
        y: 0,
        updatePosition: function(event) {
            var e = event || window.event;
            this.x = e.clientX - this._x;
            this.y = (e.clientY - this._y) * -1;
        },
        setOrigin: function(e) {
            this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
            this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
        },
        show: function() {
            return "(" + this.x + ", " + this.y + ")";
        }
    };
});

/*
$(document).ready(function() {
	console.log("pacman ready");
    // Init
    // grab elements
    let container = document.getElementById("arena");
    let pacman = document.getElementById("pacman");
    // initialize pacman and player positions
    let pacmanXPosition = 10;
    let pacmanYPosition = 10;
    let pacmanVelocity = 0.08;
    let playerLastXPosition = 5;
    let playerLastYPosition = 5;
    // game loop variables
    let timestep = 1000 / 60;
    let lastFrameTimeMs = 0;
    let delta = 0;
    let fps = 60;
    let maxFPS = 10;
    // Mouse
    var mouse = {
        _x: 0,
        _y: 0,
        x: 0,
        y: 0,
        updatePosition: function(event) {
            var e = event || window.event;
            this.x = e.clientX - this._x;
            this.y = (e.clientY - this._y) * -1;
        },
        setOrigin: function(e) {
            this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
            this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
        },
        show: function() {
            return "(" + this.x + ", " + this.y + ")";
        }
    };
  
    // Track the mouse position relative to the center of the container.
    mouse.setOrigin(container);

  
    //-----------------------------------------
    var update = function(event) {
      mouse.updatePosition(event);
        // console.log("P_x: " + pacman.offsetLeft + " P_y: " + pacman.offsetTop);
        // console.log("M_x: " + mouse.x + " M_y: " + mouse.y);
        // console.log(Math.atan2(pacman.offsetLeft - mouse.y, pacman.offsetTop - mouse.x));
        // var center_x = (pacman.left) + (pacman.width() / 2);
        // var center_y = (pacman.top) + (pacman.height() / 2);
        // console.log(event);
        // console.log("Pacman position: " + pacman.offsetLeft + " " + pacman.offsetTop);
        // console.log("Mouse offset position: " + event.offsetX + " " + event.offsetY);
        // console.log("Mouse Position: " + event.pageX + " " + event.pageY);
        var center_x = (pacman.offsetLeft);
        var center_y = (pacman.offsetTop);
        // var mouse_x = event.pageX;
        var mouse_x = event.offsetX;
        // var mouse_y = event.pageY;
        var mouse_y = event.offsetY;
        playerLastXPosition = event.offsetX;
        playerLastYPosition = event.offsetY;
        // var radians = Math.atan2(mouse_x - center_x, mouse_y - center_y);
        // console.log(radians);
        // var degree = (radians * (180 / Math.PI) * -1) + 90;
        // console.log(degree);
      updateTransformStyle(
        /*(mouse.y / pacman.offsetHeight / 2).toFixed(2),
        (mouse.x / pacman.offsetWidth / 2).toFixed(2)*/ /*
        mouse_x - center_x, mouse_y - center_y
      );
      
    };
});
*/