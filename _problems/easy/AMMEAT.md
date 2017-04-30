---
category_name: easy
problem_code: AMMEAT
problem_name: 'Andrew and the Meatballs'
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
date_added: 28-03-2013
tags:
    - ad
    - cakewalk
    - cook33
    - sorting
    - witua
editorial_url: 'http://discuss.codechef.com/problems/AMMEAT'
time:
    view_start_date: 1366569000
    submit_start_date: 1366569000
    visible_start_date: 1728420626
    end_date: 1735669800
    current: 1493558104
layout: problem
---
Andrew likes meatballs very much.

He has **N** plates of meatballs, here the **i**th plate contains **Pi** meatballs. You need to find the minimal number of plates Andrew needs to take to his trip to Las Vegas, if he wants to eat there at least **M** meatballs. Note that each plate is already packed, i.e. he cannot change the amount of meatballs on any plate.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two space-separated integers **N** and **M**. The second line contains **N** space-separated integers **P1**, **P2**, ..., **PN**.

### Output

For each test case, output an integer, denoting the minimum number of plates. If it's impossible to take at least **M** meatballs, print **-1**.

### Constraints

- **1** ≤ **T** ≤ **7777**
- **1** ≤ **N** ≤ **7**
- **1** ≤ **M, Pi** ≤ **1018**

### Example

```
<b>Input:</b>
1
4 7
1 2 3 4

<b>Output:</b>
2

```
### Explanation

If he takes **3**rd and **4**th plates, then we may eat **P3 + P4 = 7** meatballs in Las Vegas. This is the only way for eating at least **M = 7** meatballs with **2** plates.