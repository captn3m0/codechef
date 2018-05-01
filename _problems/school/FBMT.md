---
category_name: school
problem_code: FBMT
problem_name: 'Football Match'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
problem_tester: kingofnumbers
date_added: 20-12-2017
tags:
    - cakewalk
    - chemthan
    - chemthan
    - cook89
    - likecs
    - looping
editorial_url: 'https://discuss.codechef.com/problems/FBMT'
time:
    view_start_date: 1514140200
    submit_start_date: 1514140200
    visible_start_date: 1514140200
    end_date: 1735669800
    current: 1514816983
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK89/mandarin/FBMT.pdf), [Russian](http://www.codechef.com/download/translated/COOK89/russian/FBMT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK89/vietnamese/FBMT.pdf) as well.

You are given a score log of a football match between two teams. Every time when one of the teams scored a goal, the name of that team was written in the score log on a separate line.

At the end of the match, the team that scored strictly more goals than the other team wins the match. If both teams scored an equal number of goals, the match ends in a tie. Determine the name of the winning team or that the match ended in a tie.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **n** denoting the number of records in the score log (the total number of goals scored during the match).
- Each of the following **n** lines contains a string **s** denoting the name of the team that scored a goal.

### Output

For each test case, print a single line containing one string — the name of the winning team or "Draw" (without quotes) in case of a tie.

### Constraints

- 1 ≤ **T** ≤ 105
- 0 ≤ **n** ≤ 105
- 1 ≤ **|s|** ≤ 20
- **s** consists only of lowercase English letters
- sum of **n** over all test cases ≤ 105
- for each test case, there are at most two different team names

### Example

<pre>
<b>Input:</b>

2
4
ab
bc
bc
ab
3
xxx
yyy
yyy

<b>Output:</b>

Draw
yyy
</pre>