---
category_name: medium
problem_code: PP
problem_name: 'Palindrome Pairs'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: null
date_added: 9-10-2015
tags:
    - cook63
    - medium
    - palindrome
    - rolling
    - shangjingbo
    - strings
    - trie
editorial_url: 'http://discuss.codechef.com/problems/PP'
time:
    view_start_date: 1445193000
    submit_start_date: 1445193000
    visible_start_date: 1445193000
    end_date: 1735669800
    current: 1493557924
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK63/mandarin/PP.pdf) and [Russian](http://www.codechef.com/download/translated/COOK63/russian/PP.pdf) as well.

Given a list of strings **S**\[ 1..**N** \], you need to count how many ordered pairs of strings are awesome. Given two integers i and j, such that 1 ≤ i, j ≤ n and i ≠ j, an ordered pair ( **S**\[ **i** \], **S**\[ **j** \] ) is called awesome if and only if concatenating **S**\[ **i** \] and **S**\[ **j** \] gives a palindrome.

### Input

The first line contains an integer **T** denoting the total number of test cases.

In each test case, the first line contains an integer **N** denoting the total number of strings.

Then, there are **N** strings, each in a separate line. They only consist of lower case characters.

### Output

For each test case, output a single line containing the answer.

### Constraints

- **1** <= **T** <= **5**
In each test case,

- **1** <= **N** <= **10^6**
- Sum of lengths of **N** strings <= **10^6**

### Example

<pre><b>Input:</b>
1
3
a
ab
abb

<b>Output:</b>
2

</pre>### Explanation
ab|a and abb|a
