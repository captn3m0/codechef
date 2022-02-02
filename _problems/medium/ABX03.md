---
{"category_name":"medium","problem_code":"ABX03","problem_name":"Four Friends","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"abx_2109","problem_tester":"kingofnumbers","date_added":"27-11-2017","tags":{"0":"abx_2109","1":"binary","2":"dfs","3":"inclusion","4":"lca","5":"ltime55","6":"medium"},"editorial_url":"https://discuss.codechef.com/problems/ABX03","time":{"view_start_date":1514653200,"submit_start_date":1514653200,"visible_start_date":1514653200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/mandarin/ABX03.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/russian/ABX03.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/vietnamese/ABX03.pdf">Vietnamese</a> as well.</h3>


<p>Paavini, Nupur, Anchal and Ishita are four best friends and roommates. In their normal routine, they only study and study and do nothing else. But now that exams are over, they want to explore the town, so they went to the Trade Fair to eat.</p>
<p>The trade fair has <b>N</b> halls and it's represented by a tree with <b>N</b> vertices and <b>N-1</b> edges. Each edge contains exactly one restaurant offering only meals of one type at a fixed cost.</p>
<p>Since Bhavya and Kaushal didn't go along with them, they have asked <b>Q</b> queries. Each query is given as follows: The friends move from hall <b>U</b> to hall <b>V</b> along the shortest path. From each restaurant they encounter on this path, they will purchase exactly one meal in total if its cost <b>C</b> satisfies the following conditions:
<ul>
<li>If <b>C</b> is a multiple of 2, <b>C</b> must be between <b>X<sub>1</sub></b> and <b>Y<sub>1</sub></b> inclusive.</li>
<li>If <b>C</b> is a multiple of 3, <b>C</b> must be between <b>X<sub>2</sub></b> and <b>Y<sub>2</sub></b> inclusive.</li>
<li>If <b>C</b> is a multiple of 5, <b>C</b> must be between <b>X<sub>3</sub></b> and <b>Y<sub>3</sub></b> inclusive.</li>
<li><b>C</b> must be a multiple of 2, 3 or 5.</li>
</ul>
</p>

<p>For each query, compute the total cost of all meals bought when travelling from <b>U</b> to <b>V</b>. you have the answer the queries in online mode.</p>

<h3>Input</h3>
<p>
<li>The first line of the input contains two space-separated integers <b>N</b> and <b>Q</b> denoting the number of halls and the number of queries respectively.</li>
<li>Each of the following <b>N-1</b> lines contains three space-separated integers <b>U</b>, <b>V</b> and <b>C</b> denoting an edge connecting halls <b>U</b> and <b>V</b> and containing a restaurant which provides a meal with cost <b>C</b>.</li>
<li>Each of the following <b>Q</b> lines contains eight space-separated integers <b>in<sub>1</sub></b>, <b>in<sub>2</sub></b>, <b>in<sub>3</sub></b>, <b>in<sub>4</sub></b>, <b>in<sub>5</sub></b>, <b>in<sub>6</sub></b>, <b>in<sub>7</sub></b> and <b>in<sub>8</sub></b> describing one query. Lets define <b>last</b> as the answer of the previous query modulo <b>100,000</b> (if it was the first query then <b>last</b> = 0), the parameters of the query can be calculated by:
<ul>
<li><b>U</b> = <b>in<sub>1</sub></b> + <b>last</b></li><li> <b>V</b> = <b>in<sub>2</sub></b> + <b>last</b></li><li> <b>X<sub>1</sub></b> = <b>in<sub>3</sub></b> + <b>last</b></li><li> <b>Y<sub>1</sub></b> = <b>in<sub>4</sub></b> + <b>last</b></li><li> <b>X<sub>2</sub></b> = <b>in<sub>5</sub></b> + <b>last</b></li><li> <b>Y<sub>2</sub></b> = <b>in<sub>6</sub></b> + <b>last</b></li><li> <b>X<sub>3</sub></b> = <b>in<sub>7</sub></b> + <b>last</b></li><li> <b>Y<sub>3</sub></b> = <b>in<sub>8</sub></b> + <b>last</b>
</li>
</ul></li></p>

<h3>Output</h3>
<p>For each query, print the answer to it on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b>, <b>Q</b> ≤ 50,000</li>
<li>1 ≤ <b>U</b>, <b>V</b> ≤ <b>N</b></li>
<li>1 ≤ <b>C</b> ≤ 40,000</li>
<li>1 ≤ <b>X<sub>i</sub></b> ≤ <b>Y
<sub>i</sub></b> ≤ 40,000, for each 1 ≤ <b>i</b> ≤ 3</li>
</ul>

<h3>Subtasks</h3>

<p><b>Subtask #1 (20 points):</b> 1 ≤ <b>N</b>, <b>Q</b> ≤ 1000</b></p>

<p><b>Subtask #2 (80 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

3 2
1 2 6
1 3 11
2 3 2 20 3 20 2 4
-4 -3 -4 14 -3 -1 -4 -2

<b>Output:</b>

6
0
</pre>

<h3>Explanation</h3>
<p>For the first query, they will eat at the restaurant connecting halls 1 and 2; the cost of the meal there is 6.</p>
<p>For the second query, 6 is a multiple of 3, but according to the second condition, the cost of this meal isn't between 3 and 5. Hence they will not eat at any restaurant.</p>
