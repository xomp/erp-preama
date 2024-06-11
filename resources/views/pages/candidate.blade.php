@extends('layouts.backend')

@section('content')
  <!-- Page Content -->
  <div class="content">
    <!-- Quick Actions -->
    <div class="row items-push">
      <div class="col-6">
        <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content py-5">
            <div class="fs-3 fw-semibold mb-1">
              <i class="fa fa-pencil-alt"></i>
            </div>
            <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
              Редактировать
            </p>
          </div>
        </a>
      </div>
      <div class="col-6">
        <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content py-5">
            <div class="fs-3 fw-semibold text-danger mb-1">
              <i class="fa fa-times"></i>
            </div>
            <p class="fw-semibold fs-sm text-danger text-uppercase mb-0">
              Удалить
            </p>
          </div>
        </a>
      </div>
    </div>
    <!-- END Quick Actions -->

    <!-- User Info -->
    <div class="block block-rounded">
      <div class="block-content text-center">
        <div class="py-4">
          <div class="mb-3">
            <img class="img-avatar img-avatar96" src="{{ asset('/media/avatars/avatar15.jpg') }}" alt="">
          </div>
          <h1 class="fs-lg mb-0">
            Рогов Петр
          </h1>
          <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted"></i><input name="score" type="hidden" value="3"></div>
          <p class="text-muted">
            Домодедово
          </p>
        </div>
      </div>
      <div class="block-content bg-body-light text-center">
        <div class="row items-push text-uppercase">
          <div class="col-6 col-md-3">
            <div class="fw-semibold text-dark mb-1">Orders</div>
            <a class="link-fx fs-3" href="javascript:void(0)">5</a>
          </div>
          <div class="col-6 col-md-3">
            <div class="fw-semibold text-dark mb-1">Orders Value</div>
            <a class="link-fx fs-3" href="javascript:void(0)">$5.680,00</a>
          </div>
          <div class="col-6 col-md-3">
            <div class="fw-semibold text-dark mb-1">Cart</div>
            <a class="link-fx fs-3" href="javascript:void(0)">4</a>
          </div>
          <div class="col-6 col-md-3">
            <div class="fw-semibold text-dark mb-1">Referred</div>
            <a class="link-fx fs-3" href="javascript:void(0)">3</a>
          </div>
        </div>
      </div>
    </div>
    <!-- END User Info -->

    <!-- Addresses -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Addresses (2)</h3>
      </div>
      <div class="block-content">
        <div class="row">
          <div class="col-lg-6">
            <!-- Billing Address -->
            <div class="block block-rounded block-bordered">
              <div class="block-header border-bottom">
                <h3 class="block-title">Billing Address</h3>
              </div>
              <div class="block-content">
                <div class="fs-4 mb-1">John Parker</div>
                <address class="fs-sm">
                  Sunrise Str 620<br>
                  Melbourne<br>
                  Australia, 11-587<br><br>
                  <i class="fa fa-phone"></i> (999) 888-55555<br>
                  <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                </address>
              </div>
            </div>
            <!-- END Billing Address -->
          </div>
          <div class="col-lg-6">
            <!-- Shipping Address -->
            <div class="block block-rounded block-bordered">
              <div class="block-header border-bottom">
                <h3 class="block-title">Shipping Address</h3>
              </div>
              <div class="block-content">
                <div class="fs-4 mb-1">John Parker</div>
                <address class="fs-sm">
                  Sunrise Str 620<br>
                  Melbourne<br>
                  Australia, 11-587<br><br>
                  <i class="fa fa-phone"></i> (999) 888-55555<br>
                  <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                </address>
              </div>
            </div>
            <!-- END Shipping Address -->
          </div>
        </div>
      </div>
    </div>
    <!-- END Addresses -->

    <!-- Private Notes -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Private Notes</h3>
      </div>
      <div class="block-content">
        <p class="alert alert-info fs-sm">
          <i class="fa fa-fw fa-info me-1"></i> This note will not be displayed to the customer.
        </p>
        <form action="be_pages_ecom_customer.html" onsubmit="return false;">
          <div class="mb-4">
            <label class="form-label" for="dm-ecom-customer-note">Note</label>
            <textarea class="form-control" id="dm-ecom-customer-note" name="dm-ecom-customer-note" rows="4" placeholder="Maybe a special request?"></textarea>
          </div>
          <div class="mb-4">
            <button type="submit" class="btn btn-alt-primary">Add Note</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END Private Notes -->
  </div>
  <!-- END Page Content -->
@endsection
