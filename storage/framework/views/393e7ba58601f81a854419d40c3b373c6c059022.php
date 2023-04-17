<?php $__env->startSection('title','Edit Data Kosan'); ?>
<?php $__env->startSection('content'); ?>
  <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong><?php echo e($message); ?></strong>
    </div>
  <?php elseif($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong><?php echo e($message); ?></strong>
    </div>
  <?php endif; ?>
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Kamar</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="<?php echo e(route('kamar.update', $edit->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-body ">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="col-form-label">Nama Kamar</label>
                            <input type="text" class="form-control" name="nama_kamar" value="<?php echo e($edit->nama_kamar); ?>" placeholder="Nama Kamar" autocomplete="off">
                        </div>
                        <div class="col-sm-3">
                            <label class="col-form-label">Kategori</label>
                            <select name="kategori" class="form-control">
                                <option value="">--Kategori Kamar--</option>
                                <option value="Kost" <?php echo e($edit->kategori == 'Kost' ? 'selected' : ''); ?> >Kost</option>
                                <option value="Apartment" <?php echo e($edit->kategori == 'Apartment' ? 'selected' : ''); ?>>Apartment</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="col-form-label">Jenis Kamar</label>
                            <select name="jenis_kamar" class="form-control">
                                <option value="">--Putra/Putri--</option>
                                <option value="Putra" <?php echo e($edit->jenis_kamar == 'Putra' ? 'selected' : ''); ?>>Putra</option>
                                <option value="Putri" <?php echo e($edit->jenis_kamar == 'Putri' ? 'selected' : ''); ?>>Putri</option>
                                <option value="Campur" <?php echo e($edit->jenis_kamar == 'Campur' ? 'selected' : ''); ?>>Campur</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Status Booking</label>
                            <select name="book" class="form-control">
                                <option value="">-- Aktif/Non-aktif --</option>
                                <option value="1" <?php echo e($edit->book == '1' ? 'selected' : ''); ?>>Aktif</option>
                                <option value="0" <?php echo e($edit->book == '0' ? 'selected' : ''); ?>>Tidak</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="col-form-label">Luas Kamar</label>
                            <input type="text" class="form-control" name="luas_kamar" value="<?php echo e($edit->luas_kamar); ?>" placeholder="Contoh 3 x 4">
                        </div>
                        <div class="col-sm-3">
                            <label class=" col-form-label">Stok Kamar</label>
                            <input type="number" class="form-control" name="stok_kamar" value="<?php echo e($edit->stok_kamar); ?>" placeholder="Kamar Tersedia">
                        </div>
                        <div class="col-sm-3">
                            <label class="col-form-label">Harga Kamar</label>
                            <input type="number" class="form-control" name="harga_kamar" value="<?php echo e($edit->harga_kamar); ?>" placeholder="Harga Kamar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label class="col-form-label">Biaya Listrik</label>
                        <select name="listrik" class="form-control">
                            <option value="">-- Listrik Kamar --</option>
                            <option value="1" <?php echo e($edit->listrik == '1' ? 'selected' : ''); ?>>Termasuk Listrik</option>
                            <option value="0" <?php echo e($edit->listrik == '0' ? 'selected' : ''); ?>>Tidak Termasuk Listrik</option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label class="col-form-label">Provinsi</label>
                        <select name="province_id" class="form-control" id="select2" disabled>
                            <option value="">-- Pilih Provinsi --</option>
                                <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php echo e($edit->province_id == $item->id ? 'selected' : ''); ?> ><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label class="col-form-label">Regency</label>
                        <input type="text" class="form-control" disabled value="<?php echo e($edit->regencies->name); ?>">
                        <?php $__errorArgs = ['regency_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="invalid-feedback">
                            <strong><?php echo e($message); ?></strong>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-sm-3">
                        <label class="col-form-label">District</label>
                        <input type="text" class="form-control" disabled value="<?php echo e($edit->district->name); ?>">
                        <?php $__errorArgs = ['district_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="invalid-feedback">
                            <strong><?php echo e($message); ?></strong>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-sm-3">
                        <label class="col-form-label">Biaya Deposit</label>
                        <input type="number" name="deposit" class="form-control <?php $__errorArgs = ['deposit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($edit->deposit); ?>" placeholder="Biaya Deposit">
                        <?php $__errorArgs = ['deposit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="invalid-feedback">
                            <strong><?php echo e($message); ?></strong>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-sm-3">
                        <label class="col-form-label">Biaya Admin</label>
                        <input type="number" name="biaya_admin" class="form-control <?php $__errorArgs = ['biaya_admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($edit->biaya_admin); ?>" placeholder="Biaya Admin">
                        <?php $__errorArgs = ['biaya_admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="invalid-feedback">
                            <strong><?php echo e($message); ?></strong>
                          </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-12">
                      <label class="col-form-label">Alamat Lengkap Kos</label>
                      <textarea name="alamat" class="form-control" id="alamat" rows="4" placeholder="Tulis lengkap alamat kos disini"> <?php echo e($edit->alamat->alamat ?? '-'); ?> </textarea>
                      <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                          <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="col-form-label">Keterangan Lain</label>
                            <textarea name="ket_lain" class="form-control" rows="4" placeholder="Opsional"><?php echo e($edit->ket_lain); ?></textarea>
                        </div>
                        <div class="col-sm-4">
                            <label class=" col-form-label">Keterangan Biaya</label>
                            <textarea name="ket_biaya" class="form-control" rows="4" placeholder="Opsional"><?php echo e($edit->ket_biaya); ?></textarea>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Deskripsi</label>
                            <textarea name="desc" class="form-control" rows="4" placeholder="Opsional"><?php echo e($edit->desc); ?></textarea>
                        </div>
                    </div>
                </div>

                
                <span id="fkamar">
                    <div class="form-group">
                        <div class="row">
                          <?php $__currentLoopData = $edit->fkamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-5 col-xl-5 col-10">
                              <label class="col-form-label">Fasilitas Kamar</label>
                              <input type="text" class="form-control" value="<?php echo e($fkamar->name); ?>" placeholder="Fasilitas Kamar" readonly>
                              <a href="<?php echo e(url('pemilik/delete/fasilitas-kamar', $fkamar->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-2 col-lg-1 col-xl-1">
                            <input type="button" id="addfkamar" name="addfkamar" class="form-control btn btn-success btn-sm mt-3" value="+">
                        </div>
                        </div>
                    </div>
                </span>
                
                <hr>
                
                <span id="fkm">
                    <div class="form-group">
                        <div class="row">
                            <?php $__currentLoopData = $edit->kmandi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamandis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-lg-5 col-xl-5 col-10">
                                <label class="col-form-label">Fasilitas Kama Mandi</label>
                                <input type="text" class="form-control" value="<?php echo e($kamandis->name); ?>" placeholder="Fasilitas Kama Mandi" readonly>
                                <a href="<?php echo e(url('pemilik/delete/fasilitas-kamar-mandi', $kamandis->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                              </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-2 col-lg-1 col-xl-1">
                                <input type="button" id="addkm" name="addkm" class="form-control btn btn-success btn-sm mt-3" value="+">
                            </div>
                        </div>
                    </div>
                </span>
                
                <hr>
                
                    <span id="fbersama">
                        <div class="form-group ">
                            <div class="row">
                                <?php $__currentLoopData = $edit->fbersama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fbersamas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="col-lg-5 col-xl-5 col-10">
                                    <label class="col-form-label">Fasilitas Bersama</label>
                                    <input type="text" class="form-control" value="<?php echo e($fbersamas->name); ?>" placeholder="Fasilitas Bersama" readonly>
                                    <a href="<?php echo e(url('pemilik/delete/fasilitas-bersama', $fbersamas->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                                  </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-2 col-lg-1 col-xl-1">
                                    <input type="button" id="addbersama" name="addbersama" class="form-control btn btn-success btn-sm mt-3" value="+">
                                </div>
                            </div>
                        </div>
                    </span>
                
                  <hr>
                
                <span id="fparkir">
                  <div class="form-group ">
                      <div class="row">
                          <?php $__currentLoopData = $edit->fparkir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parkir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-5 col-xl-5 col-10">
                              <label class="col-form-label">Fasilitas Parkir</label>
                              <input type="text" class="form-control" value="<?php echo e($parkir->name); ?>" placeholder="Fasilitas Parkir" readonly>
                              <a href="<?php echo e(url('pemilik/delete/fasilitas-parkir', $parkir->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-2 col-lg-1 col-xl-1">
                              <input type="button" id="addparkir" name="addparkir" class="form-control btn btn-success btn-sm mt-3" value="+">
                          </div>
                      </div>
                  </div>
                </span>
                
                <hr>
                
                <span id="farea">
                  <div class="form-group ">
                      <div class="row">
                          <?php $__currentLoopData = $edit->area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-5 col-xl-5 col-10">
                              <label class="col-form-label">Area Lingkungan</label>
                              <input type="text" class="form-control" value="<?php echo e($area->name); ?>" placeholder="Area Lingkungan" readonly>
                              <a href="<?php echo e(url('pemilik/delete/area', $parkir->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-2 col-lg-1 col-xl-1">
                              <input type="button" id="addarea" name="addarea" class="form-control btn btn-success btn-sm mt-3" value="+">
                          </div>
                      </div>
                  </div>
                </span>
                

                
                <div class="form-group ">
                    <div class="row">
                      <?php $__currentLoopData = $edit->fotoKamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-1 col-xl-1 col-2">
                            <label class="col-form-label">Foto Kamar</label> <br>
                            <img src="<?php echo e(asset('storage/images/foto_kamar/' .$foto->foto_kamar)); ?>" style="width: 80px">
                            <a href="<?php echo e(url('pemilik/delete/foto-kamar', $foto->foto_kamar)); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <span id="image">
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-lg-5 col-xl-5 col-10">
                              <label class="col-form-label">Tambah Foto Kamar</label>
                                <input type="file" class="form-control <?php $__errorArgs = ['addfoto[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="addfoto[0][foto_kamar]">
                                <?php $__errorArgs = ['addfoto[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <div class="invalid-feedback">
                                    <strong><?php echo e($message); ?></strong>
                                  </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-2 col-lg-1 col-xl-1">
                                <label class="col-form-label">.</label>
                                <input type="button" id="addfoto" name="addfoto" class="form-control btn btn-success btn-sm" value="+">
                            </div>
                        </div>
                    </div>
                </span>
              
                <div class="form-group row ">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo e(route('kamar.index')); ?>" class="btn btn-warning">Batal</a>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(asset('ctrl/kamar/create.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/kamar/edit.blade.php ENDPATH**/ ?>