---
{"category_name":"easy","problem_code":"SEALUP","problem_name":"Sealing up","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"errichto","date_added":"10-01-2017","tags":{"0":"dynamic","1":"easy","2":"geometry","3":"ltime44","4":"xcwgf666"},"editorial_url":"https://discuss.codechef.com/problems/SEALUP","time":{"view_start_date":1485622800,"submit_start_date":1485622800,"visible_start_date":1485622800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/mandarin/SEALUP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/russian/SEALUP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/vietnamese/SEALUP.pdf">Vietnamese</a> as well.</h3>

<p>January and February are usually very cold in ChefLand. The temperature may reach -20 and even -30 degrees Celsius. Because of that, many people seal up windows in their houses.</p>

<p>Sergey also lives in ChefLand. He wants to seal the window in his house. The window has the shape of a  <a href="https://en.wikipedia.org/wiki/Convex_polygon"> simple convex polygon</a> with <b>N</b> vertices.</p>

<p>For the sealing, there are <b>M</b> kinds of sticky stripes, which are sold in the shops. The stripe of the <b>i</b><sup>th</sup> type has the length of <b>L<sub>i</sub></b> millimeters and the cost of <b>C<sub>i</sub></b> rubles.</p>

<p>The sealing process consists in picking the stripe and sticking it on the border of the window. The stripe can't be cut (it is made of very lasting material) and can only be put straight, without foldings. It is not necessary to put the strip strictly on the window border, it can possibly extend outside the border side of window too (by any possible amount). The window is considered sealed up if every point on its' border is covered with at least one stripe.</p>

<p>Now Sergey is curious about the stripes he needs to buy. He wonders about the cheapest cost, at which he can seal his window. Please help him.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains a single integer <b>N</b> denoting the number of number of vertices in the polygon denoting Sergey's window.</p>

<p>Each of the following <b>N</b> lines contains a pair of space-separated integer numbers <b>X<sub>i</sub> Y<sub>i</sub></b>, denoting the coordinates of the <b>i</b><sup>th</sup> points.</p>

<p>The following line contains a single integer <b>M</b> denoting the number of types of sticky stripe which is sold in the shop.</p>

<p>Each of the following <b>M</b> lines contains a pair of space-separated integers <b>L<sub>i</sub> C<sub>i</sub></b> denoting the length and the cost of the sticky stripe of the <b>i</b><sup>th</sup> type respectively.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimum cost of sealing up the window.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>The coordinates of the window are given either in clockwise or in a counter-clockwise order.</li>
<li>No three or more vertices lie on the same line (i.e. are collinear).</li>
<li><b>0</b> ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b>, <b>C<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (17 points):</b> <b>3</b> ≤ <b>N</b> ≤ <b>10</b>,  <b>M</b> = <b>1</b></li>
<li><b>Subtask #2 (24 points):</b> <b>3</b> ≤ <b>N</b> ≤ <b>42</b>, <b>M</b> ≤ <b>2</b></li>
<li><b>Subtask #3 (59 points):</b> <b>3</b> ≤ <b>N</b> ≤ <b>2000</b>, <b>1</b> ≤ <b>M</b> ≤ <b>10</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
4
0 0
1000 0
1000 2000
0 2000
2
1000 10
2000 15</tt>

<b>Output:</b>
<tt>50</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In this case, Sergey's window is a rectangle with the side lengths of <b>1000</b> and <b>2000</b>. There are two types of the sticky stripes in the shop - the one of the length 1000 with the cost of 10 rubles and with the length of 2000 and the cost of 15 rubles. The optimal solution would be to buy <b>2</b> stripes of the first type <b>2</b> stripes of the second type. The cost will be <b>2 × 15 + 2 × 10 = 50</b> rubles.</p>