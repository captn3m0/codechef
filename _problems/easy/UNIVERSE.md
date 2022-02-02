---
{"category_name":"easy","problem_code":"UNIVERSE","problem_name":"Year 3017","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"25-06-2017","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/UNIVERSE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/UNIVERSE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/UNIVERSE.pdf">Vietnamese</a> as well.</h3>

<p>Welcome to the year 3017! Things have changed a lot in the last thousand years. Now people don't live only on the Earth. They live in many planets. And even more amazingly, they also live in many parallel universes which were discovered!</p>

<p>There is an infinite number of parallel universes, each of which has <b>N</b> planets. The planets inside a single universe are numbered from 1 to <b>N</b>. The planets inside a single universe are connected with each other by <b>N-1</b> bi-directional tunnels in such a way that there's a path between any pair of planets within a single universe. The network of tunnels in every universe is the same. That is, if there is a tunnel between planets q<sub>1</sub> and q<sub>2</sub> in some universe, then there is a tunnel between planets q<sub>1</sub> and q<sub>2</sub> in every universe.</p>

<p>The universes are numbered starting from 1, while the planets in a single universe are numbered from 1 to <b>N</b>. Therefore a particular planet can be uniquely determined by its planet number inside the particular universe, and the number of the universe that it belongs to.</p>

<p>There are also <b>M</b> special bi-directional teleports that let you travel from one planet to another, and these could even be across different universes. Each teleport is defined by 4 numbers, <b>p<sub>1</sub>, u<sub>1</sub>, p<sub>2</sub>, u<sub>2</sub></b>. This means that it can teleport you from the <b>p<sub>1</sub></b>-th planet in <b>u<sub>1</sub></b>-th universe to the <b>p<sub>2</sub></b>-th planet in <b>u<sub>2</sub></b>-th universe and also vice-versa. </p>

<p>All tunnels and special teleports take 1 unit of time to pass through.</p>

<p>Chef wants to find the shortest distance between two places. He has <b>Q</b> such queries that need to be answered. Try to help him with these.</p>

<h3>Input</h3>
<p>The first line contains three integers, <b>N</b>, <b>M</b> and <b>Q</b>, which denote the number of planets in a single universe, the number of special teleports, and the number of queries, respectively.</p>

<p>The next <b>N</b> - 1 lines describe the tunnels which connect planets inside a universe. Each line has two integers denoting the labels of the planets connected by the tunnel.</p>

<p>The next <b>M</b> lines describe the special teleports, with each line containing 4 integers: <b>p<sub>1</sub>, u<sub>1</sub>, p<sub>2</sub>, u<sub>2</sub></b> as described above.</p>

<p>The next <b>Q</b> lines describe the queries. Each line contains four integers <b>p<sub>1</sub>, u<sub>1</sub>, p<sub>2</sub>, u<sub>2</sub></b>, and this means that you have to find the length of a shortest path between the <b>p<sub>1</sub></b>-th planet in <b>u<sub>1</sub></b>-th universe and the <b>p<sub>2</sub></b>-th planet in <b>u<sub>2</sub></b>-th universe.</p>

<h3>Output</h3>
<p>For each query output its answer in a new line. If it's possible to reach one planet from the other, then output the shortest distance between them. Otherwise, output "impossible". (without quotes)
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 300,000</li>
<li>1 ≤ <b>M</b> ≤ 100,000</li>
<li>1 ≤ <b>Q</b> ≤ 10</li>
<li>1 ≤ <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b> ≤ <b>N</b></li>
<li>1 ≤ <b>u<sub>1</sub></b>, <b>u<sub>2</sub></b> ≤ 200,000</li>
<li>The whole graph (including both tunnels and special teleports) has no multi-edges or loops.
<p>That is, for every four valid integers a, b, c, d, there is <b>at most</b> one direct connection (ie. a tunnel or a special teleport) between the a-th planet in the b-th universe and the c-th planet in the d-th universe. Also, if there is a direct connection then a ≠ c or b ≠ d.</p>
</li>
</ul>

<h3>Example</h3>
<pre><b>Input1:</b>
3 3 3
1 2
2 3
1 1 1 2
3 3 3 2
1 2 3 3
2 1 2 2
2 1 2 3
1 2 3 2

<b>Output1:</b>
3
4
2

</pre>

<p><b>Explanation 1</b>: There are <b>N</b> = 3 planets in each universe. And they are connected by the edges (1, 2) and (2, 3) in each universe, as described by the 2nd and 3rd lines of the input. There are <b>M</b> = 3 special teleports, which are described by the 4th, 5th and 6th lines of the input. For example, the fourth line is "1 1 1 2", which means that there is a special teleport between the first planet of the first universe and the first planet of the second universe. The next <b>Q</b> = 3 lines denote the queries. For example, the 7th line is "2 1 2 2", which asks for the shortest distance between the second planet of the first universe and the second planet of the second universe.</p>
<p>The map of the multi-verse would look like this:</p>
<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/SNCKFL17/universe.png" height="200"/>
<p></p>
<p>The solid lines correspond to tunnels, and the dotted lines correspond to the special teleports.</p>

<p>In the first query, we need to find the length of a shortest path between the second planet in the first universe and the second planet in the second universe. If we are starting from the second planet in the first universe, we can go to the first planet in the first universe in 1 unit of time using the tunnel. Then we can use the special teleport to go to the first planet in the second universe, and this will take another 1 unit of time. Finally, we can use a tunnel to go to the second planet in the second universe, in another 1 unit of time. The total time needed was 3, and we cannot do better than this. Hence, the answer is 3.</p>

<p>In the second query, we need to find the length of a shortest path between the second planet in the first universe and the second planet in the third universe. The answer is 4.</p>

<p>In the third query, we need to find the length of a shortest path between the first planet in the second universe and the third planet in the second universe. The answer is 2.</p>

<pre><b>Input2:</b>
4 1 8
1 2
1 3
3 4
1 30 4 30
1 30 3 30
1 30 4 30
1 53 3 30
1 53 4 30
1 13 2 30
1 30 3 14
2 14 4 14
2 30 4 30

<b>Output2:</b>
1
1
impossible
impossible
impossible
impossible
3
2

</pre>

<p><b>Explanation 2</b>: Note that there can be teleports between two planets of the same universe. As example, the only teleport in this testcase is between the first and fourth planets of the 30<sup>th</sup> universe.</p>