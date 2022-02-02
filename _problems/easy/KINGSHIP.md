---
{"category_name":"easy","problem_code":"KINGSHIP","problem_name":"Chef and Kingship","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":"rustinpiece‎","date_added":"31-01-2014","tags":{"0":"ad","1":"cook43","2":"graph","3":"shiplu","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/KINGSHIP","time":{"view_start_date":1392575400,"submit_start_date":1392575400,"visible_start_date":1392575400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/mandarin/KINGSHIP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/russian/KINGSHIP.pdf">Russian</a> as well.</h3>
<p>Chef is the new king of the country Chefland. As first and most important responsibility he wants to reconstruct the road system of Chefland. There are <b>N</b> (<b>1</b> to <b>N</b>) cities in the country and each city <b>i</b> has a population <b>P<sub>i</sub></b>. Chef wants to build some bi-directional roads connecting different cities such that each city is connected to every other city (by a direct road or through some other intermediate city) and starting from any city one can visit every other city in the country through these roads. Cost of building a road between two cities <b>u</b> and <b>v</b> is <b>P<sub>u</sub> x P<sub>v</sub></b>. Cost to build the road system is the sum of cost of every individual road that would be built. </p>
<p>Help king Chef to find the minimum cost to build the new road system in Chefland such that every city is connected to each other.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>First line contains an integer <b>N</b> denoting the number of cities in the country. Second line contains <b>N</b> space separated integers <b>P<sub>i</sub></b>, the population of <b>i</b>-th city.</p>

<h3>Output</h3>
<p>For each test case, print a single integer, the minimum cost to build the new road system on separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2
5 10
4
15 10 7 13

<b>Output:</b>
50
266
</pre>
