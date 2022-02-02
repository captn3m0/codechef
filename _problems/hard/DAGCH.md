---
{"category_name":"hard","problem_code":"DAGCH","problem_name":"Graph Challenge","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":"laycurse","date_added":"12-12-2013","tags":{"0":"feb14","1":"hard","2":"shiplu"},"editorial_url":"http://discuss.codechef.com/problems/DAGCH","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/DAGCH.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/DAGCH.pdf">Russian</a>.</h3>
<p>Chef Hawlader and Chef Heickal are two good friends. Apart from cooking they also love algorithms. Chef Hawlader loves graph theory and Chef Heickal loves number theory.</p>
<p>Once again, Chef Hawlader is giving lecture to Chef Heickal about graph theory. "Hey Heickal, you should concentrate more on graph theory research. What remains in number theory? Graph is everything in the world, you can convert every problem to graph and solve them easily. Even your number theory problems can be converted and solved with graph theory, you know?" says Chef Hawlader. Though Chef Heickal does not hate graph, but according to his theory the life should a mixture of dynamic programming, number theory, data structure, ad hoc, graph theory, and so on. To become a good Chef you have to know all of them not just graph theory.</p>
<ul>
<li>"So are you master of graph? Do you know about DFS?" asks Chef Heickal.</li>
<li>"Yes, of course. DFS, in full form Depth First Search, is a traversing or searching algorithm on graph. It's a basic algorithm", Chef Hawlader replied with angriness in his face.</li>
<li>"Then, for a given graph, can you number each vertex using DFS in pre-order?" asks Chef Heickal again.</li>
<li>"Too easy! It will be done by the following pseudo code:"</li>
</ul>
<pre>
<b>
	int C = 1;
	void DFS(int u)
	{
		new_number[u] = C;
		C++;

		// initially all value of visited array is set to false
		visited[u] = true;

		// here v can be chosen in an arbitrary order
		for each v such that there is a edge from u to v
			if(visited[v] == false) 
				DFS(v);
	}
</b>
</pre><ul>
<li>"Okey, I can give you a hard problem", says Chef Heickal with evil smile.</li>
<li>"What? Come on", replies Chef Hawlader with grinning face.</li>
<li>"I'll give you a directed graph with <b>N</b> vertices and <b>M</b> edges. Here each vertex of the graph is numbered by DFS in pre-order. Of course, every vertex other than vertex <b>1</b> are reachable from vertex <b>1</b>."</li>
<li>"Okey, so what's problem?"</li>
<li>"Wait, I give some definitions. A vertex <b>x</b> is a <i>supreme</i> vertex of <b>y</b>, if there is a directed path <b>x = v<sub>0</sub>, v<sub>1</sub>, ..., v<sub>k</sub> = y</b>, where <b>x &lt; y &lt; v<sub>i</sub></b> for all <b>0 &lt; i &lt; k</b>, that is a path from <b>x</b> to <b>y</b> with zero or more intermediate vertex <b>v<sub>i</sub></b> and every intermediate vertex should be greater than <b>x</b> and <b>y</b> and <b>x</b> should be less than <b>y</b>. A vertex <b>v</b> is a <i>superior</i> vertex of <b>w</b>, if <b>v</b> is the minimum numbered vertex among all the <i>supreme</i> vertices of <b>w</b>. You will be given <b>Q</b> queries on the graph. On each query you will be given a vertex <b>v</b>, you have to find out how many vertices are there in the graph, which have vertex <b>v</b> as superior vertex."</li>
<li>"Oh!! Duh!!"</li>
</ul>
<p>Chef Hawlader could not solve the problem, he is asking you to solve it for him.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test contains three space-separated integers <b>N</b>, <b>M</b>, and <b>Q</b>. The <b>i</b><sup>th</sup> line of the next <b>M</b> lines contains two space-separated integers <b>U<sub>i</sub></b> and <b>V<sub>i</sub></b> denoting the directed edge from vertex <b>U<sub>i</sub></b> to vertex <b>V<sub>i</sub></b>. The next line will contain <b>Q</b> space separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>Q</sub></b>, denoting the queries defined above.</p>
<h3>Output</h3>
<p>For each test case, print a single line containing <b>Q</b> space-separated integers, denoting the answer of the <b>Q</b> queries according to the order of the input. If there is no superior vertex for a query, print <b>0</b>. See the sample input and output for detailed format.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>2 ≤ N ≤ 100000 (10<sup>5</sup>)</b></li>
<li><b>N − 1 ≤ M ≤ 200000 (2 × 10<sup>5</sup>)</b></li>
<li><b>1 ≤ Q ≤ 100000 (10<sup>5</sup>)</b></li>
<li><b>1 ≤ U<sub>i</sub>, V<sub>i</sub> ≤ N</b>, <b>U<sub>i</sub> ≠ V<sub>i</sub></b></li>
<li>If <b>i ≠ j</b>, then <b>(U<sub>i</sub>, V<sub>i</sub>) ≠ (U<sub>j</sub>, V<sub>j</sub>)</b></li>
<li><b>1 ≤ P<sub>i</sub> ≤ N</b></li>
<li>In the given graph, the vertices <b>2</b>, <b>3</b>, ..., <b>N</b> are reachable from vertex <b>1</b></li>
<li>The vertices of the graph is numbered by DFS, denoted by the pseudo code in the statement</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3 3
1 2
1 3
3 2
1 2 3
8 9 8
1 2
1 7
2 3
2 5
3 4
5 6
7 8
6 4
8 4
1 2 3 4 5 6 7 8

<b>Output:</b>
2 0 0
3 2 0 0 1 0 1 0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Vertex <b>3</b> has only vertex <b>1</b> as <i>supreme</i> vertex as well as <i>superior</i> vertex because there is a direct edge from <b>1</b> to <b>3</b> and vertex <b>2</b> has a <i>supreme</i> vertex <b>1</b> (<b>1</b> → <b>3</b> →  <b>2</b>). As vertex <b>2</b> has only one <i>supreme</i> vertex, it is the <i>superior</i> vertex also.</p>
<p><b>Example case 2.</b> Vertex <b>4</b> has three <i>supreme</i> vertices <b>1</b> (<b>1</b> → <b>7</b> → <b>8</b> → <b>4</b>), <b>2</b> (<b>2</b> → <b>5</b> → <b>6</b> → <b>4</b>) and <b>3</b> (<b>3</b> → <b>4</b>). So vertex <b>1</b> is the <i>superior</i> vertex of <b>4</b>.</p>
