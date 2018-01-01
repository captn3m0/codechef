---
category_name: easy
problem_code: CHEFTWOS
problem_name: 'Chef and Two String'
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
problem_author: berezin
problem_tester: alex_2oo8
date_added: 11-06-2016
tags:
    - berezin
    - dynamic
    - easy
    - oct16
editorial_url: 'http://discuss.codechef.com/problems/CHEFTWOS'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493558125
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/CHEFTWOS.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/CHEFTWOS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/CHEFTWOS.pdf) as well.

Chef's loves his dog so much! Once his dog created two strings **a** and **b** each of length **n** consisting of digits **1** and **2**, and even a problem about them!

Chef's Dog will tell by barking if a string **x** (also containing only digits **1** and **2** and with length **N**) is **good** or not by performing the following actions.

- It starts at first digit of the string, i.e. at **i = 1**.
- It can move from digit **i** to either **i - 1** or **i + 1** if **xi** equals **1** and the corresponding digits exist.
- It can move from digit **i** to either **i - 2** or **i + 2** if **xi** equals **2** and the corresponding digits exist.
- It **must** visit each digit **exactly** once.
- It **must** finish at the last digit (**XN**).

Chef's dog wants to make both the strings **a** and **b** _good_ by choosing some subset **S** (possibly empty) of indices of set **{1, 2, ..., n}** and swapping each index **i ϵ S** between string **a** and **b**, i.e. swapping **ai** and **bi**. Can you find how many such subsets **S** exist out there? As the answer could be large, output it modulo **109 + 7**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line contains string **a**.

The second line contains string **b**.

### Output

For each test case, output a single line containing answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **|a| = |b|** ≤ **105**
- **'1'** ≤ **ai, bi** ≤ **'2'**

### Subtasks

- Subtask #1 (30 points) **|a|, |b|** ≤ 10
- Subtask #2 (70 points) **original constraints**

### Example

<pre><b>Input:</b>
2
1111
2211
222
111

<b>Output:</b>
8
0

</pre>### Explanation
**Test case 1.**Possible subsets are: **{}**, **{1, 2}**, **{1, 2, 3}**, **{1, 2, 4}**, **{1, 2, 3, 4}**, **{3}**, **{4}**, **{3, 4}**.

**Test case 2.** There are no possible sets **S** which can make both the strings good.
