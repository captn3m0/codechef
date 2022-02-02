---
{"category_name":"hard","problem_code":"ALLPOLY","problem_name":"Defend the Recipe","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"mugurelionut","date_added":"22-06-2016","tags":{"0":"hard","1":"july16","2":"kernel","3":"kevinsogo"},"editorial_url":"http://discuss.codechef.com/problems/ALLPOLY","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/ALLPOLY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/ALLPOLY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/ALLPOLY.pdf">Vietnamese</a> as well.</h3>
<p>Chef holds all his secret recipes inside his house. For this reason, Chef's house is closed off by walls, thus it is very secure. You can think of the walls as a <b>simple polygon</b> in the 2D plane, and you can consider the thickness of the walls to be negligible, i.e., <b>0</b>.</p>
<p>Unfortunately, bad guys plan to steal his recipes. To do so, they plan to send a single agent to parachute in a uniformly-chosen random point in the region  <b>[-10<sup>7</sup>,10<sup>7</sup>] × [-10<sup>7</sup>,10<sup>7</sup>]</b>. (This point need not be a lattice point.) Once the agent parachutes down that point, he then deploys in his exact location a special weapon called the <b>pulverizer</b>, which is designed to destroy walls. The pulverizer works by firing a laser that rotates 360 degrees clockwise, initially pointing north. This laser beam completely destroys the part of the wall it hits.</p>
<p>Once the walls are destroyed, the rest of the bad guys can now attack the house more easily.</p>
<p>Unfortunately, it's not guaranteed that the pulverizer will be able to destroy every bit of the wall. This is because the laser can only hit (and destroy) the first wall it hits, so if there's another part of the wall behind it, that part cannot be destroyed.</p>
<p>We will call the plan <b>successful</b> if all parts of the wall are destroyed. The following image illustrates it more clearly:</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/upload/JULY16/allpoly.png" width="100%" /></p>
<p>In this example, only the first image demonstrates a successful plan.</p>
<p>As head of security of Chef's house, can you determine the probability of a successful plan?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b>. The next <b>N</b> lines describe the wall. More precisely, the <b>i<sup>th</sup></b> line contains two integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> denoting that <b>(x<sub>i</sub>, y<sub>i</sub>)</b> is the <b>i<sup>th</sup></b> vertex of the polygon. The points are given in clockwise order around the boundary.</p>
<h3>Output</h3>
<p>For each test case, output a single real number denoting the probability of a successful plan by the bad guys. Your answer is considered correct if it is within an absolute error of <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>|x<sub>i</sub>|</b>, <b>|y<sub>i</sub>|</b> ≤ <b>10<sup>7</sup></b></li>
<li>The points are given in clockwise order.</li>
<li>The polygon is simple and has positive area, though some angles may be 180 degrees.</li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1: (30 points)</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>40000</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>12</b></li>
<li>The sum of the <b>N</b>s in a single test file is ≤ <b>100000</b></li>
<p>
<b>Subtask #2: (70 points)</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li>The sum of the <b>N</b>s in a single test file is ≤ <b>520000</b></li>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5
10000000 -10000000
-10000000 -10000000
-10000000 10000000
10000000 10000000
0 0
6
700000 400000
300000 0
700000 -400000
-700000 -400000
-300000 0
-700000 400000
</tt>

<b>Output:</b>
<tt>0.25
0.00045</tt>
</pre><h3>Explanation</h3>
<p>The second example is depicted by the image above.</p>
