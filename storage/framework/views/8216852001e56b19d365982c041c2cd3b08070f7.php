
<?php $__env->startSection('title','Data Promo Kosan'); ?>
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
              <h4 class="card-title">Data List Promo Kamar
                <a href="<?php echo e(route('kamar.promo.create')); ?>" class="btn btn-primary btn-sm">Tambah Promo Kamar</a>
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
                      <th class="text-nowrap">Status</th>
                      <th class="text-nowrap">Harga Kamar</th>
                      <th class="text-nowrap">Harga Promo</th>
                      <th class="text-nowrap">Tanggal Mulai</th>
                      <th class="text-nowrap">Tanggal Akhir</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $promo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> " ><?php echo e($key+1); ?></td>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> "><?php echo e($item->kamar->nama_kamar); ?></td>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> "><?php echo e($item->status == 1 ? 'Aktif' : 'Expired'); ?></td>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> "><?php echo e(rupiah($item->kamar->harga_kamar)); ?></td>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> "><?php echo e(rupiah($item->harga_promo)); ?></td>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> "><?php echo e($item->kamar->promo->start_date_promo ?? '-'); ?></td>
                      <td style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> "><?php echo e($item->kamar->promo->end_date_promo ?? '-'); ?></td>
                      <td class="text-center" style="background-color: <?php echo e($item->kamar->promo->end_date_promo <= Carbon\carbon::now()->format('Y-m-d') && $item->kamar->promo->status == 1 ? 'red' : ''); ?> ">
                        <?php if($item->status == 1): ?>
                          <a data-id-inactive="<?php echo e($item->id); ?>" id="inactive" class="btn btn-info btn-sm mr-sm-1 mb-1 mb-sm-0" style="color: black"><?php echo e($item->status == 1 ? 'In Active' : ''); ?></a>
                        <?php else: ?>
                        <a href=" <?php echo e(route('kamar.promo.edit',$item->id)); ?> " class="btn btn-info btn-sm mr-sm-1 mb-1 mb-sm-0" style="color: black">Update</a>
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
  <script src="<?php echo e(asset('ctrl/backend/confirm.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/kamar/promo.blade.php ENDPATH**/ ?>