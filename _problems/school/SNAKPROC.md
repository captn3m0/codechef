---
category_name: school
problem_code: SNAKPROC
problem_name: 'Snake Procession'
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
problem_author: admin3
problem_tester: kingofnumbers
date_added: 18-05-2017
tags:
    - admin3
editorial_url: 'https://discuss.codechef.com/problems/SNAKPROC'
time:
    view_start_date: 1495625400
    submit_start_date: 1495625400
    visible_start_date: 1495625400
    end_date: 1735669800
    current: 1497283925
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKQL17/mandarin/SNAKPROC.pdf), [Russian](http://www.codechef.com/download/translated/SNCKQL17/russian/SNAKPROC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKQL17/vietnamese/SNAKPROC.pdf) as well.

The annual snake festival is upon us, and all the snakes of the kingdom have gathered to participate in the procession. Chef has been tasked with reporting on the procession, and for this he decides to first keep track of all the snakes. When he sees a snake first, it'll be its Head, and hence he will mark a 'H'. The snakes are long, and when he sees the snake finally slither away, he'll mark a 'T' to denote its tail. In the time in between, when the snake is moving past him, or the time between one snake and the next snake, he marks with '.'s.

Because the snakes come in a procession, and one by one, a valid report would be something like "..H..T...HTH....T.", or "...", or "HT", whereas "T...H..H.T", "H..T..H", "H..H..T..T" would be invalid reports (See explanations at the bottom).

Formally, a snake is represented by a 'H' followed by some (possibly zero) '.'s, and then a 'T'. A valid report is one such that it begins with a (possibly zero length) string of '.'s, and then some (possibly zero) snakes between which there can be some '.'s, and then finally ends with some (possibly zero) '.'s.

Chef had binged on the festival food and had been very drowsy. So his report might be invalid. You need to help him find out if his report is valid or not.

### Input

- The first line contains a single integer, **R**, which denotes the number of reports to be checked. The description of each report follows after this.
- The first line of each report contains a single integer, **L**, the length of that report.
- The second line of each report contains a string of length **L**. The string contains only the characters '.', 'H', and 'T'.

### Output

- For each report, output the string "Valid" or "Invalid" in a new line, depending on whether it was a valid report or not.

### Constraints

- 1 ≤ **R** ≤ 500
- 1 ≤ length of each report ≤ 500

### Example

<pre><b>Input:</b>
6
18
..H..T...HTH....T.
3
...
10
H..H..T..T
2
HT
11
.T...H..H.T
7
H..T..H

<b>Output:</b>
Valid
Valid
Invalid
Valid
Invalid
Invalid
</pre>### Explanation

"H..H..T..T" is invalid because the second snake starts before the first snake ends, which is not allowed.

".T...H..H.T" is invalid because it has a 'T' before a 'H'. A tail can come only after its head.

"H..T..H" is invalid because the last 'H' does not have a corresponding 'T'.
