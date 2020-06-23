CREATE TABLE `saml`.users
(
    username VARCHAR(30) NOT NULL PRIMARY KEY,
    password TEXT        NOT NULL COLLATE utf8_general_ci,
    salt     TEXT        NOT NULL,
    email    TEXT        NOT NULL
);

insert into `saml`.users values ('test1', 'test', '77e7aaed0a09a0b0c4635547f84369d4f666bbfcd06c9fc234589ba6a81f64e6', 'test1@example.com');
insert into `saml`.users values ('test2', 'test', '3b19c16f7e139cd8ad3233b70aec350be35ab39780bfcd8db34c7300b6cb9471', 'test2@example.com');
insert into `saml`.users values ('test3', 'test', '973e35845a4eccd46106174df1047004cae7f3634375250b751963450cf74c18', 'test3@example.com');
insert into `saml`.users values ('test4', 'test', '3e1f78ac5f853f71e3119595dc48bc17221d0bf429cd24fde115cd022e561c3f', 'test4@example.com');
insert into `saml`.users values ('test5', 'test', '801b6a1d7641b988cfbcc99b5540a18f3dec268a04b387002db78fde022bd11e', 'test5@example.com');

update `saml`.users set password = SHA2(CONCAT(('77e7aaed0a09a0b0c4635547f84369d4f666bbfcd06c9fc234589ba6a81f64e6'), 'test'),256) where username = 'test1';
update `saml`.users set password = SHA2(CONCAT(('3b19c16f7e139cd8ad3233b70aec350be35ab39780bfcd8db34c7300b6cb9471'), 'test'),256) where username = 'test2';
update `saml`.users set password = SHA2(CONCAT(('973e35845a4eccd46106174df1047004cae7f3634375250b751963450cf74c18'), 'test'),256) where username = 'test3';
update `saml`.users set password = SHA2(CONCAT(('3e1f78ac5f853f71e3119595dc48bc17221d0bf429cd24fde115cd022e561c3f'), 'test'),256) where username = 'test4';
update `saml`.users set password = SHA2(CONCAT(('801b6a1d7641b988cfbcc99b5540a18f3dec268a04b387002db78fde022bd11e'), 'test'),256) where username = 'test5';
