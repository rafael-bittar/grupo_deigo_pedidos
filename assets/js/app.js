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

function createItemSection(section_name, section_title){
	let item_section = document.createElement("div");
	let item_title = document.createElement("h2");

	item_title.textContent = section_title;

	item_section.classList.add(section_name, "item_section");

	item_section.appendChild(item_title);

	return item_section;
}

function addItem() {
	const new_item = document.createElement("div");
	const pedido_div = document.getElementById("pedido");

	new_item.classList.add("item_pedido");

	const compra_section = createItemSection("compra", "Compra do item");
	const gravacao_section = createItemSection("gravacao", "Gravação");
	const comissao_section = createItemSection("comissao", "Comissão");
	const lucro_section = createItemSection("lucro", "Lucro");
	const bv_section = createItemSection("bv", "BV");
	const venda_section = createItemSection("venda", "Venda");

	// CREATING THE FORM INPUTS FOR THE NEW ITEM
	// -=-=-=-=-=-=- COMPRA DO ITEM -=-=-=-=-=-=-
	new_item.appendChild(compra_section);
	compra_section.appendChild(createInput("fornecedor", "text", "Fornecedor"));
	compra_section.appendChild(createInput("codigo", "text", "Código de referência"));
	compra_section.appendChild(createInput("item", "text", "Item"));
	compra_section.appendChild(createTextArea("descricao", "Descrição"));
	compra_section.appendChild(createInput("peso", "number", "Peso"));
	compra_section.appendChild(createInput("formato", "text", "Formato"));
	compra_section.appendChild(createInput("qtd_compra", "number", "Quantidade comprada"));
	compra_section.appendChild(createInput("vlr_un_compra", "number", "Valor unitário - compra"));

	// -=-=-=-=-=-=- GRAVAÇÃO -=-=-=-=-=-=- 
	new_item.appendChild(gravacao_section);
	gravacao_section.appendChild(createInput("fornecedor", "text", "Fornecedor"));
	gravacao_section.appendChild(createInput("tipo", "text", "Tipo"));
	gravacao_section.appendChild(createInput("qtd_gravacao", "number", "Quantidade para gravação"));
	gravacao_section.appendChild(createInput("vlr_un_gravacao", "number", "Valor unitário - gravação"));

	// -=-=-=-=-=-=- COMISSÃO -=-=-=-=-=-=-
	new_item.appendChild(comissao_section);
	comissao_section.appendChild(createInput("margem_comissao", "number", "Margem de comissão"));

	// -=-=-=-=-=-=- LUCRO -=-=-=-=-=-=-
	new_item.appendChild(lucro_section);
	lucro_section.appendChild(createInput("margem_lucro", "number", "Margem de lucro"));

	// -=-=-=-=-=-=- BV -=-=-=-=-=-=-
	new_item.appendChild(bv_section);
	bv_section.appendChild(createInput("margem_bv", "number", "Percentual BV"));

	// -=-=-=-=-=-=- VENDA -=-=-=-=-=-=-
	new_item.appendChild(venda_section);
	venda_section.appendChild(createInput("qtd_venda", "number", "Quantidade vendida"));

	pedido_div.appendChild(new_item);
}
