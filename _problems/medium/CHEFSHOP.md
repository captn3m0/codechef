---
category_name: medium
problem_code: CHEFSHOP
problem_name: Ingredients
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
problem_author: furko
problem_tester: iscsi
date_added: 27-04-2015
tags:
    - dp
    - furko
    - greedy
    - medium
    - nov15
editorial_url: 'http://discuss.codechef.com/problems/CHEFSHOP'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493557914
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/CHEFSHOP.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/CHEFSHOP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/CHEFSHOP.pdf) as well.

Chef would like go shopping to buy ingredients for his special dish. The local grocery store has some special discount offers. If you want to buy some set of ingredients you will pay for all ingredients except the cheapest one. Chef would like to spend as little money as possible. You have to help him. :)

The store is pretty small and stocks only one unit of each ingredients. Opposite each ingredient is a hanging price tag corresponding to it. The salesman walked away for a minute, giving Chef an opportunity to swap some price tags. He would like to swap some tags to minimize his purchase cost.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of ingredients Chef needs to buy. The second line contains **N** space-separated integers **A1**, **A2**, ... , **AN** denoting the value written on the price tags opposite the needed ingredients. The third line contains a single integer **M** denoting the number of special offers. The following **M** lines lists inventory of special offers, one offer per line. Each line contains an integer **Ci** followed by **Ci** integers denoting the indices of ingredients constituting the **i**th discount offer.

### Output

For each test case, output a single line containing the minimal purchase cost.

### Constraints

- **T** ≤ **5**
- **1** ≤ **N** ≤ **15**
- **1** ≤ **Ai** ≤ **106**
- 0 ≤ **M** ≤ **2N-1**
- **2** ≤ **Ci** ≤ **N**
- Subtask 1 (15 points): 1 ≤ **N** ≤ 5
- Subtask 2 (25 points): 1 ≤ **N** ≤ 10
- Subtask 3 (60 points): 1 ≤ **N** ≤ 15

### Example

<pre><b>Input:</b>
1
4 
1 2 3 4
3
2 1 2
2 3 4
3 1 2 3

<b>Output:</b>
6
</pre>