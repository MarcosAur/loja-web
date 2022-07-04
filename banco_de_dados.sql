CREATE DATABASE loja_web;

USE loja_web;

CREATE TABLE cliente(
	id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(70),
    senha VARCHAR(16),
    nome_usuario VARCHAR(30)
);

CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(70),
    senha VARCHAR(16)
);

CREATE TABLE categoria(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50)
);

CREATE TABLE produto(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100),
    descricao VARCHAR(1000),
    img VARCHAR(200),
    id_categorias VARCHAR(50),
    valor DECIMAL(10,2)
);

CREATE TABLE pedido(
	id INT PRIMARY KEY AUTO_INCREMENT,
    ids_produtos VARCHAR(100),
    numero_da_ordem VARCHAR(100),
    data_compra DATETIME,
    id_cliente INT,
    
    FOREIGN KEY (id_cliente) REFERENCES cliente(id)
);

/*
Inicio do Insert de Categorias
*/

INSERT INTO categoria(nome) VALUES 
('Eletronico'),
('Livros'),
('Promoção'),
('Destaque');

/*
Inicio do Insert de Produtos
*/
INSERT INTO produto(nome, descricao, img, id_categorias, valor)
VALUES 
('Fire TV Stick','>Fire TV com Alexa: aproveite streaming rápido e em Full HD. Vem com o novo Controle Remoto Lite por Voz com Alexa (sem controles de TV).','https://m.media-amazon.com/images/I/61rK6en2IdL._AC_SX679_.jpg','1,3',236.55)

INSERT INTO produto(nome, descricao, img, id_categorias, valor) 
VALUES 
('Echo Dot (4ª Geração)','Controle músicas apenas com sua voz. Ouça músicas do Amazon Music, Apple Music, Spotify, Deezer e outros, por toda a sua casa com o recurso multi ambiente','https://m.media-amazon.com/images/I/61gufBsGK7L._AC_SL1000_.jpg','1',359.00),
('Echo Show 5','Defina alarmes e timers, cheque seu calendário ou as notícias, faça chamadas de vídeo com a câmera de 2 MP para amigos e familiares que tenham o aplicativo Alexa','https://m.media-amazon.com/images/I/71C+1YtQkrL._AC_SY355_.jpg','1,3','999.00'),
('Echo Buds','Áudio dinâmico e cancelamento de ruído ativo (ANC): os speakers premium oferecem um som nítido e equilibrado. O design intra-auricular de encaixe firme e o ANC limitam o ruído de fundo.','https://m.media-amazon.com/images/I/61mezkgozjL._AC_SY355_.jpg','1,4',164.90),
('Echo Studio','Som imersivo: 5 alto-falantes que produzem graves potentes, mid-range dinâmico e agudos nítidos. A tecnologia Dolby Atmos proporciona percepção de espaço, clareza e profundidade.','https://m.media-amazon.com/images/I/61lIhZlkROL._AC_SY355_.jpg','1',1614.05),
('Echo Show 10','Desenvolvido para se mover com você: com um display HD de 10,1" que se move automaticamente, as chamadas de vídeo, as receitas e os filmes e séries estarão sempre à vista','https://m.media-amazon.com/images/I/61B62jqg+7L._AC_SY355_.jpg','1,3,4',1804.05),
('Harry Potter e o prisioneiro de Azkaban','As aulas estão de volta à Hogwarts e Harry Potter não vê a hora de embarcar no expresso a vapor que o levará de volta à escola de bruxaria. Mais uma vez suas férias na rua dos Alfeneiros foi triste e solitária.','https://images-na.ssl-images-amazon.com/images/I/81u+ljPVifL.jpg','2,3',41.00),
('Harry Potter e o enigma do príncipe','>Voldemort e dos Comensais da Morte, seus seguidores, cresce mais a cada dia, em meio à batalha entre o bem e o mal. A onda de terror provocada pelo Lorde das Trevas estaria afetando, até mesmo, o mundo dos trouxas','https://images-na.ssl-images-amazon.com/images/I/81yFIh1yoZL.jpg','2,3,4',48.90),
('Harry Potter e as relíquias da morte','Harry Potter e as relíquias da morte de J.K. Rowling, é o sétimo e último livro da série. Voldemorte está cada vez mais forte e Harry Potter precisa encontrar e aniquilar as Horcruxes para enfraquecer-lo e poder enfrentálo.','https://images-na.ssl-images-amazon.com/images/I/81rvO7xcJOL.jpg','2','30.00');



