import './backend.css';

const init = () => {
	let colorWidgets = document.querySelectorAll('.widget .color-widget');
	if (colorWidgets.length == 0) {
		return;
	}

	colorWidgets.forEach((widget) => {
		let colorInput = widget.querySelector("input[type='color']");
		let colorTextInput = widget.querySelector("input[type='text']");

		colorInput.addEventListener('input', () => {
			colorTextInput.value = colorInput.value.replace('#', '');
		});
		colorTextInput.addEventListener('input', () => {
			colorInput.value = '#' + colorTextInput.value;
		});
	});
};

window.addEventListener('load', () => {
	init();
});
window.addEventListener('turbo:load', () => {
	init();
});
