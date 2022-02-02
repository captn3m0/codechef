---
{"category_name":"hard","problem_code":"SEAARC","problem_name":"Sereja and Arcs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shiplu","date_added":"19-03-2014","tags":{"0":"combinatorics","1":"hard","2":"june14","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAARC","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/SEAARC1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/SEAARC1.pdf">Russian</a>.</h3>
<p>Sereja have <b>N</b> points, with coordinates <b>(1, 0), (2, 0), ..., (N, 0)</b>. Every point has a color, point with coordinate <b>(i, 0)</b> has color <b>A[i]</b>.</p>
<p>Sereja have painted arcs between every pair of points with same color. Formally Sereja painted arc between points <b>(i, 0)</b> and <b>(j, 0)</b> if <b>A[i] = A[j]</b> and <b>i != j</b>, such arc has color <b>A[i]</b>. All the arcs are painted such way that they will reside along the positive quadrant.</p>
<p>Now Sereja wants to know how many pairs of arc with different color intersect?</p>
<h3>Input</h3>
<p> First line contain integer <b>N</b>. Next line contain integers <b>A[1], A[2], ..., A[N]</b>.</p>
<h3>Output</h3>
<p> In single line output answer modulo <b>1000000007 (10^9 + 7)</b>. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 2 1 2

<b>Output:</b>
1
</pre>