---
{"category_name":"medium","problem_code":"MINXOR","problem_name":"XOR Minimization","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"gerald","date_added":"8-02-2014","tags":{"0":"cook44","1":"decomposition","2":"kostya_by","3":"medium","4":"sqrt","5":"trie"},"editorial_url":"http://discuss.codechef.com/problems/MINXOR","time":{"view_start_date":1395599400,"submit_start_date":1395599400,"visible_start_date":1395599400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/mandarin/MINXOR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/russian/MINXOR.pdf">Russian</a> as well.</h3>
<p>
You are given an array <b>A</b> consisting of <b>N</b> non-negative integers. The elements of array <b>A</b> are indexed with integers 1, 2, 3, ..., <b>N</b>. You need to implement a data structure, which can process the following queries efficiently:
</p>
<p><ul type="square">
<li>1 <b>L</b> <b>R</b>: find the minimal number in the subarray <b>A[L..R]</b> and count how many times it appears there;
</li><li>2 <b>L</b> <b>R</b> <b>K</b>: replace each number <b>A<sub>i</sub></b> with the expression (<b>A<sub>i</sub></b> xor <b>K</b>) for the subarray <b>A[L..R]</b>.
	</li></ul>
</p>
<p>You can read about XOR-operation here: <a href="http://en.wikipedia.org/wiki/Exclusive_or">http://en.wikipedia.org/wiki/Exclusive_or</a></p>
<h3>Input</h3>

<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>, denoting the size of <b>A</b> and the number of the queries to process. The second line contains <b>N</b> non-negative integers, denoting array <b>A</b>.</p>
<p>The next <b>Q</b> lines contain the queries to process, each contains one query. The format of queries is the same with the one described in the legend.</p>
<h3>Output</h3>
<p>Your output should contain exactly <b>Q<sub>1</sub></b> lines, where <b>Q<sub>1</sub></b> is the number of the queries of the first type in the input.</p>
<p>For each query of the first type you need to output two numbers: the minimal number in the subarray <b>A[L..R]</b> and the number of times it appears there. You should output the answers for the queries in the order they appear in the input.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 250 000;</li>
<li>The number of the queries of the first type won't exceed 40000;</li>
<li>The number of the queries of the second type won't exceed 10000;</li>
<li>0 ≤ <b>A<sub>i</sub></b> &lt; 65536;</li>
<li>0 ≤ <b>K</b> &lt; 65536, for each query of the second type appeared in the input;</li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b>, for each query appeared in the input.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 3 
0 1 0 1 0 
1 1 5 
2 1 5 1 
1 1 5

<b>Output:</b>
0 3 
0 2
</pre>
<h3>Explanation</h3>
<p>
Initially <b>A[]</b> = {0, 1, 0, 1, 0}.
</p>
<p>
After the second query <b>A[]</b> = {1, 0, 1, 0, 1}.
</p>
