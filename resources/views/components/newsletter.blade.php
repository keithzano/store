<section class="text-center py-5 bg-two">
    <div class="container" id="subscribe">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2>Lets stay in touch</h2>
          <p class="lead mb-4">All our latest content delivered to your inbox a few times a month.</p>
        </div>

        <div class="col-sm-12 col-md-7 mx-auto">
          <!-- Error messages -->
          @if($errors->subscribe->any())
          <div role="alert" class="alert alert-danger">
            <ul>
              @foreach ($errors->subscribe->all() as $error)
              <li><strong>{{ $error }}</strong></li>
              @endforeach
            </ul>
          </div>
          @endif

          <!-- Success message -->
          @if (session()->has('message-for') && session()->get('message-for') == 'subscribe')
          <div role="alert" class="alert alert-success">
            <strong>{{session('message-content')}}</strong>
          </div>
          {{session()->forget('flash')}}
          @endif
        </div>

        <div class="col-sm-12">
          <!-- Error messages -->
          @if(Session::has('erros'))
            <div role="alert" class="alert alert-danger">
              {{Session::get('errors')}}
            </div>
          @endif
          <!-- Success message -->
          @if(Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif
        </div>

        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form name="newsletter" action="" method="POST">
            @csrf
            <div class="row">
              <div class="col-12 col-md-9 mb-2 mx-0">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  