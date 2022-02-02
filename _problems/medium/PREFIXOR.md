---
{"category_name":"medium","problem_code":"PREFIXOR","problem_name":"Prefix XOR","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"gomelfk","problem_tester":null,"date_added":"26-05-2017","tags":{"0":"gomelfk"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/PREFIXOR.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/PREFIXOR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/PREFIXOR.pdf">Vietnamese</a> as well.</h3>

<p>Given an array <b>A</b> with <b>n</b> elements. There are <b>q</b> queries of the form <b>(l, r)</b>. For each query you need to find the number of pairs <b>(i, j)</b> such that <b>l ≤ i ≤ j ≤ r</b> and and which satisfies the following condition: <b>A<sub>i</sub> ≤ A<sub>i</sub> ^ A<sub>i + 1</sub> ≤ ... ≤  A<sub>i</sub> ^ A<sub>i + 1</sub> ^ ... ^ A<sub>j</sub></b>, where ^ is <b><a href="https://en.wikipedia.org/wiki/Exclusive_or">XOR</a></b>.  </p>

<h3>Input</h3>
<ul>
<li>The first line contains one integer <b>n</b>, denoting the number of elements.</li>
<li>The second line contains <b>n</b> space-separated integers: <b>A<sub>1</sub>, A<sub>2</sub>, ... , A<sub>n</sub> </b>.</li>
<li>The third line contains one integer <b>q</b>, denoting the number of queries.</li>
<li>The i-th of the next <b>q</b> lines contains two integers: <b>a<sub>i</sub>, b<sub>i</sub></b>. This is explained below.</li>
</ul>
<p></p>
<p>You need to find the answers to the queries online, and so, the queries are encoded. To decode the queries from the data given in input, you need to perform the following transformations: </p>
<p>l<sub>i</sub> = (<b>a<sub>i</sub></b> + ans<sub>i-1</sub>) mod <b>n</b> + 1 </p> 
<p>r<sub>i</sub> = (<b>b<sub>i</sub></b> + ans<sub>i-1</sub>) mod <b>n</b> + 1 </p>
<p>Where ans<sub>i-1</sub> is the answer for the previous query. (l<sub>i</sub>, r<sub>i</sub>) is the decoded i-th query, for which you need to find and output the answer. Assume that ans<sub>0</sub> = 0. The first query is (l<sub>1</sub>, r<sub>1</sub>).</p>

<h3>Output</h3>
<p>For each query print the answer on a single line. </p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>n, q</b> ≤ 4 * 10<sup>5</sup></li>
<li>0 ≤ <b>A<sub>i</sub></b> ≤  10<sup>9</sup></li>
<li>0 ≤ <b>a<sub>i</sub>, b<sub>i</sub></b> < <b>n</b></li>
<li>1 ≤ l<sub>i</sub> ≤ r<sub>i</sub> ≤ <b>n</b> after decoding</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 
1 2 3 4
3
1 3
0 3
3 1

<b>Output:</b>
4
6
4
</pre>
