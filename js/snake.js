var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;

const win = document.querySelector("#winner");
const bbb = document.querySelector(".loder-con");

win.addEventListener("click", function(){

	bbb.style.display = 'block';

  sim = setInterval(progressSim, 40);

});

function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#4285f4';
	ctx.strokeStyle = "#4285f4";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearInterval(sim);
	    // Add scripting here that will run when progress completes
		myModal.show();
		bbb.style.display = 'none';
		
		// Start the confetti animation
		startConfetti();
	}
	al++;
}

// Confetti animation function
function startConfetti() {
    // Trigger the initial burst
    confetti({
        particleCount: 100,
        spread: 70,
        origin: { y: 0.6 }
    });

    // Create continuous confetti for 5 seconds
    const duration = 5 * 1000;
    const end = Date.now() + duration;

    (function frame() {
        confetti({
            particleCount: 2,
            angle: 60,
            spread: 55,
            origin: { x: 0 }
        });
        confetti({
            particleCount: 2,
            angle: 120,
            spread: 55,
            origin: { x: 1 }
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    }());
}

//برمجية اختيار الرابح

var myModal = new bootstrap.Modal(document.getElementById('MainModal'), {keyboard: false});
