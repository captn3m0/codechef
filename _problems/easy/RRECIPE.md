---
category_name: easy
problem_code: RRECIPE
problem_name: 'Recipe Reconstruction'
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
problem_author: yellow_agony
problem_tester: gamabunta
date_added: 2-09-2012
tags:
    - cook26
    - simple
    - simple
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/RRECIPE'
time:
    view_start_date: 1348427933
    submit_start_date: 1348427933
    visible_start_date: 1348427700
    end_date: 1735669800
    current: 1493558183
layout: problem
---
All submissions for this problem are available.Chef had an interesting dream last night. He dreamed of a new revolutionary chicken recipe. When he woke up today he tried very hard to reconstruct the ingredient list. But, he could only remember certain ingredients. To simplify the problem, the ingredient list can be represented by a string of lowercase characters 'a' - 'z'.

Chef can recall some characters of the ingredient list, all the others, he has forgotten. However, he is quite sure that the ingredient list was a palindrome.

You are given the ingredient list Chef dreamed last night. The forgotten characters are represented by a question mark ('?'). Count the number of ways Chef can replace the forgotten characters with characters 'a' - 'z' in such a way that resulting ingredient list is a palindrome.

### Input

The first line of input contains a single integer T, the number of test cases. T lines follow, each containing a single non-empty string - the ingredient list as recalled by Chef. Whatever letters he couldn't recall are represented by a '?'.

### Output

For each test case, output a single line containing the number of valid ways the ingredient list could be completed. Since the answers can be very large, output each answer modulo 10,000,009.

### Example

<pre>
<b>Input:</b>
5
?
??
ab?
a?c
aba

<b>Output:</b>
26
26
1
0
1
</pre>
### Constraints

1 ≤ T ≤ 20

1 ≤ sum of length of all input strings ≤ 1,000,000

Each input string contains only lowercase roman letters ('a' - 'z') or question marks.
