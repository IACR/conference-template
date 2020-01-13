<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> invited talks"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> invited talks"/>

    <style>
      @media only screen and (min-width: 768px) {
        .speakerImg {
          max-width: 30%;
        }
      }
    </style>

    <title>
      <?php echo $META['shortName'];?> Invited Talks
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Invited Talks
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page
      is under construction. please delete this
      entire <div class="row"> when ready to add other content -->
      <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div>

      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
           These are the invited speakers from Asiacrypt 2019. When you have your
           list of invited speakers, You should uncomment this section and replace
           the names, photos, and text using the same structure.
      <h3 class="pageSubtitle mt-4">
        Krzysztof Pietrzak
      </h3>
      <div class="row">
        <div class="col-12">
          <img class="img-fluid mb-2 mb-md-0 mt-md-2 ml-md-3 p-2 float-md-right speakerImg" src="https://asiacrypt.iacr.org/2019/images/Pietrzak.jpg" alt="Krzysztof Pietrzak" />
          <h4 class="subSubtitle">
            Title
          </h4>
          <p>
            Systems for sustainable blockchains: proofs of space and verifiable delay functions
          </p>
          <h4 class="subSubtitle">
            Abstract
          </h4>
          <p>
            The distinctive feature of Bitcoin is that it achieves decentralisation in an open setting where everyone can join. This is achieved at a high price, honest parties must constantly dedicate more computational power towards securing Bitcoin's blockchain than is available to a potential adversary, which leads to a massive waste of energy; at its hitherto peak, the electricity used for Bitcoin mining equaled the electricity consumption of Austria. In this lecture I will discuss how disk-space, instead of computation, can be used as a resource to construct a more sustainable blockchain. We will see definitions and constructions of "proof of space" and "verifiable delay functions", and how they can be used to construct a Blockchain with similar dynamics and security properties as the Bitcoin blockchain.
          </p>
          <h4 class="subSubtitle">
            Biography
          </h4>
          <p>
            Krzysztof Pietrzak received his masters and PhD from ETH Zurich, then did postdocs at ENS Paris and CWI Amsterdam. Since 2011 he heads the cryptography group at the recently founded Institute of Science and Technology Austria (IST Austria). He is interested in theoretical and applied aspects of cryptography, including pseudorandomness/entropy, (black-box) lower bounds, leakage-resilience, memory-hard functions, crypto for light-weight devices and proof systems for sustainable blockchains. He is the recipient of an ERC starting and consolidator grant and three Eurocrypt best paper awards.
          </p>
        </div>
      </div>

      <h3 class="pageSubtitle mt-4">
        Elaine Shi
      </h3>
      <div class="row">
        <div class="col-12">
          <img class="img-fluid mb-2 mb-md-0 mt-md-2 ml-md-3 p-2 float-md-right speakerImg" src="https://asiacrypt.iacr.org/2019/images/Shi.png" alt="Elaine Shi" />
          <h4 class="subSubtitle">
            Title
          </h4>
          <p>
            Streamlined blockchains: A simple and elegant approach (tutorial)
          </p>
          <h4 class="subSubtitle">
            Abstract
          </h4>
          <p>
            A blockchain protocol (also called state machine replication) allows a set of nodes to agree on an ever-growing, linearly ordered log of transactions. In this tutorial, we present a new paradigm called “streamlined blockchains”. This paradigm enables a new family of protocols that are extremely simple and natural: every epoch, a proposer proposes a block extending from a notarized parent chain, and nodes vote if the proposal’s parent chain is not too old. Whenever a block gains enough votes, it becomes notarized. Whenever a node observes a notarized chain with several blocks of consecutive epochs at the end, then the entire chain chopping off a few blocks at the end is final. By varying the parameters highlighted in blue, we illustrate two variants for the partially synchronous and synchronous settings respectively. We present very simple proofs of consistency and liveness. We hope that this tutorial provides a compelling argument why this new family of protocols should be used in lieu of classical candidates (e.g., PBFT, Paxos, and their variants), both in practical implementation and for pedagogical purposes.
          </p>
          <h4 class="subSubtitle">
            Biography
          </h4>
          <p>
            Elaine Shi is an Associate Professor in Cornell University. Her research interests include cryptography, randomized algorithms, foundations of blockchains, distributed systems, and the intersection of formal methods and cryptography. She was the recipient of a Packard Fellowship and a Sloan Fellowship.
          </p>
        </div>
      </div>
      %%%%%%%%%%%%%%%%%%%%%%%%%%% -->

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
