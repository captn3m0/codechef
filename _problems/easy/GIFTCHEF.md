---
category_name: easy
problem_code: GIFTCHEF
problem_name: 'Gift and Chef'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: omelyanenko
problem_tester: xcwgf666
date_added: 4-02-2016
tags:
    - dynamic
    - easy
    - kmp
    - nov16
    - omelyanenko
editorial_url: 'http://discuss.codechef.com/problems/GIFTCHEF'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493558150
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/GIFTCHEF.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/GIFTCHEF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/GIFTCHEF.pdf) as well.

Last week Penguin Charlie had a birthday. Chef presented him a string **S**.

Unfortunately, Charlie doesn't like string **S**, he likes string **F**. Charlie wants to create a few strings **F** from **S** by cutting. Cutting means getting some substrings from **S** that are equal to **F** and delete them from string S. After deleting a substring, the left and right parts of the resulting string remain separated. Note, a substring of a string **S** is a consecutive sequence of characters in **S**.

In some cases Charlie can still get substrings equal to **F** from the pieces that remain after cutting the original string. Your task is to calculate the number of ways to cut out at least one occurrence of the substring **F** in **S**. As this number may be too large, print it modulo 109 + 7.

### Input

Input begins with an integer **T**: the number of test cases.
Each test case consists of a two lines with two strings: **S**, **F**.

### Output

For each test case, output a single line indicating the number of ways Charlie can cut at least one occurrence of **F** from **S** modulo 109 + 7.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **10**

**Subtask 1 : 10 points** - **1** ≤ **|F|** ≤ **|S|** ≤ **100**

**Subtask 2 : 30 points** - **1** ≤ **|F|** ≤ **|S|** ≤ **5000**

**Subtask 3 : 60 points**- **1** ≤ **|F|** ≤ **|S|** ≤ **300000**

### Example

<pre><b>Input:</b>
<tt>3
chefandcharliethebest
charliethebest
heknowsimeanityeahyouknowimeanityouknow
imeanit
aaaaa
aa</tt>

<b>Output:</b>
<tt>1
3
7</tt>
</pre>
### Explanation

**Example case 1.**
chefand|**charliethebest**|
1 way to cut 1 string "charliethebest" from the string S:
**Example case 2.**
heknows|**imeanit**|yeahyouknow|**imeanit**|youknow
2 ways to cut 1 string "imeanit" from the string S - take one of them
1 way to cut 2 strings "imeanit" from the string S - take both:
**Example case 3.**
4 ways to cut 1 string "aa" from the string "aaaaa": |**aa**|aaa, a|**aa**|aa, aa|**aa**|a, aaa|**aa**|
3 ways to cut 2 strings "aa" from the string "aaaaa": |**aa**||**aa**|a, |**aa**|a|**aa**|, a|**aa**||**aa**|.
