---
{"category_name":"medium","problem_code":"GERALD06","problem_name":"Chef and Strange Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":null,"date_added":"12-12-2013","tags":{"0":"cook41","1":"gerald","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/GERALD06","time":{"view_start_date":1387737000,"submit_start_date":1387737000,"visible_start_date":1387737000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/mandarin/GERALD06.pdf">here</a></h3>
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/russian/GERALD06.docx">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef has a connected undirected graph <b>G</b> without multiedges and self-loops. A graph is called connected if there exists a path between any two vertices of the graph. This graph, <b>G</b> has an awesome property: it contains at least one vertex with degree at least 4. <br /> One day Chef was playing with his graph. He constructed a graph <b>L(G)</b> based on the graph <b>G</b>.<br />
The vertices of graph <b>L(G)</b> are the edges of graph <b>G</b>. Two vertices in the graph <b>L(G)</b> are connected with an undirected edge if and only if the<br />
corresponding edges in graph <b>G</b> share a common vertex.<br /></p>
<p>Today Chef has lost his favorite graph <b>G</b>. But he has the graph <b>L(G)</b>. Please help Chef, restore the graph <b>G</b> from the graph <b>L(G)</b>.</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case contains two integers <b>N</b> and <b>M</b> - the number of vertices in <b>L(G)</b> and the number of edges in it. The next <b>M</b> lines<br />
contain description of the edges. Each line contains two integers <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> - indices of vertices, connecting by the current edge. Consider <b>L(G)</b><br />
vertices are numbered from <b>1</b> to <b>N</b>.
</p>
<h3>Output</h3>
<p>For each test case in the first line output an integer <b>K</b> - the number of vertices in the graph <b>G</b>. The next <b>N</b> lines should contain the description of the edges of the graph <b>G</b> (the <b>i</b>-th edge of <b>G</b> should correspond to the <b>i</b>-th vertex of <b>L(G)</b>).<br />
You should number vertices in graph <b>G</b> from <b>1</b> to <b>K</b>. If there are multiple answers you can print any of them. Also you can insert whitespaces in your output if you want.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T, N, M</b> ≤ <b>5000</b>;</li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>N</b>;</li>
<li>Given graph <b>L(G)</b> is connected and doesn't contain multiedges and self-loops.</li>
<li>It's guaranteed that sum of all <b>M</b> values for all test cases doesn't exceed <b>5000</b>.</li>
<li>It's guaranteed that for each test the answer exists.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 6
1 2
2 3
3 4
4 1
1 3
2 4
5 8
1 2
2 3
3 4
4 1
1 3
2 4
1 5
2 5

<b>Output:</b>
5
2 1
1 3
1 4
1 5
5
1 2
1 3
1 4
1 5
2 3
</pre>