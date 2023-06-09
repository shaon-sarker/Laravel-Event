<!--**********************************
   Sidebar start
***********************************-->
   <div class="quixnav">
    <div class="quixnav-scroll">
      @if (Auth::user()->role == 'admin')
       <ul class="metismenu" id="menu">
         <li class="nav-label first">Main Menu</li>
          <li>
             <a class="" href="{{  route('dashboard')  }}" href="javascript:void()" aria-expanded="false"><i
                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage People</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('customer.index') }}">Customer</a></li>
               <li><a href="{{ route('eventorganaizer.create') }}">Event Organizer</a></li>
               <li><a href="{{ route('eventorganaizer.index') }}">All Event Organizer</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Catering</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('catering.create') }}">Categring</a></li>
               <li><a href="{{ route('catering.index') }}">All Categring</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Decoration</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('decoration.create') }}">Decoration</a></li>
               <li><a href="{{ route('decoration.index') }}">All Decoration</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Creative Panel</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('creativepanel.create') }}">Creative Panel</a></li>
               <li><a href="{{ route('creativepanel.index') }}">All Creative Panel</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Vanue</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('vanue.create') }}">Vanue Panel</a></li>
               <li><a href="{{ route('vanue.index') }}">All Vanue Panel</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Services</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('service.create') }}">Service Panel</a></li>
               <li><a href="{{ route('service.index') }}">All Service Panel</a></li>
               <li><a href="{{ route('vanues.list') }}">Service List</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage JobPortal</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('jobportal.create') }}">Jobportal Panel</a></li>
               <li><a href="{{ route('jobportal.index') }}">All JobPost</a></li>
            </ul>
         </li>

         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage EventSchule</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('event.create') }}">EventSchule Panel</a></li>
               {{-- <li><a href="{{ route('event.index') }}">All EventSchule</a></li> --}}
            </ul>
         </li>
         <li>
            <a href="#" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Order Info</span></a>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">SMS</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('sms.create') }}">Send Sms</a></li>
               <li><a href="{{ route('sms.info') }}">Sms Info</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Settings</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('event.create') }}">Database Backup</a></li>
            </ul>
         </li>
       </ul>
       @elseif (Auth::user()->role == 'event_org')
       <ul class="metismenu" id="menu">
         <li class="nav-label first">Main Menu</li>
          <li>
             <a class="" href="{{  route('dashboard')  }}" href="javascript:void()" aria-expanded="false"><i
                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
          </li>
          <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage People</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('eventorganaizer.create') }}">Event Organizer</a></li>
               <li><a href="{{ route('eventorganaizer.index') }}">All Event Organizer</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Catering</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('catering.create') }}">Categring</a></li>
               <li><a href="{{ route('catering.index') }}">All Categring</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Decoration</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('decoration.create') }}">Decoration</a></li>
               <li><a href="{{ route('decoration.index') }}">All Decoration</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Creative Panel</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('creativepanel.create') }}">Creative Panel</a></li>
               <li><a href="{{ route('creativepanel.index') }}">All Creative Panel</a></li>
            </ul>
         </li>
         {{-- <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Vanue</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('vanue.create') }}">Vanue Panel</a></li>
               <li><a href="{{ route('vanue.index') }}">All Vanue Panel</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage Services</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('service.create') }}">Service Panel</a></li>
               <li><a href="{{ route('service.index') }}">All Service Panel</a></li>
               <li><a href="{{ route('vanues.list') }}">Service List</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage JobPortal</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('jobportal.create') }}">Jobportal Panel</a></li>
               <li><a href="{{ route('jobportal.index') }}">All JobPost</a></li>
            </ul>
         </li> --}}
       </ul>
       @else
       <ul class="metismenu" id="menu">
         <li class="nav-label first">Main Menu</li>
          <li>
             <a class="" href="{{  route('dashboard')  }}" href="javascript:void()" aria-expanded="false"><i
                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
          </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Services</span></a>
            <ul aria-expanded="false">
               {{-- <li><a href="{{ route('service.create') }}">Service Panel</a></li>
               <li><a href="{{ route('service.index') }}">All Service Panel</a></li> --}}
               <li><a href="{{ route('vanues.list') }}">Service List</a></li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
               class="icon icon-single-04"></i><span class="nav-text">Manage JobPortal</span></a>
            <ul aria-expanded="false">
               <li><a href="{{ route('jobportal.index') }}">All JobPost</a></li>
            </ul>
         </li>
       </ul>
       @endif
    </div>
 </div>
 <!--**********************************
    Sidebar end
***********************************