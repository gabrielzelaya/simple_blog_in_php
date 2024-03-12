<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DinoBlog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>DinoBlog</h1>
            <p>Explora el fascinante mundo de los dinosaurios</p>
        </div>
    </header>
    
    <div class="container">
        <main>
            <?php
            // Contenido del blog
            $posts = [
                [
                    'title' => 'Tyrannosaurus Rex',
                    'description' => 'Un terópodo carnívoro de gran tamaño, con un cráneo robusto y dientes afilados.
                    Patas delanteras cortas y musculosas con dos garras retráctiles.
                    Patas traseras largas y fuertes que le permitían correr a velocidades de hasta 30 km/h.
                    Cola larga y musculosa que actuaba como contrapeso.
                    Posee un cuerpo robusto y musculoso.
                    Piel escamosa, con algunas zonas con plumas.
                    Alcanza hasta 13 metros de largo y 8 metros de altura.
                    Pesa alrededor de 8 toneladas.
                    Comportamiento:
                    
                    Depredador ápice, cazaba en solitario o en manadas.
                    Probablemente carroñero también.
                    Cráneo robusto y dientes afilados le permitían cazar grandes presas.
                    Garras retráctiles en las patas delanteras se usaban para sujetar a la presa.
                    Cola larga y musculosa le ayudaba a mantener el equilibrio mientras cazaba.
                    Hábitat:
                    
                    Vivió en América del Norte durante el período Cretácico superior.
                    Prefería ambientes boscosos y llanuras.
                    Descubrimiento:
                    
                    Primeros fósiles descubiertos en 1874.
                    Desde entonces, se han encontrado cientos de fósiles.
                    Uno de los dinosaurios más conocidos del mundo.',
                    'image' => 'tyrannosaurus.jpg',
                    'period' => 'Cretácico',
                    'length' => '12 metros',
                    'weight' => '8 toneladas',
                    'diet' => 'Carnívoro',
                    'habitat' => 'Norteamérica',
                    'discovery' => '1874'
                ],
                [
                    'title' => 'Velociraptor',
                    'description' => 'Dinosaurio terópodo carnívoro de tamaño pequeño.
                    Cráneo largo y estrecho con dientes curvos.
                    Patas largas y delgadas que le permitían correr a gran velocidad.
                    Garras largas y curvas en las patas traseras que usaba para cazar.
                    Cola larga y flexible que le ayudaba a mantener el equilibrio.
                    Posee un cuerpo ligero y ágil.
                    Piel escamosa.
                    Alcanza hasta 2 metros de largo y 0.5 metros de altura.
                    Pesa alrededor de 15 kg.
                    Comportamiento:
                    
                    Depredador activo, cazaba en manadas.
                    Probablemente cazaba pequeños animales como mamíferos y aves.
                    Garras curvas en las patas traseras se usaban para atrapar y desgarrar a la presa.
                    Cola larga y flexible le ayudaba a maniobrar mientras cazaba.
                    Hábitat:
                    
                    Vivió en Asia central durante el período Cretácico superior.
                    Prefería ambientes áridos y semiáridos.
                    Descubrimiento:
                    
                    Primeros fósiles descubiertos en 1924.
                    Desde entonces, se han encontrado cientos de fósiles.
                    Uno de los dinosaurios más conocidos del mundo, famoso por la película "Jurassic Park".',
                    'image' => 'velociraptor.jpg',
                    'period' => 'Cretácico',
                    'length' => '2 metros',
                    'weight' => '15-20 kilogramos',
                    'diet' => 'Carnívoro',
                    'habitat' => 'Asia',
                    'discovery' => '1924'
                ],
                [
                    'title' => 'Triceratops',
                    'description' => 'Dinosaurio ceratópsido herbívoro de gran tamaño.
                    Cráneo grande con tres cuernos: uno grande en la nariz y dos más pequeños sobre los ojos.
                    Cuello corto y robusto.
                    Patas robustas que le permitían soportar su gran peso.
                    Cola corta y musculosa.
                    Posee un cuerpo robusto y pesado.
                    Piel escamosa.
                    Alcanza hasta 9 metros de largo y 3 metros de altura.
                    Pesa alrededor de 12 toneladas.
                    Comportamiento:
                    
                    Herbívoro, se alimentaba de plantas y helechos.
                    Probablemente vivía en manadas.
                    Cuernos grandes se usaban para defenderse de los depredadores.
                    Cuello corto y robusto le permitía agacharse para comer plantas.
                    Hábitat:
                    
                    Vivió en América del Norte durante el período Cretácico superior.
                    Prefería ambientes boscosos y llanuras.
                    Descubrimiento:
                    
                    Primeros fósiles descubiertos en 1889.
                    Desde entonces, se han encontrado cientos de fósiles.
                    Uno de los dinosaurios más conocidos del mundo',
                    'image' => 'triceratops.jpg',
                    'period' => 'Cretácico',
                    'length' => '9 metros',
                    'weight' => '6-12 toneladas',
                    'diet' => 'Herbívoro',
                    'habitat' => 'Norteamérica',
                    'discovery' => '1887'
                ]
            ];

            // Mostrar los posts
            foreach ($posts as $post) {
                echo '<article>';
                echo '<h2>' . $post['title'] . '</h2>';
                echo '<img src="' . $post['image'] . '" alt="' . $post['title'] . '" style="max-width: 100%;">';
                if (isset($post['description'])) {
                    echo '<p>' . $post['description'] . '</p>';
                }
                echo '<h3>Datos:</h3>';
                echo '<ul>';
                echo '<li><strong>Período:</strong> ' . $post['period'] . '</li>';
                echo '<li><strong>Longitud:</strong> ' . $post['length'] . '</li>';
                echo '<li><strong>Peso:</strong> ' . $post['weight'] . '</li>';
                echo '<li><strong>Dieta:</strong> ' . $post['diet'] . '</li>';
                echo '<li><strong>Hábitat:</strong> ' . $post['habitat'] . '</li>';
                echo '<li><strong>Descubrimiento:</strong> ' . $post['discovery'] . '</li>';
                echo '</ul>';
                echo '</article>';
            }
            ?>
        </main>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 DinoBlog - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>
