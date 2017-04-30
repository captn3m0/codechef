---
category_name: medium
problem_code: LEPAINT
problem_name: 'Little Elephant and Painting'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: witua
problem_tester: null
date_added: 20-03-2012
tags:
    - dynamic
    - july14
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEPAINT'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493557921
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY14/mandarin/LEPAINT1.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/LEPAINT.pdf).

Little Elephant from Zoo of Lviv likes to paint.

He has **n** objects to paint, ordered in a row and numbered form left to right starting from **1**. There are totally **c** colors, numbered from  to **c-1**. At the beggining all objects are colored in color with number **1**. When object with color **a** is painted in color **b**, the resulting color will have number **(a\*b) mod c**.

Little Elephant is going to make **k** turns. At **i-th** (0-based numeration) turn he will randomly choose any subset (even empty) of objects with indices in range **\[Li; Ri\]** (inclusive) and paint all objects in chosen subset with random color (the same for all objects in the subset).

Little Elephant wants to know the expected sum of all colors over all **n** objects after making all **k** turns. Help him.

### Input

First line contain single integer **T** - the number of test cases. **T** test cases follow. First line of each test case contains three integers **n**, **c** and **k**. Next **k** lines of each test case contain **k** pairs of integers **Li** and **Ri**, one pair per line.

### Output

In **T** lines print **T** real numbers - the answers for the corresponding test cases.

Any results within 10^-6 absolute error will be accepted.

### Constraints

1 <= **T** <= 10

1 <= **n, k** <= 50

2 <= **c** <= 100

1 <= **Li** <= **Ri** <= **n**

### Example

```

<b>Input:</b>
2
4 3 4
1 2
2 4
3 3
1 4
7 10 7
7 7
3 4
1 2
5 5
4 5
2 7
3 3

<b>Output:</b>
3.444444444
22.943125000


```