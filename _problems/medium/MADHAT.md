---
category_name: medium
problem_code: MADHAT
problem_name: 'Math Hatter'
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
problem_author: alei
problem_tester: kingofnumbers
date_added: 21-07-2016
tags:
    - alei
    - combinatorics
    - cook73
    - easy
    - maths
editorial_url: 'http://discuss.codechef.com/problems/MADHAT'
time:
    view_start_date: 1471804200
    submit_start_date: 1471804200
    visible_start_date: 1471804200
    end_date: 1735669800
    current: 1493557777
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK73/mandarin/MADHAT.pdf), [Russian](http://www.codechef.com/download/translated/COOK73/russian/MADHAT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK73/vietnamese/MADHAT.pdf) as well.

The education system of Wonderland was designed by the great psychologist Math Hatter. In Wonderland there are **n** kids attending school. For simplicity they are numbered from **1** to **n**. Math Hatter noticed that all of them are very smart, so he measured their Intellectual Quotient (IQ), it turned out that no two students had the same IQ and that all IQs were integers in the range from **1** to **n**.

In the Math Hatter's education system, one kid can be the teacher of many other kids, and also be the pupil of many others.

Let **j** be the smallest integer greater than **i** such that the IQ of kid **j** is greater than the IQ of kid **i**, the pupils of kid **i** are all the kids numbered from **i + 1** to **j - 1**. If no such **j** exist we consider **j** to be equal to **n + 1**, note that kid number **i** will not have any pupils when **j = i + 1** or when **i = n**.

Math hatter doesn't remember the IQ of each kid, however he remembers their number of pupils. Using this information Math Hatter is trying to recover the IQ of each kid. Help him calculating the number of IQ assignations that he can find. As the answer could be large, output it modulo **109 + 7**.

### Input

The first line of the input contains one integer **T** the number of test cases. The description of **T** test cases follows.

Each test case consists of two lines.

The first line contains one integer **n** the number of kids, the second line contains **n** space separated integers **ci** denoting the number of pupils of kid **i**.

### Output

For each test case, output the answer to the problem modulo **109+7**.

### Constraints

- **1** ≤ **n** ≤ **105**, the sum of **n** over all test cases is at most **106**
- 0 ≤ **ci** n

### Example

<pre><b>Input:</b><tt>
2
4
0 2 1 0
4
0 2 1 1
</tt>
<b>Output:</b><tt>
3
0</tt>
</pre>### Explanation

In the **first example**, the possible students IQs are the following:

- \[1, 4, 3, 2\]
- \[2, 4, 3, 1\]
- \[3, 4, 2, 1\]

In the **second example**, there are no possible assignments because the last student can't have one pupil.
