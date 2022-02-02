---
{"category_name":"easy","problem_code":"CRAWA","problem_name":"The Leaking Robot","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":null,"date_added":"25-04-2014","tags":{"0":"ad","1":"aug14","2":"easy","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/CRAWA","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/CRAWA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/CRAWA.pdf">Russian</a>.</h3>
<p>
Oh no! Chef’s robot from problem "Reach The Point" (<a href="http://www.codechef.com/JULY14/problems/RETPO">RETPO</a>) has broken up.<br />
It's old oil tank has got leaked, it is leaking oil now.
</p>
<p>
The robot start doing the following weird moves. While moving it keeps leaving a trace of oil on the path it's been tracing.
</p>
<p>Note that in a single step robot will move by one unit in the current direction it is moving.</p>
<p><ul>
<li>Initially the robot is at position <b>(0, 0)</b>.</li>
<li>In the beginning it goes <b>1</b> step to the East (i.e. In a single step, its x coordinate will increase by 1 unit.)  </li>
<li>then <b>2</b> steps to the North, (i.e. In a single step, its y coordinate will increase by 1 unit.) </li>
<li>then <b>3</b> steps to the West, (i.e. In a single step, its x coordinate will decrease by 1 unit.)</li>
<li>then <b>4</b> steps to the South, (i.e. In a single step, its y coordinate will decrease by 1 unit.)</li>
<li>then <b>5</b> steps to the East, </li>
<li> and so on.
</li>
</ul>
</p>
<p>
Thus each time the robot turns <b>90</b> degrees anti clockwise, and it will go one more step than before. Please view the following image to<br />
understand the moves. The red line in the example shows the path traced by the robot having traces of oil on it.
</p>
<p>
<img src="/download/extimages/710d177e399e290360c2909ce910794f.jpg" />
</p>
<p>
Now chef wants to know whether the point <b>(X, Y)</b> will have traces of oil on it or not. 
</p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>
For each test case, there is a single line containing two space-separated integers <b>X</b> and <b>Y</b>.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing “YES” (without quotes) if robot will reach point <b>(X, Y)</b> and “NO” otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100000 = 10<sup>5</sup></b></li>
<li><b>-1000000000 ≤ X, Y ≤ 1000000000</b>, i.e., <b>-10<sup>9</sup> ≤ X, Y ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
3 5
0 0

<b>Output:</b>
YES
NO
YES

</pre><p>
<b> Explanation </b></p>
<p>
The points <b>(0, 0)</b> and <b>(3, 3)</b> will be having trace of oil while point <b>(3, 5)</b> will not have any trace of oil because point <b>(3, 5)</b> does not lie on the trajectory of robot.
</p>
