---
{"category_name":"hard","problem_code":"PPTREE","problem_name":"Polo the Penguin and the Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"rustinpiece","date_added":"9-10-2013","tags":{"0":"bitwise","1":"cook39","2":"dynamic","3":"medium","4":"trie","5":"witua","6":"xor"},"editorial_url":"http://discuss.codechef.com/problems/PPTREE","time":{"view_start_date":1382293800,"submit_start_date":1382293800,"visible_start_date":1382293800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPTREE.pdf">here</a></h3>
<p>Polo, the Penguin, likes the XOR operation. Please read <a href="#NOTE"><b>NOTE</b></a> if you are not familiar with XOR operation. </p>
<p>XOR-sum of a list of numbers is the result of XOR-ing all of them. XOR-sum of (<b>A[1]</b> XOR <b>A[2]</b> XOR ... XOR <b>A[N]</b>) is defined as <b>A[1]</b> XOR (<b>A[2]</b> XOR (<b>A[3]</b> XOR ( ... XOR <b>A[N]</b>))).</p>
<p>Apart of that, Polo, the Penguin, likes trees. He has a weighted tree consisting of <b>N</b> vertices.</p>
<p>He also likes to choose some pair of vertices <b>U</b> and <b>V</b> and find XOR-sum of all weights on the simple path from <b>U</b> to <b>V</b>. Help him to find the maximal number he can get .</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the number of vertices in the tree. The next <b>N-1</b> lines contain description of edges of the tree, one edge per line in format <b>U[i] V[i] W[i]</b>, where <b>U[i]</b> and <b>V[i]</b> are the indices of the vertices of edge and <b>W[i]</b> is the weight of the edge. Vertices are numbered from <b>1</b> to <b>N</b>, inclusive.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li><b>0</b> ≤ <b>W[i]</b> ≤ <b>1,000,000,000</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
3 1 2
4
1 2 2
1 3 2
4 3 1

<b>Output:</b>
3
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In this case there are tree ways to choose pair of vertices:</p>
<ul>
<li><b>(1, 2)</b>: The only edge you path is edge <b>(1, 2)</b> with weight <b>3</b>. The XOR-sum is simply <b>3</b>.</li>
<li><b>(1, 3)</b>: The only edge you path is edge <b>(1, 3)</b> with weight <b>2</b>. The XOR-sum is simply <b>2</b>.</li>
<li><b>(2, 3)</b>: There are two edges on the path in this case: <b>(2, 1)</b> and <b>(1, 3)</b> with weights <b>3</b> and <b>2</b>, respectively. The XOR-sum is <b>3</b> XOR <b>2</b> = <b>1</b>.</li>
</ul>
<p>So the maximal value Polo can get is <b>3</b>.
</p>
<p><b>Example case 2.</b> If Polo chooses vertices <b>1</b> and <b>4</b>, then the XOR-sum is equal to <b>2</b> XOR <b>1</b> = <b>3</b>. This is the maximal value he can get in this case.
</p>
<p><br/></br/></p>
<h3 id='NOTE'>NOTE</h3>
<p><a href = "http://en.wikipedia.org/wiki/Exclusive_or">XOR operation</a> is a bitwise "Exclusive OR" operation performed on two integers in binary representation. First, the shorter number is prepended with leading zeroes until the numbers have equal size in binary. Then the resulting number (also in binary) contains <b>0</b> in all positions where the corresponding bits coincide, and <b>1</b> on the rest of the positions.</p>
<p> For example, <b>3</b> XOR <b>5</b> = <b>011<sub>2</sub></b> XOR <b>101<sub>2</sub></b> = <b>110<sub>2</sub></b> = <b>6</b>. </p>
