
<?php $__env->startSection('title','Data Kosan'); ?>
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

<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
              <h4 class="card-title">Data List Kamar
                <a href="<?php echo e(route('kamar.create')); ?>" class="btn btn-primary btn-sm">Tambah Kamar</a>
              </h4>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead>
                    <tr>
                      <th width="1%">No</th>
                      <th class="text-nowrap">Nama Kamar</th>
                      <th class="text-nowrap">Type Kamar</th>
                      <th class="text-nowrap">Jenis Kamar</th>
                      <th class="text-nowrap">Tersedia</th>
                      <th class="text-nowrap">Sisa</th>
                      <th class="text-nowrap">Harga Kamar</th>
                      <th class="text-nowrap">Status Kamar</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($key+1); ?></td>
                      <td><?php echo e($item->nama_kamar); ?></td>
                      <td><?php echo e($item->kategori); ?></td>
                      <td><?php echo e($item->jenis_kamar); ?></td>
                      <td><?php echo e($item->stok_kamar); ?></td>
                      <td><?php echo e($item->sisa_kamar); ?></td>
                      <td><?php echo e(rupiah($item->harga_kamar)); ?></td>
                      <td><span class="btn btn-<?php echo e($item->is_active == 0 ? 'primary' : 'success'); ?> btn-sm text-white"><?php echo e($item->is_active == 1 ? 'Aktif' : 'Tidak Aktif'); ?></span></td>
                      <td class="text-center">
                        <a href="<?php echo e(url('room', $item->slug)); ?>" class="btn btn-info btn-sm">Show</a>
                        <a href="<?php echo e(route('kamar.edit', $item->slug)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a data-id-kamar="<?php echo e($item->id); ?>" id="isAktifKamar" class="btn btn-danger btn-sm"><?php echo e($item->is_active == 0 ? 'Aktifkan' : 'Non-Aktifkan'); ?></a>
                        <?php if($item->status == 0): ?>
                            <span class="btn btn-primary btn-sm text-white">Review</span>
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    // Non-aktif dan aktifkan Kamar
    $(document).on('click', '#isAktifKamar', function () {
    var id = $(this).attr('data-id-kamar');
    $.get('is-aktif-kamar', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(_resp){
        location.reload()
    });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/kamar/index.blade.php ENDPATH**/ ?>