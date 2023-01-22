window.addEventListener('load', typeText);
window.addEventListener('load', eraseText);

//Script responsible for creating typewriter effect in the logo area of the landing page
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".ourCursor");
const textArray = ["Stunningly eye-catching and bespoke signs", "We design & create custom signs for branded environments", "Experience style, experience design"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000;
let textArrayIndex = 0;
let charIndex = 0;

function typeText() {
	if(charIndex < textArray[textArrayIndex].length) {
		if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
		typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
		charIndex++;
		setTimeout(typeText, typingDelay);
	} else {
		cursorSpan.classList.remove("typing");
		setTimeout(eraseText, newTextDelay);
	}
}

function eraseText() {
	if(charIndex > 0) {
		if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
		typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
		charIndex--;
		setTimeout(eraseText, erasingDelay);
	} else {
		cursorSpan.classList.remove("typing");
		textArrayIndex++;
		if(textArrayIndex >= textArray.length) textArrayIndex = 0;
		setTimeout(typeText, typingDelay);
	}
}