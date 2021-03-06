<?php
$t_sub_title = "IRC";

include( "top.php" );
?>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-12">

      <h1>IRC</h1>

      <p>
        Join us on
        <a href="irc://irc.freenode.net/mantisbt">#mantisbt</a>,
        the official, <a href="http://freenode.net/">Freenode</a>-hosted
        MantisBT IRC channel.
      </p>

      <p>
        Our <em>mantisbot</em> lurks in the channel and keeps a log
        of all conversations.
        The <a href="irclogs.php">archives can be found here</a>.
        Should you want to go off the record, simply prefix your message
        with <tt>[nolog]</tt>.
      </p>

      <p>
        If you are looking for an IRC client, have a look at this
        <a href="http://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_clients">wikipedia page</a>,
        listing a number of options.

        Should you prefer to use a web client, feel free to use the widget below
        or connect using the
        <a href="http://webchat.freenode.net/?channels=%23mantisbt">Freenode webchat</a>.
        Note that the <a href="http://blog.freenode.net/2009/06/new-freenode-webchat-and-why-to-use-it/">
          Mibbit client has been disabled</a>
        and can't be used on Freenode.
      </p>

    </div>
  </div>

  <div class="row show-grid clear-both">
    <div class="col-sm-12 col-md-offset-2 col-md-12">
      <iframe width="600" height="380" scrolling="no" frameborder="0"
              src="http://webchat.freenode.net/?channels=%23mantisbt">
      </iframe>
    </div>
  </div>


<?php
include( "bot.php" );
