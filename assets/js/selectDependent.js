(function() {

    var data = [{

        text: 'Departamento',

        value: '0',

        children: [{

            text: 'Provincia',

            value: '0',

            children: [{

                text: 'Distrito',

                value: '0'

            }]

        }]

    }, {

        text: 'Amazonas',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Chachapoyas',

            children: [

                "Seleccione ...",

                "Chachapoyas",

                "Asunción",

                "Balsas",

                "Cheto",

                "Chiliquin",

                "Chuquibamba",

                "Granada",

                "Huancas",

                "La Jalca",

                "Leimebamba",

                "Levanto",

                "Magdalena",

                "Mariscal Castilla",

                "Molinopampa",

                "Montevideo",

                "Olleros",

                "Quinjalca",

                "San Francisco de Daguas",

                "San Isidro de Maino", "Soloco", "Sonche"

            ]

        }, {

            text: "Bagua",

            children: [

                "Seleccione ...",

                "Bagua", "Aramango",

                "Copallin", "El Parco",

                "Imaza", "La Peca"

            ]

        }, {

            text: "Bongará",

            children: [

                "Seleccione ...",

                "Jumbilla",

                "Chisquilla",

                "Churuja",

                "Corosha",

                "Cuispes",

                "Florida",

                "Jazan",

                "Recta",

                "San Carlos",

                "Shipasbamba",

                "Valera",

                "Yambrasbamba"

            ]

        }, {

            text: "Condorcanqui",

            children: [

                "Seleccione ...",

                "Nieva",

                "El Cenepa",

                "Río Santiago"

            ]

        }, {

            text: "Luya",

            children: [

                "Seleccione ...",

                "Luya",

                "Lamud",

                "Camporredondo",

                "Cocabamba",

                "Colcamar",

                "Conila",

                "Inguilpata",

                "Longuita",

                "Lonya Chico",

                "Luya Viejo",

                "María", "Ocalli",

                "Ocumal",

                "Pisuquia",

                "Providencia",

                "San Cristóbal",

                "San Francisco de Yeso",

                "San Jerónimo",

                "San Juan de Lopecancha",

                "Santa Catalina",

                "Santo Tomas",

                "Tingo",

                "Trita"

            ]

        }, {

            text: "Rodríguez de Mendoza",

            children: [

                "Seleccione ...",

                "San Nicolás",

                "Chirimoto",

                "Cochamal",

                "Huambo",

                "Limabamba",

                "Longar",

                "Mariscal Benavides",

                "Milpuc",

                "Omia",

                "Santa Rosa",

                "Totora",

                "Vista Alegre"

            ]

        }, {

            text: "Utcubamba",

            children: [

                "Seleccione ...",

                "Bagua Grande",

                "Cajaruro",

                "Cumba",

                "El Milagro",

                "Jamalca",

                "Lonya Grande",

                "Yamon"

            ]

        }]

    }, {

        text: 'Áncash',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Huaraz',

            children: [

                "Seleccione ...",

                "Huaraz",

                "Cochabamba",

                "Colcabamba",

                "Huanchay",

                "Independencia",

                "Jangas",

                "La Libertad",

                "Olleros",

                "Pampas Grande",

                "Pariacoto",

                "Pira",

                "Tarica"

            ]

        }, {

            text: "Aija",

            children: [

                "Seleccione ...",

                "Aija",

                "Coris",

                "Huacllan",

                "La Merced",

                "Succha"

            ]

        }, {

            text: "Antonio Raymondi",

            children: [

                "Seleccione ...",

                "Llamellin",

                "Aczo",

                "Chaccho",

                "Chingas",

                "Mirgas",

                "San Juan de Rontoy"

            ]

        }, {

            text: "Asunción",

            children: [

                "Seleccione ...",

                "Chacas",

                "Acochaca"

            ]

        }, {

            text: "Bolognesi",

            children: [

                "Seleccione ...",

                "Chiquian",

                "Abelardo Pardo Lezameta",

                "Antonio Raymondi",

                "Aquia",

                "Cajacay",

                "Canis",

                "Colquioc",

                "Huallanca",

                "Huasta",

                "Huayllacayan",

                "La Primavera",

                "Mangas",

                "Pacllon",

                "San Miguel de Corpanqui",

                "Ticllos"





            ]

        }, {

            text: "Carhuaz",

            children: [

                "Seleccione ...",

                "Carhuaz",

                "Acopampa",

                "Amashca",

                "Anta",

                "Ataquero",

                "Marcara",

                "Pariahuanca",

                "San Miguel de Aco",

                "Shilla",

                "Tinco",

                "Yungar"

            ]

        }, {

            text: "Carlos Fermín Fitzcarrald",

            children: [

                "Seleccione ...",

                "San Luis",

                "San Nicolás",

                "Yauya"

            ]

        }, {

            text: "Casma",

            children: [

                "Seleccione ...",

                "Casma",

                "Buena Vista Alta",

                "Comandante Noel",

                "Yautan"

            ]

        }, {

            text: "Corongo",

            children: [

                "Seleccione ...",

                "Corongo",

                "Aco",

                "Bambas",

                "Cusca",

                "La Pampa",

                "Yanac",

                "Yupan"

            ]

        }, {

            text: "Huari",

            children: [

                "Seleccione ...",

                "Huari",

                "Anra",

                "Cajay",

                "Chavin de Huantar",

                "Huacachi",

                "Huacchis",

                "Huachis",

                "Huantar",

                "Masin",

                "Paucas",

                "Ponto",

                "Rahuapampa",

                "Rapayan",

                "San Marcos",

                "San Pedro de Chana",

                "Uco"

            ]

        }, {

            text: "Huarmey",

            children: [

                "Seleccione ...",

                "Huarmey",

                "Cochapeti",

                "Culebras",

                "Huayan",

                "Malvas"

            ]

        }, {

            text: "Huaylas",

            children: [

                "Seleccione ...",

                "Caraz",

                "Huallanca",

                "Huata",

                "Huaylas",

                "Mato",

                "Pamparomas",

                "Pueblo Libre",

                "Santa Cruz",

                "Santo Toribio",

                "Yuracmarca"

            ]

        }, {

            text: "Mariscal Luzuriaga",

            children: [

                "Seleccione ...",

                "Piscobamba",

                "Casca",

                "Eleazar Guzmán Barron",

                "Fidel Olivas Escudero",

                "Llama",

                "Llumpa",

                "Lucma",

                "Musga"

            ]

        }, {

            text: "Ocros",

            children: [

                "Seleccione ...",

                "Ocros",

                "Acas",

                "Cajamarquilla",

                "Carhuapampa",

                "Cochas",

                "Congas",

                "Llipa",

                "San Cristóbal de Rajan",

                "San Pedro",

                "Santiago de Chilcas"

            ]

        }, {

            text: "Pallasca",

            children: [

                "Seleccione ...",

                "Cabana",

                "Bolognesi",

                "Conchucos",

                "Huacaschuque",

                "Huandoval",

                "Lacabamba",

                "Llapo",

                "Pallasca",

                "Pampas",

                "Santa Rosa",

                "Tauca"

            ]

        }, {

            text: "Pomabamba",

            children: [

                "Seleccione ...",

                "Pomabamba",

                "Huayllan",

                "Parobamba",

                "Quinuabamba"

            ]

        }, {

            text: "Recuay",

            children: [

                "Seleccione ...",

                "Recuay",

                "Catac",

                "Cotaparaco",

                "Huayllapampa",

                "Llacllin",

                "Marca",

                "Pampas Chico",

                "Pararin",

                "Tapacocha",

                "Ticapampa"

            ]

        }, {

            text: "Santa",

            children: [

                "Seleccione ...",

                "Chimbote",

                "Cáceres del Perú",

                "Coishco",

                "Macate",

                "Moro",

                "Nepeña",

                "Samanco",

                "Santa",

                "Nuevo Chimbote"

            ]

        }, {

            text: "Sihuas",

            children: [

                "Seleccione ...",

                "Sihuas",

                "Acobamba",

                "Alfonso Ugarte",

                "Cashapampa",

                "Chingalpo",

                "Huayllabamba",

                "Quiches",

                "Ragash",

                "San Juan",

                "Sicsibamba"



            ]

        }, {

            text: "Yungay",

            children: [

                "Seleccione ...",

                "Yungay",

                "Cascapara",

                "Mancos",

                "Matacoto",

                "Quillo",

                "Ranrahirca",

                "Shupluy",

                "Yanama"

            ]

        }]

    }, {

        text: 'Apurímac',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Abancay',

            children: [

                "Seleccione ...",

                "Abancay",

                "Chacoche",

                "Circa",

                "Curahuasi",

                "Huanipaca",

                "Lambrama",

                "Pichirhua",

                "San Pedro de Cachora",

                "Tamburco"

            ]

        }, {

            text: "Bagua",

            children: [

                "Seleccione ...",

                "Bagua", "Aramango",

                "Copallin", "El Parco",

                "Imaza", "La Peca"

            ]

        }, {

            text: "Andahuaylas",

            children: [

                "Seleccione ...",

                "Andahuaylas",

                "Andarapa",

                "Chiara",

                "Huancarama",

                "Huancaray",

                "Huayana",

                "Kishuara",

                "Pacobamba",

                "Pacucha",

                "Pampachiri",

                "Pomacocha",

                "San Antonio de Cachi",

                "San Jerónimo",

                "San Miguel de Chaccrampa",

                "Santa María de Chicmo",

                "Talavera",

                "Tumay Huaraca",

                "Turpo",

                "Kaquiabamba",

                "José María Arguedas"

            ]

        }, {

            text: "Antabamba",

            children: [

                "Seleccione ...",

                "Antabamba",

                "El Oro",

                "Huaquirca",

                "Juan Espinoza Medrano",

                "Oropesa",

                "Pachaconas",

                "Sabaino"

            ]

        }, {

            text: "Aymaraes",

            children: [

                "Seleccione ...",

                "Chalhuanca",

                "Capaya",

                "Caraybamba",

                "Chapimarca",

                "Colcabamba",

                "Cotaruse",

                "Ihuayllo",

                "Justo Apu Sahuaraura",

                "Lucre",

                "Pocohuanca",

                "San Juan de Chacña",

                "Sañayca",

                "Soraya",

                "Tapairihua",

                "Tintay",

                "Toraya",

                "Yanaca"

            ]

        }, {

            text: "Cotabambas",

            children: [

                "Seleccione ...",

                "Tambobamba",

                "Cotabambas",

                "Coyllurqui",

                "Haquira",

                "Mara",

                "Challhuahuacho"

            ]

        }, {

            text: "Chincheros",

            children: [

                "Seleccione ...",

                "Chincheros",

                "Anco_Huallo",

                "Cocharcas",

                "Huaccana",

                "Ocobamba",

                "Ongoy",

                "Uranmarca",

                "Ranracancha",

                "Rocchacc",

                "El Porvenir"

            ]

        }, {

            text: "Grau",

            children: [

                "Seleccione ...",

                "Chuquibambilla",

                "Curpahuasi",

                "Gamarra",

                "Huayllati",

                "Mamara",

                "Micaela Bastidas",

                "Pataypampa",

                "Progreso",

                "San Antonio",

                "Santa Rosa",

                "Turpay",

                "Vilcabamba",

                "Virundo",

                "Curasco"

            ]

        }]

    }, {

        text: 'Arequipa',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Arequipa',

            children: [

                "Seleccione ...",

                "Arequipa",

                "Alto Selva Alegre",

                "Cayma",

                "Cerro Colorado",

                "Characato",

                "Chiguata",

                "Jacobo Hunter",

                "La Joya",

                "Mariano Melgar",

                "Miraflores",

                "Mollebaya",

                "Paucarpata",

                "Pocsi",

                "Polobaya",

                "Quequeña",

                "Sabandia",

                "Sachaca",

                "San Juan de Siguas",

                "San Juan de Tarucani",

                "Santa Isabel de Siguas",

                "Santa Rita de Siguas",

                "Socabaya",

                "Tiabaya",

                "Uchumayo",

                "Vitor",

                "Yanahuara",

                "Yarabamba",

                "Yura",

                "José Luis Bustamante Y Rivero"

            ]

        }, {

            text: "Bagua",

            children: [

                "Seleccione ...",

                "Bagua", "Aramango",

                "Copallin", "El Parco",

                "Imaza", "La Peca"

            ]

        }, {

            text: "Camaná",

            children: [

                "Seleccione ...",

                "Camaná",

                "José María Quimper",

                "Mariano Nicolás Valcárcel",

                "Mariscal Cáceres",

                "Nicolás de Pierola",

                "Ocoña",

                "Quilca",

                "Samuel Pastor"

            ]

        }, {

            text: "Caravelí",

            children: [

                "Seleccione ...",

                "Caravelí",

                "Acarí",

                "Atico",

                "Atiquipa",

                "Bella Unión",

                "Cahuacho",

                "Chala",

                "Chaparra",

                "Huanuhuanu",

                "Jaqui",

                "Lomas",

                "Quicacha",

                "Yauca"

            ]

        }, {

            text: "Castilla",

            children: [

                "Seleccione ...",

                "Aplao",

                "Andagua",

                "Ayo",

                "Chachas",

                "Chilcaymarca",

                "Choco",

                "Huancarqui",

                "Machaguay",

                "Orcopampa",

                "Pampacolca",

                "Tipan",

                "Uñon",

                "Uraca",

                "Viraco"

            ]

        }, {

            text: "Caylloma",

            children: [

                "Seleccione ...",

                "Chivay",

                "Achoma",

                "Cabanaconde",

                "Callalli",

                "Caylloma",

                "Coporaque",

                "Huambo",

                "Huanca",

                "Ichupampa",

                "Lari",

                "Lluta",

                "Maca",

                "Madrigal",

                "San Antonio de Chuca",

                "Sibayo",

                "Tapay",

                "Tisco",

                "Tuti",

                "Yanque",

                "Majes"

            ]

        }, {

            text: "Condesuyos",

            children: [

                "Seleccione ...",

                "Chuquibamba",

                "Andaray",

                "Cayarani",

                "Chichas",

                "Iray",

                "Río Grande",

                "Salamanca",

                "Yanaquihua"

            ]

        }, {

            text: "Islay",

            children: [

                "Seleccione ...",

                "Islay",

                "Mollendo",

                "Cocachacra",

                "Dean Valdivia",

                "Mejia",

                "Punta de Bombón"

            ]

        }, {

            text: "La Unión",

            children: [

                "Seleccione ...",

                "Cotahuasi",

                "Alca",

                "Charcana",

                "Huaynacotas",

                "Pampamarca",

                "Puyca",

                "Quechualla",

                "Sayla",

                "Tauria",

                "Tomepampa",

                "Toro"

            ]

        }]

    }, {

        text: 'Ayacucho',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Huamanga',

            children: [

                "Seleccione ...",

                "Ayacucho",

                "Acocro",

                "Acos Vinchos",

                "Carmen Alto",

                "Chiara",

                "Ocros",

                "Pacaycasa",

                "Quinua",

                "San José de Ticllas",

                "San Juan Bautista",

                "Santiago de Pischa",

                "Socos",

                "Tambillo",

                "Vinchos",

                "Jesús Nazareno",

                "Andrés Avelino Cáceres Dorregaray"

            ]

        }, {

            text: "Cangallo",

            children: [

                "Seleccione ...",

                "Cangallo",

                "Chuschi",

                "Los Morochucos",

                "María Parado de Bellido",

                "Paras",

                "Totos"

            ]

        }, {

            text: "Huanca Sancos",

            children: [

                "Seleccione ...",

                "Sancos",

                "Carapo",

                "Sacsamarca",

                "Santiago de Lucanamarca"

            ]

        }, {

            text: "Huanta",

            children: [

                "Seleccione ...",

                "Huanta",

                "Ayahuanco",

                "Huamanguilla",

                "Iguain",

                "Luricocha",

                "Santillana",

                "Sivia",

                "Llochegua",

                "Canayre",

                "Uchuraccay",

                "Pucacolpa",

                "Chaca"

            ]

        }, {

            text: "La Mar",

            children: [

                "Seleccione ...",

                "San Miguel",

                "Anco",

                "Ayna",

                "Chilcas",

                "Chungui",

                "Luis Carranza",

                "Santa Rosa",

                "Tambo",

                "Samugari",

                "Anchihuay"

            ]

        }, {

            text: "Lucanas",

            children: [

                "Seleccione ...",

                "Puquio",

                "Aucara",

                "Cabana",

                "Carmen Salcedo",

                "Chaviña",

                "Chipao",

                "Huac-Huas",

                "Laramate",

                "Leoncio Prado",

                "Llauta",

                "Lucanas",

                "Ocaña",

                "Otoca",

                "Saisa",

                "San Cristóbal",

                "San Juan",

                "San Pedro",

                "San Pedro de Palco",

                "Sancos",

                "Santa Ana de Huaycahuacho",

                "Santa Lucia"

            ]

        }, {

            text: "Parinacochas",

            children: [

                "Seleccione ...",

                "Coracora",

                "Chumpi",

                "Coronel Castañeda",

                "Pacapausa",

                "Pullo",

                "Puyusca",

                "San Francisco de Ravacayco",

                "Upahuacho"

            ]

        }, {

            text: "Páucar del Sara Sara",

            children: [

                "Seleccione ...",

                "Pausa",

                "Colta",

                "Corculla",

                "Lampa",

                "Marcabamba",

                "Oyolo",

                "Pararca",

                "San Javier de Alpabamba",

                "San José de Ushua",

                "Sara Sara"

            ]

        }, {

            text: "Sucre",

            children: [

                "Seleccione ...",

                "Querobamba",

                "Belén",

                "Chalcos",

                "Chilcayoc",

                "Huacaña",

                "Morcolla",

                "Paico",

                "San Pedro de Larcay",

                "San Salvador de Quije",

                "Santiago de Paucaray",

                "Soras"

            ]

        }, {

            text: "Víctor Fajardo",

            children: [

                "Seleccione ...",

                "Huancapi",

                "Alcamenca",

                "Apongo",

                "Asquipata",

                "Canaria",

                "Cayara",

                "Colca",

                "Huamanquiquia",

                "Huancaraylla",

                "Huaya",

                "Sarhua",

                "Vilcanchos"

            ]

        }, {

            text: "Vilcas Huamán",

            children: [

                "Seleccione ...",

                "Vilcas Huamán",

                "Accomarca",

                "Carhuanca",

                "Concepción",

                "Huambalpa",

                "Independencia",

                "Saurama",

                "Vischongo"

            ]

        }]

    }, {

        text: 'Cajamarca',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Cajamarca',

            children: [

                "Seleccione ...",

                "Cajamarca",

                "Asunción",

                "Chetilla",

                "Cospan",

                "Encañada",

                "Jesús",

                "Llacanora",

                "Los Baños del Inca",

                "Magdalena",

                "Matara",

                "Namora",

                "San Juan"

            ]

        }, {

            text: "Cajabamba",

            children: [

                "Seleccione ...",

                "Cajabamba",

                "Cachachi",

                "Condebamba",

                "Sitacocha"

            ]

        }, {

            text: "Celendín",

            children: [

                "Seleccione ...",

                "Celendín",

                "Chumuch",

                "Cortegana",

                "Huasmin",

                "Jorge Chávez",

                "José Gálvez",

                "Miguel Iglesias",

                "Oxamarca",

                "Sorochuco",

                "Sucre",

                "Utco",

                "La Libertad de Pallan"

            ]

        }, {

            text: "Chota",

            children: [

                "Seleccione ...",

                "Chota",

                "Anguia",

                "Chadin",

                "Chiguirip",

                "Chimban",

                "Choropampa",

                "Cochabamba",

                "Conchan",

                "Huambos",

                "Lajas",

                "Llama",

                "Miracosta",

                "Paccha",

                "Pion",

                "Querocoto",

                "San Juan de Licupis",

                "Tacabamba",

                "Tocmoche",

                "Chalamarca"

            ]

        }, {

            text: "Contumazá",

            children: [

                "Seleccione ...",

                "Contumazá",

                "Chilete",

                "Cupisnique",

                "Guzmango",

                "San Benito",

                "Santa Cruz de Toledo",

                "Tantarica",

                "Yonan"

            ]

        }, {

            text: "Cutervo",

            children: [

                "Seleccione ...",

                "Cutervo",

                "Callayuc",

                "Choros",

                "Cujillo",

                "La Ramada",

                "Pimpingos",

                "Querocotillo",

                "San Andrés de Cutervo",

                "San Juan de Cutervo",

                "San Luis de Lucma",

                "Santa Cruz",

                "Santo Domingo de la Capilla",

                "Santo Tomas",

                "Socota",

                "Toribio Casanova"

            ]

        }, {

            text: "Hualgayoc",

            children: [

                "Seleccione ...",

                "Bambamarca",

                "Chugur",

                "Hualgayoc"

            ]

        }, {

            text: "Jaén",

            children: [

                "Seleccione ...",

                "Jaén",

                "Bellavista",

                "Chontali",

                "Colasay",

                "Huabal",

                "Las Pirias",

                "Pomahuaca",

                "Pucara",

                "Sallique",

                "San Felipe",

                "San José del Alto",

                "Santa Rosa"

            ]

        }, {

            text: "San Ignacio",

            children: [

                "Seleccione ...",

                "San Ignacio",

                "Chirinos",

                "Huarango",

                "La Coipa",

                "Namballe",

                "San José de Lourdes",

                "Tabaconas"

            ]

        }, {

            text: "San Marcos",

            children: [

                "Seleccione ...",

                "Pedro Gálvez",

                "Chancay",

                "Eduardo Villanueva",

                "Gregorio Pita",

                "Ichocan",

                "José Manuel Quiroz",

                "José Sabogal"

            ]

        }, {

            text: "San Miguel",

            children: [

                "Seleccione ...",

                "San Miguel",

                "Bolívar",

                "Calquis",

                "Catilluc",

                "El Prado",

                "La Florida",

                "Llapa",

                "Nanchoc",

                "Niepos",

                "San Gregorio",

                "San Silvestre de Cochan",

                "Tongod",

                "Unión Agua Blanca"

            ]

        }, {

            text: "San Pablo",

            children: [

                "Seleccione ...",

                "San Pablo",

                "San Bernardino",

                "San Luis",

                "Tumbaden"

            ]

        }, {

            text: "Santa Cruz",

            children: [

                "Seleccione ...",

                "Santa Cruz",

                "Andabamba",

                "Catache",

                "Chancaybaños",

                "La Esperanza",

                "Ninabamba",

                "Pulan",

                "Saucepampa",

                "Sexi",

                "Uticyacu",

                "Yauyucan"

            ]

        }]

    }, {

        text: 'Lima',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Lima',

            children: [

                "Seleccione ...",

                "Lima",

                "Ancón",

                "Ate",

                "Barranco",

                "Breña",

                "Carabayllo",

                "Chaclacayo",

                "Chorrillos",

                "Cieneguilla",

                "Comas",

                "El Agustino",

                "Independencia",

                "Jesús María",

                "La Molina",

                "La Victoria",

                "Lince",

                "Los Olivos",

                "Lurigancho",

                "Lurin",

                "Magdalena del Mar",

                "Pueblo Libre",

                "Miraflores",

                "Pachacamac",

                "Pucusana",

                "Puente Piedra",

                "Punta Hermosa",

                "Punta Negra",

                "Rímac",

                "San Bartolo",

                "San Borja",

                "San Isidro",

                "San Juan de Lurigancho",

                "San Juan de Miraflores",

                "San Luis",

                "San Martín de Porres",

                "San Miguel",

                "Santa Anita",

                "Santa María del Mar",

                "Santa Rosa",

                "Santiago de Surco",

                "Surquillo",

                "Villa El Salvador",

                "Villa María del Triunfo"

            ]

        }, {

            text: "Barranca",

            children: [

                "Seleccione ...",

                "Barranca",

                "Paramonga",

                "Pativilca",

                "Supe",

                "Supe Puerto"

            ]

        }, {

            text: "Cajatambo",

            children: [

                "Seleccione ...",

                "Cajatambo",

                "Copa",

                "Gorgor",

                "Huancapon",

                "Manas"

            ]

        }, {

            text: "Canta",

            children: [

                "Seleccione ...",

                "Lachaqui",

                "San Buenaventura",

                "Santa Rosa de Quives"

            ]

        }, {

            text: "Cañete",

            children: [

                "Seleccione ...",

                "San Vicente de Cañete",

                "Asia",

                "Calango",

                "Cerro Azul",

                "Chilca",

                "Coayllo",

                "Imperial",

                "Lunahuana",

                "Mala",

                "Nuevo Imperial",

                "Pacaran",

                "Quilmana",

                "San Antonio",

                "San Luis",

                "Santa Cruz de Flores",

                "Zúñiga"

            ]

        }, {

            text: "Huaral",

            children: [

                "Seleccione ...",

                "Huaral",

                "Atavillos Alto",

                "Atavillos Bajo",

                "Aucallama",

                "Chancay",

                "Ihuari",

                "Lampian",

                "Pacaraos",

                "San Miguel de Acos",

                "Santa Cruz de Andamarca",

                "Sumbilca",

                "Veintisiete de Noviembre"

            ]

        }, {

            text: "Huarochirí",

            children: [

                "Seleccione ...",

                "Matucana",

                "Antioquia",

                "Callahuanca",

                "Carampoma",

                "Chicla",

                "Cuenca",

                "Huachupampa",

                "Huanza",

                "Huarochiri",

                "Lahuaytambo",

                "Langa",

                "Laraos",

                "Mariatana",

                "Ricardo Palma",

                "San Andrés de Tupicocha",

                "San Antonio",

                "San Bartolomé",

                "San Damian",

                "San Juan de Iris",

                "San Juan de Tantaranche",

                "San Lorenzo de Quinti",

                "San Mateo",

                "San Mateo de Otao",

                "San Pedro de Casta",

                "San Pedro de Huancayre",

                "Sangallaya",

                "Santa Cruz de Cocachacra",

                "Santa Eulalia",

                "Santiago de Anchucaya",

                "Santiago de Tuna",

                "Santo Domingo de Los Olleros",

                "Surco"

            ]

        }, {

            text: "Huaura",

            children: [

                "Seleccione ...",

                "Huacho",

                "Ambar",

                "Caleta de Carquin",

                "Checras",

                "Hualmay",

                "Huaura",

                "Leoncio Prado",

                "Paccho",

                "Santa Leonor",

                "Santa María",

                "Sayan",

                "Vegueta"

            ]

        }, {

            text: "Oyón",

            children: [

                "Seleccione ...",

                "Oyon",

                "Andajes",

                "Caujul",

                "Cochamarca",

                "Navan",

                "Pachangara"

            ]

        }, {

            text: "Yauyos",

            children: [

                "Seleccione ...",

                "Yauyos",

                "Alis",

                "Allauca",

                "Ayaviri",

                "Azángaro",

                "Cacra",

                "Carania",

                "Catahuasi",

                "Chocos",

                "Cochas",

                "Colonia",

                "Hongos",

                "Huampara",

                "Huancaya",

                "Huangascar",

                "Huantan",

                "Huañec",

                "Laraos",

                "Lincha",

                "Madean",

                "Miraflores",

                "Omas",

                "Putinza",

                "Quinches",

                "Quinocay",

                "San Joaquín",

                "San Pedro de Pilas",

                "Tanta",

                "Tauripampa",

                "Tomas",

                "Tupe",

                "Viñac",

                "Vitis"

            ]

        }]

    }, {

        text: 'Callao',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Const. del Callao',

            children: [

                "Seleccione ...",

                "Callao",

                "Bellavista",

                "Carmen de la Legua Reynoso",

                "La Perla",

                "La Punta",

                "Ventanilla",

                "Mi Perú"

            ]

        }]

    }, {

        text: 'Cusco',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Cusco',

            children: [

                "Seleccione ...",

                "Cusco",

                "Ccorca",

                "Poroy",

                "San Jerónimo",

                "San Sebastian",

                "Santiago",

                "Saylla",

                "Wanchaq"

            ]

        }, {

            text: 'Acomayo',

            children: [

                "Seleccione ...",

                "Acomayo",

                "Acopia",

                "Acos",

                "Mosoc Llacta",

                "Pomacanchi",

                "Rondocan",

                "Sangarara"

            ]

        }, {

            text: 'Anta',

            children: [

                "Seleccione ...",

                "Anta",

                "Ancahuasi",

                "Cachimayo",

                "Chinchaypujio",

                "Huarocondo",

                "Limatambo",

                "Mollepata",

                "Pucyura",

                "Zurite"

            ]

        }, {

            text: 'Calca',

            children: [

                "Seleccione ...",

                "Calca",

                "Coya",

                "Lamay",

                "Lares",

                "Pisac",

                "San Salvador",

                "Taray",

                "Yanatile"

            ]

        }, {

            text: 'Canas',

            children: [

                "Seleccione ...",

                "Yanaoca",

                "Checca",

                "Kunturkanki",

                "Langui",

                "Layo",

                "Pampamarca",

                "Quehue",

                "Tupac Amaru"

            ]

        }, {

            text: 'Canchis',

            children: [

                "Seleccione ...",

                "Sicuani",

                "Checacupe",

                "Combapata",

                "Marangani",

                "Pitumarca",

                "San Pablo",

                "San Pedro",

                "Tinta"

            ]

        }, {

            text: 'Chumbivilcas',

            children: [

                "Seleccione ...",

                "Santo Tomas",

                "Capacmarca",

                "Chamaca",

                "Colquemarca",

                "Livitaca",

                "Llusco",

                "Quiñota",

                "Velille"

            ]

        }, {

            text: 'Espinar',

            children: [

                "Seleccione ...",

                "Espinar",

                "Condoroma",

                "Coporaque",

                "Ocoruro",

                "Pallpata",

                "Pichigua",

                "Suyckutambo",

                "Alto Pichigua"

            ]

        }, {

            text: 'La Convención',

            children: [

                "Seleccione ...",

                "Santa Ana",

                "Echarate",

                "Huayopata",

                "Maranura",

                "Ocobamba",

                "Quellouno",

                "Kimbiri",

                "Santa Teresa",

                "Vilcabamba",

                "Pichari",

                "Inkawasi",

                "Villa Virgen",

                "Villa Kintiarina"

            ]

        }, {

            text: 'Paruro',

            children: [

                "Seleccione ...",

                "Paruro",

                "Accha",

                "Ccapi",

                "Colcha",

                "Huanoquite",

                "Omacha",

                "Paccaritambo",

                "Pillpinto",

                "Yaurisque"

            ]

        }, {

            text: 'Paucartambo',

            children: [

                "Seleccione ...",

                "Paucartambo",

                "Caicay",

                "Challabamba",

                "Colquepata",

                "Huancarani",

                "Kosñipata"

            ]

        }, {

            text: 'Quispicanchi',

            children: [

                "Seleccione ...",

                "Urcos",

                "Andahuaylillas",

                "Camanti",

                "Ccarhuayo",

                "Ccatca",

                "Cusipata",

                "Huaro",

                "Lucre",

                "Marcapata",

                "Ocongate",

                "Oropesa",

                "Quiquijana"

            ]

        }, {

            text: 'Urubamba',

            children: [

                "Seleccione ...",

                "Urubamba",

                "Chinchero",

                "Huayllabamba",

                "Machupicchu",

                "Maras",

                "Ollantaytambo",

                "Yucay"

            ]

        }]

    }, {

        text: 'Huancavelica',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Huancavelica',

            children: [

                "Seleccione ...",

                "Huancavelica",

                "Acobambilla",

                "Acoria",

                "Conayca",

                "Cuenca",

                "Huachocolpa",

                "Huayllahuara",

                "Izcuchaca",

                "Laria",

                "Manta",

                "Mariscal Cáceres",

                "Moya",

                "Nuevo Occoro",

                "Palca",

                "Pilchaca",

                "Vilca",

                "Yauli",

                "Ascensión",

                "Huando"

            ]

        }, {

            text: 'Acobamba',

            children: [

                "Seleccione ...",

                "Acobamba",

                "Andabamba",

                "Anta",

                "Caja",

                "Marcas",

                "Paucara",

                "Pomacocha",

                "Rosario"

            ]

        }, {

            text: 'Angaraes',

            children: [

                "Seleccione ...",

                "Lircay",

                "Anchonga",

                "Callanmarca",

                "Ccochaccasa",

                "Chincho",

                "Congalla",

                "Huanca-Huanca",

                "Huayllay Grande",

                "Julcamarca",

                "San Antonio de Antaparco",

                "Santo Tomas de Pata",

                "Secclla"

            ]

        }, {

            text: 'Castrovirreyna',

            children: [

                "Seleccione ...",

                "Castrovirreyna",

                "Arma",

                "Aurahua",

                "Capillas",

                "Chupamarca",

                "Cocas",

                "Huachos",

                "Huamatambo",

                "Mollepampa",

                "San Juan",

                "Santa Ana",

                "Tantara",

                "Ticrapo"

            ]

        }, {

            text: 'Churcampa',

            children: [

                "Churcampa",

                "Anco",

                "Chinchihuasi",

                "El Carmen",

                "La Merced",

                "Locroja",

                "Paucarbamba",

                "San Miguel de Mayocc",

                "San Pedro de Coris",

                "Pachamarca",

                "Cosme"

            ]

        }, {

            text: 'Huaytará',

            children: [

                "Seleccione ...",

                "Huaytara",

                "Ayavi",

                "Córdova",

                "Huayacundo Arma",

                "Laramarca",

                "Ocoyo",

                "Pilpichaca",

                "Querco",

                "Quito-Arma",

                "San Antonio de Cusicancha",

                "San Francisco de Sangayaico",

                "San Isidro",

                "Santiago de Chocorvos",

                "Santiago de Quirahuara",

                "Santo Domingo de Capillas",

                "Tambo"

            ]

        }, {

            text: 'Tayacaja',

            children: [

                "Seleccione ...",

                "Pampas",

                "Acostambo",

                "Acraquia",

                "Ahuaycha",

                "Colcabamba",

                "Daniel Hernández",

                "Huachocolpa",

                "Huaribamba",

                "Ñahuimpuquio",

                "Pazos",

                "Quishuar",

                "Salcabamba",

                "Salcahuasi",

                "San Marcos de Rocchac",

                "Surcubamba",

                "Tintay Puncu",

                "Quichuas",

                "Andaymarca",

                "Roble",

                "Pichos"

            ]

        }]

    }, {

        text: 'Huánuco',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Huánuco',

            children: [

                "Seleccione ...",

                "Huanuco",

                "Amarilis",

                "Chinchao",

                "Churubamba",

                "Margos",

                "Quisqui",

                "San Francisco de Cayran",

                "San Pedro de Chaulan",

                "Santa María del Valle",

                "Yarumayo",

                "Pillco Marca",

                "Yacus",

                "San Pablo de Pillao"

            ]

        }, {

            text: 'Ambo',

            children: [

                "Seleccione ...",

                "Ambo",

                "Cayna",

                "Colpas",

                "Conchamarca",

                "Huacar",

                "San Francisco",

                "San Rafael",

                "Tomay Kichwa"

            ]

        }, {

            text: 'Dos de Mayo',

            children: [

                "Seleccione ...",

                "La Unión",

                "Chuquis",

                "Marías",

                "Pachas",

                "Quivilla",

                "Ripan",

                "Shunqui",

                "Sillapata",

                "Yanas"

            ]

        }, {

            text: 'Huacaybamba',

            children: [

                "Seleccione ...",

                "Huacaybamba",

                "Canchabamba",

                "Cochabamba",

                "Pinra"

            ]

        }, {

            text: 'Huamalíes',

            children: [

                "Seleccione ...",

                "Llata",

                "Arancay",

                "Chavín de Pariarca",

                "Jacas Grande",

                "Jircan",

                "Miraflores",

                "Monzón",

                "Punchao",

                "Puños",

                "Singa",

                "Tantamayo"

            ]

        }, {

            text: 'Leoncio Prado',

            children: [

                "Seleccione ...",

                "Rupa-Rupa",

                "Daniel Alomía Robles",

                "Hermílio Valdizan",

                "José Crespo y Castillo",

                "Luyando",

                "Mariano Damaso Beraun",

                "Pucayacu",

                "Castillo Grande"

            ]

        }, {

            text: 'Marañón',

            children: [

                "Seleccione ...",

                "Huacrachuco",

                "Cholon",

                "San Buenaventura",

                "La Morada",

                "Santa Rosa de Alto Yanajanca"

            ]

        }, {

            text: 'Pachitea',

            children: [

                "Seleccione ...",

                "Panao",

                "Chaglla",

                "Molino",

                "Umari"

            ]

        }, {

            text: 'Puerto Inca',

            children: [

                "Seleccione ...",

                "Puerto Inca",

                "Codo del Pozuzo",

                "Honoria",

                "Tournavista",

                "Yuyapichis"

            ]

        }, {

            text: 'Lauricocha',

            children: [

                "Seleccione ...",

                "Jesús",

                "Baños",

                "Jivia",

                "Queropalca",

                "Rondos",

                "San Francisco de Asís",

                "San Miguel de Cauri"

            ]

        }, {

            text: 'Yarowilca',

            children: [

                "Seleccione ...",

                "Chavinillo",

                "Cahuac",

                "Chacabamba",

                "Aparicio Pomares",

                "Jacas Chico",

                "Obas",

                "Pampamarca",

                "Choras"

            ]

        }]

    }, {

        text: 'Junín',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Huancayo',

            children: [

                "Seleccione ...",

                "Huancayo",

                "Carhuacallanga",

                "Chacapampa",

                "Chicche",

                "Chilca",

                "Chongos Alto",

                "Chupuro",

                "Colca",

                "Cullhuas",

                "El Tambo",

                "Huacrapuquio",

                "Hualhuas",

                "Huancan",

                "Huasicancha",

                "Huayucachi",

                "Ingenio",

                "Pariahuanca",

                "Pilcomayo",

                "Pucara",

                "Quichuay",

                "Quilcas",

                "San Agustín",

                "San Jerónimo de Tunan",

                "Saño",

                "Sapallanga",

                "Sicaya",

                "Santo Domingo de Acobamba",

                "Viques"

            ]

        }, {

            text: 'Concepción',

            children: [

                "Seleccione ...",

                "Concepción",

                "Aco",

                "Andamarca",

                "Chambara",

                "Cochas",

                "Comas",

                "Heroínas Toledo",

                "Manzanares",

                "Mariscal Castilla",

                "Matahuasi",

                "Mito",

                "Nueve de Julio",

                "Orcotuna",

                "San José de Quero",

                "Santa Rosa de Ocopa"

            ]

        }, {

            text: 'Chanchamayo',

            children: [

                "Seleccione ...",

                "Chanchamayo",

                "Perene",

                "Pichanaqui",

                "San Luis de Shuaro",

                "San Ramón",

                "Vitoc"

            ]

        }, {

            text: 'Jauja',

            children: [

                "Seleccione ...",

                "Jauja",

                "Acolla",

                "Apata",

                "Ataura",

                "Canchayllo",

                "Curicaca",

                "El Mantaro",

                "Huamali",

                "Huaripampa",

                "Huertas",

                "Janjaillo",

                "Julcán",

                "Leonor Ordóñez",

                "Llocllapampa",

                "Marco",

                "Masma",

                "Masma Chicche",

                "Molinos",

                "Monobamba",

                "Muqui",

                "Muquiyauyo",

                "Paca",

                "Paccha",

                "Pancan",

                "Parco",

                "Pomacancha",

                "Ricran",

                "San Lorenzo",

                "San Pedro de Chunan",

                "Sausa",

                "Sincos",

                "Tunan Marca",

                "Yauli",

                "Yauyos"

            ]

        }, {

            text: 'Junín',

            children: [

                "Seleccione ...",

                "Junín",

                "Carhuamayo",

                "Ondores",

                "Ulcumayo",

                "Tantamayo"

            ]

        }, {

            text: 'Satipo',

            children: [

                "Seleccione ...",

                "Satipo",

                "Coviriali",

                "Llaylla",

                "Mazamari",

                "Pampa Hermosa",

                "Pangoa",

                "Río Negro",

                "Río Tambo",

                "Vizcatan del Ene"

            ]

        }, {

            text: 'Tarma',

            children: [

                "Seleccione ...",

                "Tarma",

                "Acobamba",

                "Huaricolca",

                "Huasahuasi",

                "La Unión",

                "Palca",

                "Palcamayo",

                "San Pedro de Cajas",

                "Tapo"

            ]

        }, {

            text: 'Yauli',

            children: [

                "Seleccione ...",

                "Yauli",

                "La Oroya",

                "Chacapalpa",

                "Huay-Huay",

                "Marcapomacocha",

                "Morococha",

                "Paccha",

                "Santa Bárbara de Carhuacayan",

                "Santa Rosa de Sacco",

                "Suitucancha"

            ]

        }, {

            text: 'Chupaca',

            children: [

                "Seleccione ...",

                "Chupaca",

                "Ahuac",

                "Chongos Bajo",

                "Huachac",

                "Huamancaca Chico",

                "San Juan de Iscos",

                "San Juan de Jarpa",

                "Tres de Diciembre",

                "Yanacancha"

            ]

        }]

    }, {

        text: 'La Libertad',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Trujillo',

            children: [

                "Seleccione ...",

                "Trujillo",

                "El Porvenir",

                "Florencia de Mora",

                "Huanchaco",

                "La Esperanza",

                "Laredo",

                "Moche",

                "Poroto",

                "Salaverry",

                "Simbal",

                "Victor Larco Herrera"

            ]

        }, {

            text: 'Ascope',

            children: [

                "Seleccione ...",

                "Ascope",

                "Chicama",

                "Chocope",

                "Magdalena de Cao",

                "Paijan",

                "Rázuri",

                "Santiago de Cao",

                "Casa Grande"

            ]

        }, {

            text: 'Bolívar',

            children: [

                "Seleccione ...",

                "Bolívar",

                "Bambamarca",

                "Condormarca",

                "Longotea",

                "Uchumarca",

                "Ucuncha"

            ]

        }, {

            text: 'Chepén',

            children: [

                "Seleccione ...",

                "Chepén",

                "Pacanga",

                "Pueblo Nuevo"

            ]

        }, {

            text: 'Julcán',

            children: [

                "Seleccione ...",

                "Julcán",

                "Calamarca",

                "Carabamba",

                "Huaso"

            ]

        }, {

            text: 'Otuzco',

            children: [

                "Seleccione ...",

                "Otuzco",

                "Agallpampa",

                "Charat",

                "Huaranchal",

                "La Cuesta",

                "Mache",

                "Paranday",

                "Salpo",

                "Sinsicap",

                "Usquil"

            ]

        }, {

            text: 'Pacasmayo',

            children: [

                "Seleccione ...",

                "San Pedro de Lloc",

                "Guadalupe",

                "Jequetepeque",

                "Pacasmayo",

                "San José"

            ]

        }, {

            text: 'Pataz',

            children: [

                "Seleccione ...",

                "Tayabamba",

                "Buldibuyo",

                "Chillia",

                "Huancaspata",

                "Huaylillas",

                "Huayo",

                "Ongon",

                "Parcoy",

                "Pataz",

                "Pias",

                "Santiago de Challas",

                "Taurija",

                "Urpay"

            ]

        }, {

            text: 'Sánchez Carrión',

            children: [

                "Seleccione ...",

                "Huamachuco",

                "Chugay",

                "Cochorco",

                "Curgos",

                "Marcabal",

                "Sanagoran",

                "Sarin",

                "Sartimbamba"

            ]

        }, {

            text: 'Santiago de Chuco',

            children: [

                "Seleccione ...",

                "Santiago de Chuco",

                "Angasmarca",

                "Cachicadan",

                "Mollebamba",

                "Mollepata",

                "Quiruvilca",

                "Santa Cruz de Chuca",

                "Sitabamba"

            ]

        }, {

            text: 'Gran Chimú',

            children: [

                "Seleccione ...",

                "Cascas",

                "Lucma",

                "Marmot",

                "Sayapullo"

            ]

        }, {

            text: 'Virú',

            children: [

                "Seleccione ...",

                "Virú",

                "Chao",

                "Guadalupito"

            ]

        }]

    }, {

        text: 'Lambayeque',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Chiclayo',

            children: [

                "Seleccione ...",

                "Chiclayo",

                "Chongoyape",

                "Eten",

                "Eten Puerto",

                "José Leonardo Ortiz",

                "La Victoria",

                "Lagunas",

                "Monsefu",

                "Nueva Arica",

                "Oyotun",

                "Picsi",

                "Pimentel",

                "Reque",

                "Santa Rosa",

                "Saña",

                "Cayalti",

                "Patapo",

                "Pomalca",

                "Pucala",

                "Tuman"

            ]

        }, {

            text: 'Ferreñafe',

            children: [

                "Seleccione ...",

                "Ferreñafe",

                "Cañaris",

                "Incahuasi",

                "Manuel Antonio Mesones Muro",

                "Pitipo",

                "Pueblo Nuevo"

            ]

        }, {

            text: 'Lambayeque',

            children: [

                "Seleccione ...",

                "Lambayeque",

                "Chochope",

                "Illimo",

                "Jayanca",

                "Mochumi",

                "Motupe",

                "Olmos",

                "Pacora",

                "Salas",

                "San José",

                "Tucume"

            ]

        }]

    }, {

        text: 'Loreto',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Maynas',

            children: [

                "Seleccione ...",

                "Iquitos",

                "Alto Nanay",

                "Fernando Lores",

                "Indiana",

                "Las Amazonas",

                "Mazan",

                "Napo",

                "Punchana",

                "Torres Causa",

                "Belén",

                "San Juan Bautista"

            ]

        }, {

            text: 'Alto Amazonas',

            children: [

                "Seleccione ...",

                "Yurimaguas",

                "Balsapuerto",

                "Jeberos",

                "Lagunas",

                "Santa Cruz",

                "Teniente Cesar López Rojas"

            ]

        }, {

            text: 'Loreto',

            children: [

                "Seleccione ...",

                "Nauta",

                "Parinari",

                "Tigre",

                "Trompeteros",

                "Urarinas"

            ]

        }, {

            text: 'Mariscal Ramón Castilla',

            children: [

                "Seleccione ...",

                "Ramón Castilla",

                "Pebas",

                "Yavari",

                "San Pablo"

            ]

        }, {

            text: 'Requena',

            children: [

                "Seleccione ...",

                "Requena",

                "Alto Tapiche",

                "Capelo",

                "Emilio San Martín",

                "Maquia",

                "Puinahua",

                "Saquena",

                "Soplin",

                "Tapiche",

                "Jenaro Herrera",

                "Yaquerana"

            ]

        }, {

            text: 'Ucayali',

            children: [

                "Seleccione ...",

                "Contamana",

                "Inahuaya",

                "Padre Márquez",

                "Pampa Hermosa",

                "Sarayacu",

                "Vargas Guerra"

            ]

        }, {

            text: 'Datem del Marañón',

            children: [

                "Seleccione ...",

                "Barranca",

                "Cahuapanas",

                "Manseriche",

                "Morona",

                "Pastaza",

                "Andoas"

            ]

        }, {

            text: 'Putumayo',

            children: [

                "Seleccione ...",

                "Putumayo",

                "Rosa Panduro",

                "Teniente Manuel Clavero",

                "Yaguas"

            ]

        }]

    }, {

        text: 'Madre de Dios',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Tambopata',

            children: [

                "Seleccione ...",

                "Tambopata",

                "Inambari",

                "Las Piedra",

                "Laberinto"

            ]

        }, {

            text: 'Manu',

            children: [

                "Seleccione ...",

                "Manu",

                "Fitzcarrald",

                "Madre de Dios",

                "Huepetuhe"

            ]

        }, {

            text: 'Tahuamanu',

            children: [

                "Seleccione ...",

                "Iñapari",

                "Iberia",

                "Tahuamanu"

            ]

        }]

    }, {

        text: 'Moquegua',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Tambopata',

            children: [

                "Seleccione ...",

                "Moquegua",

                "Carumas",

                "Cuchumbaya",

                "Samegua",

                "San Cristóbal",

                "Torata"

            ]

        }, {

            text: 'General Sánchez Cerro',

            children: [

                "Seleccione ...",

                "Omate",

                "Chojata",

                "Coalaque",

                "Ichuña",

                "La Capilla",

                "Lloque",

                "Matalaque",

                "Puquina",

                "Quinistaquillas",

                "Ubinas",

                "Yunga"

            ]

        }, {

            text: 'Ilo',

            children: [

                "Seleccione ...",

                "Ilo",

                "El Algarrobal",

                "Pacocha"

            ]

        }]

    }, {

        text: 'Pasco',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Pasco',

            children: [

                "Seleccione ...",

                "haupimarca",

                "uachon",

                "uariaca",

                "uayllay",

                "inacaca",

                "allanchacra",

                "aucartambo",

                "an Francisco de Asís de Yarusyacan",

                "imon Bolívar",

                "iclacayan",

                "inyahuarco",

                "icco",

                "anacancha"

            ]

        }, {

            text: 'Daniel Alcides Carrión',

            children: [

                "Seleccione ...",

                "Yanahuanca",

                "Chacayan",

                "Goyllarisquizga",

                "Paucar",

                "San Pedro de Pillao",

                "Santa Ana de Tusi",

                "Tapuc",

                "Vilcabamba"

            ]

        }, {

            text: 'Oxapampa',

            children: [

                "Seleccione ...",

                "Oxapampa",

                "Chontabamba",

                "Huancabamba",

                "Palcazu",

                "Pozuzo",

                "Puerto Bermúdez",

                "Villa Rica",

                "Constitución"

            ]

        }]

    }, {

        text: 'Piura',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Piura',

            children: [

                "Seleccione ...",

                "Piura",

                "Castilla",

                "Catacaos",

                "Cura Mori",

                "El Tallan",

                "La Arena ",

                "La Unión",

                "Las Loma",

                "Tambo Grande",

                "Veintiseis de Octubre"

            ]

        }, {

            text: 'Ayabaca',

            children: [

                "Seleccione ...",

                "Ayabaca",

                "Frias",

                "Jilili",

                "Lagunas",

                "Montero",

                "Pacaipampa",

                "Paimas",

                "Sapillica",

                "Sicchez",

                "Suyo"

            ]

        }, {

            text: 'Huancabamba',

            children: [

                "Seleccione ...",

                "Huancabamba",

                "Canchaque",

                "El Carmen de la Frontera",

                "Huarmaca",

                "Lalaquiz",

                "San Miguel de El Faique",

                "Sondor",

                "Sondorillo"

            ]

        }, {

            text: 'Morropón',

            children: [

                "Seleccione ...",

                "Chulucanas",

                "Buenos Aires",

                "Chalaco",

                "La Matanza",

                "Morropon",

                "Salitral",

                "San Juan de Bigote",

                "Santa Catalina de Mossa",

                "Santo Domingo",

                "Yamango"

            ]

        }, {

            text: 'Paita',

            children: [

                "Seleccione ...",

                "Paita",

                "Amotape",

                "Arenal",

                "Colan",

                "La Huaca",

                "Tamarindo",

                "Vichayal"

            ]

        }, {

            text: 'Sullana',

            children: [

                "Seleccione ...",

                "Sullana",

                "Bellavista",

                "Ignacio Escudero",

                "Lancones",

                "Marcavelica",

                "Miguel Checa",

                "Querecotillo",

                "Salitral"

            ]

        }, {

            text: 'Talara',

            children: [

                "Seleccione ...",

                "Pariñas",

                "El Alto",

                "La Brea",

                "Lobitos",

                "Los Organos",

                "Mancora"

            ]

        }, {

            text: 'Sechura',

            children: [

                "Seleccione ...",

                "Sechura",

                "Bellavista de la Unión",

                "Bernal",

                "Cristo Nos Valga",

                "Vice",

                "Rinconada Llicuar"

            ]

        }]

    }, {

        text: 'Puno',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Puno',

            children: [

                "Seleccione ...",

                "Puno",

                "Acora",

                "Amantani",

                "Atuncolla",

                "Capachica",

                "Chucuito",

                "Coata",

                "Huata",

                "Mañazo",

                "Paucarcolla",

                "Pichacani",

                "Plateria",

                "San Antonio",

                "Tiquillaca",

                "Vilque"

            ]

        }, {

            text: 'Azángaro',

            children: [

                "Seleccione ...",

                "Azángaro",

                "Achaya",

                "Arapa",

                "Asillo",

                "Caminaca",

                "Chupa",

                "José Domingo Choquehuanca",

                "Muñani",

                "Potoni",

                "Saman",

                "San Anton",

                "San José",

                "San Juan de Salinas",

                "Santiago de Pupuja",

                "Tirapata"

            ]

        }, {

            text: 'Carabaya',

            children: [

                "Seleccione ...",

                "Macusani",

                "Ajoyani",

                "Ayapata",

                "Coasa",

                "Corani",

                "Crucero",

                "Ituata",

                "Ollachea",

                "San",

                "Usicayos"

            ]

        }, {

            text: 'Chucuito',

            children: [

                "Seleccione ...",

                "Juli",

                "Desaguadero",

                "Huacullani",

                "Kelluyo",

                "Pisacoma",

                "Pomata",

                "Zepita"

            ]

        }, {

            text: 'El Collao',

            children: [

                "Seleccione ...",

                "Ilave",

                "Capazo",

                "Pilcuyo",

                "Santa Rosa",

                "Conduriri"

            ]

        }, {

            text: 'Huancané',

            children: [

                "Seleccione ...",

                "Huancane",

                "Cojata",

                "Huatasani",

                "Inchupalla",

                "Pusi",

                "Rosaspata",

                "Taraco",

                "Vilque Chico"

            ]

        }, {

            text: 'Lampa',

            children: [

                "Seleccione ...",

                "Lampa",

                "Cabanilla",

                "Calapuja",

                "Nicasio",

                "Ocuviri",

                "Palca",

                "Paratia",

                "Pucara",

                "Santa Lucia",

                "Vilavila"

            ]

        }, {

            text: 'Melgar',

            children: [

                "Seleccione ...",

                "Ayaviri",

                "Antauta",

                "Cupi",

                "Llalli",

                "Macari",

                "Nuñoa",

                "Orurillo",

                "Santa",

                "Umachiri"

            ]

        }, {

            text: 'Moho',

            children: [

                "Seleccione ...",

                "Moho",

                "Conima",

                "Huayrapata",

                "Tilali"

            ]

        }, {

            text: 'San Antonio de Putina',

            children: [

                "Seleccione ...",

                "Putina",

                "Ananea",

                "Pedro Vilca Apaza",

                "Quilcapuncu",

                "Sina"

            ]

        }, {

            text: 'San Román',

            children: [

                "Seleccione ...",

                "Juliaca",

                "Cabana",

                "Cabanillas",

                "Caracoto"

            ]

        }, {

            text: 'Sandia',

            children: [

                "Seleccione ...",

                "Sandia",

                "Cuyocuyo",

                "Limbani",

                "Patambuco",

                "Phara",

                "Quiaca",

                "San Juan del Oro",

                "Yanahuaya",

                "Alto Inambari",

                "San Pedro de Putina Punco"

            ]

        }, {

            text: 'Yunguyo',

            children: [

                "Seleccione ...",

                "Yunguyo",

                "Anapia",

                "Copani",

                "Cuturapi",

                "Ollaraya",

                "Tinicachi",

                "Unicachi"

            ]

        }]

    }, {

        text: 'San Martín',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Moyobamba',

            children: [

                "Seleccione ...",

                "Moyobamba",

                "Calzada",

                "Habana",

                "Jepelacio",

                "Soritor",

                "Yantalo"

            ]

        }, {

            text: 'Bellavista',

            children: [

                "Seleccione ...",

                "Bellavista",

                "Alto Biavo",

                "Bajo Biavo",

                "Huallaga",

                "San Pablo",

                "San Rafael"

            ]

        }, {

            text: 'El Dorado',

            children: [

                "Seleccione ...",

                "San José de Sisa",

                "Agua Blanca",

                "San Martín",

                "Santa Rosa",

                "Shatoja"

            ]

        }, {

            text: 'Huallaga',

            children: [

                "Seleccione ...",

                "Saposoa",

                "Alto Saposoa  ",

                "El Eslabón",

                "Piscoyacu",

                "Sacanche",

                "Tingo de Saposoa"

            ]

        }, {

            text: 'Lamas',

            children: [

                "Seleccione ...",

                "Lamas",

                "Alonso de Alvarado",

                "Barranquita",

                "Caynarachi",

                "Cuñumbuqui",

                "Pinto Recodo",

                "Rumisapa",

                "San Roque de Cumbaza",

                "Shanao",

                "Tabalosos",

                "Zapatero"

            ]

        }, {

            text: 'Mariscal Cáceres',

            children: [

                "Seleccione ...",

                "Juanjuí",

                "Campanilla",

                "Huicungo",

                "Pachiza",

                "Pajarillo"

            ]

        }, {

            text: 'Picota',

            children: [

                "Seleccione ...",

                "Picota",

                "Buenos Aires",

                "Caspisapa",

                "Pilluana",

                "Pucacaca",

                "San Cristóbal",

                "San Hilarión",

                "Shamboyacu",

                "Tingo de Ponasa",

                "Tres Unidos"

            ]

        }, {

            text: 'Rioja',

            children: [

                "Seleccione ...",

                "Rioja",

                "Awajun",

                "Elías Soplin Vargas",

                "Nueva Cajamarca",

                "Pardo Miguel",

                "Posic",

                "San Fernando",

                "Yorongos",

                "Yuracyacu"

            ]

        }, {

            text: 'San Martín',

            children: [

                "Seleccione ...",

                "Tarapoto",

                "Alberto Leveau",

                "Cacatachi",

                "Chazuta",

                "Chipurana",

                "El Porvenir",

                "Huimbayoc",

                "Juan Guerra",

                "La Banda de Shilcayo",

                "Morales",

                "Papaplaya",

                "San Antonio",

                "Sauce",

                "Shapaja"

            ]

        }, {

            text: 'Tocache',

            children: [

                "Seleccione ...",

                "Tocache",

                "Nuevo Progreso",

                "Polvora",

                "Shunte",

                "Uchiza"

            ]

        }]

    }, {

        text: 'Tacna',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Tacna',

            children: [

                "Seleccione ...",

                "Tacna",

                "Alto de la Alianza",

                "Calana",

                "Ciudad Nueva",

                "Inclan",

                "Pachia",

                "Palca",

                "Pocollay",

                "Sama",

                "Coronel Gregorio Albarracín Lanchipa",

                "La Yarada los Palos"

            ]

        }, {

            text: 'Candarave',

            children: [

                "Seleccione ...",

                "Candarave",

                "Cairani",

                "Camilaca",

                "Curibaya",

                "Huanuara",

                "Quilahuani"

            ]

        }, {

            text: 'Jorge Basadre',

            children: [

                "Seleccione ...",

                "Locumba",

                "Ilabaya",

                "Ite"

            ]

        }, {

            text: 'Tarata',

            children: [

                "Seleccione ...",

                "Tarata",

                "Héroes Albarracín",

                "Estique",

                "Estique-Pampa",

                "Sitajara",

                "Susapaya",

                "Tarucachi",

                "Ticaco"

            ]

        }]

    }, {

        text: 'Tumbes',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Tumbes',

            children: [

                "Seleccione ...",

                "Tumbes",

                "Corrales",

                "La Cruz",

                "Pampas de Hospital",

                "San Jacinto",

                "San Juan de la Virgen"

            ]

        }, {

            text: 'Contralmirante Villar',

            children: [

                "Seleccione ...",

                "Zorritos",

                "Casitas",

                "Canoas de Punta Sal"

            ]

        }, {

            text: 'Zarumilla',

            children: [

                "Seleccione ...",

                "Zarumilla",

                "Aguas Verdes",

                "Matapalo",

                "Papayal"

            ]

        }]

    }, {

        text: 'Ucayali',

        children: [{

            text: 'Seleccione ...',

            value: '0',

            children: [{

                text: 'Seleccione ...'

            }]

        }, {

            text: 'Coronel Portillo',

            children: [

                "Seleccione ...",

                "Calleria",

                "Campoverde",

                "Iparia",

                "Masisea",

                "Yarinacocha",

                "Nueva Requena",

                "Manantay"

            ]

        }, {

            text: 'Atalaya',

            children: [

                "Seleccione ...",

                "Raymondi",

                "Sepahua",

                "Tahuania",

                "Yurua"

            ]

        }, {

            text: 'Padre Abad',

            children: [

                "Seleccione ...",

                "Padre Abad",

                "Irazola",

                "Curimana",

                "Neshuya",

                "Alexander Von Humboldt"

            ]

        }, {

            text: 'Purús',

            children: [

                "Seleccione ...",

                "Purus"

            ]

        }]

    }]



    $('#departamento').cascadingSelect({

        subSelects: ['#provincia', '#distrito'],

        data: data

    });



})();