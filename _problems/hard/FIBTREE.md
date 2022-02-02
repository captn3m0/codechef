---
{"category_name":"hard","problem_code":"FIBTREE","problem_name":"Fibonacci Numbers on Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"dzy493941464","problem_tester":"xcwgf666","date_added":"25-06-2014","tags":{"0":"dzy493941464","1":"hard","2":"heavy","3":"math","4":"persistence","5":"segment","6":"sept14"},"editorial_url":"http://discuss.codechef.com/problems/FIBTREE","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/FIBTREE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/FIBTREE.pdf">Russian</a>.</h3>

        <p>In mathematical terms, the sequence <b>F[N]</b> of Fibonacci numbers is defined by the recurrence relation <b>F[N]</b> = <b>F[N-1]</b> + <b>F[N-2]</b>, with seed values <b>F[1] = 1</b>,<b>F[2] = 1</b>.</p>

	<p>Today, Chef gives you a rooted tree, consisting of <b>N</b> nodes. At first, the node <b>1</b> is the root. The nodes are numbered from <b>1</b> to <b>N</b>, and each node has an integer that initially equals to <b>0</b>. Then, Chef asks you to perform <b>M</b> queries. </p>

<p>The queries are as follows:</p>
<ul>
	<ul>
		<li>
			<p><b>A x y</b></p>
		</li>
		<p>Add <b>F[1]</b> to the integer, associated with the node <b>x</b>, then add <b>F[2]</b> to the integer, associated with the second node on the way from <b>x</b> to <b>y</b>, then add <b>F[3]</b> to the integer, associated with the third node on the way from <b>x</b> to <b>y</b>, and so on. As you know, there is only one simple path from <b>x</b> to <b>y</b>.</p>
	</ul>
	<ul>
		<li>
			<p><b>QS x y</b></p>
		</li>
		<p>Let node <b>x</b> be the root of the tree, output the sum of all integers, associated with the nodes in the subtree of the node <b>y</b>, modulo <b>1000000009(10<sup>9</sup>+9)</b>.</p>
	</ul>
	<ul>
		<li>
			<p><b>QC x y</b></p>
		</li>
		<p>Output the sum of all the integers, associated with the nodes on the way from <b>x</b> to <b>y</b>, modulo <b>1000000009(10<sup>9</sup>+9)</b>.</p>
	</ul>
	<ul>
		<li>
			<p><b>R x</b></p>
		</li>
		<p>All the integers associated with the nodes return to the state after the <b>x</b>-th query. If <b>x</b> is <b>0</b>, then all of them become equal to <b>0</b>, as in the very beginning.</p>
	</ul>
</ul>
<p> </p>

<h3>Input</h3>
<ul>
<p>The first line of the input consists of two space separated intergers - <b>N</b> and <b>M</b> respectively.</p>
	<p>Then, <b>N-1</b> lines follow. These <b>N-1</b> lines describe the tree structure. Each line consists of two intergers - <b>x</b> and <b>y</b>, and that means that there is an edge between the node <b>x</b> and the node <b>y</b>.</p>
	<p>Then, <b>M</b> lines follow. Every single line denotes a single query, which has one of the following forms: (See the sample for the detailed explanation)</p>
	<ul>
		<li>
			<b>A x<sub>1</sub> y</b>
		</li>
	</ul>
	<ul>
		<li>
			<b>QS x<sub>1</sub> y</b>
		</li>
	</ul>
	<ul>
		<li>
			<b>QC x<sub>1</sub> y</b>
		</li>
	</ul>
	<ul>
		<li>
			<b>R x<sub>1</sub></b>
		</li>
	</ul>
	<p> </p>
	<p>As you can see, the number <b>x</b> isn't given to you directly. For all queries, actual number <b>x</b> will be equal to <b>x<sub>1</sub></b> xor <b>lastans</b>, where lastans denotes the last number that you have output, or <b>0</b> if you haven't output any numbers yet.</p>
</ul>
<p> </p>

<h3>Output</h3>
<ul>
	<p>For each query of the type <b>QS</b> or <b>QC</b>, output the answer modulo <b>10<sup>9</sup>+9</b></p>
</ul>
<p> </p>

<h3>Constraints</h3>
<ul>
	<li>
		<b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>100000</b>
	</li>
	<li>
		<b>1</b> ≤ <b>x</b>, <b>y</b> ≤ <b>N</b>
	</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 6
1 2
1 3
3 4
3 5
A 4 2
A 2 5
QS 4 3
QC 12 4
R 6
QC 6 4

<b>Output:</b>
13
7
4
</pre>
<p> </p>
<h3>Explanation</h3>
<ul>
	<p>Let’s denote the first state of integers as <b>0 0 0 0 0</b>, where the <b>i</b>-th interger means the integer associated with the node <b>i</b>.</p>
	<p>In the first query “<b>A 4 2</b>”, the actual number is <b>x = 4 xor 0 = 4</b>. Hence the state will be <b>2 3 1 1 0</b> after this query.</p>
	<p>After the second query “<b>A 2 5</b>”, the state will be <b>3 4 3 1 3</b> for the similar reason.</p>
	<p>In the next query, the answer is <b>3+4+3+3=13</b>.</p>
	<p>In the next query, the actual number is <b>x = 12 xor 13 = 1</b>, the answer is <b>3+3+1=7</b>.</p>
	<p>In the query “<b>R 6</b>”, the actual number is <b>x = 6 xor 7 = 1</b>, the state will be roll backed to <b>2 3 1 1 0</b>.</p>
	<p>At last, the actual number is <b>x = 6 xor 7 = 1</b>, the answer is <b>2+1+1=4</b>.</p>
</ul>
