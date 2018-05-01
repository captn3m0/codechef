---
category_name: hard
problem_code: TREEPATH
problem_name: 'Decompose the Tree'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: iscsi
date_added: 27-09-2015
tags:
    - bit
    - fenwick
    - fenwick
    - hard
    - nov15
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TREEPATH'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493556881
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/TREEPATH.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/TREEPATH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnmese/TREEPATH.pdf) as well.

You are given an unrooted tree. There is an integer written on each node of this tree.

Your task is to count the number of ways to decompose this tree to a set of paths in such a way that each node belongs to exactly one path and the sum of numbers associated with all the nodes on any of these path is always non-negative.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of nodes.

The second line contains **N** space-separated integers **A1**, **A2**, ... , **AN** denoting the numbers written on the corresponding nodes.

Each of the following **(N-1)** lines contain a pair of space-separated integers **Xj Yj** denoting that there is an edge between the nodes numbered **Xj** and **Yj**.

### Output

For each test case, output a single line containing the number of ways to decompose the tree to a set of paths, under the given condition, modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **Xj**, **Yj** ≤ **N**

Subtask 1 (15 points):

- **1** ≤ sum of **N** over test case ≤ **104**
- **1** ≤ **N** ≤ **100**
- **-10** ≤ **Ai** ≤ **10**

Subtask 2 (16 points):

- **1** ≤ sum of **N** over test case ≤ **105**
- **1** ≤ **N** ≤ **103**
- **-104** ≤ **Ai** ≤ **104**

Subtask 3 (69 points):

- **1** ≤ sum of **N** over test case ≤ **105**
- **1** ≤ **N** ≤ **105**
- **-104** ≤ **Ai** ≤ **104**

### Example

<pre><b>Input:</b>
<tt>1
4
1 10 5 -1
1 2
1 3
2 4</tt>

<b>Output:</b>
<tt>4</tt>
</pre>### Explanation

Let's list all the four possible decompositions:

- The whole tree is one path. Then, the sum of nodes' associated numbers is 1 + 10 + 5 + (-1) = 15.
- One path consists of the nodes with the indices **2** and **4**, another one consists of the nodes **1** and **3**. Then, the sum of nodes' associated numbers in the first path is 10 + (-1) = 9 and the sum of nodes' numbers in the second path is 1 + 5 = 6.
- One path consists of the nodes with the indices **1**, **2** and **4**, another one consists of the node **3**. Then, the sum of nodes' associated numbers in the first path is 1 + 10 + (-1) = 10 and the sum of nodes' numbers in the second path is 5.
- The first path consists of the nodes with the indices **2** and **4**, the second one consists of the node **1**, and the third consists of the node **3**. Then, the sum of nodes' associated numbers in the first path is 10 + (-1) = 9, the sum of nodes' numbers in the second path is 1, the sum of nodes' numbers in the third path is 5.
