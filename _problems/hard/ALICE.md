---
category_name: hard
problem_code: ALICE
problem_name: Alice
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
date_added: 20-07-2016
tags:
    - alei
    - constructive
    - cook73
    - easy
    - gcd
editorial_url: 'http://discuss.codechef.com/problems/ALICE'
time:
    view_start_date: 1471804200
    submit_start_date: 1471804200
    visible_start_date: 1471804200
    end_date: 1735669800
    current: 1493556606
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK73/mandarin/ALICE.pdf), [Russian](http://www.codechef.com/download/translated/COOK73/russian/ALICE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK73/vietnamese/ALICE.pdf) as well.

As a cryptologist, after working on numerous cryptographic protocols, Alice is now retired and living happily in Wonderland. However Alice is still obsessed with security, she even invented a new way to set passwords. Given a board of **n** rows and **n** columns with unitary size cells, Alice creates a password by drawing exactly **n+1** lines with vertices of the integer points on the perimeter of the board. ![](https://s3.amazonaws.com/codechef_shared/download/upload/tiles.png)

One day Alice forgot her CodeChef password! She knew that she had set her password in the secure way. She remembers that no two lines were parallel, and that every cell of the board was cut by at least one of the lines. A cell is cut by a line when there exists a point strictly inside of the cell that belongs to the line.

Please help Alice finding one password satisfying the information that she remembered.

### Input

The first line of the input contains one integer **T** the number of test cases.

Each test case is described by a line containing an integer **n** representing the size of the board.

### Output

For each test case print **n + 1** lines each of them containing four integers **x1 y1 x2 y2** with **x1 ≠ x2** and **y1 ≠ y2**, representing a line that goes from **(x1,y1)** to **(x2,y2)**.

If there are multiple passwords that satisfies the information, print any of them.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n** ≤ **103**

### Example

```
<tt><b>Input:</b>
1
3
</tt>
<b>Output:</b>
<tt>0 0 3 2
3 0 0 2
0 1 2 3
0 3 3 2
</tt>
```
### Explanation

One of the possible passwords is depicted in the above figure.

Every cell is cut by at least one line, for example the green cell is cut by the blue and purple lines, but not by the yellow one. The integer points on the perimeter of the board are drawn as small black circles.