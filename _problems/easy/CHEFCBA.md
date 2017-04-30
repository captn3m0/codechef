---
category_name: easy
problem_code: CHEFCBA
problem_name: 'Chef and Proportion'
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
problem_author: mgch
problem_tester: karanaggarwal
date_added: 10-07-2016
tags:
    - ad
    - cook72
    - mgch
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFCBA'
time:
    view_start_date: 1469385000
    submit_start_date: 1469385000
    visible_start_date: 1469385000
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/COOK72/mandarin/CHEFCBA.pdf), [Russian](/download/translated/COOK72/russian/CHEFCBA.pdf) and [Vietnamese](/download/translated/COOK72/vietnamese/CHEFCBA.pdf) as well.

### Read problems statements in [Mandarin Chinese](/download/translated/COOK72/mandarin/CHEFCBA.pdf), [Russian](/download/translated/COOK72/russian/CHEFCBA.pdf) and [Vietnamese](/download/translated/COOK72/vietnamese/CHEFCBA.pdf) as well.

Chef recently learned about ratios and proportions. He wrote some positive integers **a, b, c, d** on a paper. Chef wants to know whether he can shuffle these numbers so as to make some proportion? Formally, four numbers **x, y, z, w** are said to make a proportion if ratio of **x : y** is same as that of **z : w**.

### Input

Only line of the input contains four space separated positive integers - **a, b, c, d**.

### Output

Print "Possible" if it is possible to shuffle **a, b, c, d** to make proportion, otherwise "Impossible" (without quotes).

### Constraints

- 1 ≤ **a, b, c, d**  ≤ 1000

### Example

 ```
<b>Input:</b>
1 2 4 2

<b>Output:</b>
Possible

```
### Explanation

By swapping 4 and the second 2, we get 1 2 2 4. Note that 1 2 2 4 make proportion as 1 : 2 = 2 : 4. Hence answer is "Possible"