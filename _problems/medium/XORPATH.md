---
category_name: medium
problem_code: XORPATH
problem_name: 'Xortest Path'
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
problem_author: kevinsogo
problem_tester: null
date_added: 7-06-2016
tags:
    - kevinsogo
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557977
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/XORPATH.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/XORPATH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/XORPATH.pdf) as well.

Chef was practicing with some graph theory problems in CodeChef. He was trying to solve a problem involving finding the **shortest path** in a weighted, undirected graph. He thought it was quite standard, so he coded the solution and submitted it. Unfortunately it was judged “Wrong Answer”.

Wanting to debug, Chef downloaded Peter Xor's accepted solution. He also made a test case, illustrated by the following image:

![](https://s3.amazonaws.com/codechef_shared/download/upload/JULY16/XORPath.png)Now, what is the cost of the shortest path from 1 to 5? Chef thought that the answer should be **36 + 16 + 18 = 70**, because the other candidate path has a higher total cost of **36 + 50 + 11 + 18 = 115**. But he was surprised when Peter Xor's accepted solution outputted **15**! Chef was confused because he can't see any path with a total cost of **15**.

After rereading the problem, Chef found his mistake. The problem's title was actually **Xortest path**, not **Shortest path**, so the problem was actually asking for the path between two given nodes with **the least possible XOR**! So in the example above, the answer is indeed **15**, because the path **1 → 2 → 3 → 4 → 5** has an XOR cost of **36 ⊕ 50 ⊕ 11 ⊕ 18 = 15**, and no other path has a lower XOR cost than this. In other words, this is the “xortest path”.

Now that Chef knows his mistake, he still has a problem; he doesn't know how to answer this problem! Your task as his sous-chef is to answer this problem for him. Specifically, you have to answer **Q** queries, where each query is a pair of nodes, and the answer is the weight of the “xortest path” between them.

Note that in this problem, a **path** may pass through an edge or node any number of times. (Some authors would call such a path a **walk**.) For instance, in the example above, the path **1 → 2 → 4 → 3 → 2 → 4 → 5** is also a “xortest path”, because its XOR cost is **36 ⊕ 16 ⊕ 11 ⊕ 50 ⊕ 16 ⊕ 18 = 15**.

### Input

The first line of input contains three integers, **N**, **E** and **Q**. Nodes are labelled **1** to **N**.

The following **E** lines describe the edges. The **ith** line contains three integers **ai**, **bi** and **ci**, which means that there is an undirected edge between nodes **ai** and **bi** with weight **ci**.

The following **Q** lines describe the queries. The **jth** line contains two integers **xj** and **yj**, which means that you need to find the “xortest path” between nodes **xj** and **yj**.

### Output

Output **Q** lines, one for each query. The **jth** line must contain a single integer, the weight of the xortest path between **xj** and **yj**. If there does not exist a path between these nodes, output “XIT” (without quotes) instead.

### Constraints

- **1** ≤ **N**, **E**, **Q** ≤ **105**
- **1** ≤ **ai**, **bi**, **xj**, **yj** ≤ **N**
- 0 ≤ **ci** ≤ **109**
- Parallel edges or self-loops may appear.

### Example

<pre><b>Input:</b>
<tt>7 7 5
1 2 36
2 4 16
4 5 18
2 3 50
3 4 11
6 6 100
7 6 100
1 5
5 1
1 2
6 7
1 7
</tt>
<b>Output:</b>
<tt>15
15
13
0
XIT</tt>
</pre>### Explanation

The sample input is illustrated by the image above.
