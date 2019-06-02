---
category_name: medium
problem_code: TAPOINT
problem_name: 'Find The Point'
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
problem_author: tuananh93
problem_tester: errichto
date_added: 15-09-2016
tags:
    - cook74
    - geometry
    - math
    - medium
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAPOINT'
time:
    view_start_date: 1474223400
    submit_start_date: 1474223400
    visible_start_date: 1474223400
    end_date: 1735669800
    current: 1493557942
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK74/mandarin/TAPOINT.pdf), [Russian](http://www.codechef.com/download/translated/COOK74/russian/TAPOINT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK74/vietnamese/TAPOINT.pdf) as well.

Jem is going to buy a house in Bearland. Can you help him to choose it?

Bearland has shape of circle with radius **R** metres and center at the point **(0, 0)**. There is a house at every point with integer coordinates (expressed in metres), excluding the border. Since Jem likes traveling abroad, he wants to live very close to the border. More precisely, his house must be at most **K** centimeters away from the circular border. He also requires that the coordinates of his house must be positive. Find and print coordinates of any house fulfilling Jem's wishes. If there is no such house, print **-1**.

### Input

The first line of the input contains one integer **T** — the number of test cases.

The **i**-th of following **T** lines contains two integers **Ri** and **Ki**, describing one test case.

### Output

For each test case print the answer in a separate line — two integer coordinates of any house Jem can buy, or print **-1** if none house satisfies the described conditions.

### Constraints

- **1 ≤ T ≤ 100**
- **2 ≤ Ri ≤ 109**
- **1 ≤ Ki ≤ 99**

### Example

<pre>
<b>Input 1</b>:
2
10 16
12 1

<b>Output 1</b>:
9 4
-1
</pre>
### Explanation

**test #1:** Jem's house must be at most 16 centimeters - which is equal to 0.16 metres away from the border. The distance from the point (9, 4) to the border is: 10 - sqrt(92 + 42) ~ 0.15
