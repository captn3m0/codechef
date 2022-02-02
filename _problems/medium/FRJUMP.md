---
{"category_name":"medium","problem_code":"FRJUMP","problem_name":"Chef and cities","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fiter","problem_tester":"iscsi","date_added":"16-02-2016","tags":{"0":"fiter","1":"june16","2":"log","3":"medium","4":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/FRJUMP","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/FRJUMP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/FRJUMP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/FRJUMP.pdf">Vietnamese</a> as well.</h3>
<p>
Chef likes to travel a lot. Every day Chef tries to visit as much cities as possible. Recently he had a quite a few trips of great Chefland for learning various recipes. Chefland had <b>N</b> cities numbered from 1 to <b>N</b>. People in Chefland are very friendly, <i>friendliness</i> of <b>i</b>-th city is given by <b>F<sub>i</sub></b>.</p>
<p>
Before starting of each trip, Chef's initial enjoyment is 1 unit. Whenever he visits a city with <i>friendliness</i> <b>F<sub>i</sub></b>, his enjoyment gets multiplied by <b>F<sub>i</sub></b> units.
</p>
<p>
City <b>1</b> is the home city of Chef. He starts each trip from his home city. Before starting a trip, he chooses a parameter <b>R</b> which denotes that he will start from city <b>1</b>, and go to city <b>1 + R</b>, then to <b>1 + 2 * R</b>, then to <b>1 + 3 * R</b>, till <b>1 + i * R</b> such that <b>i</b> is largest integer satisfying <b>1 + i * R ≤ N</b>.
</p>
<p>
Now, Chef wants you to help him recreate his visit of the cities. Specifically, he will ask you <b>Q</b> queries, each of which can be of following two types.</p>
<ul>
<li><b>1 p f</b> : friendliness of <b>p</b>-th city changes to <b>f</b>, i.e. <b>F<sub>p</sub> = f</b> </li>
<li><b>2 R </b>  : Find out the total enjoyment Chef will have during this trip. As Chef does not like big numbers, he just asks you to output two things, first digit of the enjoyment and value of enjoyment modulo <b>10<sup>9</sup> + 7</b>.</li>
</ul>

<h3>Input</h3>
<p>There is a single test case.</p>
<p>First line of input contains a single integer <b>N</b>, denoting number of cities in Chefland.</p>
<p>Second line of the input contains <b>N</b> space separated integer - <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>N</sub></b>, denoting the friendliness of the cities in order from <b>1</b> to <b>N</b>.</p>
<p>Next line contains an integer <b>Q</b>, denoting number of queries.</p>
<p>For each of the next <b>Q</b> queries, each line corresponds to one of the two types of the query. First there will be an integer denoting the type of the query, followed by the actual query. For query of type <b>1</b>, there will be three space separated integers "<b>1 p f</b>" as defined above. For query of type <b>2</b>, there will be two space separated integers "<b>2 R </b>", as defined above.</p>
<h3>Output</h3>
<p>For each query of type <b>2</b>, output two space separated integers, first digit of Chef's enjoyment in this trip followed by the value of enjoyment modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li>  <b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b> </li>
<li>  <b>1</b> ≤ <b>F<sub>i</sub></b> ≤ <b>10^9</b> </li>
<li>  <b>1</b> ≤ <b>f</b> ≤ <b>10^9</b> </li>
<li>  <b>1</b> ≤ <b>p</b> ≤ <b>N</b> </li>
<li>  <b>1</b> ≤ <b>R</b> ≤ <b>N</b> </li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask <b>#1</b> (5 points) </b>: </p>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10</b>  </li>
<li> <b>1</b> ≤ <b>Q </b> ≤ <b>1000</b> </li>
<li>  <b>1</b> ≤ <b>F<sub>i</sub></b> ≤ <b>10</b> </li>
<li>  <b>1</b> ≤ <b>f</b> ≤ <b>10</b> </li>
</ul>

<p>
<b>Subtask <b>#2</b> (15 points) </b>: </p>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>1000</b>  </li>
<li> <b>1</b> ≤ <b>Q </b> ≤ <b>100</b> </li>
<li>  <b>1</b> ≤ <b>F<sub>i</sub></b> ≤ <b>10<sup>9</sup></b> </li>
<li>  <b>1</b> ≤ <b>f</b> ≤ <b>1000</b> </li>
</ul>

<p>
<b>Subtask <b>#3</b> (80 points) </b>: </p>
<ul>
<li>original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 3 4 5
3
2 1
1 3 10
2 2

<b>Output:</b>
1 120
5 50
</pre><h3>Explanation</h3>
<p><b>In the first query</b>, Chef is going to visit cities 1, 2, 3, 4, 5 in order. At the end of the trip, his total enjoyment will be 1 * 2 * 3 * 4 * 5 = 120. First digit of enjoyment is 1 and 120 modulo <b>10<sup>9</sup> + 7</b> is 120.</p>
<p><b>In the third query</b>, Chef is going to visit cities 1, 3, 5 in order. At the end of the trip, his total enjoyment will be 1 * 10 * 5 = 50.</p>
