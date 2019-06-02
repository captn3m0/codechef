---
category_name: medium
problem_code: PERSHFTS
problem_name: 'Cyclic shifts in permutation'
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
problem_author: eartemov
problem_tester: null
date_added: 4-08-2015
tags:
    - eartemov
    - fenwick
    - inversions
    - maths
    - medium
    - oct15
    - permutation
editorial_url: 'http://discuss.codechef.com/problems/PERSHFTS'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493557852
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/OCT15/mandarin/PERSHFTS.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/PERSHFTS.pdf) 

You have a permutation **P** of integers **1**, **2**, ... , **N**. You want to change it a little. To do this, you choose an integer **K** that satisfies an inequality **2** ≤ **K** ≤ **N**. After that, you perform several (possibly, zero, if you're feeling lazy) cyclic shifts. For each cyclic shift you choose a **K**-length segment of the permutation **P** (let's denote it as **Px**, **Px + 1**, ..., **Px + K - 2**, **Px + K - 1**) and perform a cyclic shift on it towards the right. That is, rearrange elements of this segment in the order **Px + K - 1**, **Px**, ... , **Px + K - 3**, **Px + K - 2**.

For example, let's make a permutation **(6, 5, 1, 3, 2, 4)** from permutation **(1, 5, 4, 6, 3, 2)**, using **K = 4**. Segments that are cyclically shifted on every move are underlined: **(1, 5, 4, 6, 3, 2)** => **(6, 1, 5, 4, 3, 2)**=> **(6, 1, 2, 5, 4, 3)** => **(6, 1, 3, 2, 5, 4)** => **(6, 5, 1, 3, 2, 4)**.

Let **S** denote the set of permutations that can be obtained from permutation **P** using zero or more cyclic shifts. You are given a permutation **Q** of integers **1**, **2**, ..., **N**. Your task is to find whether **S** contains **Q** or not. If so, also you must find the index of **Q** in the list of all permutations in set **S**, ordered lexicographically.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **K** denoting the length of the permutations **P** and **Q**, and length of the segments that you are allowed to cyclically shift.

Next line contains **N** integers **P1**, **P2**, ..., **PN** denoting the permutation **P**.

Next line contains **N** integers **Q1**, **Q2**, ..., **QN** denoting the permutation **Q**.

### Output

For each test case, output a single line. It must contain **-1**, if permutation **Q** can't be obtained from permutation **P** using allowed cyclic shifts. Otherwise, print its 1-based index in the list of all permutations from set **S**, ordered lexicographically. Since the answer can be very large, print it modulo **109 + 7**.

### Constraints

- **2** ≤ **N** ≤ **105**
- **2** ≤ **K** ≤ **N**
- **P1**, **P2**, ..., **PN** are forming a permutation of integers from **1** to **N**
- **Q1**, **Q2**, ..., **QN** are forming a permutation of integers from **1** to **N**

### Subtasks

**Subtask 1: (10 points)**

- **1** ≤ **T** ≤ **1000**
- **2** ≤ **N** ≤ **5**

**Subtask 2: (10 points)**

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N** ≤ **105**
- **K** = **N**

**Subtask 3: (40 points)**

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N** ≤ **1000**

**Subtask 4: (40 points)**

- **1** ≤ **T** ≤ **10**
- Original constraints

### Example

<pre><b>Input:</b>
<tt>2
4 2
2 4 3 1
1 2 4 3
3 3
1 2 3
1 3 2</tt>

<b>Output:</b>
<tt>2
-1</tt>
</pre>
### Explanation

**Example case 1.** Cyclic shift of segment of length **2** is swapping consecutive elements of the permutation. Using them, we are able to get any possible permutation. Permutation **Q** has index **2** in the list of all permutations of length **4**.

**Example case 2.** We are able to get permutations **(1, 2, 3)**, **(2, 3, 1)** and **(3, 1, 2)**. Permutation **Q** doesn't belong to this list, so answer is **-1**.
