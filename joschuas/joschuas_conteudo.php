<?php 

$p = array(
    "Olá, eu sou o Jóschuas Vieira, tenho 17 anos, vim da Escola estadual Maria Helena, e eu não acho que tenho muita coisas para falar sobre mim.",
    "Para falar a verdade, eu não sabia sobre absolutamente NADA sobre informática (sério, eu nem sabia ligar um PC), eu escolhi por quê achava que ia ser melhor do que mecatrônica, mas eu estou fazendo o que posso ok.",
    "Bom, acho que depois que eu terminar, eu não tenho muita certeza de para onde eu vou apontar minha vida, até agora eu estou pensando em carreira militar, mas eu também tô pensando em continuar nessa area.",
    "Além dos conteúdos da escola, eu não costumo praticar outras coisas paralelas, eu apenas estudo um pouco de programação as vezes para fazer algo mais interessante nos meus projetos.",
    "Ah, e eu no meu antigo colégio, eu participava do time de vôlei da escola, eu não era aquelas coisas, mas me esforça bastante.",
    "E sobre agora, em 2020 e 2021, eu não participei de nenhuma olimpiada ou evento parecido, mas antigamente eu eu participei da OBMEP, a olimpiada de matemática de 2019, e algumas outras antes.",
    "E apesar de eu ter coisas bem positivas a respeito de mim (obs: não são muitas), ainda me falta iniciativa para as coisas que eu preciso fazer, por quê eu costumo ser bem mais prestativo quando eu estou em grupo.",
	"Acho que também preciso de mais coragem para falar em público, eu já acho que eu sou um pouco extrovertido (um pouco), mas posso melhorar isso, e realmene não ficar corado toda vez que estiver em uma situação mais estressante.",
    "Inclusive, assim como um amigo que também gosta de RPG, a minha classe favorita é o Ranger (ou patrulheiro), pois ele é caçador, sobrevivente especialista em ambientes hostis, é basicamente um guerrilheiro da idade média.",
	"Até acho que deve ser por isso que o meu interesse pelo exército (por mais que um Ranger e um soldado do exército brasileiro não tenham muitas coisas e ideias semelhantes, mas ninguém se importa com isso, certo?).",
    "Bom, acho que é isso, não é muita coisa, mas esse sou eu, bem resumido, mas é eu, espero que tenha gostado ok né, até um outro dia (ou não)."
);

$h2 = array("Jóschuas Vieira da Silva");

$h3 = array(
    "Planos para a posterioridade",
    "Habilidades",
    "Coisas para melhorar",
    "Conclusão"
);

$img = array(
    "img/joschuas.jpg",
    "img/ifsp.png",
    "img/ranger.jpg"
);

switch ($_POST['cont']) {
    case "h2":
        echo json_encode($h2);
        break;
    case "h3":
        echo json_encode($h3);
        break;
    case "p":
        echo json_encode($p);
        break;
    case "img":
        echo json_encode($img);        
}

?>