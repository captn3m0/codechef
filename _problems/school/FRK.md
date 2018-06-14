---
category_name: school
problem_code: FRK
problem_name: 'Chef and Friends'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: lg5293
date_added: 27-03-2018
tags:
    - easy
    - ltime58
    - mgch
    - string
time:
    view_start_date: 1522602000
    submit_start_date: 1522602000
    visible_start_date: 1522602000
    end_date: 1735669800
    current: 1525454387
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME58/mandarin/FRK.pdf), [Russian](http://www.codechef.com/download/translated/LTIME58/russian/FRK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME58/vietnamese/FRK.pdf) as well.

Chef decided to find the connections with all of his friends in an unnamed social network. He calls a user of the social network his _friend_ if there is a common substring of the string "chef" and the nickname of that user with length ≥ 2.

Given a list of users of the social network, compute the number of Chef's friends.

### Input

- The first line of the input contains a single integer **N** denoting the number of users in the social network.
- **N** lines follow. Each of these lines contains a single string **u** denoting the nickname of one user.

### Output

Print a single line containing one integer — the number of Chef's friends.

### Constraints

- 1 ≤ **N** ≤ 5,000
- 3 ≤ **|u|** ≤ 20
- each character of each user's nickname is either a lowercase English letter ('a'-'z') or '.'
- the first character of each user's nickname is a lowercase English letter

### Subtasks

**Subtask #1 (100 points):** original constraints

### Example

<pre><b>Input:</b>

4
gennady.korotkevich
kefaa
fhlasek
chemthan

<b>Output:</b>

3
</pre>### Explanation

- gennady.korotkevich is a friend to Chef because he has "ch" at the end of his nickname, which is also a substring of "chef" with length 2
- the common substring with kefaa is "ef" and the common substring with chemthan is "che"
