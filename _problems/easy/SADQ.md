---
category_name: easy
problem_code: SADQ
problem_name: 'SAD Queries'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: architk
problem_tester: null
date_added: 8-12-2017
tags:
    - acm17kgp
    - ad
    - architk
    - heavy
    - kgp17rol
    - medium
editorial_url: 'https://discuss.codechef.com/problems/SADQ'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454463
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available."The Mean Absolute Difference is a measure of statistical dispersion equal to the average absolute difference of two independent values drawn from a probability distribution." - Wikipedia

 In this problem we are concerned not with Mean Absolute Difference (MAD) of two distributions but rather with the Summed Absolute Difference (SAD) of two arrays. Given arrays (1-indexed) **P** and **Q** of lengths **p** and **q**, define

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/SADQ.png)

 Given a collection of **K** arrays **A1**, ..., **AK**, report SAD(**Ai**, **Aj**) for several queries (**i**, **j**).

### Input

- The first line of input contains a single positive integer **K**.
- Each of the next **K** lines starts with a positive integer **si**, the size of **Ai**, followed by **si** space-separated integers **Ai,1**, ..., **Ai,si** which denotes the array **Ai**.
- The next line of input consists of a single positive integer **M**.
- Each of the next **M** lines consists of 2 positive integers **i** and **j** which lie between 1 and **K** (inclusive), specifying the indices of the arrays for which the SAD value must be reported.

### Output

Output **M** lines. Line **i** should contain the answer to query **i**.

### Constraints

- 1 ≤ **K**, **M** ≤ 105
- 1 ≤ **s1** + ... + **s**K**** ≤ 105
- -109 ≤ **Ai,j** ≤ 109
- 1 ≤ **i**, **j** ≤ **K** in each of the queries

### Example

<pre><b>Input:</b>
4
4 0 3 1 -2 
2 0 4 
2 2 4 
4 4 -3 -4 4 
3
3 4
4 2
1 4

<b>Output:</b>
30
30
60
</pre>### Explanation:

**Query 1:** The arrays in question are **A3** = \[2, 4\] and **A4** = \[4, -3, -4, 4\].

<pre>
SAD(<b>A<sub>3</sub></b>, <b>A<sub>4</sub></b>) = |2 - 4| + | 2 - (-3) | + |2 - (-4) | + | 2 - 4 | + | 4 - 4 | + | 4 - (-3) | + | 4 - (-4) | + | 4 - 4 | 
                       = 2 + 5 + 6 + 2 + 0 + 7 + 8 + 0 
                       = 30
</pre>