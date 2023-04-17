
<?php $__env->startSection('title','Tambah Kosan'); ?>
<?php $__env->startSection('content'); ?>
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Tambah Kosan</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="<?php echo e(route('kamar.store')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <div class="form-body ">
                <div class="row">
                  <div class="col-sm-12">
                      <label class="col-form-label">Nama Kamar</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['nama_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_kamar" placeholder="Nama Kamar" value="<?php echo e(old('nama_kamar')); ?>" autocomplete="off">
                      <small style="color: red">*Tanpa nama provinsi/kota/kabupaten</small>
                      <?php $__errorArgs = ['nama_kamar'];
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
                      <label class="col-form-label">Kategori</label>
                      <select name="kategori" class="form-control <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">--Kategori Kamar--</option>
                          <option value="Kost" <?php echo e(old('kategori') == 'Kost' ? 'selected' : ''); ?> >Kost</option>
                          <option value="Apartment" <?php echo e(old('kategori') == 'Apartment' ? 'selected' : ''); ?>>Apartment</option>
                      </select>
                      <?php $__errorArgs = ['kategori'];
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
                      <label class="col-form-label">Jenis Kamar</label>
                      <select name="jenis_kamar" class="form-control <?php $__errorArgs = ['jenis_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">--Putra/Putri--</option>
                          <option value="Putra" <?php echo e(old('jenis_kamar') == 'Putra' ? 'selected' : ''); ?>>Putra</option>
                          <option value="Putri" <?php echo e(old('jenis_kamar') == 'Putri' ? 'selected' : ''); ?>>Putri</option>
                          <option value="Campur" <?php echo e(old('jenis_kamar') == 'Campur' ? 'selected' : ''); ?>>Campur</option>
                      </select>
                      <?php $__errorArgs = ['jenis_kamar'];
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
                      <label class="col-form-label">Background Foto Kamar</label>
                      <input type="file" name="bg_foto" class="form-control <?php $__errorArgs = ['bg_foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
                      <?php $__errorArgs = ['bg_foto'];
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
                      <label class="col-form-label">Status Booking</label>
                      <select name="book" class="form-control <?php $__errorArgs = ['book'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">-- Aktif/Non-aktif --</option>
                          <option value="1" <?php echo e(old('book') == '1' ? 'selected' : ''); ?>>Aktif</option>
                          <option value="0" <?php echo e(old('book') == '0' ? 'selected' : ''); ?>>Tidak</option>
                      </select>
                      <?php $__errorArgs = ['book'];
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
                      <label class="col-form-label">Luas Kamar</label>
                      <input type="text" name="luas_kamar" class="form-control <?php $__errorArgs = ['luas_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('luas_kamar')); ?>" placeholder="Contoh 3 x 4">
                      <?php $__errorArgs = ['luas_kamar'];
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
                      <label class=" col-form-label">Stok Kamar</label>
                      <input type="number" name="stok_kamar" class="form-control <?php $__errorArgs = ['stok_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('stok_kamar')); ?>" placeholder="Kamar Tersedia">
                      <?php $__errorArgs = ['stok_kamar'];
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
                      <label class="col-form-label">Harga Kamar</label>
                      <input type="number" name="harga_kamar" class="form-control <?php $__errorArgs = ['harga_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('harga_kamar')); ?>" placeholder="Harga Kamar">
                      <?php $__errorArgs = ['harga_kamar'];
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
                      <label class="col-form-label">Biaya Listrik</label>
                      <select name="listrik" class="form-control <?php $__errorArgs = ['listrik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                          <option value="">-- Listrik Kamar --</option>
                          <option value="1" <?php echo e(old('listrik') == '1' ? 'selected' : ''); ?>>Termasuk Listrik</option>
                          <option value="0" <?php echo e(old('listrik') == '0' ? 'selected' : ''); ?>>Tidak Termasuk Listrik</option>
                      </select>
                      <?php $__errorArgs = ['listrik'];
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

                  <div class="col-sm-4">
                      <label class="col-form-label">Provinsi</label>
                      <select name="province_id" class="form-control select2 <?php $__errorArgs = ['province_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="province">
                        <option value="">-- Pilih Provinsi --</option>
                          <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($item->id); ?>" ><?php echo e($item->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <?php $__errorArgs = ['province_id'];
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
                  <div class="col-sm-4">
                      <label class="col-form-label">Regency</label>
                      <select name="regency_id" class="form-control select2  <?php $__errorArgs = ['regency_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="regency"></select>
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
                  <div class="col-sm-4">
                      <label class="col-form-label">District</label>
                      <select name="district_id" class="form-control select2  <?php $__errorArgs = ['district_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="district"></select>
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

                  <div class="col-sm-4">
                      <label class="col-form-label">Biaya Deposit</label>
                      <input type="number" name="deposit" class="form-control <?php $__errorArgs = ['deposit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('deposit')); ?>" placeholder="Biaya Deposit">
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

                  <div class="col-sm-4">
                      <label class="col-form-label">Biaya Admin</label>
                      <input type="number" name="biaya_admin" class="form-control <?php $__errorArgs = ['biaya_admin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('biaya_admin')); ?>" placeholder="Biaya Admin">
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
                    <textarea name="alamat" class="form-control  <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat" rows="4" placeholder="Tulis lengkap alamat kos disini"></textarea>
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
                            <textarea name="ket_lain" class="form-control <?php $__errorArgs = ['ket_lain'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="4" placeholder="Opsional"> <?php echo e(old('ket_lain')); ?> </textarea>
                            <?php $__errorArgs = ['ket_lain'];
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
                        <div class="col-sm-4">
                            <label class=" col-form-label">Keterangan Biaya</label>
                            <textarea name="ket_biaya" class="form-control <?php $__errorArgs = ['ket_biaya'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="4" placeholder="Opsional"> <?php echo e(old('ket_biaya')); ?> </textarea>
                            <?php $__errorArgs = ['ket_biaya'];
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
                        <div class="col-sm-4">
                            <label class="col-form-label">Deskripsi</label>
                            <textarea name="desc" class="form-control <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="4" placeholder="Opsional"> <?php echo e(old('desc')); ?> </textarea>
                            <?php $__errorArgs = ['desc'];
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
                </div>

                
                <span id="fkamar">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-5 col-xl-5 col-10">
                            <label class="col-form-label">Fasilitas Kamar</label>
                            <input type="text" name="addmore[0][name]" class="form-control <?php $__errorArgs = ['addmore[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Fasilitas Kamar" required>
                            <?php $__errorArgs = ['addmore[0][name]'];
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
                            <input type="button" id="addfkamar" name="addfkamar" class="form-control btn btn-success btn-sm" value="+">
                        </div>
                        </div>
                    </div>
                </span>
                

                
                    <span id="fkm">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-5 col-xl-5 col-10">
                                    <label class="col-form-label">Fasilitas Kamar Mandi</label>
                                    <input type="text" name="addkm[0][name]" class="form-control <?php $__errorArgs = ['addkm[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Fasilitas Kamar Mandi" required>
                                    <?php $__errorArgs = ['addkm[0][name]'];
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
                                    <input type="button" id="addkm" name="addkm" class="form-control btn btn-success btn-sm" value="+">
                                </div>
                            </div>
                        </div>
                    </span>
                

                
                    <span id="fbersama">
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-lg-5 col-xl-5 col-10">
                                    <label class="col-form-label">Fasilitas Bersama</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['addbersama[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="addbersama[0][name]" placeholder="Fasilitas Bersama" required>
                                    <?php $__errorArgs = ['addbersama[0][name]'];
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
                                    <input type="button" id="addbersama" name="addbersama" class="form-control btn btn-success btn-sm" value="+">
                                </div>
                            </div>
                        </div>
                    </span>
                

                
                  <span id="fparkir">
                      <div class="form-group ">
                          <div class="row">
                              <div class="col-lg-5 col-xl-5 col-10">
                                  <label class="col-form-label">Fasilitas Parkir</label>
                                  <input type="text" class="form-control <?php $__errorArgs = ['addparkir[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="addparkir[0][name]" placeholder="Fasilitas Parkir" required>
                                  <?php $__errorArgs = ['addparkir[0][name]'];
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
                                  <input type="button" id="addparkir" name="addparkir" class="form-control btn btn-success btn-sm" value="+">
                              </div>
                          </div>
                      </div>
                  </span>
                

                
                  <span id="farea">
                      <div class="form-group ">
                          <div class="row">
                              <div class="col-lg-5 col-xl-5 col-10">
                                  <label class="col-form-label">Area Lingkungan</label>
                                  <input type="text" class="form-control <?php $__errorArgs = ['addarea[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="addarea[0][name]" placeholder="Area Lingkungan" required>
                                  <?php $__errorArgs = ['addarea[0][name]'];
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
                                  <input type="button" id="addarea" name="addarea" class="form-control btn btn-success btn-sm" value="+">
                              </div>
                          </div>
                      </div>
                  </span>
                

                
                  <span id="image">
                      <div class="form-group ">
                          <div class="row">
                              <div class="col-lg-5 col-xl-5 col-10">
                                  <label class="col-form-label">Foto Kamar</label>
                                  <input type="file" class="form-control <?php $__errorArgs = ['addfoto[0][name]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="addfoto[0][foto_kamar]" required>
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
                        <button type="submit" class="btn btn-primary">Tambah Kosan</button>
                        <a href="<?php echo e(route('kamar.index')); ?>" class="btn btn-warning">Batal</a>
                    </div>
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

  <script type="text/javascript">
  $('#province').change(function(){
    var provinceID = $(this).val();
    if(provinceID){
      $.ajax({
        type:"GET",
        url:"<?php echo e(url('select-regency')); ?>?province_id="+provinceID,
        success:function(res){
          console.log(res);
        if(res){
          $("#regency").empty();
          $("#regency").append('<option>Select Regency</option>');
          $.each(res,function(key,value){
            $("#regency").append('<option value="'+value.id+'">'+value.name+'</option>');
          });

        }else{
          $("#regency").empty();
        }
        }
      });
    }else{
      $("#regency").empty();
      $("#district").empty();
    }
    });
    $('#regency').on('change',function(){
    var regencyID = $(this).val();
    if(regencyID){
      $.ajax({
        type:"GET",
        url:"<?php echo e(url('select-district')); ?>?regency_id="+regencyID,
        success:function(res){
        if(res){
          $("#district").empty();
          $("#district").append('<option>Select District</option>');
          $.each(res,function(key,value){
            $("#district").append('<option value="'+value.id+'">'+value.name+'</option>');
          });

        }else{
          $("#district").empty();
        }
        }
      });
    }else{
      $("#district").empty();
    }

    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/kamar/create.blade.php ENDPATH**/ ?>