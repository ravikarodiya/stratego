<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <!-- Pretty Checkbox-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;515;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/backend/css/bb-theme.css') }}">
       
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <style>
      label.error {
          color: red;
          font: normal normal 200 11px Montserrat;
      }
      input.error {
          border-color: red;
      }

      .modal-dialog {
          max-width: 500px;
          margin: 150px auto;
      }

      .fade.in {
          opacity: 1;
      }

        a.dropdown-item {
            padding-left: 15px;
        }
    </style>
</head>




<body class='main page'>
	<div class='main-frame' id="app">
         <!-- Sidebar -->
         <div class="side-panel">
            <div class="top">
                <div class="item">
                    <a href="{{ url('dashboard') }}">
                      <img src="{{ asset('/backend/icons/144.png') }}" alt="Logo" class="brand" />
                    </a>
                </div>
                <div class="item switch">
                  <a href="#">
                    <i class="mdi mdi-account-circle-outline"></i>Teams
                  </a>
                </div>
            </div>
            <div class="bottom">
                <div class="item" data-toggle="collapse" data-target="#grid"><a href="#"><i class="mdi mdi-apps"></i></a></div>
                <div class="item"><a href="javascript::void(0);"><i class="fas fa-bell"></i></a></div>
                <div class="item"><a href="javascript::void(0);"><i class="mdi mdi-message-processing"></i></a></div>
                <div class="item"><a href="javascript::void(0);"><i class="mdi mdi-help-circle"></i></a></div>
                <div class="item">
                    <a href="javascript::void(0);" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </div>

                <form id="export-csv" action="/unit/exportcsv/" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="unit_id" id="input_unit_id"  />
               </form>
            </div>
        </div>
        
        <div class="side-options">
        	<section id='sidebar'>
                  <div class="secside">
                    <div class="headsec">
                      <h4>
                           <i class="fa fa-users to" aria-hidden="true"></i>  <span>Plan Teams</span>
                        </h4>
                    </div>
                     <ul id='dock secside' class="sidebarli">
                        <li class='launcher to'>
                          <a href="#" class="sidetext">
                           <img src="{{ asset('/backend/assets/images/check.png') }}" class="unity">
                          <span> My Teams</span>
                         </a>
                        </li>
                        <li class='launcher to'>
                            <a href="#" class="sidetext">
                              <img src="{{ asset('/backend/assets/images/star.png') }}" class="unity">
                              <span> My Favorites</span>
                            </a>
                        </li>
                        <li class='launcher to'>
                           <input type="text" class="searchbar" placeholder="Search" >
                        </li>
                        
                        <!-- <li class="loadingeffectli">
                            <img src="{{ asset('/images/loading.gif') }}" style="width: 40%;">
                        </li> -->
                        {!! Helper::unitList(auth()->user()->id) !!}
                        
                     </ul>
                    <ul style="list-style: none;padding: 0px;">
                        <li class='launcher to'>
                            <a href="javascript::void(0);" id="add_unit" class="sidetext">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <span>Add Unit </span>
                            </a>
                        </li>
                    </ul>
                  </div>
               </section>
            <span class="arrow switch"><i class="fas fa-angle-left"></i></span>
        </div>
        <div class="main-contents team-wrapper">
                <vue-progress-bar></vue-progress-bar>
                  <!-- Main content -->
                <router-view></router-view>
        </div>
      </div> 
  </div>

  

<!-- Modal -->
<div class="modal fade" id="addNewUnit" tabindex="-1" role="dialog" aria-labelledby="addNewUnit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" style="display: inline-block;font: normal normal 600 16px/26px Montserrat;">Add Unit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="font-size: 28px;">&times;</span>
              </button>
          </div>

          <form id="addunitForm">
                @csrf

                <div class="modal-body" style="padding-top:0;">
                    <div class="form-group">
                        <label style="font: normal normal 490 11px Montserrat;">Name of the Unit</label>
                        <input 
                            type="text" 
                            name="unit_name"
                            class="form-control"
                            style="border-radius: 2px;margin-top: 5px;"
                            autocomplete="off"
                            />
                    </div>

                    <div class="form-group">
                        <label style="font: normal normal 490 11px Montserrat;">Name of the team responsible for the unit with access to planing execution and revision of all teams in the unit:</label>
                        <input 
                            type="text" 
                            name="name"
                            class="form-control"
                            style="border-radius: 2px;margin-top: 5px;"
                            autocomplete="off"
                            />
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript::void(0);" data-dismiss="modal" style="font: normal normal 490 11px Montserrat;letter-spacing: 2px;margin-right: 10px;text-decoration: none;">Cancel</a>
                    <button type="submit" class="btn btn-primary" style="font: normal normal 490 14px Montserrat;padding: 8px 12px;height:auto;">Add Unit</button>
                </div>
          </form>
        </div>
    </div>
