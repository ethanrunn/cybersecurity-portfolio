@extends('layouts.app')

@section('content')
<section class="contact">
    <div id="Contact" class="contact-area contact-area-2 section-padding">
        <div class="container">
            <br><br>
             <div class="row">
                 <div class="col-md-5 col-sm-12">
                     <div class="contact-page-item">
                         <h2>My Contact</h2>
                         <p>Thanks for visiting my portfolio website and for going through it thoroughly. If you have any questions, enquiry, advice, opportunities or are looking to collaborate, do not hesitate to reach out. LinkedIn or my mail are the fastest ways to reach me, however I'm active on X too. I'm looking forward to your message.</p>
                         <div class="adress">
                             <h3>Address</h3>
                             <span>3 Kings Street, Victoria Island, Lagos.</span>
                         </div>
                         <div class="phone">
                             <h3>Phone</h3>
                             <span>(+234) 081-3302-4455</span>
                             <span>(+234) 070-1257-7733</span>
                         </div>
                         <div class="email">
                             <h3>Email</h3>
                             <span>francisnosa247@gmail.com</span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-7 col-sm-12">
                     <div class="contact-item contact-item-2 contact-item-3">
                         <h2>Send a quick message</h2>
                         <div class="contact-form">
                             <form method="post" action="{{ route('contact.submit') }}" class="contact-vAlidation-active" id="contact-form">
                                 <div class="half-col">
                                     <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                 </div>
                                 <div class="half-col">
                                     <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                 </div>
                                 <div class="half-col">
                                     <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                 </div>
                                 <div class="half-col">
                                     <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                 </div>
                                 <div>
                                     <textarea class="form-control" name="note"  id="note" placeholder="Your message..."></textarea>
                                 </div>
                                 <div class="submit-btn-wrapper">
                                     <button type="submit" class="theme-btn-s3">Shoot!</button>
                                     <div id="loader">
                                         <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                     </div>
                                 </div>
                                 <div class="clearfix error-handling-messages">
                                     <div id="success">Thank you for reaching out. I appreciate you and will get back to you as soon as I can</div>
                                     <div id="error">Uh-oh! An error occurred while sending this mail. Please try again later.</div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
</section>
@endsection

