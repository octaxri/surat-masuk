<div id="form_container">
		<div class="title">TAMBAH SKPD</div>
		
		<?php 
			$attributes = array('class' => 'appnitro');
			echo form_open('dinas/add_process',$attributes); ?>
			<ul>
			  	<li>
					<?= anchor(site_url('dinas'),img(array('src'=>'images/flexigrid/prev.gif','border'=>'0','alt'=>'')).'Kembali Ke Master SKPD',''); ?>
				</li>
				
				<li id="li_1" >
					<label class="description" for="element_1">Nama SKPD</label>
					<div>
						<input id="nama_dinas" name="nama_dinas" class="element text medium" type="text" value="<?php echo set_value('nama_dinas');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>Nama Dinas</small></p> 
					<?php echo form_error('nama_dinas'); ?>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Singkatan</label>
					<div>
						<input id="singkatan" name="singkatan" class="element text medium" type="text" value="<?php echo set_value('singkatan');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>Singkatan</small></p> 
					<?php echo form_error('singkatan'); ?>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Nama Kepala</label>
					<div>
						<input id="nama_kepala" name="nama_kepala" class="element text medium" type="text" value="<?php echo set_value('nama_kepala');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>Nama Kepala</small></p> 
					<?php echo form_error('nama_kepala'); ?>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Email</label>
					<div>
						<input id="email" name="email" class="element text medium" type="text" value="<?php echo set_value('Email');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>Email</small></p> 
					<?php echo form_error('email'); ?>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">HP</label>
					<div>
						<input id="no_hp" name="no_hp" class="element text medium" type="text" value="<?php echo set_value('no_hp');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>HP</small></p> 
					<?php echo form_error('no_hp'); ?>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Telepon</label>
					<div>
						<input id="telp" name="telp" class="element text medium" type="text" value="<?php echo set_value('telp');?>"/> 
					</div>
					<p class="guidelines" id="guide_1"><small>Telepon</small></p> 
					<?php echo form_error('telp'); ?>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Alamat</label>
					<div>
						<?php 
								$data = array(
											'name'        => 'alamat',
											'id'          => 'alamat',
											'value'       => set_value('alamat'),
											'class'       => 'element textarea medium',
											'cols'		  => '200'
										);
								echo form_textarea($data);
							?> 		 
					</div>
					<p class="guidelines" id="guide_1"><small>Alamat</small></p> 
					<?php echo form_error('alamat'); ?>
				</li>
				<li>
					<input id="submit-button" type="submit" name="daftar_warna" value="Tambah" />
					<input id="submit-button" type="button" name="batal" value="Batal" onClick="location.href='<?php echo site_url('dinas')?>'"/>
				</li>
			</ul>
		<?php echo form_close(); ?>
	</div>
