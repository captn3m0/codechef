---
{"category_name":"hard","problem_code":"BESTTRI","problem_name":"Best Triangle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mnbvmar","date_added":"18-03-2017","tags":{"0":"cook81","1":"geometry","2":"kingofnumbers","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/BESTTRI","time":{"view_start_date":1492972200,"submit_start_date":1492972200,"visible_start_date":1492972200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/mandarin/BESTTRI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/russian/BESTTRI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/vietnamese/BESTTRI.pdf">Vietnamese</a> as well.</h3>


<p>
Given <b>N</b> points on a 2D plane and an integer <b>K</b>, choose 3 distinct points so that the area of the triangle whose vertices are the chosen points does not exceed <b>K</b>/2. If there are multiple such triangles, among all possible triangles choose the one which has maximum area.
</p>


<h3>Input</h3>
<p>First line contains two integers <b>N</b> and <b>K</b>.</p>

<p>
Each of the next <b>N</b> lines contains two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>, denoting the coordinates of the i-th point.</p>

<h3>Output</h3>
<p>Output a single integer, the maximum area of a triangle which does not exceed <b>K</b>/2,  multiplied by 2. If there's no valid triangle output -1 instead.</p>

<h3>Constraints</h3>
<ul>
<li>3 ≤ <b>N</b> ≤ 3000</li>
<li>1 ≤ <b>K</b> ≤ 10<sup>18</sup></li>
<li>1 ≤ <b>X<sub>i</sub></b>,<b>Y<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>No two points will have same coordinates</li>
<li>No three points will be collinear</li>

</ul>
<p> </p>
<h3>Example 1</h3>
<pre><b>Input:</b>
4 7
1 1
5 1
3 3
3 2


<b>Output:</b>
4
</pre>

<h3>Example 2</h3>
<pre><b>Input:</b>
3 7
1 1
4 1
1 4


<b>Output:</b>
-1
</pre>

<h3>Example 3</h3>
<pre><b>Input:</b>
7 1234567890123
1234567 7654321
1111111 2222222
1212121 2323232
3333333 1122334
9292929 2929292
1234456 5654645
5435733 2342134


<b>Output:</b>
755024295480
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There are 4 triangles in total, and their areas are: 1, 1, 2 and 4. The ones which does not exceed 7/2 are 1, 1 and 2 so the biggest area is 2, and since we are required to multiply the area by 2 before outputting it, it becomes 4.</p>

<p><b>Example case 2.</b> The only triangle has an area equal to 9/2, which is more than 7/2. So the answer is -1.</p>