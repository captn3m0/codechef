---
category_name: medium
problem_code: STETSKLX
problem_name: 'Chef and Path'
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
max_timelimit: '1 - 6'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: laycurse
date_added: 17-07-2015
tags:
    - antoniuk1
    - aug15
    - binary
    - divide
    - medium
    - minimum
    - sliding
    - unrooted
editorial_url: 'http://discuss.codechef.com/problems/STETSKLX'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493557934
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG15/mandarin/STETSKLX.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/STETSKLX.pdf).

Chef has a [tree](https://en.wikipedia.org/wiki/Tree_(graph_theory)) (with **N** nodes, numbered from **1** to **N**) where each edge has some length.

The *Chef length* of a path is the median of the lengths of all edges along the path. More formally: if we put lengths of all edges from the path into an array and sort it, then the *Chef length* of this path is the **median** of this array (element in the middle of the sorted array, and if we have two elements in the middle of the array, then the median is the bigger one). For example, if the array equals **{3, 7, 9}**, then its median is **7**, and **if the array equals {1, 2, 3, 4}, then the median is 3**.

Now, Chef wants to find minimum *Chef length* among simple paths having at least **L** and at most **R** edges. Please help him accomplish this task.

### Input

- The first line of input contains an integer **T** denoting the number of test cases. Description of **T** test cases follows.
- The first line for a test case contains three space-separated integers - **N**, **L**, **R** - denoting the number of nodes in a tree, and the limits on number of edges in any chosen path.
- Each of next **N − 1** lines contains three space-separated integers - **a**, **b** and **c** - describing an edge in the tree. This edge connects vertex **a** with vertex **b** and has length **c**.

### Output

For each test case, output a single line containing the shortest Chef length amongst paths satisfying the given conditions. If there are no paths with at least **L** and at most **R** edges, output **-1**.

### Constraints

- **1** ≤ **T** ≤ **5×104**
- **2** ≤ **N** ≤ **105**
- **2** ≤ **L** ≤ **R** ≤ **50**
- **1** ≤ **a**, **b** ≤ **N**
- **1** ≤ **c** ≤ **109**
- The sum of **N** over all the test cases in one file is at most **3×105**
- The given graph denotes a tree

### Subtasks

**Subtask 1 (27 points)**

- The sum of **N** over all the test cases in one file is at most **1000**
- Time Limit is 1 second

**Subtask 2 (73 points)**

- Original constraints
- Time Limit is 6 seconds

### Example

<pre><b>Input:</b>
2
6 2 3
1 3 3
1 2 1
2 4 1
2 5 2
3 6 2
5 3 4
1 2 3
2 3 1
3 4 4
4 5 2

<b>Output:</b>
1
2
</pre>
### Explanation

**Test #1**

Let's look at all correct simple paths:

- 1-3-6, lengths = **{3, 2}** =&gt; Chef length = **3**
- 1-2-4, lengths = **{1, 1}** =&gt; Chef length = **1**
- 1-2-5, lengths = **{1, 2}** =&gt; Chef length = **2**
- 2-1-3, lengths = **{1, 3}** =&gt; Chef length = **3**
- 2-1-3-6, lengths = **{1, 3, 2}** =&gt; Chef length = **2**
- 4-2-5, lengths = **{1, 2}** =&gt; Chef length = **2**
- 4-2-1-3, lengths = **{1, 1, 3}** =&gt; Chef length = **1**
- 5-2-1-3, lengths = **{2, 1, 3}** =&gt; Chef length = **2**

And the reverse of these paths. So, the smallest value we get is **1** and it is the answer.

**Test #2**

All correct paths:

- 1-2-3-4, lengths = **{1, 3, 4}** =&gt; Chef length = **3**
- 2-3-4-5, lengths = **{1, 2, 4}** =&gt; Chef length = **2**
- 1-2-3-4-5, lengths = **{1, 2, 3, 4}** =&gt; Chef length = **3**

The shortest Chef length is **2**.

### Note

A *simple path* in a graph is a path which does not have any repeated vertices.
