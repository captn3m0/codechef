---
category_name: medium
problem_code: AMBALLS
problem_name: 'Andrew and the Balls'
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
problem_tester: laycurse
date_added: 19-04-2013
tags:
    - cook33
    - dynamic
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/AMBALLS'
time:
    view_start_date: 1366569000
    submit_start_date: 1366569000
    visible_start_date: 1728420664
    end_date: 1735669800
    current: 1493557447
layout: problem
---
Andrew likes colored balls very much.

He has **N** different colors of balls, all colors are numbered from **1** to **N**, inclusive. There are **C1** balls of the first color, **C2** balls of the second color, ..., **CN** balls of the **N**th color. All balls of the same color are identical.

Now he wants to arrange all the balls in a row in such a way that no two consecutive balls have the same color. But he wonders in how many ways can he arrange all the balls. Help him to find the number of ways of arranging all the balls. The number can be very large, so you must output this number modulo **1000000007** (**109+7**).

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains single integer **N**. The second line contains **N** space-separated integers **C1**, **C2**, ..., **CN**.

### Output

For each test case, output an integer, denoting the number of ways that he arranges all the balls modulo **1000000007** (**109+7**).

### Constraints

- **1** ≤ **T** ≤ **7**
- **1** ≤ **N** ≤ **200**
- **1** ≤ **C1 + C2 + ... + CN** ≤ **200**

### Example

<pre>
<b>Input:</b>
2
2
1 2
3
3 1 2

<b>Output:</b>
1
10
</pre>
### Explanation

**Example case 1**: There is only one way to arrange all balls as follows
color-**2** color-**1** color-**2**

**Example case 2**: There are **10** ways to arrange all balls as follows
color-**1** color-**2** color-**1** color-**3** color-**1** color-**3**
color-**1** color-**2** color-**3** color-**1** color-**3** color-**1**
color-**1** color-**3** color-**1** color-**2** color-**1** color-**3**
color-**1** color-**3** color-**1** color-**2** color-**3** color-**1**
color-**1** color-**3** color-**1** color-**3** color-**1** color-**2**
color-**1** color-**3** color-**1** color-**3** color-**2** color-**1**
color-**1** color-**3** color-**2** color-**1** color-**3** color-**1**
color-**2** color-**1** color-**3** color-**1** color-**3** color-**1**
color-**3** color-**1** color-**2** color-**1** color-**3** color-**1**
color-**3** color-**1** color-**3** color-**1** color-**2** color-**1**
