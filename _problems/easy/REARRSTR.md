---
category_name: easy
problem_code: REARRSTR
problem_name: 'Devu and decorating birthday cake'
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
problem_author: admin2
problem_tester: null
date_added: 12-05-2015
tags:
    - admin2
    - cook58
    - easy
    - greedy
editorial_url: 'http://discuss.codechef.com/problems/REARRSTR'
time:
    view_start_date: 1432492200
    submit_start_date: 1432492200
    visible_start_date: 1432492200
    end_date: 1735669800
    current: 1493558217
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK58/mandarin/REARRSTR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK58/russian/REARRSTR.pdf) as well.

Today is Devu's birthday. He has obtained few colored balloons from his friends. You are given this information by a string **s** consisting of lower case English Latin letters. Each letter (from 'a' to 'z') denotes a color. e.g. if s = "aab", then it means that he has received two balloons of color 'a' whereas one balloon of color 'b'.

Now, Devu wants to decorate the cake by arranging all the balloons linearly from left to right on the cake such that no same colored balloons are nearby/ adjacent to each other.

Now Devu wonders whether it is possible to do so or not? Please help him in this. If it is not possible to do so, print -1. Otherwise, print any one of arrangements of the balloons on the cake. If there are more than one possible ways of doing so, you can print any one of them.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- First line of each test case will contain string **s**

### Output

Print a single line corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ size of string **s**  **≤ 105**
- Sum of size of string **s** over all test cases will be less than or equal to ≤ 106

### Example

<pre><b>Input:</b>
3
aab
ab
aa
<b>Output:</b>
aba
ab
-1

</pre>### Explanation
**Example case 1.** He can arrange the balloons in the order given by the following string "aba".

**Example case 2.** He can arrange the balloons in the order given by the following string "ab"

**Example case 3.** There is no valid way of decorating cakes with balloon in the desired way. So we print -1.
