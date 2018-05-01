---
category_name: hard
problem_code: WALKBT
problem_name: 'Walks on the binary tree'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: altruist_
problem_tester: null
date_added: 21-07-2017
tags:
    - altruist_
    - aug17
    - data
    - hard
    - lazypropagation
    - persistence
    - segment
editorial_url: 'https://discuss.codechef.com/problems/WALKBT'
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1514816035
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/AUG17/mandarin/WALKBT.pdf), [russian](http://www.codechef.com/download/translated/AUG17/russian/WALKBT.pdf) and [vietnamese](http://www.codechef.com/download/translated/AUG17/vietnamese/WALKBT.pdf) as well.

 You have a [perfect binary tree](https://xlinux.nist.gov/dads/HTML/perfectBinaryTree.html) of height **N**. That is, it contains 2**N**+1 - 1 nodes.

A path from the root to a leaf can be represented by an integer **X** which lies between 0 and 2**N** - 1 (both inclusive) as follows:

Consider the **N** length binary representation of **X**. Start reading from the left, and at each bit, 0 denotes going to the left child, and 1 denotes going to the right child. For eg. if **N** = 2, and **X** = 0 = (00)2, it would correspond to the path which goes to the leftmost leaf. **X** = 3 = (11)2 would correspond to the path from root to the rightmost leaf.

At the beginning, **X** = 0, and you have visited only the root till now. Then, you get **Q** queries. A query can be of two types:

- Type 1: "! **C**": This means that **X** has to be changed to **X** = ( **X** + 2**C** ) mod 2**N**, and then you start from the root, and walk down the route represented by the new **X**.
- Type 2: "?": This means that you should print the number of nodes that you have visited at least once.

### Input

- The first line contains a single integer **T**, which denotes the number of testcases. The description of each testcase follows.
- The first line of each testcase contains two integers: **N** and **Q**, which denote the height of the tree and the number of the queries respectively.
- **Q** lines follow, which are the descriptions of the queries. Each line will either be a "! **C**" or a "?" (without quotes).

### Output

For each query of Type 2, you have to print one integer in a new line

### Constraints

- 1 ≤  **T**  ≤ 10
- 1 ≤  **N, Q**  ≤ 105
- 0 ≤  **C**  N
- The sum of **N** over all testcases does not exceed 105, and sum of **Q** over all testcases does not exceed 105
 
### Subtasks

- **Subtask 1** (30 points) : The sum of **N** over all testcases does not exceed 2000, and sum of **Q** over all testcases does not exceed 2000
- **Subtask 2** (70 points) : Original constraints

### Example

<pre><b>Input</b>:
1
2 9
! 0
?
! 1
?
! 0
?
! 0
! 0
? 

<b>Output</b>:
3
5
6
7
</pre>### Explanation

Let us label the tree nodes as follows:

![](https://codechef_shared.s3.amazonaws.com/download/upload/AUG17/puush-linux%2B%282017-08-04%2Bat%2B02.32.03%29.png)The node 0 corresponds to the root.

At the beginning, **X** = 0, and then after the first query, **X** becomes 0 + 20 mod 4 = 1 = (01)2. The path 0 - 1 - 4 is traveled along.

The next query asks for the number of visited nodes, which is 3.

In the third query, **X** becomes 1 + 21 mod 4 = 3 = (11)2. The path 0 - 2 - 6 is traveled along.

The fourth query asks for the number of visited nodes. The visited nodes are {0, 1, 4, 2, 6}. Hence the answer is 5.

In the fifth query, **X** becomes 3 + 20 mod 4 = 0 = (00)2. The path 0 - 1 - 3 is traveled along.

The sixth query asks for the number of visited nodes. The visited nodes are {0, 1, 4, 2, 6, 3}. Hence the answer is 6.

In the seventh query, **X** becomes 0 + 20 mod 4 = 1 = (01)2. The path 0 - 1 - 4 is traveled along.

In the eight query, **X** becomes 1 + 20 mod 4 = 2 = (10)2. The path 0 - 2 - 5 is traveled along.

The ninth query asks for the number of visited nodes. The visited nodes are {0, 1, 4, 2, 6, 3, 5}. Hence the answer is 7.
