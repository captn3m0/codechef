---
category_name: medium
problem_code: SBSWAP
problem_name: 'Subtree swapping'
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
max_timelimit: '2 - 5'
source_sizelimit: '50000'
problem_author: pkacprzak
problem_tester: null
date_added: 29-12-2016
tags:
    - link
    - ltime43
    - medium
    - pkacprzak
    - sqrt
    - treap
    - tree
time:
    view_start_date: 1483203600
    submit_start_date: 1483203600
    visible_start_date: 1483203600
    end_date: 1735669800
    current: 1493557899
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME43/mandarin/SBSWAP.pdf), [Russian](http://www.codechef.com/download/translated/LTIME43/russian/SBSWAP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME43/vietnamese/SBSWAP.pdf) as well.

You are given rooted tree with **N** weighted nodes numbered from **1** to **N**. The root of tree is node with number 1. Your goal is to handle **Q** queries, each of which can be one of the below three types:

1. **getSum(u)** := returns sum of values in nodes in **u**'s subtree.
2. **add(u, x)** := adds **x** to values of every node in **u**'s subtree (including **u**).
3. **swap(u, v)** := swaps whole subtrees of **u** and **v** if and only if the subtrees are disjoint.

### Input

The first line of the input contains two space separated integers **N** and **Q**, denoting the number of nodes in the tree and the number of queries to handle, respectively.

In the second line there are **N** space separated integers **w1, w2, ..., wN**, where **wi** denotes the value assigned to node **i** at the beginning.

Each of the following **N-1** lines contains two space separated integers **u** and **v** denoting that there is an edge between **u** to **v** in the tree.

The **i**-th of the following **Q** lines contains a description of the **i**-th query. It starts with integer **qtype** denoting the type of the query. If **qtype=1**, then it is followed by a single integer denoting the parameter of the query. Otherwise, if **qtype=2** or **qtype=3**, it is followed by two space separated integers denoting the parameters to the query.

### Output

For each query of type 1, output the answer for such a query in a single line. Moreover, output -1 for each query of type 3 for which the given subtrees are not disjoint.

### Constraints

- **1 ≤ v, u ≤ N**
- **1 ≤ x ≤ 105**
- **1 ≤ wi ≤ 105**

### Subtasks

**Subtask #1: (10 points)**

- **1 ≤ N ≤ 1000**
- **1 ≤ Q ≤ 1000**

**Subtask #2: (20 points)**

- **1 ≤ N ≤ 105**
- **1 ≤ Q ≤ 105**
- There are no queries of type 3
- Time limit is 4s

**Subtask #3: (70 points)**

- **1 ≤ N ≤ 105**
- **1 ≤ Q ≤ 105**
- Time limit is 5s

### Example

<pre><b>Input:</b>
10 5
1 1 1 1 1 1 1 1 1 1
1 2
1 3
1 8
3 4
8 9
8 10
4 5
4 6
4 7
2 8 1
1 3
3 4 8
1 3
3 1 2

<b>Output:</b>
5
7
-1


</pre>### Explanation
The input tree has 10 nodes and each of them has assigned value of 1 at the beginning. Initial tree can be drawn as follows:

![](https://codechef_shared.s3.amazonaws.com/download/Images/LTIME43/15750153_1301041666620483_2119272736_n.png)

There are 5 queries to handle. The first one adds a value of 1 to all nodes in subtree of 8. The second asks for the sum of values of nodes in subtree of 3, which is 5, because there are 5 nodes there, each with initial value of 1. The 3rd query swaps subtrees of nodes 4 and 8, which is performed as the below drawing illustrates:

![](https://codechef_shared.s3.amazonaws.com/download/Images/LTIME43/15801498_1301041663287150_781091460_n.png)

![](https://codechef_shared.s3.amazonaws.com/download/Images/LTIME43/15820123_1301041659953817_1549432346_n.png)

This swap can be performed, because these subtrees are disjoint. The 4th query asks for the sum of values of nodes in subtree of 3. Now this subtree has changed and the result is 7, because there is one node with value 1 and 3 nodes with value 2 there. The last query tries to swap subtrees of 1 and 2, but since these subtrees are not disjoint, the answer for this query is -1.
