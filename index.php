<?php include_once 'includes/templates/header.php'; ?>


    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Etiam nec tortor enim. Donec non turpis nec nulla pulvinar auctor. Donec tempor elit nec consequat ornare. Quisque lobortis egestas turpis, quis ornare nulla fringilla ut. Nullam eget dui varius lectus lacinia eleifend. Duis sed facilisis arcu.
            Etiam dapibus est ut nisl tristique, in laoreet felis mollis.</p>
    </section>
    <!--SECCION-->

    <section class="programa">
        <div class="contenedor-video">
            <video muted autoplay loop poster="img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>
        <!--CONTENEDOR VIDEO-->

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <?php
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = "SELECT * FROM `categoria_evento` ";
                            $resultado = $conn->query($sql);
                        } catch(\Exception $e){
                            echo $e->getMessage();
                        }
                    ?>

                    <nav class="menu-programa">
                        <?php while($cat = $resultado-> fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_evento']; ?>
                            <a href="#<?php echo strtolower($categoria); ?>">
                                <i class="fas <?php echo $cat['icono']; ?>"></i><?php echo $categoria; ?>
                            </a>
                        <?php } ?> 
                    </nav>

                    

                    <?php
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_cat ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .=  " ON eventos.id_inv = invitados.id_invitado ";
                            $sql .= "AND eventos.id_cat_evento = 1 ";
                            $sql .= " ORDER BY evento_id LIMIT 2; ";
                            $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_cat ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .=  " ON eventos.id_inv = invitados.id_invitado ";
                            $sql .= "AND eventos.id_cat_evento = 2 ";
                            $sql .= " ORDER BY evento_id LIMIT 2; ";
                            $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_cat ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .=  " ON eventos.id_inv = invitados.id_invitado ";
                            $sql .= "AND eventos.id_cat_evento = 3 ";
                            $sql .= " ORDER BY evento_id LIMIT 2; ";
                        } catch(\Exception $e){
                            echo $e->getMessage();
                        }
                    ?>

                    <?php $conn->multi_query($sql); 
                        do {
                            $resultado = $conn->store_result();
                            $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                            <?php $i = 0; ?>
                            <?php foreach($row as $evento): ?>
                            <?php if($i % 2 == 0){ ?>    
                                <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar clearfix">
                            <?php } ?>
                                    <div class="detalle-evento">
                                        <h3><?php echo ($evento['nombre_evento']); ?></h3>
                                        <p><i class="fas fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                                        <p><i class="fas fa-calendar"></i><?php setlocale(LC_TIME, 'spanish');
                                                                                $fecha = strftime("%A %d de %b del %Y", strtotime($evento['fecha_evento']));
                                                                                echo utf8_encode($fecha); ?></p>
                                        <p><i class="fas fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
                                    </div>
                                    
                            <?php if($i % 2 == 1): ?>
                                    <a href="calendario.php" class="boton float-right">Ver Todos</a>
                                </div>
                            <?php endif; ?>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                            <?php $resultado->free(); ?>

                        <?php } while ($conn->more_results() && $conn->next_result()); ?>

                </div>
                <!--TALLERES-->
            </div>
        </div>
    </section>
    <!--PROGRAMA-->

    <?php include_once 'includes/templates/invitados.php'; ?>
    <!--SECCION DE INVITADOS-->

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p> Invitados</li>
                <li>
                    <p class="numero"></p> Talleres</li>
                <li>
                    <p class="numero"></p> Días</li>
                <li>
                    <p class="numero"></p> Conferencias</li>

            </ul>
        </div>
    </div>
    <!--CONTADOR PARALLAX-->

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Todos los días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="boton hollow">Comprar</a>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <!--SECCION PRECIOS-->

    <div class="mapa" id="mapa"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Mauris et libero a tellus imperdiet euismod. Praesent viverra ultrices nunc, a venenatis felis auctor at. Pellentesque sit amet ipsum in leo euismod lacinia nec sit amet dolor. Suspendisse ornare efficitur posuere. Sed vitae quam non
                        orci volutpat auctor finibus tristique metus.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--TESTIMONIAL-->

            <div class="testimonial">
                <blockquote>
                    <p>Mauris et libero a tellus imperdiet euismod. Praesent viverra ultrices nunc, a venenatis felis auctor at. Pellentesque sit amet ipsum in leo euismod lacinia nec sit amet dolor. Suspendisse ornare efficitur posuere. Sed vitae quam non
                        orci volutpat auctor finibus tristique metus.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--TESTIMONIAL-->

            <div class="testimonial">
                <blockquote>
                    <p>Mauris et libero a tellus imperdiet euismod. Praesent viverra ultrices nunc, a venenatis felis auctor at. Pellentesque sit amet ipsum in leo euismod lacinia nec sit amet dolor. Suspendisse ornare efficitur posuere. Sed vitae quam non
                        orci volutpat auctor finibus tristique metus.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="Imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--TESTIMONIAL-->
        </div>

    </section>
    <!--TESTIMONIALES-->

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>regístrate al newsletter: </p>
            <h3>gdlwebcamp</h3>
            <a href="#mc_embed_signup" class="boton_newsletter boton transparente">Registro</a>
        </div>
    </div>
    <!--NEWSLETTER-->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>días</li>
                <li>
                    <p id="horas" class="numero"></p>horas</li>
                <li>
                    <p id="min" class="numero"></p>minutos</li>
                <li>
                    <p id="seg" class="numero"></p>segundos</li>
            </ul>
        </div>
    </section>
    <!--CONTADOR-->

    <?php include_once 'includes/templates/footer.php'; ?>