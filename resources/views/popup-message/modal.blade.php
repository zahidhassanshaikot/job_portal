<!-- Modal -->
@php
    $messages=App\Message::where('receiver_id',Auth::user()->id)->where('seen',0)->orderBy('id','DESC')->take(3)->get();
@endphp
<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="notifications">
          <ul>
            @foreach ($messages as $message)
            <li>
              <a href="{{ route('seen-message',['id'=>$message->id]) }}">
                {{ $message->message }}</a>
            </li> 
            @endforeach 
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>