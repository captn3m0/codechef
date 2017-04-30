---
category_name: medium
problem_code: LUCKY8
problem_name: 'Little Elephant and Product'
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
problem_author: witua
problem_tester: anton_lunyov
date_added: 3-02-2012
tags:
    - ad
    - easy
    - june12
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKY8'
time:
    view_start_date: 1339403687
    submit_start_date: 1339403687
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493557770
layout: problem
---
All submissions for this problem are available. A Little Elephant from the Zoo of Lviv likes lucky numbers very much. Everybody knows that the lucky numbers are positive integers whose decimal representation contains only the lucky digits **4** and **7**. For example, numbers **47**, **744**, **4** are lucky and **5**, **17**, **467** are not.

 Let **F4**(**X**) be the number of digits **4** in the decimal representation of **X**, and **F7**(**X**) be the number of digits **7** in the decimal representation of **X**. For example, **F4**(**456**) = **1**, **F4**(**444**) = **3**, **F7**(**1**) = , **F7**(**747**) = **2**. The Little Elephant wants to know the largest product **F4**(**X**) ∙ **F7**(**X**), where **L** ≤ **X** ≤ **R**. In other words he wants to know the value **max**{**F4**(**X**) ∙ **F7**(**X**) : **L** ≤ **X** ≤ **R**}.

### Input

 The first line of the input file contains an integer **T**, the number of test cases. **T** test cases follow. The only line of each test case contains two integers **L** and **R** separated by exactly one space.

### Output

 For each test case output a single line containing the answer for the corresponding test case.

### Constraints

1 ≤ **T** ≤ 1000

1 ≤ **L** ≤ **R** ≤ 1018

### Example

```

<b>Input:</b>
3
1 10
1 100
47 74

<b>Output:</b>
0
1
1

```
### Explanation

In both second and third test cases the maximal product is achieved at the numbers **47** and **74**.