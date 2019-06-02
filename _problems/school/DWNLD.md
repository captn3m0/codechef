---
category_name: school
problem_code: DWNLD
problem_name: 'Download file'
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
problem_author: kingofnumbers
problem_tester: errichto
date_added: 20-10-2016
tags:
    - cakewalk
    - cook79
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/DWNLD'
time:
    view_start_date: 1487529000
    submit_start_date: 1487529000
    visible_start_date: 1487529000
    end_date: 1735669800
    current: 1492506713
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK79/mandarin/DWNLD.pdf), [Russian](http://www.codechef.com/download/translated/COOK79/russian/DWNLD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK79/vietnamese/DWNLD.pdf) as well.

Chef has recently got a broadband internet connection. His history of internet data usage is provided as below.

During the first **T1** minutes, the internet data used was **D1** MBs per minute, and during the next **T2** minutes, it was **D2** MBs per minute, and so on till during last **TN** minutes it was **DN** MBs per minute.

The internet provider charges the Chef **1** dollar for every **1** MB data used, except for the first **K** minutes, when the internet data is free as part of the plan provided to Chef.

Please find out the total amount that Chef has to pay the internet provider (in dollars).

### Input

First line of the input contains a single integer **TC** the number of test cases. Description of **TC** test cases follow.

First line of each test case contains two space separated integers **N** and **K**.

Next **N** lines of each test case contains information about the internet data usage. Specifically, in the **i**-th line, there will be two space separated integers: **Ti** and **Di**.

### Output

For each test case output a single integer in separate line, the amount that Chef has to pay in dollars.

### Constraints

- **1** ≤ **TC** ≤ **1,000**
- **1** ≤ **N** ≤ **10**
- 0 ≤ **K** ≤ **T1 + T2 + ... + TN**
- **1** ≤ **Ti**, **Di** ≤ **10**

### Example

<pre><b>Input:</b>
3
2 2
2 1
2 3
2 2
1 2
2 3
3 0
1 2
2 4
10 10
<b>Output:</b>
6
3
110
</pre>
### Explanation

**Example case 1.** For the first two minutes, internet data of usage of Chef is free. He has to pay for last 2 minutes only, for which he will be charged at 3 dollars per minute, i.e. total 6 dollars.

**Example case 2.** For the first two minutes, internet data of usage of Chef is free. He has to pay for last 1 minute only, for which he is being charged at 3 dollars per minute. So, in total he has to pay 3 dollars.

**Example case 3.** This time, Chef is not provided any free data usage. He has to pay for entire data usage, which comes out to be 1 \* 2 + 2 \* 4 + 10 \* 10 = 110 dollars.
