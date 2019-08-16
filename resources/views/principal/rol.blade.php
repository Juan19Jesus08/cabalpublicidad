<?php 
             
             $valor= 'desarrollo';
             $registros_de_videos = DB::select("SELECT cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso inner join categoria on cursos.id_categoria=categoria.id_categoria where categoria.descripcion='$valor' GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc");
            print_r($registros_de_videos);
            
             foreach($registros_de_videos as $item)
             {
                 
                 echo '<div class="col-xs-12 col-sm-4 zoom courses  with-sidebar three-column grid-group-item">';
                 echo '<div class="course clist">';
                                  echo '	<a href="http://www.demos.themecycle.com/educationpress/courses/escultura-dental/" class="img-thumb ">';
                                  echo'<div class="course-thumbnail course-featured-media course-featured-media-2558 "><figure>';				echo'<img src="http://www.demos.themecycle.com/educationpress/wp-content/uploads/2018/03/protocoloacrilico-perfil-instagram-150-360x270.png" class="course-media-img" alt="Escultura Dental" />';
                             echo '</figure></div>';                                        echo'</a>';
                                                     echo '<div class="course_space">';
                                                      echo '<div class="price">$'.$item->precio;                                        echo '<span></span></div>';
                                                     echo '<h3><a href="http://www.demos.themecycle.com/educationpress/courses/escultura-dental/">'.$item->nombre.'</a></h3>';
                                 echo '<p class="meta">';
                                 echo 'by: <h3>Daniel</h3> </p>';
                                  
                                echo '<p class="desc">'.			
                             $item->descripcion.			
                         '</p>';
                                 
                                 
                                echo '</div>';
                                     
                                     echo'<div class="course_rel">';
                                                             echo '<div class="course_rating col-xs-12 col-sm-6">';
                                          
                                                                            echo '<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                                 echo'<i class="glyphicons glyphicon-star-empty"></i>';
                                                                         
                                echo ' </div>';
                                                                                    echo ' <p class="enroll col-xs-12 col-sm-6 pull-right"> Cursando '.$item->vendidos.'</p>';
                                                              echo'</div>';
                                 
                                 echo'</div>';  
                             echo'</div>';
             }
             
                         
                         
             
                          ?>
             