
<!------ Include the above in your HEAD tag ---------->
<style>
    .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
z-index: -1;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
</style>
<?php if ($this->session->flashdata('flashFailed')): ?>
    <script>
                                                swal({
                              title: "",
                              text: "Your email was not sent!",
                              icon: "error"
                            });
                    </script>
<?php endif ?>
<?php if ($this->session->flashdata('flashSuccess')): ?>
    <script>
                                                swal({
                              title: "",
                              text: "Your email was successful!",
                              icon: "success"
                            });
                    </script>
<?php endif ?>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
<!--            <div class="col-sm-12 col-lg-12">
                <h1 style="text-align:center" class="h1">
                    Contact Form <br> <small>Feel free to contact me</small></h1>
            </div>-->
            <div class="col-sm-12 col-lg-12">
                <h1 style="text-align:center" class="h1">
                    Contact Form</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action='<?php echo base_url(); ?>index.php/home/sendMail' method='POST' >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user"></span>
                                </span>
                            <input name='name' type="text" style="z-index: -0" class="form-control" id="name" placeholder="Full name" required="required" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-envelope" aria-hidden="true"></span>
                                </span>
                                <input name='email' type="email" style="z-index: -0" class="form-control" id="email" placeholder="Email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                Phone No.</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-phone"></span>
                                </span>
                                <input name='phone' type="text" style="z-index: -0" class="form-control" id="pnumber" placeholder="Phone no." required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="Testimony">Testimony</option>
                                <option value="Prayer request">Prayer request</option>
                                <option value="Invitation">Invitation</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="12" cols="25" required="required"
                                placeholder="Message" style="resize: none"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Connect with me</legend>
            <address>
                <strong>Twitter</strong><br>
                <a href="https://twitter.com/Odhsamuel" target="_blank">@Odhsamuel</a><br>
            </address>
            <address>
                <strong>Facebook</strong><br>
                <a href="https://www.facebook.com/ocsamuel"target="_blank">Samuel Odoh</a>
            </address>
            <address>
                <strong>E-mail</strong><br>
                <a href="mailto:odhsamuel@yahoo.com">odhsamuel@yahoo.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
