---
category_name: challenge
problem_code: SIMGRAPH
problem_name: 'Similar Graphs'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.729412'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: laycurse
date_added: 11-03-2012
tags:
    - april12
    - challenge
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/SIMGRAPH'
time:
    view_start_date: 1334137635
    submit_start_date: 1334137635
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1525454424
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef recently developed an affinity for undirected graphs. He likes pairs of graphs that are similar in structure. However, Chef discovered that when the vertices of a graph are reorganized, it's often the case that the resulting graph, although still structurally similar to the original, can look completely different. Chef wants you to help him find similarities in pairs of graphs.

Chef only considers pairs of graphs where each graph has the same number of vertices (say N). Chef then labels each vertex of each graph with an integer between 1 and N (inclusive), using each integer exactly once per graph. Chef then defines the similarity of the graphs as 2\*COMMON/TOTAL, where COMMON is the number of edges appearing in both graphs (that is, the number of unordered pairs {A, B} such that in both graphs there exists an edge between the vertex labelled A and the vertex labelled B), and TOTAL is the total number of edges in both graphs.

Chef's measure of similarity depends on how the vertices are labelled. Chef wants you to help him find a labelling that maximizes the similarity. Optimal solutions are not required, but better solutions will earn more points.

### Input

Input will begin with an integer T, the number of test cases. Each test case will begin with an integer N, the number of vertices in both graphs. 2\*N lines follow. The first N lines describe the first graph, and the next N lines the second graph. Each graph description consists of N lines of N integers each. The i-th integer on the j-th line will be 1 if there is an edge between vertices i and j, and 0 otherwise. The i-th integer on the j-th line will always be equal to the j-th integer on the i-th line, and the i-th integer on the i-th line will always be 0.

### Output

For each test case, output 2 lines with N integers each. Each line must contain a permutation of the integers 1 through N, and indicates how Chef should label the corresponding graph.

### Scoring

Your score for each test case is the similarity of the 2 graphs using the labelling you provide. Your overall score is the average of your scores on the individual test cases.

### Sample Input

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
### Sample Output

<pre>1 2 3
1 2 3
1 4 2 3
2 4 1 3

</pre>
This output would score 2\*0/3 = 0.0 on the first test case, and 2\*2/4 = 1.0 on the second test case, for an overall score of 0.5. Note that better scores are possible.

### Test case generation

For each official test file, T is 5. For each test case, N is randomly chosen between 30 and 75. A real number D is randomly chosen between 0.05 and 0.5. For each pair of vertices, an edge is added with probability D. This graph is output as the first graph. An integer C is randomly chosen between 0 and N\*(N-1)/2. C distinct pairs of vertices are chosen. For each pair, if an edge currently exists between them, the edge is removed with probability (1-D). If no edge exists between them, one is added with probability D. Then, a random permutation is applied to the vertices of the graph, and it is output as the second graph. You may safely assume there will be no test cases where TOTAL is 0.
