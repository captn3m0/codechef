---
category_name: medium
problem_code: STRDIG
problem_name: 'Chef and The String of Digits'
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
problem_author: rustinpiece
problem_tester: Rubanenko
date_added: 10-08-2013
tags:
    - ad
    - cook37
    - easy
    - implementation
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/STRDIG'
time:
    view_start_date: 1376852100
    submit_start_date: 1376852100
    visible_start_date: 1376852100
    end_date: 1735669800
    current: 1493557934
layout: problem
---
All submissions for this problem are available.The Chef has written all the numbers from **1** to **109** consecutively on a board. Let **P** be the long string
obtained by concatenating the numbers written on the board consecutively. Given below are the first few digits of the long string **P**.

`123456789101112131415161718192<b>02122</b>232425262728293031323334353637383940....`

Given another string **Q**, he is wondering whether **Q** is a substring of the string **P**.
For example, **Q**="02122" is a substring of **P**, and has been marked in bold above.

/>

### Input

The first line of the input contains **T** denoting the number of test cases. Each of the following **T** lines contain a string **Q**.

### Output

For each test case, print "**YES**" if the given string is contained in the string **P**, otherwise print "**NO**".

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ length of **Q** ≤ **100000 (105)**
- **Q** consists of only digits(0-9)

### Example

```
<b>Input:</b>
3
23456789101
3216546546546546545
02122
<br></br><b>Output:</b>
YES
NO
YES
/>
```