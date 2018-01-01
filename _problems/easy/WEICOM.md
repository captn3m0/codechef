---
category_name: easy
problem_code: WEICOM
problem_name: 'Weird Competition'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: melfice
date_added: 23-08-2017
tags:
    - chemthan
    - constructive
    - ltime53
    - medium
editorial_url: 'https://discuss.codechef.com/problems/WEICOM'
time:
    view_start_date: 1509210000
    submit_start_date: 1509210000
    visible_start_date: 1509210000
    end_date: 1735669800
    current: 1514816011
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME53/mandarin/WEICOM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME53/russian/WEICOM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME53/vietnamese/WEICOM.pdf) as well.

Chef is attending a chess competition. There are **n** people take part in. Each pair of people compete once. Winner earns 1 point, loser earns 0 point. A game never ends with a draw. After all games are over, Organizer decide to award prize to each participant. The prize of each participant is the square of his points. What is all possible total money the organizer will pay for all participants? Given **k**, determine if there is at least one scenario that the total money the organizers will pay is exactly **k**? If there's any, output one of them.

### Input

First line contains an integer **T** denotes the number of test cases. The **T** following lines, each line contains two integers **n, k**.

### Output

For each test case, if there isn't a such scenario, output -1.

otherwise print **n** lines, each line contains **n** characters. j-th character in i-th line is "1" if i-th participant wins j-th participant, otherwise "0". (i-th character in i-th line is always "0")

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ n ≤ 103**
- The sum of **n** over all test cases is at most **104**
- **1 ≤ k ≤ 109**

Subtasks:

- Subtask #1 (10 points): **n ≤ 5**
- Subtask #2 (30 points): **n ≤ 50**
- Subtask #3 (60 points): original constrains

### Example

<pre><b>Input:</b>
3
2 1
3 6
4 10

<b>Output:</b>
01
00
-1
0100
0011
1001
1000

</pre>