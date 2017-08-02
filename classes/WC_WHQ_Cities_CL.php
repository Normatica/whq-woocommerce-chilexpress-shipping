<?php
if (!defined('ABSPATH')) {
	die();
}

/**
 * Cities CL Class for WooCommerce
 */

class WC_WHQ_Cities_CL {
	/**
	* Constructor cities class
	*
	* @access public
	* @return void
	*/
	public function __construct() {
		//1, Admission
		//2, Delivery
		//3, Both

		//Delivery (2, 240) updated on 2017-08-01
		$this->delivery = [
			'ACHA' => 'ACHAO',
			'AHOS' => 'ALTO HOSPICIO',
			'ALAM' => 'LOS ALAMOS',
			'ALGA' => 'ALGARROBO',
			'ANCU' => 'ANCUD',
			'ANDA' => 'ANDACOLLO',
			'ANGO' => 'ANGOL',
			'ANTO' => 'ANTOFAGASTA',
			'ARAU' => 'ARAUCO',
			'ARIC' => 'ARICA',
			'BUIN' => 'BUIN',
			'BULN' => 'BULNES',
			'CABI' => 'CABILDO',
			'CABR' => 'CABRERO',
			'CALA' => 'CALAMA',
			'CALB' => 'CALBUCO',
			'CALD' => 'CALDERA',
			'CANE' => 'CANETE',
			'CARA' => 'CARAHUE',
			'CART' => 'CARTAGENA',
			'CASA' => 'CASABLANCA',
			'CAST' => 'CASTRO',
			'CAUQ' => 'CAUQUENES',
			'CCHA' => 'CONCHALI',
			'CCON' => 'CONCON',
			'CHAN' => 'CHANARAL',
			'CHCH' => 'CHILE CHICO',
			'CHEP' => 'CHEPICA',
			'CHIG' => 'CHIGUAYANTE',
			'CHIL' => 'CHILLAN',
			'CHIM' => 'CHIMBARONGO',
			'CHON' => 'CHONCHI',
			'CNAV' => 'CERRO NAVIA',
			'COCH' => 'COCHRANE',
			'COEL' => 'COELEMU',
			'COIC' => 'COIHUECO',
			'COIN' => 'COINCO',
			'COLB' => 'COLBUN',
			'COLI' => 'COLINA',
			'COLL' => 'COLLIPULLI',
			'COLT' => 'COLTAUCO',
			'COMB' => 'COMBARBALA',
			'CONC' => 'CONCEPCION',
			'CONS' => 'CONSTITUCION',
			'COPI' => 'COPIAPO',
			'COQU' => 'COQUIMBO',
			'CORO' => 'CORONEL',
			'COYH' => 'COYHAIQUE',
			'CRCV' => 'CURACAVI',
			'CTAN' => 'CALERA DE TANGO',
			'CURA' => 'CURANILAHUE',
			'CURC' => 'CURACAUTIN',
			'CURI' => 'CURICO',
			'DALC' => 'DALCAHUE',
			'DIEG' => 'DIEGO DE ALMAGRO',
			'DONI' => 'DONIHUE',
			'ECAR' => 'EL CARMEN',
			'ECEN' => 'ESTACION CENTRAL',
			'ELBO' => 'EL BOSQUE',
			'ELMO' => 'EL MONTE',
			'ENEA' => 'ENEA EXPRESS',
			'FREI' => 'FREIRINA',
			'FRER' => 'FREIRE',
			'FRUT' => 'FRUTILLAR',
			'FUTR' => 'FUTRONO',
			'GORB' => 'GORBEA',
			'GRAN' => 'GRANEROS',
			'HAQI' => 'HUALQUI',
			'HIJU' => 'HIJUELAS',
			'HORP' => 'HORNOPIREN',
			'HPEN' => 'HUALPEN',
			'HUAS' => 'HUASCO',
			'HUEC' => 'HUECHURABA',
			'ILLA' => 'ILLAPEL',
			'IMAI' => 'ISLA DE MAIPO',
			'INDE' => 'INDEPENDENCIA',
			'INTE' => 'INTERNACIONAL',
			'IQUI' => 'IQUIQUE',
			'LACA' => 'LA CALERA',
			'LACI' => 'LA CISTERNA',
			'LACR' => 'LA CRUZ',
			'LAFL' => 'LA FLORIDA',
			'LAGR' => 'LA GRANJA',
			'LAJA' => 'LAJA',
			'LALI' => 'LA LIGUA',
			'LAMP' => 'LAMPA',
			'LANC' => 'LANCO',
			'LAND' => 'LOS ANDES',
			'LANG' => 'LOS ANGELES',
			'LAPI' => 'LA PINTANA',
			'LARE' => 'LA REINA',
			'LASE' => 'LA SERENA',
			'LAUN' => 'LA UNION',
			'LAUT' => 'LAUTARO',
			'LCAB' => 'LAS CABRAS',
			'LCHE' => 'LITUECHE',
			'LCON' => 'LAS CONDES',
			'LEBU' => 'LEBU',
			'LIMA' => 'LIMACHE',
			'LINA' => 'LINARES',
			'LLAG' => 'LOS LAGOS',
			'LLAN' => 'LLANQUIHUE',
			'LLAY' => 'LLAY LLAY',
			'LMUE' => 'LOS MUERMOS',
			'LOBA' => 'LO BARNECHEA',
			'LOES' => 'LO ESPEJO',
			'LOLO' => 'LOLOL',
			'LONC' => 'LONCOCHE',
			'LONG' => 'LONGAVI',
			'LOPR' => 'LO PRADO',
			'LOSC' => 'CERRILLOS',
			'LOTA' => 'LOTA',
			'LRAN' => 'LAGO RANCO',
			'LVIL' => 'LOS VILOS',
			'MACH' => 'MACHALI',
			'MACU' => 'MACUL',
			'MALO' => 'MALLOA',
			'MARC' => 'MARCHIGUE',
			'MARI' => 'MARIA ELENA',
			'MAUL' => 'MAULLIN',
			'MEJI' => 'MEJILLONES',
			'MELI' => 'MELIPILLA',
			'MIPU' => 'MAIPU',
			'MOLI' => 'MOLINA',
			'MOPA' => 'MONTE PATRIA',
			'MULC' => 'MULCHEN',
			'NACI' => 'NACIMIENTO',
			'NANC' => 'NANCAGUA',
			'NEGR' => 'NEGRETE',
			'NOGA' => 'NOGALES',
			'NUNO' => 'NUNOA',
			'NVAI' => 'NUEVA IMPERIAL',
			'OLIV' => 'OLIVAR',
			'OLMU' => 'OLMUE',
			'OSOR' => 'OSORNO',
			'OVAL' => 'OVALLE',
			'PAIL' => 'PAILLACO',
			'PAIN' => 'PAINE',
			'PALM' => 'PALMILLA',
			'PALT' => 'PUENTE ALTO',
			'PANG' => 'PANGUIPULLI',
			'PARR' => 'PARRAL',
			'PAYS' => 'PUERTO AYSEN',
			'PCIS' => 'PUERTO CISNES',
			'PEDR' => 'PEDRO AGUIRRE CERDA',
			'PEMU' => 'PEMUCO',
			'PENA' => 'PENAFLOR',
			'PENC' => 'PENCO',
			'PERA' => 'PERALILLO',
			'PEUM' => 'PEUMO',
			'PHUR' => 'PADRE HURTADO',
			'PICD' => 'PICHIDEGUA',
			'PICH' => 'PICHILEMU',
			'PINT' => 'PINTO',
			'PIRQ' => 'PIRQUE',
			'PITR' => 'PITRUFQUEN',
			'PLAC' => 'PLACILLA SEXTA REGION',
			'PLCA' => 'PADRE LAS CASAS',
			'PLOL' => 'PENALOLEN',
			'PMON' => 'PUERTO MONTT',
			'PNAT' => 'NATALES',
			'PORV' => 'PORVENIR',
			'POZO' => 'POZO ALMONTE',
			'PROV' => 'PROVIDENCIA',
			'PUCH' => 'PUCHUNCAVI',
			'PUCO' => 'PUCON',
			'PUDA' => 'PUDAHUEL',
			'PUNI' => 'PUNITAQUI',
			'PUNT' => 'PUNTA ARENAS',
			'PURE' => 'PUREN',
			'PURR' => 'PURRANQUE',
			'PUYG' => 'PUYEHUE',
			'PVAR' => 'PUERTO VARAS',
			'QILI' => 'QUILICURA',
			'QLTA' => 'QUILLOTA',
			'QNOR' => 'QUINTA NORMAL',
			'QSCO' => 'EL QUISCO',
			'QTIL' => 'QUINTA DE TILCOCO',
			'QUEL' => 'QUELLON',
			'QUEM' => 'QUEMCHI',
			'QUIL' => 'QUILPUE',
			'QUIN' => 'QUINTERO',
			'QUIR' => 'QUIRIHUE',
			'QULL' => 'QUILLON',
			'RANC' => 'RANCAGUA',
			'RECO' => 'RECOLETA',
			'RENC' => 'RENCA',
			'RENG' => 'RENGO',
			'REQU' => 'REQUINOA',
			'RIOB' => 'RIO BUENO',
			'RNCO' => 'RENAICO',
			'RNEG' => 'RIO NEGRO',
			'ROME' => 'ROMERAL',
			'SALA' => 'SALAMANCA',
			'SANR' => 'SAN ROSENDO',
			'SANT' => 'SAN ANTONIO',
			'SBAR' => 'SANTA BARBARA',
			'SBER' => 'SAN BERNARDO',
			'SCAR' => 'SAN CARLOS',
			'SCRU' => 'SANTA CRUZ',
			'SDGO' => 'SANTO DOMINGO',
			'SFEL' => 'SAN FELIPE',
			'SFER' => 'SAN FERNANDO',
			'SFRA' => 'SAN FRANCISCO DE MOSTAZAL',
			'SGOR' => 'SIERRA GORDA',
			'SIGN' => 'SAN IGNACIO',
			'SJAV' => 'SAN JAVIER',
			'SJOA' => 'SAN JOAQUIN',
			'SMIG' => 'SAN MIGUEL',
			'SPAB' => 'SAN PABLO',
			'SPAT' => 'SAN PEDRO DE ATACAMA',
			'SPED' => 'SAN PEDRO DE LA PAZ',
			'SRAM' => 'SAN RAMON',
			'STGO' => 'SANTIAGO CENTRO',
			'SVIC' => 'SAN VICENTE DE TAGUA TAGUA',
			'TABO' => 'EL TABO',
			'TALA' => 'TALAGANTE',
			'TALC' => 'TALCA',
			'TALT' => 'TALTAL',
			'TAMA' => 'TIERRA AMARILLA',
			'TEMU' => 'TEMUCO',
			'TENO' => 'TENO',
			'THNO' => 'TALCAHUANO',
			'TILT' => 'TIL TIL',
			'TOCO' => 'TOCOPILLA',
			'TOME' => 'TOME',
			'TRAI' => 'TRAIGUEN',
			'TUCA' => 'TUCAPEL',
			'VALD' => 'VALDIVIA',
			'VALE' => 'VILLA ALEMANA',
			'VALG' => 'VILLA ALEGRE',
			'VALL' => 'VALLENAR',
			'VALP' => 'VALPARAISO',
			'VICT' => 'VICTORIA',
			'VICU' => 'VICUNA',
			'VILL' => 'VILLARRICA',
			'VINA' => 'VINA DEL MAR',
			'VITA' => 'VITACURA',
			'YUMB' => 'YUMBEL',
			'YUNG' => 'YUNGAY',
		];

		//Admission (1, 201) updated on 2017-08-01
		$this->admission = [
			'ACHA' => 'ACHAO',
			'AHOS' => 'ALTO HOSPICIO',
			'ALAM' => 'LOS ALAMOS',
			'ANCU' => 'ANCUD',
			'ANDA' => 'ANDACOLLO',
			'ANGO' => 'ANGOL',
			'ANTO' => 'ANTOFAGASTA',
			'ARAU' => 'ARAUCO',
			'ARIC' => 'ARICA',
			'BUIN' => 'BUIN',
			'BULN' => 'BULNES',
			'CABR' => 'CABRERO',
			'CALA' => 'CALAMA',
			'CALB' => 'CALBUCO',
			'CALD' => 'CALDERA',
			'CANE' => 'CANETE',
			'CARA' => 'CARAHUE',
			'CART' => 'CARTAGENA',
			'CASA' => 'CASABLANCA',
			'CAST' => 'CASTRO',
			'CAUQ' => 'CAUQUENES',
			'CCHA' => 'CONCHALI',
			'CCON' => 'CONCON',
			'CHAN' => 'CHANARAL',
			'CHCH' => 'CHILE CHICO',
			'CHEP' => 'CHEPICA',
			'CHIG' => 'CHIGUAYANTE',
			'CHIL' => 'CHILLAN',
			'CHIM' => 'CHIMBARONGO',
			'CHON' => 'CHONCHI',
			'COCH' => 'COCHRANE',
			'COEL' => 'COELEMU',
			'COLB' => 'COLBUN',
			'COLI' => 'COLINA',
			'COLL' => 'COLLIPULLI',
			'COMB' => 'COMBARBALA',
			'CONC' => 'CONCEPCION',
			'CONS' => 'CONSTITUCION',
			'COPI' => 'COPIAPO',
			'COQU' => 'COQUIMBO',
			'CORO' => 'CORONEL',
			'COYH' => 'COYHAIQUE',
			'CRCV' => 'CURACAVI',
			'CURA' => 'CURANILAHUE',
			'CURC' => 'CURACAUTIN',
			'CURI' => 'CURICO',
			'DALC' => 'DALCAHUE',
			'DIEG' => 'DIEGO DE ALMAGRO',
			'DONI' => 'DONIHUE',
			'ECAR' => 'EL CARMEN',
			'ECEN' => 'ESTACION CENTRAL',
			'ELBO' => 'EL BOSQUE',
			'ENEA' => 'ENEA EXPRESS',
			'FRUT' => 'FRUTILLAR',
			'FUTR' => 'FUTRONO',
			'GRAN' => 'GRANEROS',
			'HAQI' => 'HUALQUI',
			'HORP' => 'HORNOPIREN',
			'HPEN' => 'HUALPEN',
			'HUAS' => 'HUASCO',
			'HUEC' => 'HUECHURABA',
			'ILLA' => 'ILLAPEL',
			'INDE' => 'INDEPENDENCIA',
			'INTE' => 'INTERNACIONAL',
			'IQUI' => 'IQUIQUE',
			'LACA' => 'LA CALERA',
			'LACI' => 'LA CISTERNA',
			'LACR' => 'LA CRUZ',
			'LAFL' => 'LA FLORIDA',
			'LAJA' => 'LAJA',
			'LALI' => 'LA LIGUA',
			'LAMP' => 'LAMPA',
			'LANC' => 'LANCO',
			'LAND' => 'LOS ANDES',
			'LANG' => 'LOS ANGELES',
			'LARE' => 'LA REINA',
			'LASE' => 'LA SERENA',
			'LAUN' => 'LA UNION',
			'LAUT' => 'LAUTARO',
			'LCAB' => 'LAS CABRAS',
			'LCHE' => 'LITUECHE',
			'LCON' => 'LAS CONDES',
			'LEBU' => 'LEBU',
			'LIMA' => 'LIMACHE',
			'LINA' => 'LINARES',
			'LLAG' => 'LOS LAGOS',
			'LLAN' => 'LLANQUIHUE',
			'LLAY' => 'LLAY LLAY',
			'LMUE' => 'LOS MUERMOS',
			'LOBA' => 'LO BARNECHEA',
			'LOES' => 'LO ESPEJO',
			'LOLO' => 'LOLOL',
			'LONC' => 'LONCOCHE',
			'LONG' => 'LONGAVI',
			'LOPR' => 'LO PRADO',
			'LOSC' => 'CERRILLOS',
			'LOTA' => 'LOTA',
			'LVIL' => 'LOS VILOS',
			'MACH' => 'MACHALI',
			'MACU' => 'MACUL',
			'MARC' => 'MARCHIGUE',
			'MARI' => 'MARIA ELENA',
			'MAUL' => 'MAULLIN',
			'MEJI' => 'MEJILLONES',
			'MELI' => 'MELIPILLA',
			'MIPU' => 'MAIPU',
			'MOLI' => 'MOLINA',
			'MOPA' => 'MONTE PATRIA',
			'MULC' => 'MULCHEN',
			'NACI' => 'NACIMIENTO',
			'NANC' => 'NANCAGUA',
			'NEGR' => 'NEGRETE',
			'NUNO' => 'NUNOA',
			'NVAI' => 'NUEVA IMPERIAL',
			'OLMU' => 'OLMUE',
			'OSOR' => 'OSORNO',
			'OVAL' => 'OVALLE',
			'PAIL' => 'PAILLACO',
			'PALT' => 'PUENTE ALTO',
			'PANG' => 'PANGUIPULLI',
			'PARR' => 'PARRAL',
			'PAYS' => 'PUERTO AYSEN',
			'PCIS' => 'PUERTO CISNES',
			'PEDR' => 'PEDRO AGUIRRE CERDA',
			'PENC' => 'PENCO',
			'PERA' => 'PERALILLO',
			'PEUM' => 'PEUMO',
			'PICD' => 'PICHIDEGUA',
			'PICH' => 'PICHILEMU',
			'PLCA' => 'PADRE LAS CASAS',
			'PLOL' => 'PENALOLEN',
			'PMON' => 'PUERTO MONTT',
			'PNAT' => 'NATALES',
			'PORV' => 'PORVENIR',
			'POZO' => 'POZO ALMONTE',
			'PROV' => 'PROVIDENCIA',
			'PUCH' => 'PUCHUNCAVI',
			'PUCO' => 'PUCON',
			'PUDA' => 'PUDAHUEL',
			'PUNI' => 'PUNITAQUI',
			'PUNT' => 'PUNTA ARENAS',
			'PURE' => 'PUREN',
			'PURR' => 'PURRANQUE',
			'PUYG' => 'PUYEHUE',
			'PVAR' => 'PUERTO VARAS',
			'QILI' => 'QUILICURA',
			'QLTA' => 'QUILLOTA',
			'QNOR' => 'QUINTA NORMAL',
			'QSCO' => 'EL QUISCO',
			'QUEL' => 'QUELLON',
			'QUEM' => 'QUEMCHI',
			'QUIL' => 'QUILPUE',
			'QUIN' => 'QUINTERO',
			'QUIR' => 'QUIRIHUE',
			'QULL' => 'QUILLON',
			'RANC' => 'RANCAGUA',
			'RECO' => 'RECOLETA',
			'RENC' => 'RENCA',
			'RENG' => 'RENGO',
			'REQU' => 'REQUINOA',
			'RIOB' => 'RIO BUENO',
			'RNEG' => 'RIO NEGRO',
			'SALA' => 'SALAMANCA',
			'SANT' => 'SAN ANTONIO',
			'SBAR' => 'SANTA BARBARA',
			'SBER' => 'SAN BERNARDO',
			'SCAR' => 'SAN CARLOS',
			'SCRU' => 'SANTA CRUZ',
			'SFEL' => 'SAN FELIPE',
			'SFER' => 'SAN FERNANDO',
			'SGOR' => 'SIERRA GORDA',
			'SJAV' => 'SAN JAVIER',
			'SJOA' => 'SAN JOAQUIN',
			'SMAR' => 'SANTA MARIA',
			'SMIG' => 'SAN MIGUEL',
			'SPAT' => 'SAN PEDRO DE ATACAMA',
			'SPED' => 'SAN PEDRO DE LA PAZ',
			'STGO' => 'SANTIAGO CENTRO',
			'SVIC' => 'SAN VICENTE DE TAGUA TAGUA',
			'TALA' => 'TALAGANTE',
			'TALC' => 'TALCA',
			'TALT' => 'TALTAL',
			'TEMU' => 'TEMUCO',
			'TENO' => 'TENO',
			'THNO' => 'TALCAHUANO',
			'TOCO' => 'TOCOPILLA',
			'TOME' => 'TOME',
			'TRAI' => 'TRAIGUEN',
			'TUCA' => 'TUCAPEL',
			'VALD' => 'VALDIVIA',
			'VALE' => 'VILLA ALEMANA',
			'VALG' => 'VILLA ALEGRE',
			'VALL' => 'VALLENAR',
			'VALP' => 'VALPARAISO',
			'VICT' => 'VICTORIA',
			'VICU' => 'VICUNA',
			'VILL' => 'VILLARRICA',
			'VINA' => 'VINA DEL MAR',
			'VITA' => 'VITACURA',
			'YUMB' => 'YUMBEL',
			'YUNG' => 'YUNGAY',
			];
	}
}
