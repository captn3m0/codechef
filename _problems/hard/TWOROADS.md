---
{"category_name":"hard","problem_code":"TWOROADS","problem_name":"Two Roads","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"xcwgf666","date_added":"1-08-2013","tags":{"0":"discretization","1":"geometry","2":"hard","3":"sept13","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TWOROADS","time":{"view_start_date":1379323800,"submit_start_date":1379323800,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>Byteland is notorious for its poor transportation system. There are <b>N</b> villages located far away from each other. So the only way of going from one village to another is using the narrow pathways. But now it's time to make some changes. People in Byteland are going to improve the transportation system in their own way. They have planned to build two straight roads. These roads will not necessary connect any cities but they should decrease the time of traveling between some cities. People can use a pathway to go from one city to the nearest point on the road. Then they can move [along the road] to the point of the road that is the nearest to their destination. And finally, they can use another pathway to move from that point to the destination.</p>
<p>
Let <b>d</b> be the distance from the city to the closest point that belongs to one of the roads, then the sadness of that city will be equal to <b>d<sup>2</sup></b>. The sadness of the whole country is the average of the sadness of all cities. Can you help Byteland to find the plan that will minimize the sadness of the country? You can assume that:</p>
<ul>
<li>The cities are considered to be points on the plane and the roads are considered to be line segments.</li>
<li>A road can have arbitrary length if that reduces the sadness of the country.</li>
<li>The two roads may have a common point.</li>
<li>A road can go through some cities (so the distance from these cities to the road is 0).</li>
<li>No 3 or more cities lie on the same line.</li>
</ul>

<h3>Input</h3>
<p>The first line contains an integer <b>N</b>. The next <b>N</b> lines give co-ordinates of the <b>N</b> cities. The <b>i</b>-th line contains two real numbers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> that give co-ordinates of the <b>i</b>-th city.</p>
<h3>Output</h3>
<p>
Print out the minimum sadness of the country with absolute error less than <b>10<sup>-6</sup></b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>0.0</b> ≤ <b>x<sub> i </sub> </b>, <b>y<sub> i </sub> </b> ≤ <b>1000.0</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1
2 2
10 0
20 0

<b>Output:</b>
0
</pre><h3>Explanation</h3>
<p>The first road goes through the first two cities and the second road goes through the last two cities.</p>
