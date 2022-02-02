---
{"category_name":"hard","problem_code":"CHEFPC","problem_name":"Polygon \u0026 Circles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"kevinsogo","date_added":"3-04-2015","tags":{"0":"furko","1":"greens","2":"hard","3":"march16"},"editorial_url":"http://discuss.codechef.com/problems/CHEFPC","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/CHEFPC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/CHEFPC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/CHEFPC.pdf">Vietnamese</a> as well.</h3>
<p>Chef recently fell in love with geometry problems. Today, his friend John asks him to help. John is a student of Kiev National University and he is currently studying a beautiful subject called "Analytic Geometry". This subject is well known for its hard problems. John asked the following question to Chef, but Chef could not solve it and asked your help in solving this.
</p>
<p>You are given a convex polygon and <b>M</b> circles in 2-D plane. Find out the area of the parts of polygon which are covered by some circle. In other words, you have to output area of parts which lie in the polygon and in at least one of the circles.</p>
<h3>Input</h3>
<ul>
<li>There is only one test case per test file.</li>
<li>The first line of test case contains a single integer <b>M</b> denoting number of circles.</li>
<li>Each of the next <b>M</b> lines contains three integers <b>x, y, r</b>, where <b>(x, y)</b> denotes the <b>x</b> and <b>y</b> coordinates respectively of the center of the circle and <b>r</b> denotes the radius of each circle.</li>
<li>Next line contains an integer <b>N</b> denoting number of vertices in given polygon.</li>
<li>Each of the next <b>N</b> lines contains two integer <b>x, y</b> denoting the coordinate of a vertex of polygon.</li>
</ul>
<h3>Output</h3>
<p>Output a single line denoting the answer of the problem. Your answer will be considered correct if it has an absolute error less than 10<sup>-2</sup>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>-10^4</b> ≤ <b>x[i],y[i]</b> ≤ <b>10^4</b></li>
<p> (coordinates of polygon)</p>
<li><b>1</b> ≤ <b>M</b> ≤ <b>50</b></li>
<li><b>-10^4</b> ≤ <b>x, y</b> ≤ <b>10^4</b></li>
<li><b>0</b> &lt; <b>r</b> ≤ <b>10^4</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [30 points]: 1 ≤ N, M ≤ 5</b></li>
<li><b>Subtask #2 [70 points]: 1 ≤ N, M ≤ 50</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
0 0 11
10 10 1
4
0 0
50 50
100 50
100 0

<b>Output:</b>
49.087385212341

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b>  Two circles that are not intersecting each other. </p>
