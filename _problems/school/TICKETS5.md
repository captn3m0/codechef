---
category_name: school
problem_code: TICKETS5
problem_name: Tickets
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
problem_author: xcwgf666
problem_tester: karanaggarwal
date_added: 21-03-2015
tags:
    - cakewalk
    - ltime23
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TICKETS5'
time:
    view_start_date: 1430037000
    submit_start_date: 1430037000
    visible_start_date: 1430037000
    end_date: 1735669800
    current: 1492506736
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME23/mandarin/TICKETS5.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME23/russian/TICKETS5.pdf).

Every day, Mike goes to his job by a bus, where he buys a ticket. On the ticket, there is a letter-code that can be represented as a string of upper-case Latin letters.

Mike believes that the day will be successful in case **exactly two different letters** in the code alternate. Otherwise, he believes that the day will be unlucky. Please see note section for formal definition of alternating code.

You are given a ticket code. Please determine, whether the day will be successful for Mike or not. Print "YES" or "NO" (without quotes) corresponding to the situation.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first and only line of each test case contains a single string **S** denoting the letter code on the ticket.

### Output

For each test case, output a single line containing "YES" (without quotes) in case the day will be successful and "NO" otherwise.

### Note

Two letters **x, y** where **x != y** are said to be alternating in a code, if code is of form "**xyxyxy...**". ### Constraints

- **1** ≤ **T** ≤ **100**
- **S** consists only of upper-case Latin letters

Subtask 1 (50 points):

- **|S|** = **2**

Subtask 2 (50 points):

- **2** ≤ **|S|** ≤ **100**

### Example

```
<b>Input:</b>
2
ABABAB
ABC

<b>Output:</b>
YES
NO

```