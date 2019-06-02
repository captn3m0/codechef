---
category_name: medium
problem_code: TASUMOBC
problem_name: 'Sum Of Binomial Coefficent '
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: stzgd
date_added: 6-12-2014
tags:
    - combinatorics
    - digit
    - hard
    - ltime19
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TASUMOBC'
time:
    view_start_date: 1419755400
    submit_start_date: 1419755400
    visible_start_date: 1419755400
    end_date: 1735669800
    current: 1493557946
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME19/mandarin/TASUMOBC.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME19/russian/TASUMOBC.pdf).

 As we all know, [Binomial Coefficient](http://en.wikipedia.org/wiki/Binomial_coefficient) **C(n, r)** is defined by the
following formula.

![](/download/extimages/f17c481ba6b3f6c9eb2b9c06eb09252f.png)

Also define S(**n**) as follows.

![](/download/extimages/b5d1a105bdc2018c0546d52746b5a11d.png)

Note that **n** will be provided to you as an input parameter.

Since S(**n**) can be very large, please print it modulo **(109 + 7)**.

### Input

- The first line contains a single integer **T** representing the number of test cases.
- Each of the next **T** lines contains an integer **n**.

### Output

- For each test case, output a single line containing the value of **S(n) modulo (109 + 7)**.

### Constraints

**10 points:**

15. **1** ≤ **T** ≤ **300**
16. **1** ≤ **n** ≤ **300**
**30 points:**

18. **1** ≤ **T** ≤ **105**
19. **1** ≤ **n** ≤ **5000**
**60 points:**

21. **1** ≤ **T** ≤ **105**
22. **1** ≤ **n** ≤ **1018**
### Example

<pre><b>Input:</b>
5
1
2
3
4
5

<b>Output:</b>
2
4
2
4
8

</pre>