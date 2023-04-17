
<?php $__env->startSection('title','Penghuni Kamar'); ?>
<?php $__env->startSection('content'); ?>
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
              <h4 class="card-title">Data Penghuni Kamar
              </h4>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead>
                    <tr>
                      <th width="1%">No</th>
                      <th class="text-nowrap">Nama Penghuni</th>
                      <th class="text-nowrap">Type Kamar</th>
                      <th class="text-nowrap">Jenis Kamar</th>
                      <th class="text-nowrap">Lama Sewa</th>
                      <th class="text-nowrap">Register Date</th>
                      <th class="text-nowrap">End Date</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $no = 1;
                      ?>
                      <?php $__currentLoopData = $penghuni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($no); ?></td>
                          <td><?php echo e(getNameUser($item->user_id)); ?></td>
                          <td><?php echo e($item->kamar->kategori); ?></td>
                          <td><?php echo e($item->kamar->jenis_kamar); ?></td>
                          <td><?php echo e($item->lama_sewa); ?> Bulan</td>
                          <td><?php echo e(Carbon\Carbon::parse($item->tgl_sewa)->format('d-F-Y')); ?></td>
                          <td>
                            <?php echo e(Carbon\Carbon::parse($item->end_date_sewa)->format('d-F-Y')); ?>

                          </td>
                        </tr>
                      <?php
                        $no++;
                      ?>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/penghuni/index.blade.php ENDPATH**/ ?>