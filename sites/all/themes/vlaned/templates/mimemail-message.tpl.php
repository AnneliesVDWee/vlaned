<?php

/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[module]--[key].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $recipient: The recipient of the message
 * - $subject: The message subject
 * - $body: The message body
 * - $css: Internal style sheets
 * - $module: The sending module
 * - $key: The message identifier
 *
 * @see template_preprocess_mimemail_message()
 */


/**
 * dit stond bij webform
 * @file
 * Customize the e-mails sent by Webform after successful submission.
 *
 * This file may be renamed "webform-mail-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-mail.tpl.php" to affect all webform e-mails on your site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The webform submission.
 * - $email: The entire e-mail configuration settings.
 * - $user: The current user submitting the form. Always the Anonymous user
 *   (uid 0) for confidential submissions.
 * - $ip_address: The IP address of the user submitting the form or '(unknown)'
 *   for confidential submissions.
 *
 * The $email['email'] variable can be used to send different e-mails to different users
 * when using the "default" e-mail template.
 */
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php if ($css): ?>
    <style type="text/css">
      #mimemail-body{
          background-color: #dae7d9;
      }
        #center{
          width: 100%;
          max-width: 700px;
          margin-top: 1em;
          margin-bottom: 1em;
          margin-left: auto;
          margin-right: auto;
          background-color: white;
          display: block;
          padding-top: 1em;
          padding-bottom: 1em;
          padding-left: 1em;
          padding-right: 1em;

        }
        #main{
          margin-top: 1em;
          margin-bottom: 1em;
          display: block;

        }
        #header{
          width: 100%;
          background-image: url(localhost/vlaned/sites/default/files/logo_Vlaned_91x100.gif);
          background-position: top center;

        }
        #header img{
          display: block;
          width: 91px;
          margin: 0 auto;
        }
        img{display: block;}
        p{
          line-height: 1.5em;
          margin-bottom: 1em;
        }



    </style>
    <?php endif; ?>

  </head>
  <body id="mimemail-body" <?php if ($module && $key): print 'class="'. $module .'-'. $key .'"'; endif; ?>>
    <div id="center">
      <div id="main">
        <div id="header"></div>
        <div id="content">
          <?php print $body ?>
        </div>
      </div>
    </div>
  </body>
</html>
