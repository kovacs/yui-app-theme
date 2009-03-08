<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>YUI App Theme</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
    <link rel="stylesheet" href="css/yuiapp.css" type="text/css">
    <script src="http://yui.yahooapis.com/3.0.0pr2/build/yui/yui-min.js" type="text/javascript"></script>
    <script src="js/yuiapp.js" type="text/javascript"></script>
</head>
<body>
    <div id="doc3" class="yui-t6">

        <div id="hd">
            <h1>YUI App Theme</h1>
            <div id="navigation">
                <ul id="primary-navigation">
                    <li><a href="#">Some Page</a></li>
                    <li class="active"><a href="#">Active</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>
                </ul>

                <ul id="user-navigation">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>

        <div id="bd">
            <div id="yui-main">
                <div class="yui-b"><div class="yui-g">
                    <h2>Hello, there.</h2>
                    <p>YUI App Theme is a generic, skinnable layout for web applications.</p>
                    <p>What you're looking at is the basic page template. Because it's built on top of the <a href="http://developer.yahoo.com/yui/grids/">YUI Grids</a> foundation, you can easily change the page and column widths or even swap the columns around to suit your needs. Not only is it cross-browser compatible (we support all the major browsers including IE6), but it's super easy to extend as well.</p>
                    <p>It's particularly well suited for admin areas.  You'll find most of the standard UI elements are styled and ready for you to use: blocks, tabbed modules, tables, lists, one and two column forms, etc. Just explore the page to see what's available. Pay particular attention to the theme and layout panels on the side. They'll let you preview alternate layouts and color schemes with one click.</p>
                    <p>Enjoy!</p>

                    <!-- Basic block -->
                    <div class="block">
                        <div class="hd">
                            <h2>Basic Block &larr; This can be an H2 or H3</h2>
                        </div>
                        <div class="bd">
                            <h2>Some H2 Text</h2>
                            <h3>Some H3 Text</h3>
                            <p>So this is a basic block module. It allows you to define a header using either an &lt;h2&gt; or &lt;h3&gt; tag. It can live in the main body column (here) or in the side bar to the right. It will automatically expand/shrink/do-the-right-thing where ever you put it &mdash; without requiring any markup changes.</p>
                            <p>Lorem ipsum dolor sit amet, <strong>some bold text</strong> <em>followed by some italic text</em> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <span class="highlight">Highlighted text goes here</span>, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p class="small">small text</p>
                            <p class="gray">gray text</p>
                            <hr>
                            <p>Don't miss the &lt;hr&gt; here &uarr;</p>
                        </div>
                    </div>

                    <!-- Basic block with tabs -->
                    <div class="block tabs">
                        <div class="hd">
                            <h2>Fake Header For SEO Purposes</h2>
                            <ul>
                                <li class="active"><a href="#">Tabs</a></li>
                                <li><a href="#">Are</a></li>
                                <li><a href="#">Freaking</a></li>
                                <li><a href="#">Awesome</a></li>
                                <li><a href="#">Tab 5</a></li>
                                <li><a href="#">Tab 6</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="bd">
                            <h3>Tab Example</h3>
                            <p>The tabs at the top of this block are made using an &lt;ul&gt; &mdash; they're super-useful for sub-navigation elements. If you look at the source, you'll also notice that right above them is an &lt;h2&gt; tag which is hidden from view. This lets you define a header for <abbr title="Search Engine Optimization">SEO</abbr> purposes without affecting your layout.</p>
                            <p>You can set the active tab by simply applying <code>class="active"</code> to the appropriate &lt;li&gt;.</p>
                        </div>
                    </div>

                    <!-- Basic block with spaced tabs -->
                    <div class="block tabs spaces">
                        <div class="hd">
                            <ul>
                                <li class="active"><a href="#">Tabs</a></li>
                                <li><a href="#">With</a></li>
                                <li><a href="#">Space</a></li>
                                <li><a href="#">Between</a></li>
                                <li><a href="#">Them</a></li>
                                <!-- <li><a href="#">(a really big tab that goes on far too long to show how they expand)</a></li> -->
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="bd">
                            <h3>Tab Example with Spaces</h3>
                            <p>These tabs use the <span class="highlight">exact same markup</span> as the previous example with an extra <code>spaces</code> class added to the containing block.</p>
                        </div>
                    </div>

                    <!-- Tables -->
                    <div class="block">
                        <div class="hd">
                            <h2>Table Example</h2>
                        </div>
                        <div class="bd">
                            <h3>Tables</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" name="" value="" id=""></td>
                                        <td>ID</td>
                                        <td><a href="#">Login</a></td>
                                        <td><a href="#">First Name</a></td>
                                        <td><a href="#">Last Name</a></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="" value="" id=""></td>
                                        <td>1</td>
                                        <td>susan</td>
                                        <td>Susan</td>
                                        <td>Delgado</td>
                                        <td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" value="" id=""></td>
                                        <td>2</td>
                                        <td>eddie</td>
                                        <td>Edward</td>
                                        <td>Dean</td>
                                        <td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" value="" id=""></td>
                                        <td>1</td>
                                        <td>jake</td>
                                        <td>John</td>
                                        <td>Chambers</td>
                                        <td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="" value="" id=""></td>
                                        <td>1</td>
                                        <td>calvin</td>
                                        <td>Calvin</td>
                                        <td>Tower</td>
                                        <td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="pager">
                                <li><a href="#">&#171; Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">11</a></li>
                                <li><a href="#">12</a></li>
                                <li><a href="#">Next &#187;</a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Forms -->
                    <div class="block">
                        <div class="hd">
                            <h2>Single Column Form Example</h2>
                        </div>
                        <div class="bd">
                            <h3>Attractive Looking Forms</h3>
                            <form>
                                <p><label for="">Text field</label>
                                    <input type="text" class="text" name="" value="" id="">
                                    <span class="info">Ex: some text</span>
                                </p>
                                <p><label for="">Title <span class="validation">must be awesome</span></label>
                                    <input type="text" class="text" name="" value="Dude, it's like totally awesome." id="">
                                    <span class="info">Ex: some more text</span>
                                </p>
                                <p><label for="">Text area</label>
                                    <textarea class="text" name="" id=""></textarea>
                                    <span class="info">Lots of text can go in here</span>
                                </p>
                                <p><input type="submit" name="" value="Submit" id=""> or <a href="#">Cancel</a></p>
                            </form>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="block">
                        <div class="hd">
                            <h2>Message Style Examples</h2>
                        </div>
                        <div class="bd">
                            <h3>Messages</h3>
                            <p>Notifying the user of a error, warning, or just a notice is easy with these simple alert boxes.</p>
                            <p class="alert error">Error message</p>
                            <p class="alert warning">Warning message</p>
                            <p class="alert notice">Notice message</p>
                        </div>
                    </div>

                    <!-- Two column forms -->
                    <div class="block">
                        <div class="hd">
                            <h2>Two Column Form Example</h2>
                        </div>
                        <div class="bd">
                            <h3>2 Column Forms</h3>
                            <form>
                                <div class="column left">
                                    <p><label for="">Text field</label>
                                        <input type="text" class="text" name="" value="" id="">
                                        <span class="info">Ex: some text</span>
                                    </p>
                                    <p><label for="">Title <span class="validation">must be awesome</span></label>
                                        <input type="text" class="text" name="" value="Dude, it's like totally awesome." id="">
                                        <span class="info">Ex: some more text</span>
                                    </p>
                                    <p><label for="">Text area</label>
                                        <textarea class="text" name="" id=""></textarea>
                                        <span class="info">Lots of text can go in here</span>
                                    </p>
                                </div>
                                <div class="column right">
                                    <p>I bet you thought two column forms would be difficult, eh? <span class="highlight">Don't worry</span>. We've got you covered.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="clear"></div>
                                <p><input type="submit" name="" value="Submit" id=""> or <a href="#">Cancel</a></p>
                            </form>
                        </div>
                    </div>

                    <!-- Lists -->
                    <div class="block">
                        <div class="hd">
                            <h2>Lists! Lists!</h2>
                        </div>
                        <div class="bd">
                            <h3>Get your lists here!</h3>
                            <p>Unordered List</p>
                            <ul class="list">
                                <li>Apple</li>
                                <li>Pear</li>
                                <li>Orange</li>
                            </ul>

                            <p>Ordered List</p>
                            <ol class="list">
                                <li>Mars</li>
                                <li>Jupiter</li>
                                <li>Venus</li>
                            </ol>

                            <p>Dictionary List</p>
                            <dl class="list">
                                <dt>Hollywood</dt>
                                <dd>Academy Awards</dd>
                                <dt>Television</dt>
                                <dd>Emmys</dd>
                                <dt>Broadway</dt>
                                <dd>Tonys</dd>
                            </dl>
                        </div>
                    </div>

                </div></div>
            </div>
            <div id="sidebar" class="yui-b">

                <div class="block">
                    <div class="hd">
                        <h2>Sidebar Block  &larr; This is an H2 or H3</h2>
                    </div>
                    <div class="bd">
                        <p>This sidebar block uses the exact same markup as the main body blocks. This lets you move them around easily - as they automatically resize to fit the available space.</p>
                    </div>
                </div>

                <div class="block">
                    <div class="hd">
                        <h2>Adjust Layout</h2>
                    </div>
                    <div class="bd">
                        <h3>Page Width</h3>
                        <ul id="page-width-switcher" class="biglist">
                            <li><a href="#" title="doc">750px centered</a></li>
                            <li><a href="#" title="doc2">950px centered</a></li>
                            <li><a href="#" title="doc4">974px fluid</a></li>
                            <li><a href="#" title="doc3" class="highlight">100% fluid</a></li>
                        </ul>

                        <h3>Layout</h3>
                        <ul id="page-layout-switcher" class="biglist">
                            <li><a href="#" title="yui-t1">Left sidebar, 160px</a></li>
                            <li><a href="#" title="yui-t2">Left sidebar, 180px</a></li>
                            <li><a href="#" title="yui-t3">Left sidebar, 300px</a></li>
                            <li><a href="#" title="yui-t4">Right sidebar, 180px</a></li>
                            <li><a href="#" title="yui-t5">Right sidebar, 240px</a></li>
                            <li><a href="#" title="yui-t6" class="highlight">Right sidebar, 300px</a></li>
                            <li><a href="#" title="yui-t0">Single Column</a></li>
                        </ul>
                    </div>
                </div>

                <div class="block">
                    <div class="bd">
                        <h2>About yui-app-theme</h2>
                        <p>This project is based on the great idea and design work done by the <a href="http://github.com/pilu/web-app-theme/tree/master">web-app-theme</a> project on GitHub.</p>
                        <p>We loved the concept and simplicity of their web app template but needed it to be built with <a href="http://developer.yahoo.com/yui/">YUI</a> instead. So we decided to re-implement it ourselves.</p>
                        <p>The result is a clean, semantically structured layout built using <a href="http://developer.yahoo.com/yui/grids/">YUI Grids</a>. We hope you find it useful.</p>
                    </div>
                </div>

            </div>
        </div>

        <div id="ft">
            <p class="inner">Copyright &copy; 2009 Blah Your Website</p>
        </div>

    </div>
</body>
</html>
