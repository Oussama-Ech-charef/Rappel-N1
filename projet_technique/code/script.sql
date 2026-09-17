create database billetterie_evenements;

use billetterie_evenements ;


create table organisateur (
id_organisateur int primary key auto_increment,
nom varchar(100) not null,
email varchar(150) unique not null,
mot_de_passe varchar(255) not null,
role enum ('admin','user') default 'user' not null
);


create table category (
id_category int primary key auto_increment,
nom_category varchar(100) not null,
description text
);

create table evenement (
id_evenement int primary key auto_increment,
titre varchar(150) not null,
content text not null,
image varchar(255),
date_evenement date not null,
date_publication datetime not null,
lieu text not null,
prix decimal(10,2) not null,
status enum('publish','draft') not null,
id_organisateur int not null,
id_category int not null,
heure_evenement time not null,
nombre_places int not null,
date_fin date,
foreign key (id_organisateur) references organisateur(id_organisateur),
foreign key (id_category) references category(id_category)


);



INSERT INTO Organisateur (nom, email, mot_de_passe, role)
VALUES ('oussama', 'oussama@gmail.com', '1234', 'admin');


INSERT INTO Category (nom_category, description)
VALUES
('Music', 'Music events and concerts'),
('Sport', 'Sport events and competitions'),
('Technology', 'Technology and innovation events'),
('Culture', 'Cultural and artistic events'),
('Business', 'Business and professional events');




INSERT INTO Evenement
(titre, content, image, date_evenement, date_publication, lieu, prix, status, id_organisateur, id_category, heure_evenement, nombre_places, date_fin)
VALUES
(
    'Music Festival',
    'A live music festival with different artists.',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq3s8x3sKVTeczzjRyVaPg3waQc-a6XCrMC9NnUtrPtCdO9GGN9SZv0zJo&s=10',
    '2026-10-10',
    NOW(),
    'Casablanca',
    150.00,
    'publish',
    1,
    1,
    '19:00:00',
    500,
    '2026-10-10'
),

(
    'Tech Conference',
    'A conference about new technology and innovation.',
    'https://t3.ftcdn.net/jpg/02/00/98/80/360_F_200988031_liIJO5yeUeT9eyXxNaBxVMywrIYbxlGY.jpg',
    '2026-10-20',
    NOW(),
    'Casablanca',
    200.00,
    'publish',
    1,
    3,
    '10:00:00',
    200,
    '2026-10-20'
),
(
    'Art Exhibition',
    'An exhibition showing modern Moroccan art.',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW0Rj6qEYvGkefWC_x84i5K-tOvXL59o-CXMEWG0sQkgWOJVHcvMGOFn0&s=10',
    '2026-10-25',
    NOW(),
    'Marrakech',
    80.00,
    'publish',
    1,
    4,
    '14:00:00',
    150,
    '2026-10-25'
),
(
    'Business Meeting',
    'A professional event for entrepreneurs.',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhwbq-qQWnJO2uNkZ10AjqTPA-eTlZVpsdvT5_B9HVPHfN8y_4wF0Ppj4k&s=10',
    '2026-11-01',
    NOW(),
    'Casablanca',
    100.00,
    'publish',
    1,
    5,
    '09:00:00',
    100,
    '2026-11-01'
);
