<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Member</h4>
            </div>
            <div class="modal-body">
                <form id="tambah_member" action="<?php echo base_url('member/add_act');?>" method="post">
                    <div class="form-group">
                        <label>Nama Member</label>
                        <input class="form-control" id="nama_member" type="text" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" value="laki-laki" required="required"> Laki-laki &nbsp;
                        <input type="radio" name="jenis_kelamin" value="perempuan" required="required"> Perempuan &nbsp;
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required="required">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="id_group" required="required">
                            <option></option>
                        <?php 
                            $this->db->select("*");
                            $query = $this->db->get('group_member');
                            $result = $query->result();
                            foreach ($result as $key) {
                        ?>
                        <option value="<?php echo $key->id_group;?>"><?php echo $key->level_group; ?></option>
                        <?php        
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="radio" name="status" value="1" required="required"> Aktif &nbsp;
                        <input type="radio" name="status" value="0" required="required"> Non Aktif &nbsp;
                    </div>
                    <div class="form-group">
                        <label>RFID Card</label>
                        <input type="text" name="rfid_card" class="form-control" id="rfid_card" onkeydown="cekrfid(this.value)">
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tambah_member").bind("keypress", function(e) {
            if (e.keyCode == 13) {
                return false;
            }
        });

    });
    
</script>