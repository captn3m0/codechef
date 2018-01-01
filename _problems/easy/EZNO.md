---
category_name: easy
problem_code: EZNO
problem_name: 'Easy Numbers'
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
problem_author: wwwwodddd
problem_tester: kevinsogo
date_added: 14-05-2016
tags:
    - backtracking
    - cook70
    - easy
    - enumeration
    - pdn
    - precomputation
    - wwwwodddd
editorial_url: 'http://discuss.codechef.com/problems/EZNO'
time:
    view_start_date: 1463941800
    submit_start_date: 1463941800
    visible_start_date: 1463941800
    end_date: 1735669800
    current: 1493558143
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK70/mandarin/EZNO.pdf), [Russian](http://www.codechef.com/download/translated/COOK70/russian/EZNO.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK70/vietnamese/EZNO.pdf) as well.

While studying representation of numbers in various bases, Chef discovered an interesting properties of some _positive_ numbers, which Chef believed are somewhat easy to memorize. Chef called such _positive_ numbers _easy_ numbers.

These numbers had an interesting property: Let the base Chef is currently studying be **b**. Represent the number in base **b** (without leading zeros). For each prefix of length **k** (from 1 to number of digits in number in the base), the number formed by considering the digits of the prefix in base **b** is divisible by **k**.

For example, let base Chef is studying be **2**.

- 1 is an _easy_ number as its prefix of length 1 (i.e. 1) is divisible by 1.
- 2 is also an _easy_ number, as its prefix of length 1 (i.e. 1) is divisible by 1 and the prefix of length 2 (i.e. 2, represented as 10 in base 2) is also divisible by 2.
- 3 is not an _easy_ number, as its prefix of length 2 (i.e. 3, represented as 11 in base 2) is not divisible by 2.

Now Chef finds these numbers easy and thinks that following question related to _easy_ numbers will be easy for you too. He asks you to find the number of _easy_ numbers represented in base **b** and consisting of exactly **d** digits. As the answer could be quite large, output it modulo **109 + 7**.

### Input

First line of the input contains a single integer **T** denoting the number of test cases.

For each test case, there will be a single line containing two space separated integers **b, d**, denoting the base and number of digits respectively.

### Output

For each test case, output a single integer denoting the number of _easy_ numbers in base **b** consisting of **d** digits, modulo **109 + 7**. ### Constraints

- **1** ≤ **T** ≤ **100**
- **2** ≤ **b** ≤ **16**
- **1** ≤ **d** ≤ **109**

### Example

<pre><b>Input:</b>
2
2 2
10 3

<b>Output:</b>
1
150

</pre>### Explanation
**Example case 1.** There are 2 numbers in base 2 consisting of 2 digits. Those are 2 (represented as 10 in base 2) and 3 (represented as 11 in base 2). 2 is an easy number, whereas 3 is not (see the explanation about it in the problem statement). Hence the number of easy numbers consisting of 2 digits in base 2 are 1.
