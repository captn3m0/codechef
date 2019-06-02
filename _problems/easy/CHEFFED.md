---
category_name: easy
problem_code: CHEFFED
problem_name: 'Chef and Numbers'
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
    - easy
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFFED'
time:
    view_start_date: 1469385000
    submit_start_date: 1469385000
    visible_start_date: 1469385000
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK72/mandarin/CHEFFED.pdf), [Russian](http://www.codechef.com/download/translated/COOK72/russian/CHEFFED.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFFED.pdf) as well.

Chef likes problems related to numbers a lot. He is generally quite good at solving these kinds of problems, but today he got stuck at one number theory problem, and so he asks your help to solve it.

Given a positive integer **N**, find out how many positive integers **X** satisfy the equation **X** + S(**X**) + S(S(**X**)) = **N**, where S(**X**) denoting sum of digits of **X** in decimal (base 10) representation.

### Input

The only line of the input contains one integer number - **N**.

### Output

Output single integer in a line denoting the count of number of positive integers **X** satisfying the above given equation.

### Constraints

- **1** ≤ **N** ≤ **109**

### Example 1

<pre><b>Input:</b>
6

<b>Output:</b>
1
</pre>
### Example 2

<pre><b>Input:</b>
9939

<b>Output:</b>
4
</pre>
### Explanation

**Example 1**. Only one positive integer **X = 2** satisfies the equation **X + S(X) + S(S(X)) = 6**, as **X + S(X) + S(S(X)) = 2 + 2 + 2 = 6**.

**Example 2**.**X** can be 9898, 9907, 9910 and 9913.

9898 + S(9898) + S(S(9898)) = 9898 + 34 + 7 = 9939

9907 + S(9907) + S(S(9907)) = 9907 + 25 + 7 = 9939

9910 + S(9910) + S(S(9910)) = 9910 + 19 + 10 = 9939

9913 + S(9913) + S(S(9913)) = 9913 + 22 + 4 = 9939

You can verify that there is not other positive value of **X** satisfying the given equation.
