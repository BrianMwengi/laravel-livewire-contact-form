<div class="row block-9">
          <div class="col-md-6 pr-
          md-5">
            <form wire:submit.prevent="submitForm" action="/contact" method ="POST">
              @csrf
            <div>
              @if ($successMessage)
                  <div class="alert alert-success">
                      {{$successMessage}}
                  </div>
              @endif
          </div>
              <div class="form-group">
                <input wire:model="name" id="name" name="name" type="text" class="form-control" placeholder="Your Name">
               @error('name')<span class="form-error">{{$message}}</span>@enderror
              </div>
              <div class="form-group">
                <input wire:model ="email" id="email" name="name" type="text"  class="form-control" placeholder="Your Email">
                @error('email')<span class="form-error">{{$message}}</span>@enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea wire:model="message" id="message" name="message"cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                @error('message')<span class="form-error">{{$message}}</span>@enderror
              </div>
              <div class="form-group">
                <input type="submit" {{ (!is_null($name) && !empty($email) && !is_null($email) && !empty($email)) ? '' : 'disabled' }}  value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
</div>
