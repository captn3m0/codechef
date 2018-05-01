---
category_name: hard
problem_code: COUNTARI
problem_name: 'Arithmetic Progressions'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: rustinpiece
problem_tester: laycurse
date_added: 25-10-2012
tags:
    - fft
    - hard
    - maths
    - nov12
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/COUNTARI'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493556669
layout: problem
---
All submissions for this problem are available.Given **N** integers **A1, A2, …. AN**, Dexter wants to know how many ways he can choose three numbers such that they are three consecutive terms of an arithmetic progression.

Meaning that, how many triplets **(i, j, k)** are there such that **1 ≤ i < j < k ≤ N** and **Aj - Ai = Ak - Aj**.

So the triplets (2, 5, 8), (10, 8, 6), (3, 3, 3) are valid as they are three consecutive terms of an arithmetic
progression. But the triplets (2, 5, 7), (10, 6, 8) are not.

### Input

First line of the input contains an integer **N (3 ≤ N ≤ 100000)**. Then the following line contains **N** space separated integers **A1, A2, …, AN** and they have values between **1** and **30000** (inclusive).

### Output

Output the number of ways to choose a triplet such that they are three consecutive terms of an arithmetic progression.

### Example

<pre>
<b>Input:</b>
10
3 5 3 6 3 4 10 4 5 2

<b>Output:</b>
9

</pre>### Explanation

The followings are all 9 ways to choose a triplet

<pre>
1 : <b>(i, j, k)</b> = (1, 3, 5), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 3, 3)
2 : <b>(i, j, k)</b> = (1, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
3 : <b>(i, j, k)</b> = (1, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
4 : <b>(i, j, k)</b> = (3, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
5 : <b>(i, j, k)</b> = (3, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
6 : <b>(i, j, k)</b> = (4, 6, 10), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (6, 4, 2)
7 : <b>(i, j, k)</b> = (4, 8, 10), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (6, 4, 2)
8 : <b>(i, j, k)</b> = (5, 6, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
9 : <b>(i, j, k)</b> = (5, 8, 9), <b>(A<sub>i</sub>, A<sub>j</sub>, A<sub>k</sub>)</b> = (3, 4, 5)
</pre>