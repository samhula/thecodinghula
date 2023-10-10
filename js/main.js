// NAV BAR 
const mobileWidth = 550;

// Getting width
function getWidth() {
  if (self.innerWidth) {
    return self.innerWidth;
  }

  if (document.documentElement && document.documentElement.clientWidth) {
    return document.documentElement.clientWidth;
  }

  if (document.body) {
    return document.body.clientWidth;
  }
}

var width = getWidth();

// Navbar resize
const desktopNavLinks = document.getElementById('nav-desktop');
const hamburgerOpen = document.getElementById("hamburger-open");
const hamburgerClose = document.getElementById("hamburger-close");

// Initial hamburger fade
if (getWidth() < mobileWidth){
	hamburgerOpen.classList.remove("hidden");
	hamburgerOpen.classList.add("fade-in");
}

window.addEventListener('resize', updateNavBar);

// Toggling mobile navigation
var mobileNavOpen = false;

hamburgerOpen.addEventListener('click', toggleMobileNav);
hamburgerClose.addEventListener('click', toggleMobileNav);

function toggleMobileNav(){
	var toggleWidth = getWidth();

	if (toggleWidth < mobileWidth) {
		mobileNavOpen =! mobileNavOpen;
	}

	if (mobileNavOpen){
		hamburgerOpen.classList.add("hidden");
		hamburgerClose.classList.remove("hidden");
		hamburgerClose.classList.add("fade-in");
	}
	else {
		hamburgerOpen.classList.remove("hidden");
		hamburgerOpen.classList.add("fade-in");
		hamburgerClose.classList.add("hidden");
	}
}

if (width < mobileWidth){
	updateNavBar()
};

function updateNavBar(){
	if (getWidth() > mobileWidth){
		desktopNavLinks.classList.remove("hidden");
		hamburgerOpen.classList.add("hidden");
		hamburgerClose.classList.add("hidden");
	}
	else if (getWidth() < mobileWidth && mobileNavOpen == false){
		desktopNavLinks.classList.add("hidden");
		hamburgerOpen.classList.remove("hidden");
		hamburgerClose.classList.add("hidden");
	}
	else if (getWidth() < mobileWidth && mobileNavOpen == true){
		desktopNavLinks.classList.add("hidden");
		hamburgerOpen.classList.add("hidden");
		hamburgerOpen.classList.remove("fade-in");
		hamburgerClose.classList.remove("hidden");
		hamburgerClose.classList.add("fade-in");
	}
}

// CANVAS PARTICLE EFFECTS

const canvas = document.getElementById("intro-canvas");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particlesArray;

let mouse = {
	x: null,
	y: null,
	radius: (canvas.height / 110) * (canvas.width / 110)
}

window.addEventListener("mousemove", 
	function(event) {
		mouse.x = event.x;
		mouse.y = event.y;
	}
);

class Particle {
	constructor(x, y, directionX, directionY, size, colour) {
		this.x = x;
		this.y = y;
		this.directionX = directionX;
		this.directionY = directionY;
		this.size = size;
		this.colour = colour;
	}

	draw(){
		ctx.beginPath();
		ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
		ctx.fillStyle = '#636363';
		ctx.fill();
	}

	update() {
		if (this.x > canvas.width || this.x < 0){
			this.directionX = -this.directionX;
		}

		if (this.y > canvas.height || this.y < 0){
			this.directionY = -this.directionY;
		}

		let dx = mouse.x - this.x;
		let dy = mouse.y - this.y;
		let distance = Math.sqrt(dx*dx + dy*dy);

		if(distance < mouse.radius + this.size){
			if(mouse.x < this.x && this.x < canvas.width - this.size * 10){
				this.x += 10;
				this.directionX = -this.directionX;
			}

			if(mouse.x > this.x && this.x > this.size * 10){
				this.x -=10;
				this.directionX = -this.directionX;
			}

			if(mouse.y < this.y && this.y < canvas.height - this.size * 10){
				this.y += 10;
				this.directionY = -this.directionY;
			}

			if(mouse.y > this.y && this.y > this.size * 10){
				this.y -=10;
				this.directionY = -this.directionY;
			}
		}

		this.x += this.directionX;
		this.y += this.directionY;

		this.draw();
	}
}

function init(){
	particlesArray = [];
	let numberOfParticles = (canvas.height * canvas.width) / 9000;

	for (let i=0; i < numberOfParticles; i++){
		let size = (Math.random() * 3) + 1;
		let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
		let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
		let directionX = (Math.random() * 5 ) - 2.5;
		let directionY = (Math.random() * 5) - 2.5;
		let colour = '#9c9a9a';

		particlesArray.push(new Particle(x, y, directionX, directionY, size, colour));
 	}
}

function connect(){
	let opactityValue = 1;

	for(let a = 0; a < particlesArray.length; a++){
		for(let b = a; b < particlesArray.length; b++){
			let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x)) + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));

			if (distance < (canvas.width/7) * (canvas.height/7)){
				opactityValue = 1 - (distance / 20000);
				ctx.strokeStyle = 'rgba(50, 30, 31, ' + opactityValue + ')';
				ctx.lineWidth = 1;
				ctx.beginPath();
				ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
				ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
				ctx.stroke();
			}
		}
	}
}

function animate() {
	requestAnimationFrame(animate);
	ctx.clearRect(0, 0, innerWidth, innerHeight);

	for(let i = 0; i < particlesArray.length; i++){
		particlesArray[i].update();
	}
	connect();
}

window.addEventListener('resize',
	function(){
		canvas.width = innerWidth;
		canvas.height = innerHeight;
		mouse.radius = ((canvas.height / 110) * (canvas.width / 110));
		init();
	}
)

window.addEventListener('mouseout',
	function(){
		mouse.x = undefined;
		mouse.y = undefined;
	}
)

init();
animate();

// TYPING TEXT INTRO

const textSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");
 
const textArray = ["I am an aspiring web developer", "Welcome to my website!", "Checkout some of my projects!"];
const typingDelay = 100;
const erasingDelay = 70;
const newTextDelay = 2000; 
let textArrayIndex = 0;
let charIndex = 0;
 
function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")){
        cursorSpan.classList.add("typing");
    }
    textSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
   setTimeout(erase, newTextDelay);
  }
}
 
function erase() {
 if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) {
        cursorSpan.classList.add("typing");
    }
    textSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length){
        textArrayIndex=0;
    }
    setTimeout(type, typingDelay + 1100);
  }
}
 
document.addEventListener("DOMContentLoaded", function() { 
  if(textArray.length){
      setTimeout(type, newTextDelay + 250); 
  }
});