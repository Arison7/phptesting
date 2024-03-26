window.onload = (() => {
	let pop = document.getElementsByClassName('pop-up')[0];
	let show = document.getElementsByClassName('show');
	let hide = document.getElementsByClassName('hide');
	for(let showElement of show){
		showElement.addEventListener('click', () => {
			pop .style.display = 'block';
		});
	}
	for(let hideElement of hide){
		hideElement.addEventListener('click', () => {
			pop .style.display = 'none';
		});
	}
}
)