</div>




@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth
<script src="{{ mix('/js/app.js') }}"></script>

<script src="{{ asset('/custom/javascripts/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.validate.js') }}"></script>

<script src="{{ asset('/custom/javascripts/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/custom/javascripts/modernizr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/custom/javascripts/application-985b892b.js') }}" type="text/javascript"></script>
<!-- Google Analytics -->
<script type="text/javascript">

        $(document).ready(function() {
            resizeMainContent();
            $(".switch").click(function() {
                $(".side-options").toggleClass("collapse");
                resizeMainContent();
            });
            $(".filter-toogle").click(function() {
                $(this).siblings(".f-tags").toggleClass("display");
            });
            $(".filter-box").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                /*$(".filters .filter").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });*/
            });
            /*$("#grid").click(function() {
                $(".side-options-overlay.grid").toggleClass("collapse");
            });
            $(".quick-tools .btn-close").click(function() {
                $(".side-options-overlay").toggleClass("collapse");
            });*/
        });
        
        
        if($('#profilelist').is(".show")){
              $('.teamtdtitle .badge').show();
        } else{
              $('.teamtdtitle .badge').hide();
        }

        function resizeMainContent() {
            setTimeout(
                function() {
                    var tabBarHeight = $('.main-heading-bar').outerHeight() + $('.sectionsec .nav-tabs').outerHeight(); 
                    $('#myTabContent').css({'min-height': 'calc(100vh - '+ tabBarHeight + 'px)'});

                    var tWidth = $('.main-frame').width();
                    var sp = $('.side-panel').width();
                    var so = $('.side-options').width();
                    var mLeft = sp + so + 20;
                    mWidth = tWidth - (sp + so) - 20;
                    $('.main-contents').css({
                        'width': mWidth + 'px',
                        'left': mLeft + 'px'
                    });
                }, 100);
        }  
    $(document).ready(function() {
        
        
        $('#add_unit').click(function(){
            $('#addNewUnit').modal('show');
        });

        $('#addunitForm').validate({ 
            rules: {
                unit_name: {
                    required: true,
                },
                name: {
                    required: true,
                }
            },
            messages: {
                unit_name: {
                    required: 'please enter unit name.',
                },
                name: {
                    required: 'please enter team name.',
                }
            },
            submitHandler: function (form) {
                console.log($(form).serialize());
                var serializeForm = $(form).serialize();
                axios.post('/api/unit/store', serializeForm)
                  .then(function (response) {
                    $('#addNewUnit').modal('hide');
                  //  loadUnit();
                    window.location.reload();
                  })
                  .catch(function (error) {
                    console.log(error);
                  });


            }
        });
        

        function loadUnit() {
          var imageli = "{{ asset('/custom/images/unity.png') }}";
          axios.get("{{ url('api/unit/list') }}")
              .then(function (response) {
                console.log(response);
                if(response.data.success){
                  $('.unitliappened').remove();
                  $('.loadingeffectli').hide();
                  $.each(response.data.data.data,function(key,value){
                   
                    $('.sidebarli').append("<li class='launcher to unitliappened'><a href='/teams/"+value.id+"' class='sidetext' ><img src="+imageli+" class='unity'><span> "+value.unit_name+"</span></a></li>")
                  })
                }
              })
              .catch(function (error) {
                console.log(error);
              });
        }
      //  loadUnit();
    });
</script>
<script>var _gaq=[['_setAccount','UA-XXXXX-X'],
    ['_trackPageview']];
    (function(d, t) {
    var g=d.createElement(t), s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl': '//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s)
    }
    
    (document, 'script'));
</script>


</body>
</html>
