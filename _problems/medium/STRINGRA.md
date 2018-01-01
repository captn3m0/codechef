---
category_name: medium
problem_code: STRINGRA
problem_name: 'Strings and Graphs'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 2-08-2017
tags:
    - ad
    - admin3
    - aug17
    - easy
    - greedy
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/STRINGRA'
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1514816329
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/AUG17/mandarin/STRINGRA.pdf), [russian](http://www.codechef.com/download/translated/AUG17/russian/STRINGRA.pdf) and [vietnamese](http://www.codechef.com/download/translated/AUG17/vietnamese/STRINGRA.pdf) as well.

Consider a sequence of positive integers A = (A1, A2, ... , A**N**), and another sequence B = (B1, B2, ... , BM). We say that B is a subsequence of A, if B can be written as (Ai1, Ai2, ... , AiM), where 1 ≤ i1 2 ... M ≤ **N**. If B is a subsequence of A, there could be multiple ways to write it in such a manner, and among all those ways, we choose the way which minimizes iM. We call this minimized iM to be f(B). Note that in the definition of f(B), we are assuming that A is a constant. Also, when B is the empty sequence, it is considered to be a subsequence of A, and f(B) would then be 0.

Now, given A, we will construct a graph G which has **N** + 1 nodes and labeled directed edges. The nodes are {**V0**, **V1**, ..., **VN**}. If there are two subsequences of A: C1 and C2, such that C2 is obtained by appending the integer b at the end of C1, and f(C1) ≠ f(C2), then the edge ( **Vf(C1)**, b, **Vf(C2)** ) is added to the graph G if it is not already present in the graph. (Note that even if an edge with a different label is already present, this edge is added. Just that there will not be multiple edges from one vertex to another with the same label). The edge (**Vi**, b, **Vj**) means that it is a directed edge from **Vi** to **Vj**, and it has the label b.

Chef constructed this graph, but then lost the sequence A, as well as all the labels on the graph. So all he has left is a directed graph (with possibly multiple edges from one vertex to another), and now he wants to find the sequence A. Since there could be many such sequences which fit the graph, he wants to find the lexicographically smallest such sequence. Help Chef in finding this.

### Input

- The first line contains a single integer, **T**, which is the number of testcases. The description of each testcase follows.
- The first line of each testcase contains two integers, **N** and **M**. This means that the input graph has vertices {**V0**, **V1**, ..., **VN**} and **M** directed multi-edges.
- The i-th of the next **M** lines contains two integers, **xi** and **yi**, which denote that there is a directed edge from **Vxi** to **Vyi**.

### Output

For each testcase, output a single line which contains **N** positive integers which denote the lexicographically smallest sequence which can lead to the construction of the inputted graph. Or, if such a sequence does not exist, output -1.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **N, M** ≤ 105
- 0 ≤ **xi**, **yi** ≤ **N**

### Subtasks

- **Subtask 1** (30 points) : **N, M** ≤ 103
- **Subtask 2** (70 points) : Original constraints

### Example

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

</pre>### Explanation
**Testcase 1**:

Let us consider the sequence A = (1, 2, 1, 1, 3).

f(empty string) = 0, and f( (1) ) = 1. (1) can be obtained by appending 1 to the empty string. Hence there should be an edge from **V0** to **V1** with the label 1.

Similarly, f( (1, 2, 1) ) = 3 and f( (1, 2, 1, 3) ) = 5. Hence there should be an edge from **V3** to **V5** with label 3.

By looking at all such possible pairs of valid subsequences, we can see that the edges obtained from this A exactly match the edges given in the input graph. And this is the lexicographically smallest such sequence. Hence the answer is this sequence.

**Testcase 2**:

There is no sequence which leads to the construction of this graph. Hence the answer is -1.
