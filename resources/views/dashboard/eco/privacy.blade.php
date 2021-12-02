
<div ng-if="UserInfo.approvedTermsAndConditions || !UserInfo.isAuthenticated">
	<ncy-breadcrumb></ncy-breadcrumb>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form name="tandc" ng-submit="approveTandC()">
				<div class="panel panel-default" style="margin-top:20px;">
					<div class="panel-body" style="max-height:600px; overflow-y:scroll; background-color:white;">
						<div style="text-align:center;">
							<h1>Eco – Food Cycle Privacy Policy</h1>
                            <p>
								This privacy statement ("Policy") will help you understand how Eco – Food Cycle collects, uses, and safeguards the information you supply to us when you visit and use the Site.
							</p>
                            <p>
								This privacy policy solely applies to our online operations and applies to visitors to our website in respect to the information they supplied and/or collected in Eco – Food Cycle. This policy does not apply to any information gathered offline or through methods other than this website. Consent
							</p>
                            <p>
								We retain the right to amend this policy at any moment and will keep you informed of any changes. We recommend that you check this page regularly if you want to stay up to speed on the newest developments.
							</p>
                            <h3>What User Data We Collect</h3>
							<p>
								The personal information that you are requested to provide, as well as the reasons why you are asked to provide it, will be made apparent to you at the time we ask for it.
							</p>
                            <p>
								If you contact us directly, we may collect additional information about you, such as your name, email address, phone number, the contents of any messages and/or attachments you give us, and any other information you choose to submit.
							</p>
                            <p>
								When you create an Account, we may request contact information from you, such as your name, company name, address, email address, and phone number.
							</p>
                            <h3>Why We Collect Your Data</h3>
							<p>
								We are collecting your data for several reasons:
							</p>
                            <ol style="text-align:left;">
                                <li>Provide, operate, and maintain our website </li>
                                <li>Understand and analyze how you use our website </li>
                                <li>Develop new services, features, and functionality</li>
                                <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website</li>
                                <li>Find and prevent fraud</li>
                                <li>To validate your data</li>
                                <li>To better understand your needs.</li>
                                <li>To customize our website according to your online behavior and personal preferences.</li>
                                <li>Log Files</li>
                            </ol> 
                            <p>
								Eco – Food Cycle uses log files by industry standards. When people visit websites, these files keep track of who they are. This is something that all hosting companies conduct as part of their analytics. Log files gather information such as the type of food waste and the district. These are not linked to any personally-identifying information. The information is used to analyze trends, operate the site, track users' movements on the website, and gather demographic statistics.
							</p>
                            <h3>Safeguarding and Securing the Data</h3>
							<p>
								Eco – Food Cycle is devoted to safeguarding and protecting your personal information. Eco – Food Cycle has done all possible to avoid data theft, unauthorized access, and disclosure by employing cutting-edge technology and software that allow us to protect all of the information we gather online.
							</p>
                            <h3>Restricting the Collection of your Personal Data</h3>
							<p>
								You may choose to limit the usage and collecting of your data at some time. This may be accomplished by completing the following:
							</p>
                            <p>
								When filling out forms on the internet, make sure to look for a box that you may leave unchecked if you don't want to reveal your personal information.
							</p>
                            <p>
								If you have already consented to share your information with us, please contact us via email and we will gladly amend this for you.
							</p>
                            <p>
								Unless you permit us, Eco – Food Cycle will not lease, sell, or disclose your personal information to any third party. We may do so if the law requires it. If you agree to this privacy statement, we will use your personal information to send you promotional materials
							</p>
                            <h3>Questions </h3>
							<p>
								If you have any questions about this Privacy Policy, please contact us.
							</p>
                            <p>
								363 Pascual Casal St, Quiapo, Manila, 1001 Metro Manila
							</p>
                            <p>
								(02) 8733 9117
							</p>
                        </div>
					</div>
				</div>
				<div style="text-align:center;" ng-if="settings.Authentication.RequireTermsAndConditions && !UserInfo.approvedTermsAndConditions && UserInfo.isAuthenticated">
					<button style="margin:20px;" class="btn btn-primary" type="submit"><a href="{{url('ecohome')}}">Agree to Terms and Conditions</a></button>
				</div>
			</form>
		</div>
	</div>
</div>