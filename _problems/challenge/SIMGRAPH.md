---
{"category_name":"challenge","problem_code":"SIMGRAPH","problem_name":"Similar Graphs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.729412,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"laycurse","date_added":"11-03-2012","tags":{"0":"april12","1":"challenge","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/SIMGRAPH","time":{"view_start_date":1334137635,"submit_start_date":1334137635,"visible_start_date":1334136600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef recently developed an affinity for undirected graphs.
He likes pairs of graphs that are similar in structure.
However, Chef discovered that when the vertices of a graph are reorganized, it's often the case that the resulting graph,
although still structurally similar to the original, can look completely different.
Chef wants you to help him find similarities in pairs of graphs.
</p>
<p>
Chef only considers pairs of graphs where each graph has the same number of vertices (say N).
Chef then labels each vertex of each graph with an integer between 1 and N (inclusive),
using each integer exactly once per graph.
Chef then defines the similarity of the graphs as 2*COMMON/TOTAL, where COMMON is the number of
edges appearing in both graphs 
(that is, the number of unordered pairs {A, B} such that in both graphs there exists an edge between the vertex labelled A
and the vertex labelled B), and TOTAL is the total number of edges in both graphs.
</p>
<p>
Chef's measure of similarity depends on how the vertices are labelled.
Chef wants you to help him find a labelling that maximizes the similarity.
Optimal solutions are not required, but better solutions will earn more points.
</p>
<h3>Input</h3>
<p>
Input will begin with an integer T, the number of test cases.
Each test case will begin with an integer N, the number of vertices in both graphs.
2*N lines follow.  The first N lines describe the first graph, and the next N lines the second graph.
Each graph description consists of N lines of N integers each.
The i-th integer on the j-th line will be 1 if there is an edge between vertices i and j, and 0 otherwise.
The i-th integer on the j-th line will always be equal to the j-th integer on the i-th line,
and the i-th integer on the i-th line will always be 0.
</p>
<h3>Output</h3>
<p>
For each test case, output 2 lines with N integers each.
Each line must contain a permutation of the integers 1 through N, and indicates how Chef should label the corresponding graph.
</p>
<h3>Scoring</h3>
<p>
Your score for each test case is the similarity of the 2 graphs using the labelling you provide.
Your overall score is the average of your scores on the individual test cases.
</p>
<h3>Sample Input</h3>
<pre>2
3
0 1 0
1 0 0
0 0 0
0 0 1
0 0 1
1 1 0
4
0 0 1 0
0 0 0 0
1 0 0 1
0 0 1 0
0 0 1 1
0 0 0 0
1 0 0 0
1 0 0 0
</pre>
<h3>Sample Output</h3>
<pre>1 2 3
1 2 3
1 4 2 3
2 4 1 3

</pre>
<p>
This output would score 2*0/3 = 0.0 on the first test case, and 2*2/4 = 1.0 on the second test case, for an overall score of 0.5.
Note that better scores are possible.
</p>
<h3>Test case generation</h3>
<p>
For each official test file, T is 5.
For each test case, N is randomly chosen between 30 and 75.
A real number D is randomly chosen between 0.05 and 0.5.
For each pair of vertices, an edge is added with probability D.
This graph is output as the first graph.
An integer C is randomly chosen between 0 and N*(N-1)/2.
C distinct pairs of vertices are chosen.
For each pair, if an edge currently exists between them, the edge is removed with probability (1-D).
If no edge exists between them, one is added with probability D.
Then, a random permutation is applied to the vertices of the graph, and it is output as the second graph.
You may safely assume there will be no test cases where TOTAL is 0.
</p>