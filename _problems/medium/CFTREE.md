---
category_name: medium
problem_code: CFTREE
problem_name: 'Chef And Fibonacci Tree'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: antoniuk1
date_added: 2-12-2015
tags:
    - cook66
    - data
    - graph
    - ma5termind
    - medium
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/CFTREE'
time:
    view_start_date: 1453660200
    submit_start_date: 1453660200
    visible_start_date: 1453660200
    end_date: 1735669800
    current: 1493557506
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK66/mandarin/CFTREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK66/russian/CFTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK66/vietnamese/CFTREE.pdf) as well.

Chef likes to play with trees a lot. This time, he has a rooted tree **T** consisting of **N** nodes labelled uniquely with the integers from **{1, … N}**. The node labelled **1** is the root of the tree. Each node in the given tree **T** stores a non-negative integer, initially all of which are zeros. Chef wants to perform **2** types of operations over the tree accurately and efficiently.

- **U X K:** Update the subtree rooted at node **X** such that the the root **X** will have **FK** (the **Kth** Fibonacci number) added to it, all its children will have **Fk+1** (the **(K+1)th** Fibonacci number) added to them, and so on. More formally, any node in the subtree rooted at **X** will have **(K+D)th** fibonacci number added to them, where **D** is the distance of the node from **X**.
- **Q X:** Report the value stored at the node **X**.

Since the answer to each query can be very large, output it modulo **109 + 7**.

**NOTE:**

**FK** denotes the **Kth** Fibonacci number, and the series is generated as follows:

- **FK = 1, if K ≤ 2** .
- **FK = FK-1 + FK-2, otherwise.**

To know more about Fibonacci numbers, click [here](https://en.wikipedia.org/wiki/Fibonacci_number).

### Input:

First line of input contains two integer **N** and **M** denoting the number of nodes in the tree **T**, and the number of queries to be processed, respectively. Next **N-1** lines of input contain an integer each, where the integer in the **ith** line denotes the parent of the **(i+1)th** node. Each of the next **M** lines contains one of the **2** types of queries mentioned above.

### Output:

For each operation of type **Q**, output the required answer modulo **109 + 7**.

### Constraints:

- **1 ≤ N, M, K ≤ 105**
- **1 ≤ U, V, X ≤ N**

### Example

**Input**

<pre>
5 10
1
1
3
3
Q 3
U 1 2
Q 2
Q 3
Q 4
Q 5
U 3 1
Q 3
Q 4
Q 5

<b>Output</b>

0
2
2
3
3
3
4
4
<h3>Explanation</h3>
<p>
<img src="https://s3.amazonaws.com/hr-challenge-images/3194/1452931833-352a82ea85-image7.jpg" title="image7.jpg"></img>
</p>
</pre>