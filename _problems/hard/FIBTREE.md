---
category_name: hard
problem_code: FIBTREE
problem_name: 'Fibonacci Numbers on Tree'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: dzy493941464
problem_tester: xcwgf666
date_added: 25-06-2014
tags:
    - dzy493941464
    - hard
    - heavy
    - math
    - persistence
    - segment
    - sept14
editorial_url: 'http://discuss.codechef.com/problems/FIBTREE'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1493556704
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT14/mandarin/FIBTREE.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/FIBTREE.pdf).

In mathematical terms, the sequence **F\[N\]** of Fibonacci numbers is defined by the recurrence relation **F\[N\]** = **F\[N-1\]** + **F\[N-2\]**, with seed values **F\[1\] = 1**,**F\[2\] = 1**.

Today, Chef gives you a rooted tree, consisting of **N** nodes. At first, the node **1** is the root. The nodes are numbered from **1** to **N**, and each node has an integer that initially equals to 0. Then, Chef asks you to perform **M** queries.

The queries are as follows:

- **A x y**
Add **F\[1\]** to the integer, associated with the node **x**, then add **F\[2\]** to the integer, associated with the second node on the way from **x** to **y**, then add **F\[3\]** to the integer, associated with the third node on the way from **x** to **y**, and so on. As you know, there is only one simple path from **x** to **y**.

 
- **QS x y**
Let node **x** be the root of the tree, output the sum of all integers, associated with the nodes in the subtree of the node **y**, modulo **1000000009(109+9)**.

 
- **QC x y**
Output the sum of all the integers, associated with the nodes on the way from **x** to **y**, modulo **1000000009(109+9)**.

 
- **R x**
All the integers associated with the nodes return to the state after the **x**-th query. If **x** is 0, then all of them become equal to 0, as in the very beginning.

 

### Input

The first line of the input consists of two space separated intergers - **N** and **M** respectively.

Then, **N-1** lines follow. These **N-1** lines describe the tree structure. Each line consists of two intergers - **x** and **y**, and that means that there is an edge between the node **x** and the node **y**.

Then, **M** lines follow. Every single line denotes a single query, which has one of the following forms: (See the sample for the detailed explanation)

- **A x1 y**
 
- **QS x1 y**
 
- **QC x1 y**
 
- **R x1**
 
As you can see, the number **x** isn't given to you directly. For all queries, actual number **x** will be equal to **x1** xor **lastans**, where lastans denotes the last number that you have output, or 0 if you haven't output any numbers yet.


### Output

For each query of the type **QS** or **QC**, output the answer modulo **109+9**


### Constraints

- **1** ≤ **N**, **M** ≤ **100000**
- **1** ≤ **x**, **y** ≤ **N**

### Example

<pre><b>Input:</b>
5 6
1 2
1 3
3 4
3 5
A 4 2
A 2 5
QS 4 3
QC 12 4
R 6
QC 6 4

<b>Output:</b>
13
7
4
</pre>### Explanation

Let’s denote the first state of integers as **0 0 0 0 0**, where the **i**-th interger means the integer associated with the node **i**.

In the first query “**A 4 2**”, the actual number is **x = 4 xor 0 = 4**. Hence the state will be **2 3 1 1 0** after this query.

After the second query “**A 2 5**”, the state will be **3 4 3 1 3** for the similar reason.

In the next query, the answer is **3+4+3+3=13**.

In the next query, the actual number is **x = 12 xor 13 = 1**, the answer is **3+3+1=7**.

In the query “**R 6**”, the actual number is **x = 6 xor 7 = 1**, the state will be roll backed to **2 3 1 1 0**.

At last, the actual number is **x = 6 xor 7 = 1**, the answer is **2+1+1=4**.
