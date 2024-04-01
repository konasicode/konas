const menuArea = document.getElementById(':R5a:');
const areaControls = document.querySelectorAll('[aria-controls=":R5a:"]');
const toggleMenu = () => {
	menuArea.classList.toggle('h-[0.5rem]');
	menuArea.classList.toggle('h-auto');
};
areaControls.forEach((control) => control.addEventListener('click', toggleMenu));
