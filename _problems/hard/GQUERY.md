---
category_name: hard
problem_code: GQUERY
problem_name: 'Game Revisited'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: deadwing97
problem_tester: null
date_added: 2-06-2017
tags:
    - deadwing97
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497589508
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/GQUERY.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/GQUERY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/GQUERY.pdf) as well.

Hussain and Alex are ex-IOI participants. They participated together in IOI 2014, aiming for medals. Unfortunately both had very bad luck back then and neither of them got a medal. (Even though IOI 2014 tasks were very interesting and not so hard).

Hussain and Alex felt very annoyed after that. Every time they come across any of the IOI 2014 problems, they just feel angry and each says to himself, "How didn't I solve this task?!".

Last week they came across the problem Game from IOI 2014 which was a really easy problem. Hussain again felt very angry, till the point that he thought of a much harder version of this task and decided to solve it.

Basically IOI 2014 game was a game played between two playersand an undirected graph consisting of **N** nodes.

Hussain will give Alex a list of bidirectional edges. This list contains **M** edges numbered from **1** to **M**.

Alex will add these edges one by one starting from edge number **1**.

While adding these edges to the graph, whenever the entire graph became connected (ie. it's possible to move between any 2 of the **N** nodes via a sequence of the added edges), the game stops and Alex tells Hussain the number of edges he has added till then.

Hussain decided to make the game more challenging, and so he told Alex that he will play on the same list of edges **Q** times, each time taking the current list and swapping 2 edges in this list and giving it back to Alex. Each time, Alex must tell the number of edges he will add till the graph becomes connected.

Of course playing each game edge by edge is killing. Help Alex to play with Hussain fast. Please note that after a game finishes, Alex returns the list to Hussain, and Hussain swaps another pair of edges without changing the order of the remaining edges in the list. That is, the swaps are not reverted and the edges which were swapped in a query remain swapped for the future queries as well.

Also note that you do not need to report what happens with the original graph. Only after each query.

### Input

- First line of each testfile contains a single integer **T**, denoting the number of testcases.
- First line of each testcase contains 3 space separated integers **N,M,Q**, denoting the number of nodes, the number of edges in the list and the number of queries to process.
- Next M lines specifying the edges in the original list. The **i-th** line of them would contain two space separated integers **Ui , Vi** . **Ui , Vi** denoting the endpoints of the **i-th** edge. It's guaranteed that the list won't contain a self loop (an edge between a node and itself), but it may contain edges between the same pair of nodes.
- Next **Q** lines each contain 2 space separated integers **a , b** denoting the indexes of edges Hussain should swap.

### Output

For each testcase, output **Q** lines, the **i-th** line of them must contain a single integer denoting the number of edges Alex must insert so the graph becomes connected.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N , Q** ≤ **100000**
- **N - 1** ≤ **M** ≤ **100000**
- **1** ≤ **Ui, Vi** ≤ **N**
- For each query **1** ≤ **a,b** ≤ **M** , **a != b**
- The sum of **N** in all scenarios won't exceed 100000
- The sum of **M** in all scenarios won't exceed 100000
- The sum of **Q** in all scenarios won't exceed 100000
- It's guaranteed that the graph becomes connected if Alex adds all edges in every scenario

### Example

<pre><b>Input:</b>
1
5 7 3
1 2
1 3
2 3
3 5
1 5
4 5
1 4
5 6
3 4
7 4

<b>Output:</b>
5
5
4
</pre>### Explanation

The original list of edges is { (1, 2), (1, 3), (2, 3), (3, 5), (1, 5), (4, 5), (1, 4) }.

First query: After applying the (5, 6) swap, the list of edges is { (1, 2), (1, 3), (2, 3), (3, 5), (4, 5), (1, 5), (1, 4) }. Just the first 5 edges in this, that is { (1, 2), (1, 3), (2, 3), (3, 5), (4, 5) } connects the entire graph. Hence the answer is 5.

Second query: After applying the (3, 4) swap to the list from the previous query, we get { (1, 2), (1, 3), (3, 5), (2, 3), (4, 5), (1, 5), (1, 4) }. Just the first 5 edges in this, that is { (1, 2), (1, 3), (3, 5), (2, 3), (4, 5) } connects the entire graph. Hence the answer is 5.

Third query: After applying the (7, 4) swap to the list from the previous query, we get { (1, 2), (1, 3), (3, 5), (1, 4), (4, 5), (1, 5), (2, 3) }. Just the first 4 edges in this, that is { (1, 2), (1, 3), (3, 5), (1, 4) } connects the entire graph. Hence the answer is 4.
