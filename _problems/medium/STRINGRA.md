---
{"category_name":"medium","problem_code":"STRINGRA","problem_name":"Strings and Graphs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"2-08-2017","tags":{"0":"ad","1":"admin3","2":"aug17","3":"easy","4":"greedy","5":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/STRINGRA","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/STRINGRA.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/STRINGRA.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/STRINGRA.pdf">vietnamese</a> as well.</h3>

<p>Consider a sequence of positive integers A = (A<sub>1</sub>, A<sub>2</sub>, ... , A<sub><b>N</b></sub>), and another sequence B = (B<sub>1</sub>, B<sub>2</sub>, ... , B<sub>M</sub>). We say that B is a subsequence of A, if B can be written as (A<sub>i<sub>1</sub></sub>, A<sub>i<sub>2</sub></sub>, ... , A<sub>i<sub>M</sub></sub>), where 1 ≤ i<sub>1</sub> < i<sub>2</sub> ... < i<sub>M</sub> ≤ <b>N</b>. If B is a subsequence of A, there could be multiple ways to write it in such a manner, and among all those ways, we choose the way which minimizes i<sub>M</sub>. We call this minimized i<sub>M</sub> to be f(B). Note that in the definition of f(B), we are assuming that A is a constant. Also, when B is the empty sequence, it is considered to be a subsequence of A, and f(B) would then be 0.</p>

<p>Now, given A, we will construct a graph G which has <b>N</b> + 1 nodes and labeled directed edges. The nodes are {<b>V<sub>0</sub></b>, <b>V<sub>1</sub></b>, ..., <b>V<sub>N</sub></b>}. If there are two subsequences of A: C<sub>1</sub> and C<sub>2</sub>, such that C<sub>2</sub> is obtained by appending the integer b at the end of C<sub>1</sub>, and f(C<sub>1</sub>) ≠ f(C<sub>2</sub>), then the edge ( <b>V<sub>f(C<sub>1</sub>)</sub></b>, b, <b>V<sub>f(C<sub>2</sub>)</sub></b> ) is added to the graph G if it is not already present in the graph. (Note that even if an edge with a different label is already present, this edge is added. Just that there will not be multiple edges from one vertex to another with the same label). The edge (<b>V<sub>i</sub></b>, b, <b>V<sub>j</sub></b>) means that it is a directed edge from <b>V<sub>i</sub></b> to <b>V<sub>j</sub></b>, and it has the label b.</p>

<p>Chef constructed this graph, but then lost the sequence A, as well as all the labels on the graph. So all he has left is a directed graph (with possibly multiple edges from one vertex to another), and now he wants to find the sequence A. Since there could be many such sequences which fit the graph, he wants to find the lexicographically smallest such sequence. Help Chef in finding this.</p>


<h3>Input</h3>
<ul>
<li>The first line contains a single integer, <b>T</b>, which is the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains two integers, <b>N</b> and <b>M</b>. This means that the input graph has vertices {<b>V<sub>0</sub></b>, <b>V<sub>1</sub></b>, ..., <b>V<sub>N</sub></b>} and <b>M</b> directed multi-edges.</li>
<li>The i-th of the next <b>M</b> lines contains two integers, <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, which denote that there is a directed edge from <b>V<sub>x<sub>i</sub></sub></b> to <b>V<sub>y<sub>i</sub></sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, output a single line which contains <b>N</b> positive integers which denote the lexicographically smallest sequence which can lead to the construction of the inputted graph. Or, if such a sequence does not exist, output -1.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, M</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (30 points) : <b>N, M</b> ≤  10<sup>3</sup></li> 
<li><b>Subtask 2</b> (70 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
5 11
0 1
0 2
0 5
2 3
2 5
1 3
1 5
1 2
3 4
3 5
4 5
3 4
0 3
2 3
1 2
0 1

<b>Output:</b>
1 2 1 1 3
-1
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>:</p>
<p>Let us consider the sequence A = (1, 2, 1, 1, 3).</p>
<p>f(empty string) = 0, and f( (1) ) = 1. (1) can be obtained by appending 1 to the empty string. Hence there should be an edge from <b>V<sub>0</sub></b> to <b>V<sub>1</sub></b> with the label 1.</p>
<p>Similarly, f( (1, 2, 1) ) = 3 and f( (1, 2, 1, 3) ) = 5. Hence there should be an edge from <b>V<sub>3</sub></b> to <b>V<sub>5</sub></b> with label 3.</p>
<p>By looking at all such possible pairs of valid subsequences, we can see that the edges obtained from this A exactly match the edges given in the input graph. And this is the lexicographically smallest such sequence. Hence the answer is this sequence.</p>

<p><b>Testcase 2</b>:</p>
<p>There is no sequence which leads to the construction of this graph. Hence the answer is -1.</p>