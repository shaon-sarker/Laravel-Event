@extends('layouts.backend.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-6">
             <div class="card">
                <div class="card-header">
                   <h4 class="card-title">Profile Information</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                      <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                         <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="name" class="form-control input-rounded" name="name" value="{{ $user->name }}" required autofocus autocomplete="name">
                         </div>
                         <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" id="email" name="email" class="form-control input-rounded" value="{{ $user->email }}" required autocomplete="email">
                         </div>
                         {{-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif --}}
                         <button type="submit" class="btn btn-dark">Save</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Update Password</h4>
               </div>
               <div class="card-body">
                  <div class="basic-form">
                     <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Current Password</label>
                            <input  name="current_password" type="password" class="form-control input-rounded" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input name="password" type="password" class="form-control input-rounded" placeholder="New Password">
                        </div>
                         <div class="form-group">
                            <label for="">Confirm password</label>
                            <input name="password_confirmation" type="password" class="form-control input-rounded" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-dark">Save</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
       </div>
    </div>
 </div>
@endsection