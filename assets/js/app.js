function createInput(item_name, field_type, label_description) {
	let new_item = document.createElement("div");
	let new_item_label = document.createElement("label");
	let new_item_input = document.createElement("input");

	new_item_label.classList.add("item_field");
	new_item_label.textContent = label_description;

	new_item_input.setAttribute("type", field_type);
	new_item_input.setAttribute("name", item_name);

	new_item_label.appendChild(new_item_input);
	new_item.appendChild(new_item_label);
	
	return new_item;
}

function createTextArea(item_name, label_description) {
	let new_item = document.createElement("div");
	let new_item_label = document.createElement("label");
	let new_item_textarea = document.createElement("textarea");

	new_item_label.classList.add("item_field");
	new_item_label.textContent = label_description;

	new_item_textarea.setAttribute("name", item_name);

	new_item_label.appendChild(new_item_textarea);
	new_item.appendChild(new_item_label);

	return new_item;
}

function addItem() {
	const new_item = document.createElement("div");
	const pedido_div = document.getElementById("pedido");

	// CREATING THE FORM INPUTS FOR THE NEW ITEM
	new_item.appendChild(createInput("vlr_un", "number", "Valor unitário"));

	pedido_div.appendChild(new_item);
}
