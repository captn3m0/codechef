---
category_name: easy
problem_code: MAGA
problem_name: 'Make array great again'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: kingofnumbers
date_added: 15-01-2018
tags:
    - cook90
    - dynamic
    - medium
    - sidhant007
time:
    view_start_date: 1516559400
    submit_start_date: 1516559400
    visible_start_date: 1516559400
    end_date: 1735669800
    current: 1525198938
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK90/mandarin/MAGA.pdf), [Russian](http://www.codechef.com/download/translated/COOK90/russian/MAGA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK90/vietnamese/MAGA.pdf) as well.

You are a citizen of Arrayland. Your President (Mr. P) has given you a mundane problem:

You're given an array **a** with size **N** (1-based indexing). You are allowed to perform an arbitrary number (including zero) of operations of the following type: choose an integer **i** (1 ≤ **i** ≤ **N**) and swap **ai** with **aN-i+1**.

Your goal is to make the array **a** *great*. An array is great if it satisfies one of the following conditions:

- **a1** > **a2** a3 > **a4** aN
- **a1** a2 > **a3** a4 > ... **aN**

Compute the minimum number of operations necessary to make the array **a** great or determine that it's impossible to make it great.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the size of the array **a**.
- The second line contains **N** space-separated integers **a1, a2, ..., aN**.

### Output

Print a single line containing one integer — the minimum number of operations required to make the array great, or -1 if it's impossible.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N** ≤ 105
- 1 ≤ **ai** ≤ 109 for each valid **i**

### Example

<pre><b>Input:</b>
1
6
1 2 3 4 5 6

<b>Output:</b>
1
</pre>
### Explanation

**Example case 1:** The given array is NOT great. If you swap the second and the fifth element, then the array becomes great.
