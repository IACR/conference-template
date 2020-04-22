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
      entire <div class="row"> when ready to add other content
      <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div>-->

      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
           These are the invited speakers from Eurocrypt 2020. When you have your
           list of invited speakers, You should uncomment this section and replace
           the names, photos, and text using the same structure.-->
      <h3 class="pageSubtitle mt-4">
        Alice Silverberg
      </h3>
      <div class="row">
        <div class="col-12">
          <img class="img-fluid mb-2 mb-md-0 mt-md-2 ml-md-3 p-2 float-md-right speakerImg" src="images/invited/silverberg.jpg" alt="Alice Silverberg" />
          <h4 class="subSubtitle">
            Title
          </h4>
          <p>
            Mathematics and Cryptography: A Marriage of Convenience?
          </p>
          <h4 class="subSubtitle">
            Abstract
          </h4>
          <p>
            Mathematics and cryptography have a long history together,
            with the ups and downs inherent in any long
            relationship. Whether it is a marriage of convenience or a
            love match, their progeny have lives of their own and have
            had an impact on the world. This invited lecture will
            briefly recall some high points from the past, give
            speculation and encouragement for the future of this
            marriage, and give counseling on how to improve
            communication, resolve conflicts, and play well together,
            based on personal experience and lessons learned.
          </p>
          <h4 class="subSubtitle">
            Biography
          </h4>
          <p>
            Alice Silverberg is a Distinguished Professor of Mathematics and Computer Science at the University of California, Irvine. Much of her recent work involves applying mathematics to cryptography. She co-introduced Multilinear Cryptography and Torus-Based Cryptography and co-invented the first fully hierarchical identity-based cryptosystem. She has worked on primality proofs, and her team found the largest proven primes N for which partial factorizations of N - 1 or N + 1 were not known. Recently she has been working on multilinear maps, fully homomorphic encryption, lattice-based cryptography, and applications of abelian varieties to post-quantum cryptography.
          </p>
          <p>
            She earned her undergraduate degree summa cum laude from Harvard, her PhD from Princeton, and a Master of Advanced Study degree from Cambridge. She has been awarded Humboldt, Sloan, IBM, DARPA, NSF, and NSA fellowships and grants. She has consulted for or done research at industrial labs and research centers including IBM, Xerox PARC, DoCoMo USA Labs, Bell Labs, Sandia National Labs, Microsoft, the Institut des Hautes &Eacute;tudes Scientifiques, the Max Planck Institute f&uuml;r Mathematik, and the Bunting Institute at Harvard.
          </p>
          <p>
            She consulted for the TV show NUMB3RS, was an organizer of the Fermat Fest at the Palace of Fine Arts in San Francisco, and writes mathematically inspired Scottish country dances. She writes about Alice's Adventures in Numberland at <a href="https://sites.google.com/site/numberlandadventures/">https://sites.google.com/site/numberlandadventures/</a>.
          </p>
        </div>
      </div>

      <h3 class="pageSubtitle mt-4">
        Alon Rosen
      </h3>
      <div class="row">
        <div class="col-12">
          <img class="img-fluid mb-2 mb-md-0 mt-md-2 ml-md-3 p-2 float-md-right speakerImg" src="images/invited/alon.rosen.png" alt="Alon Rosen" />
          <h4 class="subSubtitle">
            Title
          </h4>
          <p>
            Fine-Grained Cryptography: A New Frontier?
          </p>
          <h4 class="subSubtitle">
            Abstract
          </h4>
          <p>
            Fine-grained cryptography is concerned with adversaries
            that are only moderately more powerful than the honest
            parties. We will survey recent results in this relatively
            underdeveloped area of study and examine whether the time
            is ripe for further advances in it.
          </p>
          <h4 class="subSubtitle">
            Biography
          </h4>
          <p>
            Alon Rosen is a professor in the School of Computer
            Science at the Herzliya Interdisciplinary Center.
          </p>
          <p>
            His areas of expertise are in theoretical computer science
            and cryptography. He has made contributions to the
            foundational study of zero-knowledge protocols, as well as
            fast lattice-based cryptography, notably in the context of
            collision resistant hashing and pseudo-random functions,
            where he studied the ring-SIS problem and related SWIFFT
            hash function, and co-introduced the Learning with
            Rounding problem. More recently, Alon has been interested
            in the intersection of cryptography and game theory, with
            a focus on the hardness of finding a Nash equilibrium in
            bimatrix games, and in average-case fine-grained hardness.
          </p>
          <p>
            Alon earned his PhD from the Weizmann Institute of
            Science, and was a Postdoctoral Fellow at MIT and at
            Harvard University. He is a faculty member at IDC since
            2007.
          </p>
          <p>
            He is a founder and former director of the FACT center.
          </p>
        </div>
      </div>
      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%% -->

    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
