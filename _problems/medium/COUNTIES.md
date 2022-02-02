---
{"category_name":"medium","problem_code":"COUNTIES","problem_name":"The Counties","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 5","source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"mgch","date_added":"19-10-2016","tags":{"0":"centroid","1":"ltime41","2":"medium","3":"xcwgf666"},"time":{"view_start_date":1477760400,"submit_start_date":1477760400,"visible_start_date":1477760400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/mandarin/COUNTIES.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/russian/COUNTIES.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME41/vietnamese/COUNTIES.pdf">Vietnamese</a> as well.</h3>

<p>The map of Ancient ChefLand can be represented as a graph with <b>N</b> nodes, denoting the cities and <b>N-1</b> edges, denoting the roads connecting these cities. It was possible to get from any city of Ancient ChefLand to any other one using only these roads, possibly, via some intermediate cities in a unique simple path. So, in other words, the city-road structure of this country could be represented as a tree.</p>

<p>There were <b>M</b> counties in the ChefLand, numbered <b>1</b> through <b>M</b>. Each county had a country, consisting of at least one city. Because of the constant wars between the counties, it was not guaranteed that it is possible to get from one city of the county to any other city of this county only via the cities, belonging to the county.</p>

<p>Sometimes, the counties were in battles against each other. The battle could be defined by a pair of integers (<b>V<sub>i</sub></b> and <b>C<sub>i</sub></b>), denoting that the counties <b>C<sub>i</sub></b> attacked a city <b>V<sub>i</sub></b>. Sometimes, the counties could attack their own cities, by a mistake.</p>

<p>Sergey studies the history of Ancient ChefLand. Now he read about the attacks of the cities and now he wonders to know the distance to the closest city to the attacked one, which belongs to the attacker county. In other words, for each query he wants to find minimal distance to <b>any</b> city of the county <b>C<sub>i</sub></b> from the city <b>V<sub>i</sub></b>. Please help him to find these values.</p>


<h3>Input</h3>
<p>The first line of the input contains two space-separated integer numbers <b>N</b> and <b>M</b>, denoting the number of the cities and the number of counties.</p>
<p>The second line contains <b>N</b> space separated integer numbers <b>O<sub>i</sub></b>, denoting the county owning the <b>i</b><sup>th</sup> city.</p>
<p>Each of the following <b>N-1</b> lines contains two space-separated numbers <b>X<sub>j</sub> Y<sub>j</sub></b>, denoting a road connecting the cities <b>X<sub>j</sub></b> and <b>Y<sub>j</sub></b>.</p>
<p>The following line contains an integer number <b>Q</b>, denoting the number of attacks.</p>
<p>Each of <b>Q</b> following lines contains two space-separated integers <b>V<sub>i</sub> C<sub>i</sub></b>, denoting an attack. For this pair of integers you will need to find the minimal distance from any city belonging to the county <b>C<sub>i</sub></b> to the city <b>V<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For each of <b>Q</b> queries, output the sought minimal distance on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>O<sub>i</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>V<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub>, Y<sub>i</sub></b> ≤ <b>N</b></li>
<li>For each county there is at least one city, belonging to this county.</li>
<li>Subtask 1 (15 points): <b>1</b> ≤ <b>N, Q</b> ≤ <b>100</b></li>
<li>Subtask 2 (26 points): <b>1</b> ≤ <b>N, Q</b> ≤ <b>4000</b></li>
<li>Subtask 3 (25 points): <b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li>Subtask 4 (34 points): <b>1</b> ≤ <b>N, Q</b> ≤ <b>5 × 10<sup>5</sup></b>. The time limit for this subtask is <b>5</b> seconds.</li>
<li>The time limit for subtasks <b>1</b>-<b>3</b> is <b>2</b> seconds.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>6 5
3 5 1 1 4 2
3 6
2 3
4 3
6 1
3 5
6
3 5
2 3
2 1
4 4
1 1
4 2</tt>

<b>Output:</b>
<tt>1
3
1
2
2
2</tt>
</pre>