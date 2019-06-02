---
category_name: hard
problem_code: MGCH3D
problem_name: '3D Queries'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: kevinsogo
date_added: 24-03-2015
tags:
    - fft
    - fourier
    - hard
    - mgch
    - sept15
editorial_url: 'http://discuss.codechef.com/problems/MGCH3D'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493556773
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/MGCH3D.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/MGCH3D.pdf). Translations in Vietnamese to be uploaded soon.

Today, you finally have a chance to compete with a famous coder like Vasia and prove your mettle.

While he likes the real world as well, his adventures in **3D** computer puzzles make him the undisputed King of the subject. Until now, that is!

Vasia has **N** distinct points in 3 dimensional space and he is going to ask you to find the following sum **Q** times.

![](http://latex.codecogs.com/gif.latex?\sum \limits_{i \neq j}\frac{|A(X_{i} - X_{j}) + B(Y_{i} - Y_{j}) + C(Z_{i}- Z_{j}) + D |}{N(N-1)\sqrt{ (X_{i} - X_{j})^4 + (Y_{i} - Y_{j})^4 + (Z_{i} - Z_{j})^4}})

Where **A**,**B**,**C** and **D** are some evil integers chosen by Vasia, and their values vary for each summation query.

### Input

- First line contains two integers **N** and **Q**. **N** is number of points, and **Q** is number of queries.
- The next **N** lines contain integer point coordinates **Xi**, **Yi**, **Zi**.
- The last **Q** lines contain a query each in the form of 4 integers **A**, **B**, **C**, **D**.
- Note that all the integers in a single line are separated by single spaces.

### Output

For each query, output a single line containing the sum accurate up to **10-6**.

### Constraints

- 2 ≤ **N** ≤ 777777
- 1 ≤ **Q** ≤ 77
- 1 ≤ **Xi**, **Yi**, **Zi** ≤ 77
- 1 ≤ **Ai**, **Bi**, **Ci** ≤ 77
- 1 ≤ **Di** ≤ 7777
- **P.S.** I hope the digit "**7**" brings you luck :)

### Example

<pre>
 <b>Input:</b>
 10 5
 45 70 41
 9 1 43
 1 68 8
 70 76 7
 1 19 33
 71 70 53
 42 54 71
 11 13 30
 16 63 25
 30 24 34
 56 61 29 7328
 63 32 18 365
 37 41 11 2332
 36 19 43 7432
 68 55 46 6338

 <b>Output:</b>
 6.692386875130186
 1.323651551014940
 2.269817185835997
 6.783038317971530
 5.816449269601737
 
</pre>
### Subtasks

- **Subtask 1:** **Q**\***N2** ≤ 77777777. **Points - 15**
- **Subtask 2:** Original constraints. **Points - 85**
