---
category_name: hard
problem_code: ISOARRAY
problem_name: 'Chef and Isomorphic Array'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: kingofnumbers
date_added: 29-06-2017
tags:
    - chemthan
    - chemthan
    - cook89
    - hashing
    - likecs
    - medium
    - sqrt
editorial_url: 'https://discuss.codechef.com/problems/ISOARRAY'
time:
    view_start_date: 1514140200
    submit_start_date: 1514140200
    visible_start_date: 1514140200
    end_date: 1735669800
    current: 1514816031
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin](http://www.codechef.com/download/translated/COOK89/mandarin/ISOARRAY.pdf), [Russian](http://www.codechef.com/download/translated/COOK89/russian/ISOARRAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK89/vietnamese/ISOARRAY.pdf) as well.

Today, Chef came up with the following problem:

Consider two arrays **a** and **b** with the same size. Denote the multisets of all elements of arrays **a** and **b** by **MA** and **MB** respectively.

The arrays **a**, **b** are _isomorphic_ if it's possible to find a bijective function **f**: Z → Z which satisfies the following rules:

- Let's construct a new multiset **MF**. For each element **x** of **MA**, we should insert **f**(**x**) into **MF**.
- The multisets **MF** and **MB** should be identical.

For example, if **MA** = {1, 1, 2, 2, 2, 3} and **MB** = {3, 3, 4, 9, 9, 9}, we can choose the function **f** in the following way: **f**(1) = 3, **f**(2) = 9, **f**(3) = 4. After applying **f**() on each element of **MA**, we obtain the multiset {3, 3, 9, 9, 9, 4} = **MB**. Therefore, **a** and **b** are isomorphic.

Now, Chef has an array **a** with size **n**; he wants to ask you **q** queries. For each query, you are given two subarrays **ax, ax+1, ..., ay** and **az, az+1, ..., at** (1 ≤ **x** ≤ **y** ≤ **n**, 1 ≤ **z** ≤ **t** ≤ **n**, **y** - **x** = **t** - **z**); you should determine if the subarrays are isomorphic.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **n** denoting the size of the array **a**.
- The second line contains **n** space-separated integers **a1, a2, ..., an**.
- The next line contains a single integer **q** denoting the number of queries you must answer.
- Each of the following **q** lines contains four space-separated integers **x**, **z**, **c**, **d** describing one query. The indices **y** and **t** are generated in the following way: 
  - Let **k** = min(**n** − **x**, **n** − **z**) + 1.
  - Let **last** be equal to the index of the last query for which its answer was "YES" (queries are indexed from 1), or **last** = 0 if there isn't such query yet.
  - **y** = **x** + (**c** + **d** · **last**) % **k**
  - **t** = **z** + (**c** + **d** · **last**) % **k**

### Output

For each query, print a single line containing the string "YES" (without quotes) if the two subarrays are isomorphic or "NO" otherwise.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **n** ≤ 75000
- 1 ≤ **q** ≤ 2 · 105
- 1 ≤ **ai** ≤ **n**
- 1 ≤ **x**, **z** ≤ **n**
- 0 ≤ **c**, **d** ≤ 109
- sum of **n** over all test cases ≤ 150000
- sum of **q** over all test cases ≤ 4 · 105

### Example

<pre>
<b>Input:</b>

1
5
2 1 2 3 3
5
2 1 3 0
1 2 2 0
2 4 2 4
3 5 1 3
2 5 2 5

<b>Output:</b>

YES
NO
YES
YES
YES
</pre>### Explanation

**Example case 1:**

- query 1: **last** = 0, **x** = 2, **y** = 5, **z** = 1, **t** = 4
- query 2: **last** = 1, **x** = 1, **y** = 3, **z** = 2, **t** = 4
- query 3: **last** = 1, **x** = 2, **y** = 2, **z** = 4, **t** = 4
- query 4: **last** = 3, **x** = 3, **y** = 3, **z** = 5, **t** = 5
- query 5: **last** = 4, **x** = 2, **y** = 2, **z** = 5, **t** = 5
