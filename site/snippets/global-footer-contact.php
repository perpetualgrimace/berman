<?

// get contact info
$phone = $pages->find('contact')->phone();
$phoneSanitized = preg_replace('/[^0-9]/', '', $phone);
$email = $pages->find('contact')->email();

?>

<h2 class="footer-contact-heading gamma">Contact us</h2>

<ul class="footer-contact-list inline-list">
  <li class="footer-contact-item milli">
    <a class="footer-contact-link footer-link" href="mailto:<?= $email ?>">
      <svg class="footer-contact-svg" width="20px" height="13px" viewBox="0 3 20 13">
        <path d="M20,15.1587974 L20,3 L12.7190625,9.87723673 L20,15.1587974 L20,15.1587974 L20,15.1587974 Z M0,15.1587974 L7.28078125,9.87649721 L0,3 L0,15.1587974 L0,15.1587974 L0,15.1587974 Z M8.26167969,10.8038537 L0,16 L20,16 L11.738125,10.8038537 L10,12.4453799 L8.26167969,10.8038537 L8.26167969,10.8038537 L8.26167969,10.8038537 Z M0.6,3 L10,10.3597316 L19.4,3 L0.6,3 L0.6,3 L0.6,3 Z" fill="#FFFFFF"/>
      </svg><span class="u-screenreader">Email us:</span> <?= $email ?>
    </a>
  </li>
  <li class="footer-contact-item milli">
    <a class="footer-contact-link footer-link" href="tel:<?= $phoneSanitized ?>">
      <svg class="footer-contact-svg" width="13px" height="20px" viewBox="1118 144 13 20">
        <path d="M1130.0015,144 C1130.55296,144 1131,144.455306 1131,144.991803 L1131,163.008197 C1131,163.555955 1130.55251,164 1130.0015,164 L1118.9985,164 C1118.44704,164 1118,163.544694 1118,163.008197 L1118,144.991803 C1118,144.444045 1118.44749,144 1118.9985,144 L1130.0015,144 Z M1129.00442,145 C1129.55426,145 1130,145.449949 1130,146.006845 L1130,157.993155 C1130,158.54922 1129.55516,159 1129.00442,159 L1119.99558,159 C1119.44574,159 1119,158.550051 1119,157.993155 L1119,146.006845 C1119,145.45078 1119.44484,145 1119.99558,145 L1129.00442,145 Z M1123,161.5 C1123,162.328427 1123.67157,163 1124.5,163 C1125.32843,163 1126,162.328427 1126,161.5 C1126,160.671573 1125.32843,160 1124.5,160 C1123.67157,160 1123,160.671573 1123,161.5 Z" stroke="none" fill="#FFFFFF" fill-rule="evenodd"></path>
      </svg><span class="u-screenreader">Call us:</span> <?= $phone ?>
    </a>
  </li>
</ul>
