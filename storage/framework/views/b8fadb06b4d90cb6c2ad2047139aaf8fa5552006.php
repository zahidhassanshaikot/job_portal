<!-- Modal -->
<?php
    $messages=App\Message::where('receiver_id',Auth::user()->id)->where('seen',0)->orderBy('id','DESC')->take(3)->get();
?>
<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="notifications">
          <ul>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <a href="<?php echo e(route('seen-message',['id'=>$message->id])); ?>">
                <?php echo e($message->message); ?></a>
            </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>