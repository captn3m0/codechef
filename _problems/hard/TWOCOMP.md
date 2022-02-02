---
{"category_name":"hard","problem_code":"TWOCOMP","problem_name":"Two Companies","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"shiplu","date_added":"15-04-2014","tags":{"0":"hard","1":"june14","2":"max","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TWOCOMP","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/TWOCOMP1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/TWOCOMP.pdf">Russian</a>.</h3>
<p>The tram service will start its' work soon in Bytetown - the capital of Byteland. There are <b>N</b> junctions in Bytetown and <b>N-1</b> tram ways between them. Every tram way connects some two distinct junctions. It's possible to go from any junction to any other one using a sequence of tram ways  and there is only one way to go from one junction to another one. So, we can conclude that the graph consisting of junctions as vertices and tram ways as edges is a tree.</p>
<p>What has not been decided yet is the set of tram routes. Two companies - BytelandTramService (BTS) and GlobalTramNetworks (GTN) have proposed their own plans of tram routes. Each plan has a number of routes and for every route it has a starting junction, a final junction and the amount of joy that one will get by using this route (that was figured out by the BTS and the GTN analysts).</p>
<p>The problem is that these two companies don't cooperate. So, if there's at least one junction that's present at the same time, in the route of BTS and of GTN, there is a risk of collision.</p>
<p>The final decision was to choose some subset of the set of BTS's routes and some subset of GTN's routes in such a way that no two routes from the BTS's subset and from the GTN's subset intersect. But BTS's chosen routes can intersect with each other and GTN's chosen routes can intersect with each other. Please, find the maximal possible sum of amounts of joy of the chosen routes.</p>
<h3>Input</h3>
<p>The first line of input consists of three space separated integers - <b>N</b>, <b>M<sub>1</sub></b> and <b>M<sub>2</sub></b> - the number of junctions, the number of routes in BTS' plan and the number of routes in GTN's plan.<br /><br />
The next <b>N-1</b> lines of input describe tram ways. Each tram way is described by two space separated integers - <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> with the meaning that the junctions with the numbers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> are connected with a tram way.<br /><br />
Then there are <b>M<sub>1</sub></b> lines, describing the<br />
route plan of BTS. Each line consists of three integers: <b>Bx<sub>i</sub></b>, <b>By<sub>i</sub></b> and <b>Bj<sub>i</sub></b> - the starting junction, the final junction and the amount of joy that one will get using this route respectively.<br /><br />
Then there are <b>M<sub>2</sub></b> lines, describing the route plan of GTN. Each line consists of three integers: <b>Gx<sub>i</sub></b>, <b>Gy<sub>i</sub></b> and <b>Gj<sub>i</sub></b> - the starting junction, the final junction and the amount of joy that one will get using this route respectively.</p>
<h3>Output</h3>
<p>Output the maximal possible sum of amounts of joy over all the chosen roads.</p>
<h3>Constraints</h3>
<p><ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>M<sub>1</sub></b>, <b>M<sub>2</sub></b> ≤ 700</li>
<li>1 ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>N</b></li>
<li> 1 ≤ <b>Bx<sub>i</sub></b>, <b>By<sub>i</sub></b>, <b>Gx<sub>i</sub></b>, <b>Gy<sub>i</sub></b> ≤ <b>N</b></li>
<li> 1 ≤ <b>Bj<sub>i</sub></b>, <b>Gj<sub>i</sub></b> ≤ 10<sup>6</sup></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2 1
1 2
2 3
3 4
4 5
1 3 7
2 5 18
2 5 11

<b>Output:</b>
25
</pre><p> </p>
<h3>Explanation</h3>
<p>If you take the only route of GTN, you'll not be able to take anything of BTS. So, it's better to take the both routes of BTS (a route of a company can cross with another route of this company as well) and to end up with the total sum of 25.</p>
