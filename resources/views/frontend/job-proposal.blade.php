@extends('frontend.layouts.app')
@section('content')
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<div class="wt-haslayout wt-main-section">
		<!-- User Listing Start-->
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2">
					<div class="wt-proposalholder">
						<span class="wt-featuredtag"><img src="{{asset('assets/images/joblisting/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
						<div class="wt-proposalhead">
							<h2>Webpage Takes Many Seconds to Load, I Want to Reduce it </h2>
							<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
								<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
								<li><span><img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description">  United States</span></li>
								<li><span><i class="far fa-folder"></i> Type: Fixed</span></li>
								<li><span><i class="far fa-clock"></i> Duration: 15 Days</span></li>
							</ul>
						</div>
					</div>
					<div class="wt-proposalamount-holder">
						<div class="wt-title">
							<h2>Proposal Amount</h2>
						</div>
						<div class="wt-proposalamount accordion">
							<div class="form-group">
								<span>( <i class="fa fa-dollar-sign"></i> )</span>
								<input type="number" name="amount" class="form-control" placeholder="Enter Your Proposal Amount">
								<a href="javascript:void(0);" class="collapsed" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fal fa-chevron-up"></i></a>
								<em>Total amount the client will see on your proposal</em>
							</div>
							<ul class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne">
								<li>
									<h3>( <i class="fa fa-dollar-sign"></i> ) <em>- 00.00</em></h3>
									<span><strong>“ 961Freelancer ”</strong> Service Fee<i class="fal fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
								</li>
								<li>
									<h3>( <i class="fa fa-dollar-sign"></i> ) <em>- 00.00</em></h3>
									<span>Amount You’ll Recive after <strong>“ 961Freelancer ”</strong> Service Fee deduction<i class="fal fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
								</li>
							</ul>
						</div>
						<form class="wt-formtheme wt-formproposal">
							<fieldset>
								<div class="form-group">
									<span class="wt-select">
										<select>
											<option value="1">I Can Finish This Project In: 01 Months</option>
											<option value="2">I Can Finish This Project In: 02 Months</option>
											<option value="3">I Can Finish This Project In: 03 Months</option>
											<option value="4">I Can Finish This Project In: 04 Months</option>
										</select>
									</span>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Add Description*"></textarea>
								</div>
							</fieldset>
							<fieldset>
								<div class="wt-attachments wt-attachmentsvtwo">
									<div class="wt-title">
										<h3>Upload File (Optional)</h3>
										<label for="afile">
											<span><i class="fal fa-paperclip"></i> Attach File(s)</span>
											<input type="file" name="file" id="afile">
										</label>
									</div>
									<ul class="wt-attachfile">
										<li class="wt-uploading">
											<span>Logo.jpg</span>
											<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
										</li>
										<li>
											<span>Wireframe Document.doc</span>
											<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
										</li>
										<li>
											<span>Requirments.pdf</span>
											<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
										</li>
										<li>
											<span>Company Intro.docx</span>
											<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
										</li>
									</ul>
									<div class="wt-btnarea">
										<a href="javascrip:void(0);" class="wt-btn">Send Now</a>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
</main>
<!--Main End-->
@endsection