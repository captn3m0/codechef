---
{"category_name":"medium","problem_code":"RRDAG","problem_name":"Present for Andrii","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"shiplu","date_added":"10-07-2014","tags":{"0":"Rubanenko","1":"cook48","2":"graph","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/RRDAG","time":{"view_start_date":1405884600,"submit_start_date":1405884600,"visible_start_date":1405884600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRDAG.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRDAG.pdf">Russian</a> as well.</h3>
<p> </p>
<p>Andrii is a great programmer. He recently managed to enter Ukrainian IOI team. His parents wanted to appreciate him and present him a DAG(Directed Acyclic Graph). His favourite TV show is "Pimp My Ride" so he'd like to customize his graph. He'd like to add as many edges as possible in order to still have a DAG. Please, help Andrii, find the maximum number of edges he can add to his graph without obtaining any cycle. </p>
<p> </p>
<h3>Input</h3>
<p>The first line of an input contains single integer <b>N</b> — the number of vertices in the graph. Vertices are numerated from <b>1</b> to <b>N</b>. Next <b>N</b> lines contain <b>N</b> characters each — adjacency matrix of the graph. If there is '1' in <b>j<sup>th</sup></b> character of the <b>i<sup>th</sup></b> line then there is an edge from vertex <b>i</b> to vertex <b>j</b> in Andrii's graph. It's guaranteed that given graph does not contain cycles. </p>
<p> </p>
<h3>Output</h3>
<p>Output the maximal number of edges one can add to the graph in the first line. Then output the edges themselves. Edges should be written in separate lines, one by one. Edge is defined by a pair of integers <b>a</b> and <b>b</b> which means that edge from <b>a</b> to <b>b</b> should be added. <br />
The author is pretty lazy and he does not want to write checking program. So, if there are multiple solutions which lead to maximal number of edges that can be added, then you should output lexicographically smallest sequence of edges. A sequence of edges is smaller than another if the first edge that they differ in is lexicographically smaller. Edges are compared as pairs of integers, i.e. as sequence of two integers. </p>
<p> </p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1500</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
010
000
000

<b>Output:</b>
2
1 3
2 3
</pre><p> </p>
