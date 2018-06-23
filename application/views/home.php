<?php 

$this->load->view('header');

$this->load->view('pop_css');

$this->load->view('nama_bulan');

?>



        <!-- <div id="page-wrapper" class="" style="background:#222 url('<?php echo base_url('assets/image/bg_a.jpg');?>');no-repeat center center;background-size:cover; background-attachment:fixed;" > -->
         <div id="page-wrapper" class="" style="background-color:#1f7980 " >
        
        <div class="row border-bottom">

        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background:#2f4050;">

        <div class="navbar-header">

            <a class="navbar-minimalize minimalize-styl-2 btn btn-white " href="#"><i class="fa fa-bars"></i> </a>

           

        </div>

            <ul class="nav navbar-top-links navbar-right" >

                <li>

                    <span class="m-r-sm text-muted welcome-message" style="color:white">Selamat Datang di </span>

                </li>

               <li>

                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <span class="clear"> <span class="block m-t-xs"> 

                             </span> <span class="text-muted text-xs block" style="color:white;"><i class="fa fa-cog"></i><?php echo$username=$this->session->userdata('username');?> <b class="caret"></b></span> </span> </a>

                    <ul class="dropdown-menu animated fadeInRight m-t-xs">

                            <?php  echo "<li>".anchor('User/help','Help'."</li>"); ?>

                             <?php  echo "<li>".anchor('User/update_profil/'.$this->session->userdata('id_user'),'Ganti Password'."</li>"); ?>

                            

                            <li class="divider"></li>

                            <?php  echo "<li>".anchor('Logout',' Keluar'."</li>"); ?>

                        </ul>

                </li>
                        

            </ul>


				<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
            <script src="<?php echo base_url();?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
            <script src="<?php echo base_url();?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
               <script type="text/javascript">
                
                    // $(".bell").click(function(){
                           
						

                    //         <?php 

                    //             $bell = array('status'=>1);
                    //             $this->db->where('status',0);
                    //             $this->db->update('log_activity',$bell);


                    //         ?>




                    // });

               </script>
         



        </nav>

        </div>

            <div class="row wrapper border-bottom white-bg page-heading">



                <div class="col-lg-10">

                   

                    <ol class="breadcrumb">

                        <li>

                            <a href="">Home</a>

                        </li>

                       

                        <li >

                            <?php echo$this->session->userdata('breadcrumb');?>

                        </li>

                    </ol>

                </div>

                <div class="col-lg-2">



                </div>

            </div>


            
            <?php

                date_default_timezone_set('Asia/Jakarta');

                $cek=$this->session->userdata('logged_in_admin');

                     if(!empty($cek))

                     {

                        echo $contents;

                     }

                     else

                     {

                         redirect('Login');

                     }





            ?>


        <div class="footer">

           

            <div>
                Copyright <strong>Kedai Seribu Bukit &copy; 2018</strong>
            </div>

        </div> 



        </div>
        

      
        </div>







    <!-- Mainly scripts -->

    <?php 

    if($this->session->userdata('act_menu')!='ruas' )

    {

        ?>

        <script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script>

    <?php

    }

    

    ?>

    <!--<script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?>"></script>-->

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') ?>"></script>



    <script src="<?php echo base_url();?>loaders/loading.js"></script>



    <script src="<?php echo base_url('assets/js/plugins/chosen/chosen.jquery.js');?>"></script>



    <script src="<?php echo base_url('assets/js/plugins/jasny/jasny-bootstrap.min.js');?>"></script>

    

    <script src="<?php echo base_url('assets/js/plugins/select2/select2.full.min.js');?>"></script>



    <script src="<?php echo base_url('assets/js/plugins/jquery-ui/jquery-ui.min.js');?>"></script>

    <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/chosen/chosen.jquery.js');?>"></script>
   

    <script src="<?php echo base_url('assets/js/plugins/validate/jquery.validate.min.js');?>"></script>

    <!-- Data picker -->

   <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js');?>"></script>



    <script src="<?php echo base_url('assets/js/plugins/dataTables/jquery.dataTables.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.bootstrap.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.responsive.js');?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.tableTools.min.js');?>"></script>



    <!-- Custom and plugin javascript -->

    <script src="<?php echo base_url('assets/js/inspinia.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>"></script>





     <script>

        $(document).ready(function() {



            $('.i-checks').iCheck({

                    checkboxClass: 'icheckbox_square-green',

                    radioClass: 'iradio_square-green',

                });



           



           var oTable = $('#editable').DataTable();

           



           $(".select2_demo_1").select2();

            $(".select2_demo_2").select2();

            $(".select2_demo_3").select2({

                placeholder: "Select a state",

                allowClear: true

            });



             var config = {

                '.chosen-select'           : {},

                '.chosen-select-deselect'  : {allow_single_deselect:true},

                '.chosen-select-no-single' : {disable_search_threshold:10},

                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},

                '.chosen-select-width'     : {width:"95%"}

                }



            $('#data_1 .input-group.date').datepicker({

                todayBtn: "linked",

                keyboardNavigation: false,

                forceParse: false,

                calendarWeeks: true,

                autoclose: true,

                format: "dd/mm/yyyy"

            });



            $('#data_2 .input-group.date').datepicker({

                startView: 1,

                todayBtn: "linked",

                keyboardNavigation: false,

                forceParse: false,

                autoclose: true,

                format: "dd/mm/yyyy"

            });

	     $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });


             $('#data_5 .input-daterange').datepicker({

                keyboardNavigation: false,

                forceParse: false,

                autoclose: true,

                format: "dd/mm/yyyy"

            });



             



            





          

            



        });

        

    </script>



    





</body>



</html>

