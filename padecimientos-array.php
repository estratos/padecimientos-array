<?php
$padecimientos_humanos = array(
    // Enfermedades infecciosas
    "infecciosas" => array(
        "gripe", "influenza", "resfriado", "covid", "coronavirus",
        "neumonía", "bronquitis", "tuberculosis", "hepatitis",
        "VIH", "sida", "herpes", "varicela", "sarampión",
        "paperas", "rubeola", "dengue", "malaria", "cólera"
    ),
    
    // Enfermedades cardiovasculares
    "cardiovasculares" => array(
        "hipertensión", "presión alta", "infarto", "ataque cardíaco",
        "arritmia", "insuficiencia cardíaca", "angina de pecho",
        "accidente cerebrovascular", "derrame cerebral", "trombosis",
        "varices", "arterioesclerosis"
    ),
    
    // Enfermedades respiratorias
    "respiratorias" => array(
        "asma", "alergia", "rinitis", "sinusitis", "epoc",
        "enfisema", "apnea del sueño", "tos crónica",
        "insuficiencia respiratoria"
    ),
    
    // Enfermedades digestivas
    "digestivas" => array(
        "gastritis", "úlcera", "reflujo", "acidez", "colitis",
        "síndrome de intestino irritable", "estreñimiento",
        "diarrea", "hemorroides", "cirrosis", "hígado graso",
        "pancreatitis", "diverticulitis"
    ),
    
    // Enfermedades neurológicas
    "neurologicas" => array(
        "migraña", "dolor de cabeza", "cefalea", "epilepsia",
        "alzheimer", "parkinson", "esclerosis múltiple",
        "neuralgia", "neuropatía", "demencia"
    ),
    
    // Enfermedades musculoesqueléticas
    "musculoesqueléticas" => array(
        "artritis", "artrosis", "osteoporosis", "lumbalgia",
        "ciática", "fibromialgia", "tendinitis", "bursitis",
        "escoliosis", "hernia discal"
    ),
    
    // Enfermedades endocrinas y metabólicas
    "endocrinas" => array(
        "diabetes", "tiroides", "hipotiroidismo", "hipertiroidismo",
        "obesidad", "sobrepeso", "colesterol alto", "triglicéridos",
        "gota", "osteoporosis"
    ),
    
    // Enfermedades mentales
    "mentales" => array(
        "depresión", "ansiedad", "estrés", "ataque de pánico",
        "trastorno bipolar", "esquizofrenia", "TOC",
        "trastorno de estrés postraumático", "insomnio"
    ),
    
    // Cánceres
    "cancer" => array(
        "cáncer", "tumor", "leucemia", "linfoma", "melanoma",
        "cáncer de pulmón", "cáncer de mama", "cáncer de próstata",
        "cáncer de colon", "cáncer de piel"
    ),
    
    // Síntomas generales
    "sintomas_generales" => array(
        "fiebre", "dolor", "malestar", "fatiga", "cansancio",
        "debilidad", "mareo", "náuseas", "vómitos", "pérdida de peso",
        "aumento de peso", "inapetencia", "sed", "sudoración"
    ),
    
    // Síntomas específicos
    "sintomas_especificos" => array(
        "dolor abdominal", "dolor torácico", "dolor articular",
        "dolor muscular", "tos", "estornudos", "congestión nasal",
        "dificultad para respirar", "palpitaciones", "hinchazón",
        "picazón", "erupción cutánea", "sangrado", "moretones"
    ),
    
    // Enfermedades de la piel
    "dermatologicas" => array(
        "acné", "eczema", "psoriasis", "urticaria", "dermatitis",
        "rosácea", "vitíligo", "hongos", "micosis", "verrugas"
    ),
    
    // Enfermedades oculares
    "oculares" => array(
        "miopía", "astigmatismo", "presbicia", "cataratas",
        "glaucoma", "conjuntivitis", "ojo seco", "degeneración macular"
    ),
    
    // Enfermedades auditivas
    "auditivas" => array(
        "sordera", "pérdida auditiva", "tinnitus", "acúfenos",
        "otitis", "infección de oído", "vértigo"
    )
);

// Función para buscar padecimientos
function buscarPadecimiento($palabra, $array_padecimientos) {
    $resultados = array();
    $palabra = strtolower($palabra);
    
    foreach ($array_padecimientos as $categoria => $padecimientos) {
        foreach ($padecimientos as $padecimiento) {
            if (strpos(strtolower($padecimiento), $palabra) !== false) {
                $resultados[$categoria][] = $padecimiento;
            }
        }
    }
    
    return $resultados;
}

// Ejemplo de uso:
echo "Array de padecimientos humanos creado exitosamente.\n";

// Ejemplo de búsqueda
$busqueda = "dolor";
$resultados = buscarPadecimiento($busqueda, $padecimientos_humanos);

echo "\nResultados para '$busqueda':\n";
foreach ($resultados as $categoria => $enfermedades) {
    echo "$categoria: " . implode(", ", $enfermedades) . "\n";
}

// También puedes acceder directamente a las categorías
echo "\nAlgunas enfermedades cardiovasculares:\n";
print_r($padecimientos_humanos["cardiovasculares"]);

// Contar total de padecimientos
$total = 0;
foreach ($padecimientos_humanos as $categoria => $padecimientos) {
    $total += count($padecimientos);
}
echo "\nTotal de padecimientos en el array: $total\n";
?>
