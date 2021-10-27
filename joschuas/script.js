elem1 = document.getElementsByTagName("h2");
$.post("joschuas_conteudo.php", "cont=h2", function (data) {
	for (j = 0; j < elem1.length; j++) {
		elem1[j].innerHTML = JSON.parse(data)[j];
	}
});

elem2 = document.getElementsByTagName("h3");
$.post("joschuas_conteudo.php", "cont=h3", function (data) {
	for (j = 0; j < elem2.length; j++) {
		elem2[j].innerHTML = JSON.parse(data)[j];
	}
});

elem3 = document.getElementsByTagName("p");
$.post("joschuas_conteudo.php", "cont=p", function (data) {
	for (j = 0; j < elem3.length; j++) {
		elem3[j].innerHTML = JSON.parse(data)[j];
	}
});

elem4 = document.getElementsByTagName("img");
$.post("joschuas_conteudo.php", "cont=img", function (data) {
	for (j = 0; j < elem4.length; j++) {
		elem4[j].setAttribute("src", JSON.parse(data)[j]);
	}
});