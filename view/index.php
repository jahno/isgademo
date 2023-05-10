<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>Ecole de demain</title>

    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="dist/images/logos/favicon.png" />
    
    <!-- --------------------------------------------------- -->
    <!-- Prism Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="dist/libs/prismjs/themes/prism.min.css">

    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    
    <link  id="themeColors"  rel="stylesheet" href="dist/css/style.min.css" />
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- --------------------------------------------------- -->
    <!-- Body Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- --------------------------------------------------- -->
      <!-- Sidebar -->
      <!-- --------------------------------------------------- -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
           <a href="index.html" class="text-nowrap logo-img">
            Logo
              <!-- <img src="dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
              <img src="dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" /> -->
  </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="?route=index" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Dashoboard</span>
                </a>
              </li>

             
 
            </ul>
            
          </nav>
          <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
              <div class="john-img">
                <img src="dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
              </div>
              <div class="john-title">
                <h6 class="mb-0 fs-4 fw-semibold"><?= App::getSession('user')->nom ?></h6>
                <span class="fs-2 text-dark">Etudiant</span>
              </div>
              <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
              </button>
            </div>
          </div>  
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <!-- --------------------------------------------------- -->
      <!-- Main Wrapper -->
      <!-- --------------------------------------------------- -->
      <div class="body-wrapper">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        <header class="app-header"> 
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="ti ti-search"></i>
                </a>
              </li>
            </ul>
          
            

            <div class="d-block d-lg-none">
              <img src="dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
              <img src="dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
            </div>
            <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                  <i class="ti ti-align-justified fs-7"></i>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                 
                
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                      <div class="d-flex align-items-center">
                        <div class="user-profile-img">
                          <img src="dist/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="" />
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class="py-3 px-7 pb-0">
                          <h5 class="mb-0 fs-5 fw-semibold">Mon profile</h5>
                        </div>
                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                          <img src="dist/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="" />
                          <div class="ms-3">
                            <h5 class="mb-1 fs-3"><?= App::getSession('user')->nom?></h5>
                          </div>
                        </div>
                        
                        <div class="d-grid py-4 px-7 pt-8">
                          <a href="?route=logout" class="btn btn-outline-primary">Deconnexion</a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- --------------------------------------------------- -->
        <!-- Header End -->
        <!-- --------------------------------------------------- -->
        <div class="container-fluid">
          <!-- --------------------------------------------------- -->
          <!--  Form Basic Start -->
          <!-- --------------------------------------------------- -->
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Decouvrir votre Parcours aprentissage</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted" href="index.html">Remplissez le formulaire ci dessous </a></li>
                      
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">  
                    <img src="dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section>
            <div class="row">
              <div class="col-12">
                <!-- ----------------------------------------- -->
                <!-- 1. Basic Form -->
                <!-- ----------------------------------------- -->
                <!-- ---------------------
                                                    start Basic Form
                                                ---------------- -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-3"> Formulaire</h5>
                    <form>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-floating mb-3">
                              <select
                              class="form-select col-12"
                              id="filiere"
                              >
                              <option value="Ingienerie" selected>Ingienerie Système Informatique</option>
                              <option value="Management">Management</option>
                            
                            </select>
                            <label>Filière</label>
                          </div>
                        </div>
                        

                  
                        <div class="col-12">
                          <div class="d-md-flex align-items-center mt-3">
                           
                            <div class="ms-auto mt-3 mt-md-0">
                              <button
                                type="button"
                                class="btn btn-info font-medium rounded-pill px-4"*
                                id="getQuestion"
                              >
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-send me-2 fs-4"></i>
                                  Valider
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

               
                
               
                <!-- ---------------------
                                                    end Basic Form
                                                ---------------- -->
                <!-- ----------------------------------------- -->
                <!-- 2. Disabled Form -->
                <!-- ----------------------------------------- -->
                <!-- ---------------------
                                                    start Disabled Form
                                                ---------------- -->
                <div class="card" style="display:none" id="carQuest">
                  <div class="card-body" >
                    <h5 class="mb-3" id="quest">Question </h5>
                
                  </div>
                </div>
                 
              </div>
            </div>
          
             
          
        
            
            
           
           
          </section>
          <!-- --------------------------------------------------- -->
          <!--  Form Basic End -->
          <!-- --------------------------------------------------- -->
        </div>
      </div>
    </div>

 
 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content rounded-1">
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Info</h5>
            <p>Nous avons bien enregistre vos réponses nous vous contacterons afin de proposer un parcours personaliser</p>
          </div>
        </div>
      </div>
    </div>
   
    
    <!-- ---------------------------------------------- -->
    <!-- Customizer -->
    <!-- ---------------------------------------------- -->

    <!-- ---------------------------------------------- -->
    <!-- Import Js Files -->
    <!-- ---------------------------------------------- -->
    <script src="dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    
    <script src="dist/js/custom.js"></script>
    <script src="dist/libs/prismjs/prism.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

    <script>
        $(()=> {

           

$('#getQuestion').click(()=>{

     
    let f = $('#filiere').val();
    let n = $('#niveau').val();
    let qu;
    if(f == 'Ingienerie'){  
            qu ="Bonjour OpenAI, pouvez-vous générer une série de 10 questions de différents niveaux de difficulté pour évaluer le niveau d'un étudiant en ingénierie informatique ? Les questions doivent porter sur les concepts clés de la programmation orientée objet, les algorithmes de tri, et les bases de données relationnelles"
    }else {
       qu = "Bonjour OpenAI, pouvez-vous générer une série de 10 questions de différents niveaux de difficulté pour évaluer le niveau d'un étudiant en management d'entreprise ? Les questions doivent porter sur les concepts clés de la gestion stratégique, la comptabilité, la finance d'entreprise, la gestion des ressources humaines et la gestion de la chaîne d'approvisionnement"
    }
    $.LoadingOverlay("show");
    
   sendOpenAIRequest(qu);
  
})


 

async function sendOpenAIRequest(qu) {
  const url = 'https://api.openai.com/v1/completions';
  const apiKey = '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';
  const prompt = 'Bonjour';
  const model = 'text-davinci-002';
  const maxTokens = 500;

  try {
    const response = await axios.post(url, {
      prompt: qu,
      max_tokens: maxTokens,
      model: model
    }, {
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apiKey}`
      }
    });
    $.LoadingOverlay("hide");
    console.log(response.data.choices[0].text);
    let t = response.data.choices[0].text.split('\n')
    let ta = t.splice(0,2)
    $('#quest').empty('')
    $('#carQuest').fadeIn(200)

    t.map((quest,ind)=>{
      

        $('#quest').append(`
   
     <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      
                      <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${ind}" aria-expanded="true" aria-controls="collapseOne">
                          Question #${ind+1}
                          </button>
                        </h2>

                        <div id="collapse${ind}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                             ${quest}
                          </div>
                        </div>


                      </div>
                    
                    </div>
       </div>        
     `)

     $('#carQuest').append(`
     <div class="card-reponse">
                  <div class="card-body">
                    <h5 class="mb-3"> Réponse ${ind+1}</h5>
                    <form>
                      <div class="row">
                        <div class="col-md-12" >
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="reponse${ind+1}" placeholder="Entre votre reponse">
                            <label for="tb-fname">Reponse ${ind+1}</label>
                          </div>
                        </div>     
     `)
     
    })
    $('#carQuest').append(`
    
    <div class="col-12">
                          <div class="d-md-flex align-items-center mt-3">
                           
                            <div class="ms-auto mt-3 mt-md-0">
                              <button
                                type="button"
                                class="btn btn-info font-medium rounded-pill px-4"*
                                id="getQuestion"
                              >
                                <div class="d-flex align-items-center" id="btnValidReponse" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <i class="ti ti-send me-2 fs-4"></i>
                                  Valider les reponses
                                </div>
                              </button>
                            </div>
                          </div>
                        </div>


                      </div>
                    </form>
                  </div>
                </div>
    `)
     
    $('#btnValidReponse').click(()=>{
      let reponses = [];  
      $('input[id^=reponse]').each(function() { 
        reponses.push($(this).val());  
      });
     
      //alert("Vos reponses ont bien été enregistrée nous vous enverons votre parcours d'aprentissage ainsi que des resources suplémentaires ")

      
      
    })

  } catch (error) {
    console.error(error.response.data);
  }
}




    function getQuestions(qu){

  

        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Bearer ");
                xhr.setRequestHeader("OpenAI-Organization", "org-nPaKn8HJdscKAH9FS4yCahkx");
                xhr.setRequestHeader("Content-Type", "application/json");
                
                xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
            }
        });
               
            $.ajax({
                url: "https://api.openai.com/v1/completions",
                method: "POST",
                data: JSON.stringify({
                    model: "text-davinci-003",
                    prompt: qu,  
                    max_tokens:1000
                }),
                success: function(response) {
                    console.log(response.data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });

    }
         

        })
    </script>
    
  </body>
</html>
