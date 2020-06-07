
<?php $__env->startSection('content'); ?>
<div class="content">
<div class="container">
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="mt-5 form-group">
            


     
            <div class="col-xl-12 col-md-6 mb-1 mt-4 ">
                <div class="card border-left-primary shadow h-100 py-2 bg-primary text-white text-center">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div>
                                <center>
                                <h1>
                                    Tas Sewa Anda
                                </h1>
                                </center>
                                </div>
                               
                            </div>
                            <div class="col-auto">
                            <svg class="bi bi-bag" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 001 1h10a1 1 0 001-1V5zM1 4v10a2 2 0 002 2h10a2 2 0 002-2V4H1z" clip-rule="evenodd"/>
                            <path d="M8 1.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                            </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID Kamera</th>
                                                <th>Nama Kamera</th>
                                                <th>Seri Kamera</th>
                                                <th>Harga Sewa</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><?php echo e($trs->nama_alat); ?></td>
                                                <td><?php echo e($trs->jumlah); ?></td>
                                                <td><?php echo e($trs->harga_sewa); ?></td>
                                                <td><a href="<?php echo e(route('kamera.edit',$val->id)); ?>">
                                                    <button type="submit" class="btn btn-outline-info"> Update</button></a>
                                                    <form action="<?php echo e(route('kamera.destroy',$val->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
            <style>
                    .button {
                    background-color: #44A9D9; /* Green */
                    border: none;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 12px;
                    margin: 4px 1px;
                    cursor: pointer;
                    }

                    
                    .button {border-radius: 12px;}
                    
            </style>
        <div class="col-lg-12">
        <div class="row">

            <div class="col-xl-4 mt-5 form-group">
                <button class="botton button" type=" submit">Tambah Lagi
                </button>
            </div>

            <div class="mt-5 form-group">
                <button class="botton button" type=" submit">Checkout
                </button>
            </div>

        </div>
        </div>

        </div>
    </div>
</div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sewa_kamera\resources\views/user/transaksi.blade.php ENDPATH**/ ?>