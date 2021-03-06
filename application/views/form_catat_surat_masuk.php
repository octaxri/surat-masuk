<div id="form_container">
		<div class="title">CATAT SURAT MASUK</div>
		
		<?php 
			$attributes = array('class' => 'appnitro', 'name' => 'form_catat_surat_masuk');
			echo form_open_multipart('surat_masuk/add_process',$attributes); ?>
			<ul>
			  	<li>
					<?= anchor(site_url('surat_masuk'),img(array('src'=>'images/flexigrid/prev.gif','border'=>'0','alt'=>'')).'Kembali Ke Daftar Surat Masuk',''); ?>
				</li>
				<li id="li_14" >
					<label class="description" for="element_14">Sifat</label>
					<div>
						<?php 
								$options = array(
												'1' => 'Reguler',
												'2' => 'Rahasia',
											);
								echo form_dropdown('sifat',$options, '1', 'id="sifat" class="element select small" onChange="ubahSifat();"');
						?>					
					</div>
					<?php echo form_error('sifat'); ?>
				</li>
				<div id="hideme1">
					<li id="li_14" >
						<label class="description" for="element_14">Nomor Surat</label>
						<div>
							<input id="nomor" name="nomor" class="element text medium" type="text" value="<?php echo set_value('nomor');?>"/> 					
						</div>
						<?php echo form_error('nomor'); ?>
					</li>
				</div>
				<li>
					<label class="description">Tanggal Terima</label>
						<span>
							<div id="newline-wrapper">
								<table class="split-date-wrap" cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td>
												<input type="text" class="w2em" id="date-9-dd" readonly name="tgl_terima" maxlength="2" value="<?php echo $tgl;?>"/>-<label for="date-9-dd">DD</label>
											</td>												
											<td>
												<input type="text" class="w2em" id="date-9-mm"readonly name="bln_terima" maxlength="2" value="<?php echo $bln;?>"/>-<label for="date-9-mm">MM</label>
											</td>
											<td>
												<input type="text" class="w4em highlight-days-67 split-date" readonly id="date-9" name="thn_terima" maxlength="4" value="<?php echo $thn;?>"/>
												&nbsp;<img src="<?=base_url();?>images/icon/hapus.png" onclick="hapus_tanggal_terima();"/>
												<label for="date-9">YYYY</label>
											</td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
							<?php echo form_error('tgl_terima'); ?>
							<?php echo form_error('bln_terima'); ?>
							<?php echo form_error('thn_terima'); ?>
						</span>
				</li>
				<li id="li_21" >
					<label class="description" for="element_21">Jenis Surat</label>
					
						<?php 
							
							echo form_dropdown('jenis_surat',$jenis_surat,set_value('jenis_surat'), 'id="jenis_surat" class="element select medium"');
						?>
					<?php echo form_error('jenis_surat'); ?>
				</li>
				<li id="li_21" >
					<label class="description" for="element_21">Dari</label>
					
						<?php
							
							echo form_dropdown('instansi',$instansi,set_value('instansi'), 'id="instansi" class="element select medium"');
						?>
					<?php echo form_error('instansi'); ?>
				</li>
				<li id="li_14" >
					<label class="description" for="element_14">Perihal</label>
					<div>
						<input id="perihal" name="perihal" class="element text medium" type="text" value="<?php echo set_value('perihal');?>"/> 					
					</div>
					<?php echo form_error('perihal'); ?>
				</li>
				
				<div id="hideme">
					<li id="li_1" >
						<div id="dvFile_file">
							<label class="description" for="element_1">File Surat</label>
							<table cellpadding="0" cellspacing="0" border="0">
								<tr>
									<td>
										<input id="userfile0" name="userfile0" class="element file medium" type="file" size="36"/>
									</td>
									<td>
										&nbsp;<a href="javascript:_add_more_file();" title="tambah file"><img src="<?=base_url()."images/plus_icon.gif"?>" width="15" height="13" border="0" align="right" /></a>
									</td>
								</tr>
							</table>
						</div>
					</li>
					<li id="li_21" >
						<label class="description" for="element_21">Kepada</label>
						<div>
							<?php
								echo form_multiselect('pejabat[]',$pejabat,set_value('pejabat'), 'id="pejabat" class="element select small" multiple="multiple" size="20"');
							?>
						</div>
						<?php echo form_error('pejabat'); ?>
					</li>
					<li>
						<label class="description">Tanggal Surat</label>
							<span>
								<div id="newline-wrapper">
									<table class="split-date-wrap" cellpadding="0" cellspacing="0" border="0">
										<tbody>
											<tr>
												<td>
													<input type="text" class="w2em" id="date-8-dd" readonly name="tgl_surat" maxlength="2" value="<? if(set_value('tgl_surat')!='') echo set_value('tgl_surat');?>"/>-<label for="date-9-dd">DD</label>
												</td>												
												<td>
													<input type="text" class="w2em" id="date-8-mm"readonly name="bln_surat" maxlength="2" value="<? if(set_value('bln_surat')!='') echo set_value('bln_surat');?>"/>-<label for="date-9-mm">MM</label>
												</td>
												<td>
													<input type="text" class="w4em highlight-days-67 split-date" readonly id="date-8" name="thn_surat" maxlength="4" value="<? if(set_value('thn_surat')!='') echo set_value('thn_surat');?>"/>
													&nbsp;<img src="<?=base_url();?>images/icon/hapus.png" onclick="hapus_tanggal_surat();"/>
													<label for="date-9">YYYY</label>
												</td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
								<?php echo form_error('tgl_surat'); ?>
								<?php echo form_error('bln_surat'); ?>
								<?php echo form_error('thn_surat'); ?>
							</span>
					</li>
					
					<li id="li_14" >
						<label class="description" for="element_14">Jumlah Lampiran</label>
						<div>
							<input id="lampiran" name="lampiran" class="element text medium" type="text" value="<?php echo set_value('lampiran');?>"/> 					
						</div>
						<?php echo form_error('lampiran'); ?>
					</li>
					<li id="li_14" >
						<label class="description" for="element_14">Catatan</label>
						<div>
							<?php 
								$data = array(
											'name'        => 'catatan',
											'id'          => 'catatan',
											'value'       => set_value('catatan'),
											'class'       => 'element textarea medium',
											'cols'		  => '200'
										);
								echo form_textarea($data);
							?> 					
						</div>
						<?php echo form_error('catatan'); ?>
					</li>
					<li id="li_14" >
					</li>
					
				</div>
					<li>
						<div>
							<input id="submit-button" type="submit" name="daftar_warna" value="Tambah" />
							<input id="submit-button" type="button" name="batal" value="Batal" onClick="location.href='<?php echo site_url('surat_masuk')?>'"/>
						</div>
					</li>
			</ul>
		<?php echo form_close(); ?>
	</div>
	<script type="text/javascript">
		function ubahSifat()
		{
			var sifat = $('#sifat').val();
			if(sifat == 1)
			{
				$('#hideme').show();
				$('#hideme1').show();
			}
			else
			{
				$('#hideme').hide();
				$('#hideme1').hide();
			}
		}
		function hapus_tanggal_terima(){
			document.form_catat_surat_masuk.tgl_terima.value = '';
			document.form_catat_surat_masuk.bln_terima.value = '';
			document.form_catat_surat_masuk.thn_terima.value = '';
		}
		
		function hapus_tanggal_surat(){
			document.form_catat_surat_masuk.tgl_surat.value = '';
			document.form_catat_surat_masuk.bln_surat.value = '';
			document.form_catat_surat_masuk.thn_surat.value = '';
		}
		
		function _add_more_file() {
			var content = document.getElementById('userfile0');
			var index = jQuery('[name^="userfile"]');
			if(index.length<10)
			{
				var txt = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td><input id=\"userfile"+index.length+"\" name=\"userfile"+index.length+"\" class=\"element text medium\" type=\"file\" size=\"36\"/></td></tr></table>";
				document.getElementById("dvFile_file").innerHTML += txt;
			}
			else
			{
				alert("Maksimum file yang diupload 10");
			}
		}
		
		$(document).ready( function() {
			$("#pejabat").multiSelect({
				selectAll: false,
				noneSelected: 'Pilih Pejabat',
				oneOrMoreSelected: '% pejabat dipilih'
			});
		});
		
		Ext.onReady(function(){
			// autocomplete utk jenis surat
			var jenis_surat = new Ext.form.ComboBox({
				typeAhead: true,
				triggerAction: 'all',
				transform:'jenis_surat',
				width: 340,
				forceSelection: false
			});
			
			var instansi = new Ext.form.ComboBox({
				typeAhead: true,
				triggerAction: 'all',
				transform:'instansi',
				width: 340,
				forceSelection: false
			});
		}	
	);
</script>
