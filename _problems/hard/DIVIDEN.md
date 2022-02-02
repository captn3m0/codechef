---
{"category_name":"hard","problem_code":"DIVIDEN","problem_name":"Divide or die","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"shiplu","date_added":"24-07-2014","tags":{"0":"angles","1":"binary","2":"dec14","3":"geometry","4":"medium","5":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/DIVIDEN","time":{"view_start_date":1418643354,"submit_start_date":1418643354,"visible_start_date":1418643000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/DIVIDEN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/DIVIDEN.pdf">Russian</a>.</h3>
<p><meta charset="utf8" /></p>
<p>Many of you know about a popular logic game called <a href="http://euclidthegame.com/">Euclid: The Game</a>. Everything was fine, but then the game came into the real world because of a horrible mistake of one of the players. Now the whole world is in danger! The world can be described as the Cartesian plane where each point has two real coordinates <b>x</b> and <b>y</b>. In order to save the world you are to complete the following task.</p>
<h3>Task</h3>
<p>Suppose you are given an angle which measures exactly <b>N</b> degrees, where <b>N</b> is an integer with 0 &lt; <b>N</b> &lt; 360.</p>
<p>You are to answer the question: is it possible to construct, <a target="_blank" href="http://en.wikipedia.org/wiki/Compass-and-straightedge_construction">using only a straightedge and compass</a>, <b>N-1</b> rays which divide this angle into <b>N</b> equal angles of size 1 degree?</p>
<p>If the answer is <b>YES</b>, you must demonstrate this by listing the steps you would take to generate these rays.</p>
<h3>Instructions</h3>
<p>You will be given three points: <b>V</b>, <b>R<sub>1</sub></b>, and <b>R<sub>2</sub></b>. The angle you are to consider is the clockwise angle from the ray <b>VR<sub>1</sub></b> to the ray <b>VR<sub>2</sub></b>. This angle, in degrees, will always be an integer <b>N</b> with 0 &lt; <b>N</b> &lt; 360.</p>
<p>If the above construction is possible, you are able to perform two types of operations:</p>
<ol>
<li>Construct a line that connects two known points <b>A</b> and <b>B</b>.</li>
<li>Construct a circle with center at a known point <b>C</b>, and radius equal to the distance between two known points <b>A</b> and <b>B</b>.</li>
</ol>

<p>A point <b>P</b> is called <em>known</em> if it satisfies one of these two statements:</p>
<ul>
<li><b>P</b> is equal to one of <b>V</b>, <b>R<sub>1</sub></b>, or <b>R<sub>2</sub></b>.</li>
<li><b>P</b> is one of the points of intersection of any lines or circles constructed in previous steps.</li>
</ul>

<p>The construction is complete once you have found <b>N-1</b> known points: <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, ..., <b>D<sub>N-1</sub></b>, such that the rays <b>VD<sub>1</sub></b>, <b>VD<sub>2</sub></b>, ..., <b>VD<sub>N-1</sub></b>, divide the given angle into <b>N</b> equal angles of size 1 degree.</p>
<h3>Input</h3>
<p>The first line of the input files contains two space-separated real numbers with precision at least 1e-6: the <b>x</b> and <b>y</b> coordinates of <b>V</b>. The second and third lines contain the coordinates of <b>R<sub>1</sub></b> and <b>R<sub>2</sub></b> similarly.</p>
<h3>Output</h3>
<p>The first line of the output should contain a single word: <b>YES</b> or <b>NO</b> - whether it is theoretically possible to perform the construction described above with a straightedge and compass only.</p>
<p>If your answer is <b>NO</b>, do not output anything else.</p>
<p>If your answer is <b>YES</b>, the following lines should describe your operations, one per line, as follows.</p>
<p>If you want to construct a line between known points <b>A</b> and <b>B</b>, output the word <b>Line</b> followed by 4 space-separated numbers - the coordinates of <b>A</b>, followed by the coordinates of <b>B</b>. <b>A</b> and <b>B</b> must not be the same point.</p>
<p>If you want to construct a circle with center at the known point <b>C</b>, and radius equal to the distance between known points <b>A</b> and <b>B</b>, output the word <b>Circle</b> followed by 6 space-separated numbers - the coordinates of <b>C</b>, followed by the coordinates of <b>A</b> and <b>B</b>. <b>A</b> and <b>B</b> must not be the same point, but there are no such restrictions on <b>C</b>.</p>
<p>Once you have performed all necessary operations, output a single line with the word <b>Answer</b>. In each of the next <b>N-1</b> lines, output two space-separated numbers - the coordinates of <b>D<sub>1</sub></b>, <b>D<sub>2</sub></b>, ..., <b>D<sub>N-1</sub></b>, listed in clockwise order. Each of these must be known points.</p>
<h3>Constraints</h3>
<p>The absolute value of any coordinate given in the input does not exceed <b>1000</b>.</p>
<p>All input coordinates have a precision of at least <b>1e-6</b>. Prior to precision adjustments, the clockwise angle formed by the input points, in degrees, is guaranteed to be an integer <b>N</b> with 0 &lt; <b>N</b> &lt; 360.</p>
<p>All coordinates in the output are compared for equality with precision <b>1e-5</b>. This means that you can use point <b>H</b> as a known point if there is a true known point <b>K</b> with <b>|H<sub>x</sub>-K<sub>x</sub>|</b> and <b>|H<sub>y</sub>-K<sub>y</sub>|</b> no more than <b>1e-5</b> each.</p>
<p>Your solution must not output more than <b>1000</b> operations.</p>
<h3>Subtasks</h3>
<ul>
<b>Subtask #1 </b> [25 points]: <b>N</b> ≤ <b>4</b>
</ul>
<ul>
<b>Subtask #2</b> [75 points]: maximum constraints
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
-679.6073275406 -315.6362656580
-844.0655568007 -298.0169842162
-841.1364219780 -292.6039079355

<b>Output:</b>
YES
Line -679.6073275406 -315.6362656580 -844.0655568007 -298.0169842162
Line -679.6073275406 -315.6362656580 -841.1364219780 -292.6039079355
Circle -679.6073275406 -315.6362656580 -679.6073275406 -315.6362656580 -844.0655
568007 -298.0169842162
Line -679.6073275406 -315.6362656580 -841.1364219780 -292.6039079355
Line -844.0655568007 -298.0169842162 -843.3504692364 -292.2882079766
Circle -844.0655568007 -298.0169842162 -844.0655568007 -298.0169842162 -843.3504
692364 -292.2882079766
Circle -843.3504692364 -292.2882079766 -844.0655568007 -298.0169842162 -843.3504
692364 -292.2882079766
Line -848.6692787746 -294.5333120998 -838.7467472625 -295.7718800931
Answer
-843.7080130185 -295.1525960964</pre>
<p><em>There are other acceptable solutions.</em></p>
<p><em>The line breaks inside the second to last coordinates for each circle are for website display reasons only, and should not exist in your output.</em></p>
<h3>Explanation</h3>
<p>The measure of the given angle is 2 degrees. It is well known that we can bisect <em>any</em> angle with a compass and straightedge, so we can certainly do so for a 2 degree angle. This divides the angle into two 1-degree angles as required. The method presented is one way of doing so and looks like this:</p>
<p><img src="/download/extimages/18803cb00817e914893a22e99f054829.png" /></p>
