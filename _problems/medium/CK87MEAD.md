---
category_name: medium
problem_code: CK87MEAD
problem_name: 'Chef and Math Test'
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
    - COB
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: mhammad1
problem_tester: kingofnumbers
date_added: 20-10-2017
tags:
    - centroid
    - cook87
    - fenwick
    - line
    - medium
    - mhammad1
    - mhammad1
time:
    view_start_date: 1508697000
    submit_start_date: 1508697000
    visible_start_date: 1508697000
    end_date: 1735669800
    current: 1514816832
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK87/mandarin/CK87MEAD.pdf), [Russian](http://www.codechef.com/download/translated/COOK87/russian/CK87MEAD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK87/vietnamese/CK87MEAD.pdf) as well.

Joud Zouzou is one of the new employed co-chefs in the restaurant.

Joud is preparing for his 3rd year in Damascus University, and he is also an ACM (AC-Milan) fan. Said On the other hand is a fan of Juventus, and they always fight, especially when Joud says: We're coming, We're back!

Said can't stand this situation, but Shahhoud decided to give Joud his last chance. Since his dream is to be the Chef that cooks the most delicious dishes, Shahhoud gave him a task, and Joud has to solve it in order to maintain his current job. The task is as follows

Given a tree of **N** nodes, each node **i** has a value **Ai** attached to it. Joud has to find the number of unordered-pairs **(i,j)** such that:

If we created an array of all the numbers **Ak**, such as **k** is a node in the simple path from node **i** to node **j**, the median of this array will not exceed **X** and the mean will be at least **Y**.

Joud found this task a bit hard, and he wants to spend all of his time studying for the next year, so he asked you to help him solving that problem.

**Note:**

- The median of an array is the element positioned at the middle of the array after sorting it in non-decreasing order.
- The mean of an array is the sum of all the elements, divided by array's length.
- You can consider for even-length arrays that the median is the **left** one of the two centered elements of the array after sorting it.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

Each test starts with three space separated integers **N**, **X** and **Y**, denoting the number of nodes, the maximum value for the median and the minimum value for the mean respectively.

The next line contains **N** space separated integers **A1**, **A2**, **...**, **AN**, denoting the values of the nodes.

**N-1** lines follows. Each line contains two values: **u** and **v**, denoting a connection between nodes **u** and **v**.

### Output

For each test case, print a single number, the number of pairs (**u**, **v**) that satisfies the above mentioned conditions. It's possible that **u = v**.

### Constraints

- **1 ≤ T ≤ 100.**
- **1 ≤ N ≤ 105.**
- **-109 ≤ X,Y ≤ 109**.
- **-109 ≤ Ai ≤ 109.**
- It's guaranteed that the sum of all **N** over all test cases doesn't exceed **2\*105**.

### Example

<pre><b>Input:</b>
1
5 4 0
1 5 4 -6 -100
4 2
2 1
5 3
1 3

<b>Output:</b>
7

</pre>### Explanation

**Example case 1:** All possible pairs are: {  **(1,1) (1,2) (1,3) (1,4) (1,5) (2,2) (2,3) (2,4) (2,5) (3,3) (3,4) (3,5) (4,4) (4,5) (5,5)**  }. The valid pairs are: {  **(1,1) (1,2) (1,3) (1,4) (2,3) (3,3) (3,4)**  }.

The pair **(1,5)** is invalid because if we get all the nodes values in the path from node **1** to node **5**, the array will be: **{1, 4, -100}**, and the mean is: **-31,666** which is less than 0.

The pair **(2,2)** is invalid because the median of the array **{5}** is **5** which is greater than **4**
