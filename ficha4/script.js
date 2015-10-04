var products = ['ABCD', 'DEFG'];

function loaddocument(){
	var formContent=document.getElementById("products").getElementsByTagName("div")[0].outerHTML;
	var formSelectElement=document.getElementById("products").getElementsByTagName("div")[0].getElementsByTagName("select")[0];
	loadproducts(formSelectElement);
}

function loadproducts(selectElement){
	xmlhttp=new XMLHttpRequest();
	
	for(var i=0;i<products.length; i++){
		var newOption=document.createElement("option");
		newOption.innerHTML=products[i];
		selectElement.appendChild(newOption);
	}
}

function addline(){
	var formElement=document.getElementById("products");

	var newLineDiv=document.createElement("div");
	newLineDiv.setAttribute("class","line");
	newLineDiv.innerHTML='Produto:<select></select> Quantidade:<input type="text" value="">';
	loadproducts(newLineDiv.getElementsByTagName("select")[0]);

	var formElements=formElement.getElementsByTagName("input");
	var previousLast=formElements[formElements.length-1];
	formElement.appendChild(newLineDiv);
	formElement.appendChild(previousLast);
}