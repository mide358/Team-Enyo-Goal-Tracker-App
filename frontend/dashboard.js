const openForm = () => {
	document.getElementById("myForm").style.display = "block";
}

const closeForm = () => {
	document.getElementById("myForm").style.display = "none";
}

const openEdit = () => {
	document.getElementById("edit").style.display = "block";
}

const closeEdit = () => {
	document.getElementById("edit").style.display = "none";
}

const getElem = (id) => {
	return document.getElementById(id);
}

const makeElem = (elem) => {
	return document.createElement(elem);
}

var addGoalBtn = getElem('add-goal-btn');
var goalList = getElem('goal-list');
var goalTitle = getElem('goal-title');


var editPopup = getElem('edit');
var editForm = getElem('edit-value');
var editBtn = getElem('edit-goal-btn');

var drop = getElem('clone');

	

var idCount = 3;

var newGoalsList = [];

const addDropdown = () => {
	return drop.cloneNode(true);
}


class Goals{
	constructor(){
		this.newGoal = makeElem('li');
		this.dropdown = addDropdown();
		this.deleter = this.dropdown.lastElementChild.lastElementChild;
		this.editor = this.dropdown.lastElementChild.firstElementChild;

	}

	addGoal() {
		if (goalTitle.value !== undefined && goalTitle.value !== '') {

			this.newGoal.innerText = goalTitle.value;
			this.newGoal.appendChild(this.dropdown)
			this.newGoal.id = '';
			goalList.appendChild(this.newGoal);
			goalTitle.value = '';
			closeForm();

		}
		else{
			alert('please enter new goal title')
		}

		this.removeGoal();
		this.edit();
	}

	removeGoal() {
		this.deleter.addEventListener('click', (e) => {
			e.target.parentNode.parentNode.parentNode.remove();
		});
	}

	edit() {
		this.editor.addEventListener('click', (e) => {
			e.preventDefault();
			openEdit();
			editBtn.addEventListener('click', (f) => {
				f.preventDefault();
				if (editForm.value !== '' && editForm.value !== undefined) {
					e.target.parentNode.parentNode.parentNode.childNodes[0].data = editForm.value;
					closeEdit();
					editForm.value = '';
				}
			});
		});
	}
}

const add = () => {
	let goal = new Goals();
	goal.addGoal();
	return goal;
}

addGoalBtn.addEventListener('click', (e) => {
    e.preventDefault();
	add();
});
