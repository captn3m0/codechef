---
{"category_name":"medium","problem_code":"TRIQUERY","problem_name":"Triangular Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"laycurse","date_added":"4-11-2012","tags":{"0":"feb13","1":"line","2":"medium","3":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/TRIQUERY","time":{"view_start_date":1360583744,"submit_start_date":1360583744,"visible_start_date":1360582602,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
You are given <b>N</b> lattice points <b>(X<sub>i</sub>, Y<sub>i</sub>), i = 1, 2, ..., N</b> on a 2D Coordinate System.<br />
You have to process <b>Q</b> queries, each query will be given as the form <b>"x y d"</b>.<br />
Let <b>ABC</b> be the triangle having vertices at <b>A(x+d, y)</b>, <b>B(x, y)</b> and <b>C(x, y+d)</b>.<br />
For each query, you have to find how many of the given lattice points lie inside or on the boundary of the triangle <b>ABC</b>.</p>
<h3>Input</h3>
<p>
The first line of the input contains two space-sparated integers <b>N</b> and <b>Q</b>.<br />
Each of the following <b>N</b> lines have two space-sparated integers <b>X<sub>i</sub>, Y<sub>i</sub></b> giving the x and y coordinate of a lattice point.<br />
Then the following <b>Q</b> lines contain three space-sparated integers <b>x, y, d</b> giving a query.</p>
<h3>Output</h3>
<p>
For each query, output one integer on a line which denotes the number of the given lattice points which lie inside or on the boundary of the triangle.</p>
<h3>Constraints</h3>
<p>
<b>1 ≤ N ≤ 300000 (3 * 10<sup>5</sup>)</b><br /><b>1 ≤ Q ≤ 200000 (2 * 10<sup>5</sup>)</b><br /><b>1 ≤ X<sub>i</sub>, Y<sub>i</sub> ≤ 300000 (3 * 10<sup>5</sup>)</b><br /><b>1 ≤ x, y, d ≤ 300000 (3 * 10<sup>5</sup>)</b><br /></p>
<h3>Sample</h3>
<pre>
<b>Input 1:</b>
5 3
1 3
1 5
3 6
4 4
2 6
1 5 3
1 5 4
1 1 1

<b>Output 1:</b>
3
3
0

<b>Input 2:</b>
2 2
1 5
3 7
2 5 6
2 3 4
 
<b>Output 2:</b>
1
0

</pre>