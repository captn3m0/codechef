---
{"category_name":"medium","problem_code":"TAACUTE","problem_name":"Counting The Acute Triangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"keshav_57","date_added":"16-07-2013","tags":{"0":"cook36","1":"easy","2":"geometry","3":"sorting","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAACUTE","time":{"view_start_date":1374431400,"submit_start_date":1374431400,"visible_start_date":1374431400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A triangle is <b>acute</b> if all its internal angles are acute (&lt; 90<sup>o</sup>). You are given a set of <b>N</b> points on a 2D plane. Calculate the number of acute triangles that can be formed using points from the set as vertices. </p>
<p>Two triangles are different if the set of three vertices of one triangle is not equal to the set of three vertices of the other triangle. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b>, the number of points in the set. Each of the next <b>N</b> lines contains two space separated integers which are the x and y coordinates of points in the set.</p>
<h3>Output</h3>
<p>Output a single line containing the number of acute triangles.</p>
<h3>Constraints</h3>
<ul>
<li> <b>3</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li> The <b>x</b>, <b>y</b> coordinate of each point satisfies <b>0</b> ≤ <b>x</b>, <b>y</b> ≤ <b>10,000</b> </li>
<li> All points are distinct. </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input1:</b>
3
0 0
2 2
0 3
<b>Output1:</b>
1

<b>Input2:</b>
3
0 0
2 2
0 5
<b>Output2:</b>
0

<b>Input3:</b>
4
1 1
3 2
1 3
3 4
<b>Output3:</b>
2
</pre><h3>Explanation</h3>
<p><b>Example case 3. </b>Two acute triangles are {(1, 1), (3, 2), (1, 3)} and {(3, 2), (1, 3), (3, 4)}</p>
