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