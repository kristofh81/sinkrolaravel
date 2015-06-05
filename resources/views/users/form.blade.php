            <div class="form-group">
                {!! Form::label('Your Name') !!} (at least 4 characters)
                {!! Form::text('name', null, 
                    array(
                          'class'=>'form-control', 
                          'placeholder'=>'Your name')) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Your E-mail Address') !!}
                {!! Form::text('email', null, 
                    array(
                          'class'=>'form-control', 
                          'placeholder'=>'Your e-mail address')) !!}
            </div>
            
          @if($edit)
              adjust password on dedicated place. ->link<br><br>
          @else 
          <div class="form-group">
                {!! Form::label('Choose your password') !!}
                {!! Form::password('password', null, 
                    array(
                          'class'=>'form-control', 
                          )) !!}
                (at least 4 characters)
            </div>

            <div class="form-group">
                {!! Form::label('Re-type your password') !!}
                {!! Form::password('password-control', null, 
                    array(
                          'class'=>'form-control', 
                          )) !!}
            </div>
          @endif  

            <div class="form-group">
                {!! Form::submit( $textButton, 
                  array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}