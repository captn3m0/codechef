---
{"category_name":"easy","problem_code":"LIGHTHSE","problem_name":"Lighthouses","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"eartemov","problem_tester":"kevinsogo","date_added":"23-07-2015","tags":{"0":"ad","1":"eartemov","2":"easy","3":"sept15"},"editorial_url":"http://discuss.codechef.com/problems/LIGHTHSE","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/LIGHTHSE.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/LIGHTHSE.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>There are <b>N</b> islands in the sea, enumerated from <b>1</b> to <b>N</b>. Each of them is so small that we can consider them as points on a plane. You are given the Cartesian coordinates of all islands. X-axis is directed towards East and Y-axis is directed towards North.</p>
<p>You need to illuminate all the islands. To do this, you can place lighthouses on some of the islands. You can't place more than one lighthouse on any single island. Each lighthouse can light only one of the 4 quadrants: North-Western, North-Eastern, South-Western or South-Eastern. If some island is located on the border of an illuminated quadrant, it is considered to be illuminated as well. Note that this means that a lighthouse always illuminates it's own island as well.</p>
<p>Find the smallest possible number of lighthouses required to illuminate all the islands (say <b>L</b>). Describe their configurations — positions and quadrants illuminated — as well.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of islands.</p>
<p>The <b>i<sup>th</sup></b> of the following <b>N</b> lines contains two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> denoting the coordinates of the <b>i<sup>th</sup></b> island.</p>
<h3>Output</h3>
<p>For each test case, first line of output must contain minimum number of lighthouses required to illuminate all islands, <b>L</b>.</p>
<p>Following <b>L</b> lines must describe configuration of the lighthouses, one configuration per line. Description of a lighthouse configuration consists of the number of the island where the lighthouse is placed, and the direction of the quadrant (NW for North-Western, NE for North-Eastern, SW for South-Western, SE for South-Eastern) illuminated by it, separated by a single space.</p>
<p>If there are many possible placements, output any one of them.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li>The sum of <b>N</b> over all test cases doesn't exceed <b>5*10<sup>5</sup></b></li>
<li>Absolute value of each coordinate doesn't exceed <b>10<sup>9</sup></b></li>
<li>No two given islands coincide.</li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask 1: (15 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>8</b></li>
<li>Absolute value of each coordinate doesn't exceed <b>50</b></li>
</ul>

<p><b>Subtask 2: (85 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
0 0
1 0
2 0
0 -1
0 -2
4
5 0
-5 0
0 5
0 -5

<b>Output:</b>
1
3 SW
2
4 NE
2 NE

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Also we can place lighthouse on <b>1<sup>st</sup></b> or <b>5<sup>th</sup></b> island.</p>
<p><b>Example case 2.</b> Notice that some islands can be illuminated by more than 1 lighthouse.</p>
