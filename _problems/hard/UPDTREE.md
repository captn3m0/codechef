---
{"category_name":"hard","problem_code":"UPDTREE","problem_name":"Updating Edges on Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"15-09-2014","tags":{"0":"cook50","1":"darkshadows","2":"dfs","3":"dynamic","4":"lca","5":"medium"},"editorial_url":"http://discuss.codechef.com/problems/UPDTREE","time":{"view_start_date":1411324200,"submit_start_date":1411324200,"visible_start_date":1411324200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/UPDTREE.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/UPDTREE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/UPDTREE.pdf">Russian</a> as well.</h3>
<p>You have a <a href="http://en.wikipedia.org/wiki/Tree_(graph_theory)">tree</a> consisting of <b>N</b> vertices numbered <b>1</b> to <b>N</b>.<br/><br />
Initially each edge has a value equal to zero. You have to first perform <b>M1</b> operations and then answer <b>M2</b> queries. Note you have to first perform all the operations and then answer all queries after all operations have been done.<br/><br/><br />
Operations are defined by:<br/><br />
<b>A B C D</b>: On the path between nodes numbered <b>A</b> and <b>B</b> increase the value of each edge by <b>1</b>, except for those edges which occur on the path between <b>C</b> and <b>D</b>. Note that there is an unique path between every pair of nodes ie. we don't consider values on edges for finding the path. All four values given in input will be distinct.<br/><br />
<br/><br />
Queries are of the following type:<br/><br />
<b>E F</b>: Print the sum of values of all the edges on the path between two distinct nodes <b>E</b> and <b>F</b>. Again the path will be unique.
</br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>Input description.</p>
<p>First line contains <b>N</b>, <b>M1</b> and <b>M2</b>. Each of the next <b>N-1</b> lines contain two integers <b>u v</b> denoting an undirected edge between node numbered <b>u</b> and <b>v</b>. Each of the next <b>M1</b> lines contain four integers <b>A<sub>i</sub> B<sub>i</sub> C<sub>i</sub> D<sub>i</sub></b>, denoting the operations. Each of the next <b>M2</b> lines contain two integers <b>E<sub>i</sub> F<sub>i</sub></b> denoting the queries.</p>
<h3>Output</h3>
<p>For each query, print the required answer in one line.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M1, M2</b> ≤ <b>5*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub>, C<sub>i</sub>, D<sub>i</sub>, E<sub>i</sub>, F<sub>i</sub></b> ≤ <b>N</b></li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2 2
1 2
2 4
2 5
1 3
1 4 2 3
3 4 2 5
4 5
4 3

<b>Output:</b>
2
4
</pre><h3>Explanation</h3>
<p>On first operation, value of edge (2-4) is increased by one. On second operation, value of edges (1-3), (1-2), (2-4) are increased by one.</p>
<p><b>Warning:</b>Use fast input/output. Large input files.</p>
