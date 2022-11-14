<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Currículum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="library\css\materialize.min.css">
    <link rel="stylesheet" href="assets\curriculum\style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="library/js/funciones.js"></script>
    <script src="library/js/jquery-3.6.0.min.js"></script>
    <script src="library/js/materialize.min.js"></script>
  </head>
  <body>
  <?php require 'partials/header.php' ?>
  <a href="logout.php" style="text-align:center; display:block;text-decoration:underline;
    color: #333;">Logout</a>
    <div class="container">
        <div class="row-md-12" id="titol">
        <?php 
        include 'databaseCV.php';
        $sql=" SELECT * FROM DB_CV_1 WHERE id = (SELECT MAX(id) FROM DB_CV_1)";
        $execucio=mysqli_query($conn1, $sql);
        while($fila=mysqli_fetch_array($execucio)){
            $dades=$fila[0]."||".
            $fila[1]."||".
            $fila[2]."||".
            $fila[3]."||".
            $fila[4]."||".
            $fila[5]."||".
            $fila[6]."||".
            $fila[7]."||".
            $fila[8]."||".
            $fila[9]."||".
            $fila[10]."||".
            $fila[11]."||".
            $fila[12]."||".
            $fila[13]."||".
            $fila[14]."||".
            $fila[15]."||".
            $fila[16]."||".
            $fila[17]."||".
            $fila[18]."||".
            $fila[19]."||".
            $fila[20]."||". 
            $fila[21]."||".
            $fila[22]."||".
            $fila[23]."||".
            $fila[24]."||".
            $fila[25]."||".
            $fila[26]."||".
            $fila[27]."||".
            $fila[28]."||". 
            $fila[29]."||".
            $fila[30]."||".
            $fila[31]."||".
            $fila[32]."||".
            $fila[33]."||".
            $fila[34]."||".
            $fila[35]."||".
            $fila[36]."||".
            $fila[37]."||".
            $fila[38]."||". 
            $fila[39]."||".
            $fila[40]."||".
            $fila[41]."||".
            $fila[42]."||". 
            $fila[43]."||".
            $fila[44]."||".
            $fila[45]."||".
            $fila[46]."||". 
            $fila[47]."||".
            $fila[48]."||".
            $fila[49]."||".
            $fila[50];
        
        ?>
          <h1 class="titol"><?php echo $fila[1]; ?></h1>

        </div>
      <img src="assets/curriculum/fotocurriculum.jpeg" class="img-fluid" id="imatgerodona">

      <div class="row" id="tabla_registros">
            <div class="col-md-4">

            <button class="btn-small modal-trigger"  data-target="modal1" id="veure"  onclick="omplirModal_actualitzar('<?php echo $dades ?>')";>EDITAR</button>
            
        <form id=dadesper method="POST">

        <div id="datospersonales">
            
            <span class="material-symbols-outlined">
                double_arrow
            </span>
            <h4><strong>Dades personals</strong></h4>
            <hr>
            <div id="carac">
                <span class="material-symbols-outlined">
                person
                </span>
                <h6><?php echo $fila[1]; ?></h6>
                <span class="material-symbols-outlined">
                    house
                </span>
                <h6><?php echo $fila[2]; ?></h6>
                <span class="material-symbols-outlined">
                    phone_enabled
                </span>
                <h6><?php echo $fila[3]; ?></h6>
                <span class="material-symbols-outlined">
                    alternate_email
                </span>
                <h6><?php echo $fila[4]; ?></h6>
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <h6 ><?php echo $fila[5]; ?></h6>
                <span class="material-symbols-outlined">
                    flag
                </span>
                <h6><?php echo $fila[6]; ?></h6>
                <span class="material-symbols-outlined">
                    smartphone
                </span>
                <h6><?php echo $fila[7]; ?></h6>
                <span class="material-symbols-outlined">
                    wc
                </span>
                <h6><?php echo $fila[8]; ?></h6>
                <span class="material-symbols-outlined">
                    directions_car
                </span>
                <h6><?php echo $fila[9]; ?></h6>
            </div>
                <br>
        </div>

        </form>

                
                <div id="habilidades">
                <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Habilitats</strong></h4>
                    <hr>

 
                    <div class="row">
                        <div class="col">
                            <h6><?php echo $fila[11]; ?></h6>
                            <h6><?php echo $fila[13]; ?></h6>
                            <h6><?php echo $fila[15]; ?></h6>
                            <h6><?php echo $fila[17]; ?></h6>
                            <h6><?php echo $fila[19]; ?></h6>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[12]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[14]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[16]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[18]; ?>%">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[20]; ?>%">
                                    </div>
                                </div>                            
                        </div>
                    </div>

                    <br>
                </div>



                
                <div id="Idiomas">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Idiomes</strong></h4>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <h6><?php echo $fila[21]; ?></h6>
                            <h6><?php echo $fila[22]; ?></h6>
                            <h6><?php echo $fila[23]; ?></h6>
                            <h6><?php echo $fila[24]; ?></h6>
                            <br>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[25]; ?>%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80" style="width:<?php echo $fila[26]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80" style="width:<?php echo $fila[27]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="50" style="width:<?php echo $fila[28]; ?>%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="informatica">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Informàtica</strong></h4>
                    <hr>


                    <div class="row">
                        <div class="col">
                            <h6><?php echo $fila[29]; ?></h6>
                            <h6><?php echo $fila[30]; ?></h6>
                            <h6><?php echo $fila[31]; ?></h6>
                            <h6><?php echo $fila[32]; ?></h6>
                            <h6><?php echo $fila[33]; ?></h6>
                            <br>
                        </div>
                        <div class="col">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[34]; ?>%">
                                    </div>
                                </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[35]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[36]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[37]; ?>%">
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fila[38]; ?>%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="competencias">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Competències</strong></h4>
                    <hr>

                    <span class="material-symbols-outlined">
                        arrow_right
                    </span>
                    <h6><?php echo $fila[39]; ?></h6>
                    <span class="material-symbols-outlined">
                        arrow_right
                    </span>
                    <h6><?php echo $fila[40]; ?></h6>

                    <br>
                </div> 
            </div>
            <div class="col-md-8">
                <div id="perfil">

                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Perfil</strong></h4>
                    <hr>
                    <p><?php echo $fila[10]; ?></p>
                    <br>

                </div> 
                <div id="experiencias">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Experiències laborals</strong></h4>
                    <hr>
                    
                    <div class="row">
                        <div class="col"><h8><?php echo $fila[41]; ?></h8></div>
                        <div class="col">
                            <p><?php echo $fila[44]; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><h8><?php echo $fila[42]; ?></h8></div>
                        <div class="col">
                            <p><?php echo $fila[45]; ?></p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col"><h8><?php echo $fila[43]; ?></h8></div>
                        <div class="col">
                            <p><?php echo $fila[46]; ?></p>
                        </div>
                    </div>
                    <br>

                </div> 
                <div id="educacion">
                    <span class="material-symbols-outlined">
                        double_arrow
                    </span>
                    <h4><strong>Educació</strong></h4>
                    <hr>
                    
                    <div class="row">
                        <div class="col"><h8><?php echo $fila[47]; ?></h8></div>
                        <div class="col"><?php echo $fila[49]; ?></div>
                    </div>
                    <div class="row">
                        <div class="col"><h8><?php echo $fila[48]; ?></h8></div>
                        <div class="col"><?php echo $fila[50]; ?></div>
                    </div>
                    <?php } ?>
                </div>


            </div>
        </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
        <form id=form_actualitzar method="POST">



            <div id="datospersonales">
                
                
                <h4><strong>Dades personals</strong></h4>
                <hr>

                

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    person
                </span>
                <input type="text" name="nom" value="" id="nom" placeholder="Nom i cognoms"></input>
                </div>

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    house
                </span>
                <input type="text" name="direccio" value="" id="direccio" placeholder="Direcció"></input>
                </div>
                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    phone_enabled
                </span>
                <input type="number" name="telefon" value="" id="telefon" placeholder="Telèfon"></input>
                </div>
                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    alternate_email
                </span>
                <input type="email" name="correu" value="" id="correu" placeholder="Correu electrònic"></input>
                </div>

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <input type="date" name="data" value="" id="data" placeholder="Data de naixement"></input>
                </div>

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    flag
                </span>
                <input type="text" name="pais" value="" id="pais" placeholder="País"></input>
                </div>

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    smartphone
                </span>
                <input type="number" name="mobil" value="" id="mobil" placeholder="Mòbil"></input>
                </div>

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    wc
                </span>
                <input type="text" name="estat" value="" id="estat" placeholder="Estat civil"></input>
                </div>

                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    directions_car
                </span>
                <input type="text" name="vehicle" value="" id="vehicle" placeholder="Vehicle"></input>
                </div>

                <div class="modal_perfil">
                
                <div id=dades-atr>
                <span class="material-symbols-outlined">
                    account_box
                </span>
                <input type="text" name="perfil" value="" id="perfil1" placeholder="Descripció personal"></input>
                </div>

                </div>

    <!--habs i percent-->
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Habilitats</h3>

            <div id=dades-hab>
            <span class="material-symbols-outlined">
                construction
            </span>
            <input type="text" name="hab1" value="" id="hab1" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab2" value="" id="hab2" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab3" value="" id="hab3" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab4" value="" id="hab4" placeholder="Afegeix una habilitat"></input>
            </div>

            <div id=dades-hab>
            <input type="text" name="hab5" value="" id="hab5" placeholder="Afegeix una habilitat"></input>
            </div>                    
        </div>

        <div class="col-6">
            <div id=dades-percent>
                <h3>Percentatges</h3>
                <span class="material-symbols-outlined">
                    percent
                </span>
                <input type="number" name="per1" value="" id="per1" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per2" value="" id="per2" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per3" value="" id="per3" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per4" value="" id="per4" placeholder="Percentatge de l'habilitat"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per5" value="" id="per5" placeholder="Percentatge de l'habilitat"></input>
            </div>
        </div>
    </div>

    <!--idiomes i percent-->
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Idiomes</h3>
            <div id=dades-idiom>
                <span class="material-symbols-outlined">
                    translate
                </span>
                <input type="text" name="idi1" value="" id="idi1" placeholder="Afegeix un idioma"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="idi2" value="" id="idi2" placeholder="Afegeix un idioma"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="idi3" value="" id="idi3" placeholder="Afegeix un idioma"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="idi4" value="" id="idi4" placeholder="Afegeix un idioma"></input>
            </div>
        </div>

        <div class="col-6">    

            <div id=dades-percent>
                <h3>Percentatges</h3>
                <span class="material-symbols-outlined">
                    percent
                </span>
                <input type="number" name="per11" value="" id="per11" placeholder="Percentatge de l'idioma"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per12" value="" id="per12" placeholder="Percentatge de l'idioma"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per13" value="" id="per13" placeholder="Percentatge de l'idioma"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per14" value="" id="per14" placeholder="Percentatge de l'idioma"></input>
            </div>
        </div>
    </div>

    <!--informa i percent-->
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Informàtica</h3>
            <div id=dades-idiom>
                <span class="material-symbols-outlined">
                    computer
                </span>
                <input type="text" name="inf1" value="" id="inf1" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf2" value="" id="inf2" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf3" value="" id="inf3" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf4" value="" id="inf4" placeholder="Afegeix un llenguatge de programació"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="inf5" value="" id="inf5" placeholder="Afegeix un llenguatge de programació"></input>
            </div>        
        </div>

        <div class="col-6">
            <div id=dades-percent>
                <h3>Percentatges</h3>
                <span class="material-symbols-outlined">
                    percent
                </span>
                <input type="number" name="per21" value="" id="per21" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per22" value="" id="per22" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per23" value="" id="per23" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per24" value="" id="per24" placeholder="Percentatge del llenguatge"></input>
            </div>

            <div id=dades-percent>
                <input type="number" name="per25" value="" id="per25" placeholder="Percentatge del llenguatge"></input>
            </div>
        </div>
    </div>

    <!--competencies-->
    <br>
    <div>
        <h3>Competències</h3>
        <div id=dades-idiom>
            <span class="material-symbols-outlined">
                import_contacts
            </span>
            <input type="text" name="comp1" value="" id="comp1" placeholder="Afegeix una competència"></input>
        </div>
        <div id=dades-idiom>
            <input type="text" name="comp2" value="" id="comp2" placeholder="Afegeix una competència"></input>
        </div>
    </div>

    <!--experiència laboral-->
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Data</h3>
            <div id=dades-idiom>
                <span class="material-symbols-outlined">
                    calendar_today
                </span>
                <input type="text" name="expdata1" value="" id="expdata1" placeholder="Data inici - data final"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="expdata2" value="" id="expdata2" placeholder="Data inici - data final"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="expdata3" value="" id="expdata3" placeholder="Data inici - data final"></input>
            </div>    
        </div>

        <div class="col-6">
            <div id=dades-percent>
                <h3>Experiència</h3>
                <span class="material-symbols-outlined">
                    business_center
                </span>
                <input type="text" name="exptraj1" value="" id="exptraj1" placeholder="Afegeix un lloc de treball"></input>
            </div>

            <div id=dades-percent>
                <input type="text" name="exptraj2" value="" id="exptraj2" placeholder="Afegeix un lloc de treball"></input>
            </div>

            <div id=dades-percent>
                <input type="text" name="exptraj3" value="" id="exptraj3" placeholder="Afegeix un lloc de treball"></input>
            </div>
        </div>
    </div>  

    <!--educació-->
    <br>
    <div class="row">
        <div class="col-6">
            <h3>Data</h3>
            <div id=dades-idiom>
                <span class="material-symbols-outlined">
                    calendar_today
                </span>
                <input type="text" name="edudata1" value="" id="edudata1" placeholder="Data inici - data final"></input>
            </div>

            <div id=dades-idiom>
                <input type="text" name="edudata2" value="" id="edudata2" placeholder="Data inici - data final"></input>
            </div>    
        </div>

        <div class="col-6">
            <div id=dades-percent>
                <h3>Educació</h3>
                <span class="material-symbols-outlined">
                    school
                </span>
                <input type="text" name="edutraj1" value="" id="edutraj1" placeholder="Afegeix un centre educatiu"></input>
            </div>

            <div id=dades-percent>
                <input type="text" name="edutraj2" value="" id="edutraj2" placeholder="Afegeix un centre educatiu"></input>
            </div>
        </div>
    </div>                    
        <br>
            <a href="curriculum.php"><button type="submit" name="btn_actualitzar" value="Actualitzar" id="Actualitzar" class="btn-small modal-trigger">ACTUALITZAR</button></a> 
        <br>
    </form>
  </div>



  <!-- FINAL-->


 



  <script type="text/javascript">

    $(document).ready(function(){

    $("#Actualitzar").on('click',function(e){
            e.preventDefault();
        actualitzar_dades();
        });



    });

    </script>



        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#Actualitzar").on('click',function(e){
                    e.preventDefault();
                    afegir_dades();
                })
            });

        </script>
        <script>

        $(document).ready(function(){
            M.AutoInit();
        });
        </script>
  </body>
</html>