---
category_name: medium
problem_code: PARITREE
problem_name: 'Parity tree'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: kevinsogo
date_added: 9-02-2016
tags:
    - admin2
    - bicolor
    - disjoint
    - graph
    - march16
    - medium
    - xor
editorial_url: 'http://discuss.codechef.com/problems/PARITREE'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493557837
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/PARITREE.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/PARITREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/PARITREE.pdf) as well.

You are given a tree consisting of **n** nodes numbered from **1** to **n**. The weights of edges of the tree can be any **binary** integer satisfying following **Q** conditions.

- Each condition is of form **u, v, x** where **u, v** are nodes of the tree and **x** is a binary number. 
     For satisfying this condition, sum of the weight of all the edges present in the path from node **u** to **v** of the tree, should have even if **x = 0**, odd otherwise.

Now, you have to find out number of ways of assigning **0/1** (binary) weights to the edges of the tree satisfying the above conditions.
As the answer could be quite large, print your answer modulo **109 + 7**.

### Input

- The first line of input contains a single integer **T** denoting number of test cases.
- For each test case: 
    - First line contains two space separated integers **n, Q**.
    - Each of the next **n - 1** lines will contain two space separated integer **u, v** denoting that there is an edge between vertex **u** and **v** in the tree.
    - Each of the next **Q** lines will contain three space separated integer **u, v, x** denoting a condition as stated in the probelm.

### Output

- For each test case, output a single integer corresponding to the answer of the problem.

### Constraints

- 1 ≤ **u, v** ≤ **n**
- 0 ≤ **x** ≤ **1**

### Subtasks

**Subtask #1 : (10 points)**

- Sum of each of variables **n** and **Q** over all the test cases ≤ **20**

**Subtask #2 : (20 points)**

- Sum of each of variables **n** and **Q** over all the test cases ≤ **100**

**Subtask #3 : (30 points)**

- Sum of each of variables **n** and **Q** over all the test cases ≤ **5000**

**Subtask #4 : (40 points)**

- Sum of each of variables **n** and **Q** over all the test cases ≤ **100000**

### Example

<pre><b>Input:</b>
3
3 2
1 2
1 3
1 2 0
1 3 0
3 0
1 2
2 3
3 1
1 2
2 3
1 2 1

<b>Output:</b>
1
4
2
</pre>
### Explanation

**In the first example**,
You can only set the weight of each edge equal to 0 for satisfying the given condition. So, there is exactly one way of doing this. Hence answer is 1.

**In the second example**,
There are two edges and there is no condition on the edges. So, you can assign them in 4 ways.

**In the third example**,
You have to assign the weight of edge between node 1 and 2 to 1. You can assign the remaining edge from 2 to 3 either 0 or 1. So, the answer is 2.
