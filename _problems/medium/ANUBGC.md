---
category_name: medium
problem_code: ANUBGC
problem_name: 'Book Game with Chef'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: null
date_added: 5-03-2014
tags:
    - anudeep2011
    - cook46
    - dynamic
    - easy
editorial_url: 'http://discuss.codechef.com/problems/ANUBGC'
time:
    view_start_date: 1400437800
    submit_start_date: 1400437800
    visible_start_date: 1400437800
    end_date: 1735669800
    current: 1493557470
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK46/mandarin/ANUBGC.pdf) and [Russian](http://www.codechef.com/download/translated/COOK46/russian/ANUBGC.pdf) as well.

### Statement

Chef gives you a book with **N** pages. The pages are numbered from **1** to **N**.

Chef randomly selects a **Secret Digit** from  to **9**. Now he asks you to open one page of the book without looking at the book. You win the game if that page number contains the **Secret Digit**. For example if the **Secret Digit** is 8, then 8, 80, 1238213, 98 are all winning pages and 9, 90, 1239123 are loosing pages.

What is the probability of winning, if both Chef's choice and your choice has uniform distribution?

### Input

The first line of input contains integer **T**, denoting the number of test cases.

Each test case consists of a single line with integer **N**.

### Output

For each test case, output the required probability **P/Q**. **P/Q** is an irreducible fraction.

### Constraints

- **1** ≤ **T** ≤ **10000**
- **1** ≤ **N** ≤ **1017**

### Example

<pre><b>Input:</b>
2
1
5

<b>Output:</b>
1/10
1/10

</pre>### Explanation
Chef can choose any **Secret Digit** from  to **9**. But you can only open page with number **1**. Probability that the **Secret Digit** is **1** after you opened the page with number **1** is **1/10**.
