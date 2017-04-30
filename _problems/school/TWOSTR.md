---
category_name: school
problem_code: TWOSTR
problem_name: 'Chef and the Wildcard Matching'
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
problem_author: rustinpiece
problem_tester: iscsi
date_added: 5-08-2015
tags:
    - basic
    - cakewalk
    - cook61
    - implementation
    - rustinpiece
    - strings
editorial_url: 'http://discuss.codechef.com/problems/TWOSTR'
time:
    view_start_date: 1440357574
    submit_start_date: 1440357574
    visible_start_date: 1440357574
    end_date: 1735669800
    current: 1492507586
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK61/mandarin/TWOSTR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK61/russian/TWOSTR.pdf) as well.

 Chef wants to implement wildcard pattern matching supporting only the wildcard '?'. The wildcard character '?' can be substituted by any single lower case English letter for matching. He has two strings **X** and **Y** of equal length, made up of lower case letters and the character '?'. He wants to know whether the strings **X** and **Y** can be matched or not.

### Input

The first line of input contain an integer **T** denoting the number of test cases. Each test case consists of two lines, the first line contains the string **X** and the second contains the string **Y**.

### Output

For each test case, output a single line with the word **Yes** if the strings can be matched, otherwise output **No**.

### Constraints

- **1** ≤ **T** ≤ **50**
- Both **X** and **Y** have equal length and the length is between 1 and 10.
- Both **X** and **Y** consist of lower case letters and the character '?'.

### Example

```
<b>Input:</b>
2
s?or?
sco??
stor?
sco??

<b>Output:</b>
Yes
No

```
### Explanation

**First Example:**  There are several ways the two strings can be matched, one of those is "score".

**Second Example:**  There is no way to match the strings.