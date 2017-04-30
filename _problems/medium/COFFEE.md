---
category_name: medium
problem_code: COFFEE
problem_name: 'Coffee Breaks'
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
problem_author: xcwgf666
problem_tester: logic_iu
date_added: 23-08-2015
tags:
    - dynamic
    - ltime28
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/COFFEE'
time:
    view_start_date: 1440923400
    submit_start_date: 1440923400
    visible_start_date: 1440923400
    end_date: 1735669800
    current: 1493557915
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME28/mandarin/COFFEE.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME28/russian/COFFEE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME28/vietnamese/COFFEE.pdf)

Sergey works as a programmer. Like all programmers, he is a coffee fan. He likes coffee so much that has **K** cups of coffee daily. However, having more than **K** cups doesn't suit him, because the excess caffeine won't allow him to sleep at night.

Sergey's working day is divided into **N** periods. For every period, he knows how many kilobytes of code he can produce.

During each of the periods, Sergey can either have or not to have one cup of coffee. If he is having a cup of coffee in some period, the amount of code he writes in this period drops to zero. But he also gets a productivity boost — if he decides to skip coffee during a period and the last cup of coffee he had was no more than **D** periods ago, the amount of code he writes during such a period is **M** times the usual.

As his productivity advisor (congrats on your new job!), help Sergey plan his coffee breaks optimally. Please find the maximum number of lines of code he can write, provided that he has **exactly K** coffee breaks during the day.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains four space separated integers **N**, **K**, **D** and **M** denoting the number of the working periods, the number of coffee-breaks and two more parameters as described in the statement.

The second line contains **N** space-separated integers **A1**, **A2**, ... , **AN** denoting the number of kilobytes of code that Sergey writes during each period.

### Output

For each test case, output a single line containing the maximum number of kilobytes of code that Sergey can produce if he takes **exactly K** coffee breaks.

### Constraints

- **1** ≤ **T** ≤ **200**
- In subtasks **1-3** it holds that **1** ≤ sum of all **N** over the test case ≤ **1000**
- Subtask 1 (15 points): **K** = **1**, **1** ≤ **D** N ≤ **18**
- Subtask 2 (25 points): **1** ≤ **K**, **D** N ≤ **18**
- Subtask 3 (30 points): **1** ≤ **K, D** N ≤ **200**
- Subtask 4 (30 points): **1** ≤ **K, D** N ≤ **5000**, **1** ≤ sum of all **N** over the test case ≤ **5000**
- **1** ≤ **M, Ai** ≤ **1000**

### Example

```
<b>Input:</b>
<tt>1
5 2 2 10
1 2 3 4 5</tt>

<b>Output:</b>
<tt>110</tt>


```
### Explanation

**Example case 1.** Sergey will have coffee during the periods numbered **1** and **3**. In these periods, the amount of code he produces will be zero, but during the rest, his code production quantities will get multiplied by **10**. Thus, we will write **(2 + 4 + 5) \* 10** KB of code.