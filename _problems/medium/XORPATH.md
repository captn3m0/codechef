---
{"category_name":"medium","problem_code":"XORPATH","problem_name":"Xortest Path","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"7-06-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/XORPATH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/XORPATH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/XORPATH.pdf">Vietnamese</a> as well.</h3>


<p>Chef was practicing with some graph theory problems in CodeChef. He was trying to solve a problem involving finding the <b>shortest path</b> in a weighted, undirected graph. He thought it was quite standard, so he coded the solution and submitted it. Unfortunately it was judged “Wrong Answer”.</p>

<p>Wanting to debug, Chef downloaded Peter Xor's accepted solution. He also made a test case, illustrated by the following image:</p>

<img src="https://s3.amazonaws.com/codechef_shared/download/upload/JULY16/XORPath.png" width="100%">

<p>Now, what is the cost of the shortest path from 1 to 5? Chef thought that the answer should be <b>36 + 16 + 18 = 70</b>, because the other candidate path has a higher total cost of <b>36 + 50 + 11 + 18 = 115</b>. But he was surprised when Peter Xor's accepted solution outputted <b>15</b>! Chef was confused because he can't see any path with a total cost of <b>15</b>.</p>

<p>After rereading the problem, Chef found his mistake. The problem's title was actually <b>Xortest path</b>, not <b>Shortest path</b>, so the problem was actually asking for the path between two given nodes with <b>the least possible XOR</b>! So in the example above, the answer is indeed <b>15</b>, because the path <b>1 → 2 → 3 → 4 → 5</b> has an XOR cost of <b>36 ⊕ 50 ⊕ 11 ⊕ 18 = 15</b>, and no other path has a lower XOR cost than this. In other words, this is the “xortest path”.</p>

<p>Now that Chef knows his mistake, he still has a problem; he doesn't know how to answer this problem! Your task as his sous-chef is to answer this problem for him. Specifically, you have to answer <b>Q</b> queries, where each query is a pair of nodes, and the answer is the weight of the “xortest path” between them.</p>

<p>Note that in this problem, a <b>path</b> may pass through an edge or node any number of times. (Some authors would call such a path a <b>walk</b>.) For instance, in the example above, the path <b>1 → 2 → 4 → 3 → 2 → 4 → 5</b> is also a “xortest path”, because its XOR cost is <b>36 ⊕ 16 ⊕ 11 ⊕ 50 ⊕ 16 ⊕ 18 = 15</b>.</p>

<h3>Input</h3>
<p>The first line of input contains three integers, <b>N</b>, <b>E</b> and <b>Q</b>. Nodes are labelled <b>1</b> to <b>N</b>.</p>
<p>The following <b>E</b> lines describe the edges. The <b>i<sup>th</sup></b> line contains three integers <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b> and <b>c<sub>i</sub></b>, which means that there is an undirected edge between nodes <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b> with weight <b>c<sub>i</sub></b>.</p>
<p>The following <b>Q</b> lines describe the queries. The <b>j<sup>th</sup></b> line contains two integers <b>x<sub>j</sub></b> and <b>y<sub>j</sub></b>, which means that you need to find the “xortest path” between nodes <b>x<sub>j</sub></b> and <b>y<sub>j</sub></b>.</p>


<h3>Output</h3>
<p>Output <b>Q</b> lines, one for each query. The <b>j<sup>th</sup></b> line must contain a single integer, the weight of the xortest path between <b>x<sub>j</sub></b> and <b>y<sub>j</sub></b>. If there does not exist a path between these nodes, output “<tt>XIT</tt>” (without quotes) instead.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b>, <b>E</b>, <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>, <b>x<sub>j</sub></b>, <b>y<sub>j</sub></b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>c<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Parallel edges or self-loops may appear.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>7 7 5
1 2 36
2 4 16
4 5 18
2 3 50
3 4 11
6 6 100
7 6 100
1 5
5 1
1 2
6 7
1 7
</tt>
<b>Output:</b>
<tt>15
15
13
0
XIT</tt>
</pre>

<h3>Explanation</h3>
<p>The sample input is illustrated by the image above.</p>
