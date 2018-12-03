DROP DATABASE IF EXISTS BD_SupOn;
CREATE DATABASE BD_SupOn;

USE BD_SupOn;

CREATE TABLE  Cliente(
	tipo VARCHAR(3) NOT NULL,
	nome VARCHAR(80) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    cpf BIGINT NOT NULL,
    login VARCHAR(25) NOT NULL,
    senha VARCHAR(25) NOT NULL,
    PRIMARY KEY(cpf)
);

CREATE TABLE Supermercado(
	nomeF VARCHAR(80) NOT NULL,
    nomeO VARCHAR(80) NOT NULL,
    cnpj BIGINT NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    valorMaximoDistancia FLOAT NOT NULL,
    valorMinimoPreco FLOAT NOT NULL,
    login VARCHAR(80) NOT NULL,
    senha VARCHAR(80) NOT NULL,
    PRIMARY KEY(cnpj)
);

CREATE TABLE Carrinho(
	codigo INT AUTO_INCREMENT NOT NULL,
    data DATE NOT NULL,
    cpfCliente BIGINT NOT NULL,
    PRIMARY KEY(codigo),
    FOREIGN KEY(cpfCliente) REFERENCES Cliente(cpf)
);

CREATE TABLE Produto(
	codigo INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(80) NOT NULL,
    marca VARCHAR(80) NOT NULL,
    preco FLOAT NOT NULL,
    descricao VARCHAR(80) NOT NULL,
    quantidade INT NOT NULL,
    cnpj BIGINT,
    PRIMARY KEY(codigo),
    FOREIGN KEY(cnpj) REFERENCES Supermercado(cnpj)
);

CREATE TABLE Pagamento(
	codigo INT AUTO_INCREMENT NOT NULL,
    valor FLOAT  NOT NULL,
    dataDeEmissao DATE NOT NULL,
    dataDeQuitacao DATE NOT NULL,
    cpfCliente BIGINT,
    PRIMARY KEY(codigo),
    FOREIGN KEY(cpfCliente) REFERENCES Cliente(cpf)
);

CREATE TABLE Item_Carrinho(
	codCarrinho INT NOT NULL,
    qtdProduto INT NOT NULL,
    valorProduto FLOAT NOT NULL,
    codProduto INT NOT NULL,
    PRIMARY KEY(codCarrinho, codProduto),
    FOREIGN KEY(codCarrinho) REFERENCES Carrinho(codigo),
    FOREIGN KEY(codProduto) REFERENCES Produto(codigo)
);

insert into Cliente(tipo, nome, endereco, cpf, login, senha) values ('adm', 'Chico', 'Rua tal e tal', 12312312312, 'qwe', 'qwe');
