---
{"category_name":"medium","problem_code":"LFIVES","problem_name":"Lucky Fives","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"10-05-2014","tags":{"0":"cook57","1":"dynamic","2":"fenwick","3":"kostya_by","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/LFIVES","time":{"view_start_date":1429470000,"submit_start_date":1429470000,"visible_start_date":1429470000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/mandarin/LFIVES.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/russian/LFIVES.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>Everybody knows, that five is an extremely lucky number. It's even more lucky than seven!</p>
<p>For instance, five is widely used in Chinese culture. The famous Chinese Five Elements refer to Gold, Wood, Water, Fire and Earth, which are regarded as the basis of the whole world. In folklore, Chinese people hold the mutual restriction of the five elements: “wood restricting earth, earth restricting water, water restricting fire, fire restricting gold and gold restricting wood”. This mutual restriction principle is seriously stressed by the ancient Chinese people to show that everything in the world is mutually affected.</p>
<p>You see how important the number is? That's why this number will be under our consideration in this problem!</p>
<p>You are given a sequence <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b> of non-negative integers. Your task is to process <b>Q</b> queries of the following format: each query is described by two integers <b>L ≤ R</b> and asks to calculate the number of triples (<b>i</b>, <b>j</b>, <b>k</b>), such that <b>L</b> &lt; <b>i</b> &lt; <b>j</b> &lt; <b>k</b> &lt; <b>R</b> and <b>a<sub>L</sub></b> > <b>a<sub>i</sub></b> &lt; <b>a<sub>j</sub></b> > <b>a<sub>k</sub></b> &lt; <b>a<sub>R</sub></b>.</p>
<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>Q</b> denoting the size of the sequence and the number of the queries to process.</p>
<p>The second line contains <b>N</b> non-negative integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b>.</p>
<p>Each of the next <b>Q</b> lines contains two integers <b>L</b> and <b>R</b> describing the corresponding query.</p>
<h3>Output</h3>
<p>For each query, output a single line containing one integers: the number of triples as described above.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 2000</li>
<li>1 ≤ <b>Q</b> ≤ 100000</li>
<li>0 ≤ <b>a<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b> for each query in the input</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
10 3
5 5 1 1 5 5 1 1 5 5
1 10
2 9
1 1

<b>Output:</b>
8
8
0

</pre><h3>Explanation</h3>
<p>
	The following triples(<b>i</b>, <b>j</b>, <b>k</b>) are valid for the first and the second queries: </p>
<ul>
<li>(3, 5, 7)</li>
<li>(3, 5, 8)</li>
<li>(3, 6, 7)</li>
<li>(3, 6, 8)</li>
<li>(4, 5, 7)</li>
<li>(4, 5, 8)</li>
<li>(4, 6, 7)</li>
<li>(4, 6, 8)</li>
</ul>

