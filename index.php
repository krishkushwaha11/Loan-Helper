<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>

      <!-- Link CSS -->
      <link rel="stylesheet" href="./assets/css/style.css">
      <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

      <!-- Font Family -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Tilt+Neon&display=swap" rel="stylesheet">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

      <!-- Favicon Image -->
      <link rel="icon" type="image/png" href="./assets/images/favicon.png">

      <!-- Font awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>
      <?php include('header.php') ?>

      <div class="main-banner">
            <div class="container">
                  <div class="row align-items-center">
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6">
                              <div class="card">
                                    <h5 class="text-center mb-4">Find a Cash Advance Online that Fits Your Needs</h5>
                                    <form class="form-card" onsubmit="event.preventDefault()">
                                          <div class="row justify-content-between text-left">
                                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                                          </div>
                                          <div class="row justify-content-between text-left mt-3">
                                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="email" onblur="validate(3)"> </div>
                                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="number" onblur="validate(4)"> </div>
                                          </div>
                                          <div class="row justify-content-start">
                                                <div class="form-group col-sm-6 mt-3"> <button type="submit" class="btn-block btn-primary">Get Started</button> </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <div class="container text-center mt-5">
            <h2 class="text-center">Requesting a Cash Advance Loan is Simple</h2>
            <div class="row align-items-center mt-5">
                  <div class="col-lg-4">
                        <img src="./assets/images/get-started.png" alt="">
                        <h3>Get Started</h3>
                        <p>Fill in our short, simple, secure online loan request form.</p>
                  </div>
                  <div class="col-lg-4">
                        <img src="./assets/images/get-connected.png" alt="">
                        <h3>Get Connected</h3>
                        <p>We may connect you with a lender or lending partner.</p>
                  </div>
                  <div class="col-lg-4">
                        <img src="./assets/images/get-money.png" alt="">
                        <h3>Get Your Money</h3>
                        <p>Some customers may eventually receive a loan after leaving our site.</p>
                  </div>
            </div>
      </div>

      <div class="container mt-5 head-choose">
            <h2>Why Choose Us for Your Online Cash Advance?</h2>
            <div class="row mt-4">
                  <div class="col-lg-6">
                        <ul>
                              <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Responsive Online Loan Requests:</strong></li>
                              <p>Use our platform to quickly request short-term loans when unexpected expenses arise.</p>
                              <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Truly Zero-Cost Service:</strong></li>
                              <p>Our loan request service is absolutely free, offering unrivaled convenience without any hidden costs.</p>
                              <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Uncompromising Data Security:</strong></li>
                              <p>Your privacy is our priority. Our advanced technology ensures that your personal data remains secure and confidential.</p>
                        </ul>
                  </div>
                  <div class="col-lg-6">
                        <ul>
                              <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Straightforward Process:</strong></li>
                              <p>Request a short-term loan effortlessly within our secure online environment.</p>
                              <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Prompt Funds Transfer:</strong></li>
                              <p>If approved, you may receive your funds in as little as one business day.</p>
                              <li><img src="./assets/images/point.png" alt=""><strong class="p-2">All Credit Scores Welcome:</strong></li>
                              <p>Our platform welcomes loan requests from individuals with various credit backgrounds. However, approval is not guaranteed and depends on multiple factors.</p>
                        </ul>
                  </div>
            </div>
      </div>

      <div class="container mt-5">
            <h2 class="text-center">What is a Cash Advance Online?</h2>
            <div class="row mt-5 align-items-center">
                  <div class="col-lg-9">
                        <p class="online-cash">An online cash advance is a short-term solution designed to bridge the gap during unforeseen financial events.</p>
                        <p style="font-size: 20px;">These small-scale loans can provide up to $500 to help manage temporary cash shortfalls when traditional loan options may not be readily accessible. Unlike many conventional bank loans, the funding process for an approved cash advance is typically expedited.</p>
                  </div>
                  <div class="col-lg-3">
                        <img style="height: 180px;" src="./assets/images/online-cash.png" alt="">
                  </div>
            </div>
            <p>Some payday lenders provide an online application that allows the borrower to complete most (if not all) of the process from their home computer.</p>
            <p>Approval for a cash advance may not depend on a high credit score. The amount borrowed and the fees charged are determined by the lender and may be influenced by the borrower’s credit score, location, and other factors.</p>
            <p>Remember, at <spam class="online-cash">Loans Request</spam>, you can request a cash advance for up to $500 or an installment loan for up to $5,000. If you're requesting over $500, we may connect you with an installment loan lender. These lenders often offer longer repayment terms than you would typically find with a payday advance.</p>
      </div>

      <div class="container mt-5">
            <h2 class="text-center">Reasons People Request a Cash Advance</h2>
            <p style="font-size: 20px;" class="text-center">Life is unpredictable – but one thing you can count on is that it will be expensive.
                  Fortunately, a shorter-duration loan can be a practical solution.</p>
            <p class="online-cash text-center">Here’s why people often turn to cash advances:</p>
            <div class="row align-items-center mt-5 text-center">
                  <div class="col-lg-4">
                        <img src="./assets/images/get-started.png" alt="">
                        <h3>Unexpected Expenses</h3>
                        <p>When sudden costs like car repairs or medical bills hit, a cash advance can be a lifeline, offering quick funds without compromising other essentials.</p>
                  </div>
                  <div class="col-lg-4">
                        <img src="./assets/images/get-connected.png" alt="">
                        <h3>Bridging the Payday Gap</h3>
                        <p>When payday seems like a distant dream, and bills pile up, a cash advance can be a lifeline, ensuring your necessary</p>
                  </div>
                  <div class="col-lg-4">
                        <img src="./assets/images/get-money.png" alt="">
                        <h3>Navigating Short-term</h3>
                        <p>Financial alignment isn’t always a snug fit. A payday cash advance can be a buffer, relieving temporary cash flow</p>
                  </div>
            </div>
            <div class="row align-items-center mt-5 text-center">
                  <div class="col-lg-4">
                        <img src="./assets/images/get-started.png" alt="">
                        <h3>Emergency Travel Support</h3>
                        <p>Whether it’s a family emergency or an unexpected trip, travel costs can be overwhelming. A cash advance can swiftly provide the funds needed for last-minute travel, easing financial stress during challenging times.</p>
                  </div>
                  <div class="col-lg-4">
                        <img src="./assets/images/get-connected.png" alt="">
                        <h3>Maintaining Daily Living</h3>
                        <p>Everyday expenses like groceries or utility bills shouldn’t be a worry. A cash advance can be a temporary helping hand, making it possible to maintain your daily living standards until you find more financial stability.</p>
                  </div>
                  <div class="col-lg-4">
                        <img src="./assets/images/get-money.png" alt="">
                        <h3>Your reason may not be on</h3>
                        <p>If you find yourself needing a financial boost, why wait? Submit your cash advance request through Loans Request today more financial stability more financial stability.</p>
                  </div>
            </div>
      </div>

      <div class="education-center mt-5">
            <div class="container">
                  <h2 class="text-center">Education Center</h2>
                  <p style="color: while; font-size: 18px;">If this is your first cash advance, or if you’ve recently moved to a new state, then you might not know about your state’s cash advance regulations. Each state has its own unique rules pertaining to cash advances. Click on the map for more information on your state. Here are a few regulations you should look out for:</p>
                  <div class="row">
                        <div class="col-lg-3">
                              <ul>
                                    <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Maximum Loan Amount:</strong></li>
                                    <p>This is the highest amount of money you can borrow through a single cash advance. The limit varies by state. Depending on where you live, you may be able to borrow up to $500 with a cash advance or up to $5,000 with an installment loan.</p>
                              </ul>
                        </div>
                        <div class="col-lg-3">
                              <ul>
                                    <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Maximum Loan Term:</strong></li>
                                    <p>This is the longest amount of time you’ll have to pay off your loan. Remember, the less time it takes you to pay off your loan, the less interest you’ll end up paying.</p>
                              </ul>
                        </div>
                        <div class="col-lg-3">
                              <ul>
                                    <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Limit on Simultaneous Cash Advances:</strong></li>
                                    <p>Some states won’t let you borrow multiple cash advances at the same time. This is to keep you from taking on more debt than you’ll be able to pay off.</p>
                              </ul>
                        </div>
                        <div class="col-lg-3">
                              <ul>
                                    <li><img src="./assets/images/point.png" alt=""><strong class="p-2">Rollovers Allowed:</strong></li>
                                    <p>In some states, a lender may charge you a fee for a loan extension. Other states prohibit this from being an option by not allowing loan extensions (a.k.a. rollovers)</p>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>

      <div class="container mt-5">
            <h2 class="text-center">Cash Advance Online FAQ</h2>
            <div class="row mt-5 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>What Do I Need to Request a Cash Advance Loan?</b></h6>
                        <p>To request a cash advance loan through our online platform, you'll need to provide some basic information, including income and employment details, identification, and an active checking account. If connected with a lender, you may need to offer additional information.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>When Should I Use a Cash Advance?</b></h6>
                        <p>A credit counselor can provide specific advice based on your personal financial situation.</p>
                        <p>Typically, a short-term cash advance is utilized to manage unexpected expenses and should be considered when you're confident of repaying the amount within the stipulated loan term.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>Is Loans Request a Direct Payday Lender?</b></h6>
                        <p>No, Loans Request is not a direct payday lender. We serve as a connection platform, aiming to connect potential borrowers with suitable lenders using the information provided in the loan request.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>What Happens After I Submit a Loan Request Through Loans Request?</b></h6>
                        <p>Once your loan request is submitted, we work swiftly to try to connect you with a lender. If connected, you may be redirected to the lender's website to submit an application. If approved by the lender, you will be presented with the loan agreement and terms. The final loan details, including the approved amount, fees, and repayment terms, are determined by the lender.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>How Much Can I Borrow Through Loans Request?</b></h6>
                        <p>Through Loans Request, you can request a cash advance for up to $500 or an installment loan for up to $5,000. The final approved loan amount will depend on various factors, including your credit score, income, and lender's discretion. Please note that submitting a loan request does not guarantee that you will connect with a lender or receive financing. Likewise, connecting with a lender does not guarantee funding.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>How Secure Is My Information?</b></h6>
                        <p>We take your privacy seriously at Loans Request. We utilize advanced encryption technology to ensure your personal information is secure and confidential. Our privacy practices adhere to and exceed industry standards.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>What Are the Rates and Terms?</b></h6>
                        <p>The rates and terms of a cash advance loan are determined by the lender and can be influenced by factors like your credit score, loan amount, and location. If you are approved for financing, review these details thoroughly in the loan agreement before finalizing the loan.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>Can I Make a Partial Loan Payment of My Cash Advance?</b></h6>
                        <p>The ability to make partial payments on your cash advance depends on the terms set by your lender if you are approved. We recommend discussing this with your lender directly.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>Can I Pay Off My Cash Advance Loan Early?</b></h6>
                        <p>Early repayment policies vary by lender. Some lenders may allow early repayment without penalties, while others may charge a fee. If you are approved for a loan, this information will be outlined in your loan agreement.</p>
                  </div>
            </div>
            <div class="row mt-4 justify-content-center">
                  <div class="col-lg-8">
                        <h6><b>How Long Does It Take to Approve My Cash Advance Loan and Receive the Funds?</b></h6>
                        <p>Upon submitting your loan request form through Loans Request, you can anticipate on-screen results within three minutes. If we successfully connect you with a lender, they will typically guide you through their unique process to reach a final loan decision. This process, along with the timeline for decision-making and fund disbursement, may vary among lenders.</p>
                        <p>If a lender approves your request and you sign the loan agreement, your funds could be available as soon as the next business day. Please remember that Loans Request is not a lender. Our role is to try to connect each user with a lender willing to consider their request. We cannot guarantee that everyone who submits a request through our system will be connected with a lender.</p>
                  </div>
            </div>
      </div>

      <?php include('footer.php') ?>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./assets/js/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
      </script>
</body>

</html>