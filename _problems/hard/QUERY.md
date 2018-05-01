---
category_name: hard
problem_code: QUERY
problem_name: 'Observing the Tree'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: laycurse
date_added: 26-12-2012
tags:
    - feb13
    - hard
    - heavy
    - persistence
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/QUERY'
time:
    view_start_date: 1360583823
    submit_start_date: 1360583823
    visible_start_date: 1360582602
    end_date: 1735669800
    current: 1493556808
layout: problem
---
All submissions for this problem are available.Chef gives you a tree, consisting of **N** nodes. The nodes are numbered from **1** to **N**, and each node has an integer, which is equal to 0 initially. Then, Chef asks you to perform **M** queries.

The first type of queries is _changing_: here, you are given integers **X**, **Y**, **A** and **B**. Add **A** to the integer, associated with the node **X**, then add **A+B** to the integer, associated with the second node on the way from **X** to **Y**, then add **A+2\*B** to the integer, associated with the third node on the way from **X** to **Y**, and so on. As you know, there is only one simple path from **X** to **Y**.

The second type of queries is a _question_: here, you are given integers **X** and **Y**. Output the sum of all integers, associated with nodes on the way from **X** to **Y**.

The third type of queries is a _rollback_: here, you are given an integer **X**. All the integers associated with the nodes return to the state after the **X**-th changing query. If **X** is 0, then all of them become equal to zero, as in the very beginning.

### Input

The first line of an input consists of two integers - **N** and **M**.

Then, **N−1** lines follow. These **N−1** lines describe the tree structure. Each line consists of two integers - **X** and **Y**, and that means that there is an edge between node **X** and node **Y**.

Then, **M** lines follow. A single line denotes a single query, which has one of the following forms: (See the sample for the detailed explanation)

- c **X1** **Y1** **A** **B** - _changing_ query,
- q **X1** **Y1** - _question_ query,
- l **X1** - _rollback_ query.

As you can see, the numbers **X** and **Y** aren't given to you directly. For the _rollback_ query, actual number **X** will be equal to **(X1+lastans) modulo (total number of _changing_ queries before this query + 1)**. For the _changing_ and _question_ queries, **X** will be equal to **((X1+lastans) modulo N)+1** and **Y** will be equal to **((Y1+lastans) modulo N)+1**, where **lastans** denotes the last number that you have output, or zero if you haven't output any numbers yet.

### Output

For each _question_ query output the answer on a single line.

### Constraints

- 1 ≤ **N**, **M** ≤ 100000 (105)
- 0 ≤ **A**, **B** ≤ 1000
- 0 ≤ **X1**, **Y1** ≤ 100000 (105)

### Example

<pre>
<b>Input:</b>
5 7
1 2
2 3
3 4
4 5
c 1 4 2 3
c 2 3 5 10
q 1 3
l 1
q 1 3
l 1
q 1 3

<b>Output:</b>
35
0
15
</pre>### Explanation

As you can see, the tree in the sample is like a line. Let's denote the first state of integers **0 0 0 0 0**, where the **i**-th integer means the integer associated with the node **i**.

In the first _changing_ query **"c 1 4 2 3"**, the actual numbers are **X = (1 + 0) modulo 5 + 1 = 2, Y = (4 + 0) modulo 5 + 1 = 5**. Hence the state will be **0 2 5 8 11** after this query.

After the second _changing_ query **"c 2 3 5 10"**, the state will be **0 2 10 23 11** for similar reason.

In the next _question_ query, the actual numbers are **X = (1 + 0) modulo 5 + 1 = 2, Y = (3 + 0) modulo 5 + 1 = 4**. Hence the answer must be **2 + 10 + 23 = 35**.

In the first rollback query **"l 1"**, the actual number is **X = (1 + 35) modulo (2 + 1) = 36 modulo 3 = 0**, since **lastans = 36**. Thus the state will be rollbacked to **0 0 0 0 0**.

Then the answer of the next _question_ query **"q 1 3"** must be 0, because all integers are currently 0.

In the second rollback query **"l 1"**, the actual number is **X = (1 + 0) modulo (2 + 1) = 1**, since **lastans = 0**. Thus the state will be **0 2 5 8 11**, which is the state after the first _changing_ query.

Then the answer of the last _question_ query must be **2 + 5 + 8 = 15**.
