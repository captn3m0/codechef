---
{"category_name":"hard","problem_code":"DGCD","problem_name":"Dynamic GCD","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"laycurse","date_added":"4-12-2011","tags":{"0":"hard","1":"heavy","2":"july12","3":"number","4":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/DGCD","time":{"view_start_date":1342000242,"submit_start_date":1342000242,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You're given a <a href="http://en.wikipedia.org/wiki/Tree_%28graph_theory%29">tree</a> on <b>N</b> vertices. Each vertex has a positive integer written on it, number on the i<sup>th</sup> vertex being <b>v<sub>i</sub></b>. Your program must process two types of queries :

<p>
1. Find query represented by <b>F u v</b>   : Find out <a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">gcd</a> of all numbers on the unique path between vertices <b>u</b> and <b>v</b> in the tree (both inclusive).</br></br/>
2. Change query represented by <b>C u v d</b> : Add <b>d</b> to the number written on all vertices along the unique path between vertices <b>u</b> and <b>v</b> in the tree (both inclusive). 

<h3>Input</h3>
<p>First line of input contains an integer <b>N</b> denoting the size of the vertex set of the tree. Then follow <b>N - 1</b> lines, i<sup>th</sup> of which contains two integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> denoting an edge between vertices <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> in the tree. After this follow <b>N</b> space separated integers in a single line denoting initial values <b>v<sub>i</sub></b> at each of these nodes. Then follows a single integer <b>Q</b> on a line by itself, denoting the number of queries to follow. Then follow <b>Q</b> queries, each one on a line by itself. Each query is either a find query or a change query with format as given in problem statement. Note that all vertices are 0-based.

<h3>Output</h3>For every find query, print the answer to that query in one line by itself.

<h3>Example</h3>

<pre>
<b>Input:</b>
6
0 4
0 5
1 5
5 2
3 5
3 1 3 2 4 2
5
F 3 5
C 1 3 1
C 3 4 4
F 3 0
F 2 5

<b>Output:</b>
2
7
1
</pre>
<br/>
<h3>Constraints</h3>
1 <= <b>N</b> <= 50000<br/>
1 <= <b>Q</b> <= 50000<br/>
0 <= <b>u</b>, <b>v</b> <= <b>N-1</b> <br/>
1 <= <b>v<sub>i</sub></b> <= 10^4 <br/>
0 <= <b>d</b> <= 10^4<br/>