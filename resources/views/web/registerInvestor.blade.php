@extends('layouts.web')

@section('content')
<section class="textdivider">
    <div class="bg-china"></div>
    <div class="container mt20">
        <div class="modal fade" id="agreeModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="font-color:white"><strong>Are you an institutional investor?</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div style="height:350px; overflow-y:scroll">
                    <h5><strong>Please read before answering</strong></h5>
                    <p class="black font16">A qualified institutional buyer (QIB), in United States law and finance, is a purchaser of securities that is deemed financially sophisticated and is legally recognized by securities market regulators to need less protection from issuers than most public investors. Typically, the qualifications for this designation are based on an investor's total assets under management and specific legal conditions in the country where the fund is located. Rule 144A requires an institution to manage at least $100 million in securities from issuers not affiliated with the institution to be considered a QIB. If the institution is a bank or savings and loans thrift they must have a net worth of at least $25 million. If the institution is a registered dealer acting for its own account it must in the aggregate own and invest on a discretionary basis at least $10 million of securities of issuers not affiliated with the dealer.</p>
                    <p class="black font16">The U.S. Securities and Exchange Commission (SEC) requires that an entity meet one of the following requirements to qualify as a QIB: Any of the following entities, acting for its own account or the accounts of other QIBs, that in the aggregate owns and invests on a discretionary basis at least $100 million in securities of issuers that are not affiliated with the entity: An insurance company An investment company registered under the Investment Company Act of 1940 A Small Business Investment Company licensed by the US Small Business Administration under the Small Business Investment Act of 1958 A plan established and maintained by a state, its political subdivisions, or state agency, for the benefit of its employees An employee benefit plan falling under the Employee Retirement Income Security Act of 1974 A trust fund whose trustee is a bank or trust company and whose participants are exclusively plans established for the benefit of state employees or employee benefit plans, except trust funds that include as participants individual retirement accounts or H.R. 10 plans A business development company as defined in section 202(a)(22) of the Investment Advisers Act of 1940. A 501(c)(3) charitable organization, corporation (other than a bank or a savings and loan association), partnership, or Massachusetts or similar business trust; and An investment adviser registered under the Investment Advisers Act of 1940. Any registered dealer, acting for its own account or the accounts of other QIBs, that in the aggregate owns and invests on a discretionary basis at least $10 million of securities of issuers that are not affiliated with the dealer. Any registered dealer acting in a riskless principal transaction on behalf of a qualified institutional buyer. Any investment company registered under the Investment Company Act, acting for its own account or for the accounts of other QIBs, that is part of a family of investment companies which own in the aggregate at least $100 million in securities of issuers, other than issuers that are affiliated with the investment company or are part of such family of investment companies. Any entity, all of the equity owners of which are QIBs, acting for its own account or the accounts of other QIBs. Any bank or any savings and loan association or other institution, acting for its own account or the accounts of other QIBs, that in the aggregate owns and invests on a discretionary basis at least $100 million in securities of issuers that are not affiliated with it and that has an audited net worth of at least $25 million as demonstrated in its latest annual financial statements, as of a date not more than 16 months preceding the date of sale under Rule 144A in the case of a US bank or savings and loan association, and not more than 18 months preceding the date of sale for a foreign bank or savings and loan association or equivalent institution</p>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                <a href="{{ url('reject-login') }}" type="button" class="btn btn-default" >No</a>
              </div>
            </div>
          </div>
        </div>
         @if (session('register'))
                <div class="alert alert-success fade in alert-dismissable" style=" " >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>Registration succesfully!</strong> Enter your credentials to access to your dashboard.
                </div>
        @endif
        <form id="register-form"  class="form-horizontal" role="form" method="POST" action="{{ url('investor-register') }}">
                {{ csrf_field() }}
        <div class="col-md-6 register-form">
                @if (session('company'))
                    <input type="hidden" name="company_link" value="{{session('company') }}">
                @else
                    <input type="hidden" name="company_link" value="{{old('company_link') }}">
                @endif
                @if (session('video'))
                    <input type="hidden" name="video_link" value="{{session('video') }}">
                @else
                    <input type="hidden" name="video_link" value="{{old('video_link') }}">
                @endif
                <div class="col-md-6">
                    <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">First Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="{{ $errors->has('company') ? ' has-error' : '' }}">
                        <label for="company">Company</label>
                        <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required>

                        @if ($errors->has('company'))
                            <span class="help-block">
                                <strong>{{ $errors->first('company') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="{{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country">Country</label>
                        {!! Form::select('country', $countries, null, ['class' => 'form-control']); !!}
                    </div>

                    <div >
                        <label for="city" >City</label>
                        <input id="city" type="text" class="form-control" name="city" required>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="name">Last Name</label>
                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>
                        @if (session('email'))
                            <input id="email" type="email" class="form-control" name="email" value="{{ session('email') }}" required>
                        @else
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @endif

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div >
                        <label for="password-confirm" >Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>


                </div>
                <div class="col-md-12">
                    <h4><strong>Preferences</strong></h4>
                    <div class="col-md-6">
                        {!! Form::label('sectors', 'Sector:') !!}
                        <br>
                        @foreach ($sectors as $sector)
                            {!! Form::checkbox('sectors[]', $sector)!!} {{ $sector }} <br>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('places', 'Places:') !!}
                        <br>
                        @foreach ($places as $place)
                            {!! Form::checkbox('places[]', $place)!!} {{ $place }} <br>

                        @endforeach

                    </div>

                </div>

                <div class="col-lg-12"><div class="pull-right">{!! Recaptcha::render() !!}</div></div>

                <div class="col-md-12 mt20">
                    <a onclick="validateForm()" class="btn btn-primary btn-lg btn-full">
                        Register
                    </a>
                </div>


        </div>
        <div class="col-md-6">
            <div class="agreement">
            <h3>AGREEMENT</h3>
            <p>This Website (the “Website” or “Site”), which includes all content and pages that are owned and operated by Magellan Yates LLC. ("us", "we", "our" or "MY"), is not open to the general public. This Website is for use by regulated investment professionals only. All use of this Website is subject to these Terms and Conditions of Use (this “Agreement”).</p>
            <p>By clicking the “I AGREE” icon below you are manifesting your assent and agree to be bound by the terms of this Agreement. In return, you will be permitted register with us.</p>
            <p>Only users who have both registered with us (“Registered Users”) and who have also confirmed that they are regulated investment professionals may access this Website.</p>
            <p>Unless otherwise stated, these Terms and Conditions of Use apply to all users, including registered and non-registered users. We may, at our sole discretion, decline to register anyone as a Registered User without providing any reason.</p>
            <h4>1. Purpose</h4>
            <p>This Website is intended to provide information and services to investment professionals. This Agreement binds you and other visitors to a code of conduct intended to achieve this purpose. While we will do our best to enforce the terms of this Agreement, as set forth below in Sections 12 and 13, we cannot warrant or represent that other visitors will in fact adhere to this Agreement and cannot act as insurers or accept any liability for their failure to do so.</p>
            <h4>2. Agreement</h4>
            <p>By signifying your assent, you agree to be contractually bound to the terms of this Agreement. You further agree that your assent, given electronically, shall have the same legal effect as if it had been personally signed by you. To the extent permitted by law, this Agreement is intended to supersede any provisions of applicable law which might otherwise limit its enforceability or effect because it was entered into electronically.</p>
            <h4>3. Access</h4>
            <p>By entering into this Agreement, you will be granted a revocable license to access this Website without charge. Your access privileges, however, are conditioned upon your adherence to the terms of this Agreement. We reserve the right to temporarily deny you access to this Website or permanently terminate your access privileges at any time and at our sole discretion.</p>

            <p>By agreeing to grant you access, we do not obligate ourselves to do so or to maintain this Website, or to maintain it in its present form, and we expressly reserve the right to modify, suspend or terminate your access privileges. You agree and understand that we may, in our sole discretion and without any prior notice, close this website or deny you access to it and delete any files which you may maintain at this Website and any information which you may choose to post here. You should keep a copy of any material which you post to this Website because we will not undertake to retain copies of any material which may be delete from this Website.</p>

            <h4>4. Descriptions of Products and Services</h4>
            <p>At its sole discretion, Magellan Yates LLC reserves the right to modify, update, or discontinue at any time without notice, any of its products, services, and/or specifications for products and/or services described on this Website, including the availability of such products and services.  Products or services described on this Website may not be available in all geographic areas.</p>
            <h4>5. Advice and Recommendations</h4>
            <p>No part of this website nor any of the material or content on this website (the “Content”) constitutes any advice or recommendation whatsoever in relation to any security, investment, potential investment or decision. No decision of any kind should be made on the basis of the Content found here.</p>

            <h4>6. Privileges Nontransferable</h4>
            <p>You may not transfer your access privileges to any third parties. You further agree not to disclose to anyone your confidential password.</p>

            <h4>7. Intellectual Property</h4>
                <h5>A. Copyrights</h5>
                <p>All copyrights and other rights (including, without limitation, intellectual property rights) in and to the Website and the material (the "Content") on the Website are owned by us or by others. You may not use, copy, adapt, modify, sell, license, distribute, transmit, display, publish or create works derived from the Website or the Content or any part thereof).</p>

                <p>By posting material at this Website you agree, represent and warrant that you own the rights to such material or that you have obtained the signed, written permission of the owners of all rights in such material. You shall retain ownership of the copyrights in any original material that you post at this Website (to the extent such material may be entitled to copyright protection).</p>

                <h5>B. Trademarks</h5>
                <p>"MY" is our trademark. All such trademarks, logos, website addresses, product or model names, or derivations that describe Magellan Yates or Magellan Yates products, support, services, or content that contain the words "Magellan Yates" that are included in Website Content are trademarks and/or the property of Magellan Yates. Any list of Magellan Yates or other trademarks on this Website is periodically updated but shall not be taken as an all-inclusive list of Magellan Yates trademarks.</p>

                <p>All other product or service names are trademarks, registered trademarks or service marks of their respective owners. All logos and references to organizations are used with the permission of the owners, and must not be reproduced without the express permission of the respective owners except where allowed under these terms and conditions.</p>

                <h5>C. Software</h5>
                <p>Any software downloaded from or through this Website (including but not limited to Macromedia Flash player and Vimeo media player), shall be subject to the applicable license agreement between the appropriate licensor and the User for such software.</p>

                <h4>8. Digital Millennium Copyright Act (DMCA) Policy</h4>
                <p>Users may not post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights or otherwise have a valid basis under the law, including "fair use.”</p>

                <p>Without limiting the foregoing, if an individual believes that his work has been copied and posted on the Website or in connection with any Content, product, or service offered by Magellan Yatesin a way that constitutes copyright infringement, please provide our Copyright Agent with the following information consistent with the Digital Millennium Copyright Act (DMCA):</p>

                <p>1)	An electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest; a description of the copyrighted work that is alleged to have been infringed; a description of where the allegedly infringing material is located on the website including the URLs of web pages and/or hyperlinks; your address, telephone number, and email address;</p>

                <p>2)	A written statement that the complainant has a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; a statement by the complainant, made under penalty of perjury, that the above information in your notice is accurate and that the complainant is the copyright owner or authorized to act on the copyright owner's behalf.</p>

                <p>Users agree that we have the right (but not the obligation) to investigate any complaint received and, at any time and for any reason, to remove any material which you post to this website, with or without your permission, and with or without cause, in our sole discretion. By reserving this right, we do not undertake any responsibility in fact to remove content posted online, whether or not a complaint has been received.</p>

                <h4>9. Links</h4>
                <p>This Website may have links to Websites operated by third parties.  Magellan Yates provides third party links as a convenience, and users accessing any Internet website linked to this Website do so at their own risk.</p>

                <p>Because linked Websites are not under Magellan Yates's control, Magellan Yates is not liable for the accuracy or reliability of any information, data, opinions, advice, security protocols, statements, or other products, information, or services made on third party Websites. Such links do not constitute or imply Magellan Yates's endorsement, sponsorship, or approval for any content on third party websites or locations and Magellan Yates disclaims all liability with regard to a user's access to such linked websites.</p>

                <h4>10. Advertising</h4>
                <p>Parts of this Website contain advertising and third party content.  Advertisers and other content providers are responsible for ensuring that material submitted for inclusion on the Websites complies with international and national law.</p>

                <h4>11. Privacy Policy</h4>
                <p>Protecting the privacy and personal data of the visitors to our Website is of the utmost importance to us.</p>

                <h5>A. Use of Cookies</h5>
                <p>
                    A cookie is a piece of text that a website transfers to a directory on your computer's hard disk, so that the website can remember who you are. This text file is known as a “cookie.”</p>
                </p>
                <p>A cookie will typically contain the name of the website from which the cookie has come, the "lifetime" of the cookie, and a value, usually a randomly generated unique number.</p>

                <p>Allowing a website to create a cookie does not give that or any other website access to the rest of your computer and only the Website that created the cookie can read it.</p>

                <p>Two types of cookies are used on our websites:<br>
                1)	Session cookies – These are temporary cookies that remain in the cookie file of your browser until you leave the Website. We use these cookies to allow you to carry information across pages of our Website and avoid having to re-enter information within registration to allow you to access stored information;</p>
                <p>2)	Persistent cookies – These remain in the cookie file of your browser for much longer (though how long will depend on the lifetime of the specific cookie). Cookies can help a website to arrange content to match your preferred choices. We use these cookies to help us recognize you as a unique visitor (just a number) when you return to our website and to allow us to tailor content to match your preferred interests.</p>

                <p>Our cookies cannot be used by themselves to identify you.
                Find out more about cookies at http://www.allaboutcookies.org/cookies/
                This privacy statement only covers the Magellan yates websites at http://www.magyates.com. It does not cover links within this Website to other websites.</p>
                <p>If we decide to change our privacy policy, we will attempt to advise all users of the changes. Moreover, we will maintain an updated version of our privacy policy on this page. Regularly reviewing this page ensures you are always aware of the current privacy policy.</p>

                <h5>B. Email</h5>
                <p>Magellan Yates may send electronic mail to you for the purpose of informing you of changes or additions to Magellan Yates, or of any Magellan Yates related products and services. You may opt out of this notification service by replying to the electronic mail that was sent with the word "unsubscribe" (without the quotes) in the subject line or by clicking on the “unsubscribe” link in the email.</p>

                <h5>C. Email Alerts</h5>
                <p>Every registrant will automatically qualify to receive email alerts highlighting new content on the channel and other related services. All of these email lists provide opt out facilities online.</p>

                <h5>D. Download Information</h5>
                <p>Parts of the Website provide the opportunity to download transcripts and documents associated with companies. Magellan Yates is not responsible for any of this content or error, omission or inaccuracy in any of this material.</p>

                <p>Magellan Yates may share the names and email addresses of an individual user with some of the companies whose interviews are broadcast on the channel where a user downloads transcripts and documents associated with the interviews.</p>

                <h5>E. Registration Information</h5>
                <p>In order to gain entry to Magellan Yates/online services a user must first complete a registration form or be offered a pre-registration. During registration a user is required to give their contact information (such as name and email address).</p>

                <p>Magellan Yates is the owner of the information collected on this Website and will not sell, share, or rent this information to third parties in ways other than those disclosed in this policy. Magellan Yates collects information from our users at several different points on our Website.</p>

                <h5>F. Sharing of Information</h5>
                <p>We will share aggregated demographic information with our partners and advertisers. This is not linked to any personal information that can identify any individual person.</p>
                <p>We share the names and email addresses of an individual user with some of the companies whose interviews are broadcast on the channel and where a user downloads transcripts and documents associated with the interviews.</p>

                <h5>G. Log Files</h5>
                <p>We use IP addresses to analyze trends, administer the Website, track a user's movement, and gather broad demographic information for aggregate use. IP addresses are not linked to personally identifiable information.</p>


                <h4>12. DISCLAIMER OF WARRANTIES.</h4>
                <p>WE OFFER NO WARRANTIES NOR MAKE ANY REPRESENTATIONS ABOUT ANY BENEFITS OR OPPORTUNITIES THAT YOU MAY OBTAIN THROUGH THIS WEBSITE.</p>
                <p>WE HEREBY DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NONINFRINGEMENT. THIS WEBSITE IS MADE AVAILABLE TO YOU “AS IS,” WITHOUT ANY WARRANTIES WHATSOEVER ABOUT THE NATURE, CONTENT OR ACCURACY (EITHER WHEN POSTED OR AS A RESULT OF THE PASSAGE OF TIME) OF ANY MATERIAL AT THE WEBSITE, AND WITHOUT ANY REPRESENTATIONS OR GUARANTEES.</p>

                <p>IN ADDITION, WE MAKE NO REPRESENTATIONS, WARRANTIES OR GUARANTEES THAT THIS WEBSITE WILL BE SECURE, ACCESSIBLE CONTINUOUSLY AND WITHOUT INTERRUPTION, OR ERROR FREE.</p>

                <p>TO THE EXTENT THAT YOU MIGHT OTHERWISE BELIEVE THAT ANY WARRANTIES, GUARANTEES OR REPRESENTATIONS HAVE BEEN MADE TO YOU, YOU HEREBY AGREE THAT SUCH STATEMENTS, WHETHER MADE ORALLY OR IN WRITING, ARE TO BE CONSTRUED AS MERELY NONBINDING EXPRESSIONS OF POLICY RATHER THAN AFFIRMATIVE REPRESENTATIONS, OBLIGATIONS, GUARANTEES OR WARRANTIES. IN THE EVENT OF ANY CONFLICT BETWEEN THIS SECTION 12 AND OTHER TERMS OR PROVISIONS OF THIS AGREEMENT, THIS SECTION SHALL BE CONSTRUED TO TAKE PRECEDENCE. </p>

                <h4>13. LIMITATION OF LIABILITY.</h4>
                <p>WE DISCLAIM ALL LIABILITY FOR ANY CONDUCT, ACTS OR OMISSIONS OCCURRING ON OR THROUGH THIS WEBSITE.</p>

                <p>USERS AGREE TO INDEMNIFY AND HOLD HARMLESS MAGELLAN YATES WITH REGARD TO ANY USER ACTIVITY THAT INVOLVES, INCLUDES, OR IS FACILITATED BY ASSET TV’S PRODUCTS, SERVICES, WEBSITES, DATA, OR ANY OTHER MAGELLAN YATES  RESOURCES. (See INDEMNIFICATION section below) USERS AGREE THAT THEY ASSUME ALL RISKS OF THEIR ACTIVITY WITH REGARD TO MAGELLAN YATES’S PRODUCTS, SERVICES, WEBSITES, DATA, OR ANY OTHER MAGELLAN YATES RESOURCES.</p>

                <p>IN NO EVENT SHALL MAGELLAN YATES, ITS OFFICERS, DIRECTORS, OR AFFILIATES BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, OR CONSEQUENTIAL DAMAGES ARISING OUT OF, OR IN ANY WAY CONNECTED WITH, THE ACCESS OR USE OF THIS WEBSITE WHETHER BASED ON A THEORY OF NEGLIGENCE, CONTRACT, TORT, STRICT LIABILITY, OR OTHERWISE, EVEN IF ASSET TV HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>

                <p>If Magellan Yates is found liable for any loss or damage that arises out of or is in any way connected with use of our websites or services, then Magellan Yates’s liabilities will in no event exceed, in the aggregate, the lesser of (a) the transaction fees paid to Magellan Yates for the transaction(s) on this website giving rise to the claim, or (b) One-Hundred Dollars (US $100.00).</p>

                <p>The limitation of liability reflects the allocation of risk between the parties. The limitations specified in this section will survive and apply even if any limited remedy specified in these terms and conditions is found to have failed of its essential purpose. The limitations of liability provided in these terms and conditions inure to the benefit of Magellan Yates.</p>

                <p>Applicable law may not permit the liability exclusions in this section in all cases. The liability exclusions in this section apply only to the maximum extent permitted by applicable law.</p>

                <h4>14. INDEMNIFICATION</h4>
                <p>The user agrees to defend and indemnify Magellan Yates and its affiliates and any of its officers, directors, employees, and agents from and against any claims, causes of action, demands, recoveries, losses, damages, fines, penalties, or other costs or expenses of any kind or nature including, but not limited to, reasonable legal and accounting fees brought by third parties as a result of the user’s:</p>
                <p>
                    1)	breach of these terms and conditions or the documents referenced herein;<br>
                    2)	violation of any law or the rights of a third party; or<br>
                    3)	use of this website.
                </p>

                <h4>15. GOVERNING LAW AND DISPUTE RESOLUTION</h4>
                <p>These terms and conditions are governed by the laws of the State of New York, USA, and by the controlling United States federal law. If any provision is deemed by a court of competent jurisdiction to be unlawful or unenforceable, it will not affect the validity and enforceability of the remaining provisions. The section headings are for convenience only and do not have any force or effect.</p>

                <p>Except with respect to equitable remedies and disputes related to the ownership and protection of intellectual property, the parties agree that any dispute, claim, or controversy arising hereunder or relating in any way to this Agreement shall be settled by binding arbitration in New York County, New York, in accordance with the Commercial Arbitration Rules of the American Arbitration Association (“AAA”) with judgment upon the award rendered by the arbitrator to be entered in a court of competent jurisdiction.</p>
                <p>Each party to the arbitration is to pay an equal part of the deposit fixed by the AAA. Notwithstanding the determination of the arbitrator, (i) all costs associated with the arbitration and imposed by the AAA or the arbitrator shall be borne equally by each party to the arbitration, and (ii) unless the Arbitrator awards payment of reasonable attorney fees to a party, each party to the arbitration shall be responsible for its own attorney fees and other professional fees incurred in connection with the arbitration. Determinations of the arbitrator will be final and binding upon the parties to the arbitration. Judgment upon the award rendered by the arbitrator may be entered in any court having jurisdiction, or an application may be made to such court for a judicial acceptance of the award and an order of enforcement, as the case may be. The arbitrator shall apply the substantive law of the State of New York without giving effect to its conflict of laws rules.</p>

                <h4>16. USERS’ JURISDICTION</h4>
                <p>This Website is controlled and operated from offices within the United States of America. We make no representation that materials on this Website are appropriate or available for use outside the United States or that access to the content from all countries and/or territories is legal. The user may not use this Website or export its materials if doing so is in violation of United States export laws and regulations. Any user who accesses this Website from locations outside the United States is responsible for compliance with all applicable laws and regulations.</p>

                <p>Magellan Yates makes no representation that any information, materials, or features/functions included are appropriate for use in any other jurisdiction. This Website is not directed to any person in any jurisdiction where, by reason of that person's nationality, residence, citizenship or otherwise, the publication or availability of the website and its content is contradictory to local laws or regulations. Persons with respect to whom such restrictions or prohibitions apply must not access or use this website. By accessing or using this website, the user does so on their own initiative and is solely responsible for compliance with the applicable local laws and regulations.</p>


                <h5>17. CHANGES TO WEBSITE AND THESE TERMS</h5>
                <p>Magellan Yates and its affiliates may make improvements and/or changes in products, support, services, utilities, prices, and/or other website content, including these terms and conditions, at any time with or without notice.</p>

                <p>Magellan Yates may provide notice of changes to these terms and conditions, or other website content, by displaying notices on this website or other communication means. Users who access this website after changes have been posted on the website or otherwise communicated shall be bound by such changes as soon as such notices or new terms and conditions are posted to the website or otherwise communicated, even if they do not visit the page on which the change or new terms and conditions are displayed. Frequent review of this website and these terms and conditions is therefore recommended.</p>

                <h4>19. ENTIRE AGREEMENT</h4>
                <p>These terms and conditions constitute the entire agreement between Magellan Yates  and the user regarding this Website and the use of this Website.</p>

                <h4>20. MISCELLANEOUS</h4>
                <p>If any provision of these terms and conditions is held to be unenforceable, the unenforceable provision shall be deemed to be replaced by a valid, enforceable provision that most closely matches the intent of the original provision. This shall not affect the validity or enforceability of the remaining provisions.</p>

                <p>Without prejudice to the disclaimers and liability limitations in these terms and conditions, no claim or action against Magellan yates may be brought by any person in relation to or arising from this Website unless such claim or action is commenced and notified to Magellan Yates in writing within one (1) year after the date the cause of action first arose.</p>
                <p>Magellan Yates employees and agents are not authorized to vary these terms and conditions. Nothing said by any sales or customer service team members on behalf of Magellan Yates should be understood as a variation of these terms and conditions or as an authorized, legally binding representation about this website or the nature or quality of products or services displayed or other website content.</p>

                <p>Calls to any customer service and support related or referred to in this website may be monitored for training and quality control purposes.</p>
                <p>Failure of Magellan Yates to exercise or enforce any right or provision of these terms and conditions will not result in a waiver of such right or provision.</p>

                <p>TO GAIN ACCESS TO THIS WEBSITE, COMPLETE REGISTRATION TO MANIFEST YOUR ASSENT TO THE TERMS OF THIS AGREEMENT. BY SIGNIFYING YOUR ASSENT, YOU AGREE TO BE BOUND BY THE TERMS OF THIS AGREEMENT TO THE SAME EXTENT AS IF YOU HAD PERSONALLY SIGNED THE AGREEMENT.</p>


            </div>
            <div style="margin-top:20px"><input id="agree" type="checkbox"> I Agree.</div>

        </div>
        </form>
    </div>
    <div class="mt20"></div>
</section>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript">

    function validateForm(){
        if ($('#agree').is(':checked'))
            $("#register-form").submit();
        else
            alert('You must agree the terms to continue');
    };
    $(function() {
        @if (session('company'))
            $('#agreeModal').modal('show');
        @endif
    });


</script>

@endsection
