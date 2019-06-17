<?php include 'includes/header.php' ?>
<h3 class="pageID"><?=$pageID?></h3>
<section>
<h4>What is Flexbox?</h4>
<p>Flexible Box Module (Flexbox) is a new layout mode in CSS3 that serves as an alternative to floats. Why not use floats? Well, floats were never intended for layout! It was a recreation of the old align attribute in HTML to create complex layouts (Vandey, 2019). Although it was useful for styling pages, it’s very limited, buggy, and can varies differently between browsers. </p>
<p>Flexbox aims to support components of an application and small-scale layouts by allowing orientation changing, resizing, stretching, shrinking, and centering elements. Flexbox is supported by all major browsers (Edge, Firefox, Chrome, Safari, Opera Mini, etc.) and with older browsers, a simple autoprefixer will allow the usage of flexbox (Aderinokum, 2016). </p>
<p>Although flexbox will make styling pages much easier, it does have a learning curve. There are 12 new properties with an average of four potential values. It can be overwhelming to learn all new syntax but don’t fret! There are many documentations and resources out there to help. CSS Tricks does a great job breaking down how flexbox works using visual images for those who learn best through visual cues. Developer.Mozilla also has extensive documentation on all the properties while Flexbox Froggy allows you to learn how each property works through a game. Flexbox is simple and well supported by the web development community. It’s time to get on board.</p>
<p><img src="images/flexbox.svg" alt="flexbox example"></p>
</section>

<aside>
    <h4>Citations:</h4>
    <ol>
        <li>Aderinokun, Ire. “6 Reasons to Start Using Flexbox.” Bitsofcode, Bitsofcode, 25 Feb. 2016, bitsofco.de/6-reasons-to-start-using-flexbox/.</li>
        <li>Vandehey, Scott. “What IS Flexbox?” Space Ninja, Space Ninja, 18 Sept. 2018, spaceninja.com/2015/08/24/what-is-flexbox/.</li>
    </ol>
    <h4>Resources:</h4>
    <ol>
        <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">CSS Tricks: Learn more about Flexbox</a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">Developer.Mozilla</a></li>
        <li><a href="http://flexboxfroggy.com/" target="_blank">Flexbox Froggy: Learn by playing!</a></li>
    </ol>

</aside>
<?php include 'includes/footer.php' ?>