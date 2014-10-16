<?php

    $projectName    =   "Facade";
    $title          =   "Facade: a browser window mockup in HTML & CSS";
    $description    =   "A browser window mockup in HTML & CSS";

    $css[]  =   "http://www.pascalculator.be/projects/css/normalize.css";
    $css[]  =   "http://www.pascalculator.be/projects/css/global.css";
    $css[]  =   "http://facade.pascalculator.be/css/facade.css";

?>

<?php include_once( '/home/pascaje3/domains/pascalculator.be/public_html/projects/header.php') ?>

    <header class="group">
        
        <h1>Facade</h1>

        <ul>
            <li><a href="https://github.com/pascalculator/facade/">Fork on GitHub</a></li>
            <li><a href="http://facade.pascalculator.be/css/facade.css">Download v0.1</a></li>
        </ul>

    </header>
    	

        <section class="body">

        <p>Facade is a lightweight browser window mockup in HTML & CSS. Here's an example:</p>

		<section class="facade-minimal" data-url="http://facade.pascalculator.be/">

    		<h1>No more Photoshop.</h1>
            <p>No more taking screenhots and trying to make them fit inside a layer that almost has the right dimensions, but not quite. Cut the crap and create your mockups straight in your HTML.</p>


            <h1>It's fluid.</h1>
            <p>Facade doesn't scale like a plain old responsive image, it adapts, just like a normal browser window would. If you're a bit like me, you're the kind of person that constantly resizes the browser window to see if something is responsive. Don't worry, it's been taken care of. Kick the tires a bit and drag that window. You know you want it!</p>

            <h1>Tiny, simple and clean.</h1>
            <p>Based on the beautiful minimal browser mockup done by <a href="http://www.jacobsawensten.com/">Jacob Säwensten</a>. One CSS file and one class name and you're good to go. Take a look at the <a href="#documentation">documentation</a>. Easy peasy.</p>

    	</section>

    		<h1 id="documentation">Documentation</h1>

    		<ul>
    			<li>Add <a href="http://facade.pascalculator.be/css/facade.css">facade.css</a> to you stylesheets</li>
    			<li>Create a block element, like a <code>&lt;div&gt;</code> or a <code>&lt;section&gt;</code>.</li>
    			<li>Slap the <code>facade-minimal</code> class on there</li>
    			<li>Add a <code>data-url</code> attribute and fill in your juicy mockup url</li>
                <li>Put your mockup content inside the element</li>
    			<li>Kick back and relax</li>
    		</ul>

            <p>Here's an example of the code:</p>
<pre>&lt;link rel="stylesheet" href="css/facade.css"&gt;
...
&lt;section class="facade-minimal" data-url="http://www.bowie-to-bowie.io"&gt; 
    &lt;h1&gt;Ground control to Major Tom...&lt;/h1&gt;
&lt;/section&gt;</pre>
                    <p>which will result into:</p>

                    <section class="facade-minimal" data-url="http://www.bowie-to-bowie.io" id="example">
                        <h1>Ground control to Major Tom...</h1>
                    </section>
                </p>
    		
    		<h1>Browser support</h1>

    		<ul>
    			<li>Chrome &gt;&equals; 27</li>
    			<li>FireFox &gt;&equals; 30</li>
    			<li>Internet Explorer &gt;&equals; 9</li>
    			<li>Safari &gt;&equals; 5.1</li>
    		</ul>

    		<h1>Known issues</h1>
    		<ul>
    			<li>Left ellipsis truncate of URL doesn't work properly in Chrome due to a bug in Chrome.</li>
    		</ul>

    		<h1>About</h1>
    		<p></p>
            <p>If you were wondering why the heck anyone would ever need this, it was made because of some poor decisions I made when writing a PHP course - which you can <a href="https://github.com/pascalculator/web-backend">download for free on Github</a> (if you speak Dutch, that is). I quickly got fed up with making screenshots of how the output HTML should look like or updating them every time something changed.</p>

            <section class="image-container">
                <figure>
                     <img src="http://facade.pascalculator.be/img/example-of-output-screenshot.png" alt="Example of difficult to maintain screenshot of exercise output">
                    <figcaption>Before: screenshot of output. Difficult to update.</figcaption>
                </figure>
                       
                <figure>
                    <div class="facade-minimal example-21" data-url="http://www.app.local/registration-form.php">
                        <style>
                            .example-21
                            {
                                max-width:388px;
                                text-align:left;
                            }
                            .example-21 ul
                            {
                                list-style-type:none;
                                padding:0;
                            }
                            .example-21 li
                            {
                                margin-bottom:8px;
                            }
                            .example-21 label
                            {
                                display:block;
                            }
                            .example-21 input
                            {
                                padding:4px;
                            }
                        </style>
                        <h1>PHP Excercise 020 - Part 1</h1>
                        <h2>Registration form</h2>
                        <form>
                            <ul>
                                <li>
                                    <label for="email">e-mail</label>
                                    <input type="text" id="email" placeholder="Fill in your e-mail">
                                </li>
                                <li>
                                    <label for="nickname">nickname</label>
                                    <input type="text" id="nickname" placeholder="Fill in your nickname">
                                </li>
                            </ul>
                            <input type="submit">
                        </form>
                    </div>
                    <figcaption>After: Using Facade to show output. Superflexible.</figcaption>
                </figure>
            </section>

            <p>Since the output always was HTML-code I decided to create a little CSS framework that makes an element look like a browser window. That way I could show what the output should look like instead of having to take screenshots of the HTML. In the end I got a bit carried away and made this entirely in CSS, but it was a fun exercise and I like the fact that this is just one css-file (and admittedly some SVG wizardry) and one class. It's amazing what you can do with <code>::before</code> and <code>::after</code> elements. They've become my favorite CSS tools!</p>    

<?php include_once( '/home/pascaje3/domains/pascalculator.be/public_html/projects/footer.php') ?>