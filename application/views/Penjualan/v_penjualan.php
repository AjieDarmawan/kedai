<div class="fh-breadcrumb">

    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">

            <div class="row">
                               

                    <div class="col-lg-12">         
                    <?php
                     if($this->session->flashdata('message'))
                        {
                            echo"<div class='alert alert-success alert-dismissable'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>               
                                    <strong>
                                        <i class='icon-ok'></i>
                                    SUKSES !
                                    </strong> ".$this->session->flashdata('message')." .
                                </div>";

                                
                        }

                    ?>
                    </div>

<?php
//echo "<pre>";
//print_r($user_data);
//echo "</pre>";
?>
    <div class="ibox-content">
        <div style="overflow-x:scroll">
            <div class="col-sm-12">
                <p align="right"> 
                    
                   
               
                </p>
            </div>

            <div class="col-sm-12">
                
             <table class="table table-striped table-bordered table-hover"  >
                <thead>
                    <tr>
                        <th class="center">
                             No
                        </th>
                        
                        <th>Nama Pembelian - Harga</th>
                        <th>Pembelian</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                       
                       
                       
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kopi Aceh - 3000</td>
                            <td>3</td>
                            <td>9000</td>
                            <td>Non Member</td>
                            <td>20 Mei 2018</td>
                            <td>9000</td>
                        </tr>

                         <tr>
                            <td>2</td>
                            <td>1. Sop Aceh  - 6000<br>
                                2. Kopi Aceh - 3000</td>
                            <td>3<br>3</td>
                            <td>18000<br>9000</td>
                            <td>Gold</td>
                            <td>20 Mei 2018</td>
                            <td>20000</td>
                        </tr>

                         <tr>
                            <td>3</td>
                            <td>1. Sop Aceh  - 6000<br>
                                2. Kopi Aceh - 3000</td>
                            <td>3<br>3</td>
                            <td>18000<br>9000</td>
                            <td>Silver</td>
                            <td>21 Mei 2018</td>
                            <td>25000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1. Sop Aceh  - 6000<br>
                                2. Kopi Aceh - 3000</td>
                            <td>3<br>3</td>
                            <td>18000<br>9000</td>
                            <td>Platinum</td>
                            <td>21 Mei 2018</td>
                            <td>15000</td>
                        </tr>

                        <tr>
                                <td colspan="6"><center>Total Penjualan</center></td>
                                <td><b>100000<b></td>
                        </tr>
    

                </tbody>
            </table>

            </div>
        </div>
    </div>
                                

                                
                                

         </div>    

        </div>
    </div>
</div>


<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>









