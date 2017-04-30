---
category_name: medium
problem_code: MAKPALIN
problem_name: 'Make Palindrome'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: amitpandeykgp
problem_tester: minimario
date_added: 10-08-2015
tags:
    - amitpandeykgp
editorial_url: 'http://discuss.codechef.com/problems/MAKPALIN'
time:
    view_start_date: 1440923400
    submit_start_date: 1440923400
    visible_start_date: 1440923400
    end_date: 1735669800
    current: 1493557777
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME27/mandarin/MAKPALIN.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME27/russian/MAKPALIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME27/vietnamese/MAKPALIN.pdf)

Divyam is teaching his student Amit about palindromes. A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward. For example, the string “abcba” is a palindrome. After teaching about it, Divyam gave a puzzle for Amit to solve:

Given a string **S**. Find the number of positions in **S** where we can insert a character to convert it into a palindrome. Character can be inserted in the beginning or the end, so there will be **(N+1)** possible positions for the insertion in a string having original length **N**. For example, if **S** = “aaa”, then there are four positions where we can insert a character so that the converted string is a palindrome. Converted palindromes are “**a**aaa”, “a**a**aa”, “aa**a**a” and “aaa**a**”. Inserted character is shown in boldface.

Amit finds the puzzle too difficult. Can you help him in solving it?

### Input

- First line of input contains an integer **T** denoting the number of test cases.
- First line of each test case will contain a string **S** containing lowercase letters only.

### Output

Print **T** lines, each containing an integer: the solution for the corresponding test case. ### Constraints

**Subtask #1: 20 points**

- **1 ≤ T ≤ 5, 1 ≤ length of string ≤ 1000**

**Subtask #2: 80 points**

- **1 ≤ T ≤ 5, 1 ≤ length of string ≤ 105**

```
<b>Input:</b>
2
aaa
aca

<b>Output:</b>
4
2

```
### Explanation

First sample has been explained in the problem statement.