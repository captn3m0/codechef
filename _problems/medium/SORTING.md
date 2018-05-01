---
category_name: medium
problem_code: SORTING
problem_name: Sorting
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
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 20-07-2013
tags:
    - easy
    - ltime03
    - persistence
    - segment
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SORTING'
time:
    view_start_date: 1377419529
    submit_start_date: 1377419529
    visible_start_date: 1377419529
    end_date: 1735669800
    current: 1493557933
layout: problem
---
All submissions for this problem are available.Alice uses the following pseudocode when she needs to sort a permutation of **N** positive integers:

procedure Sort(list **A**) defined as: 
 list **less**, **greater**
 if length(**A**) A
 **pivot** := **A(length(A)+1) / 2**
 for **i** := 1 to length(**A**) do:
 Increment(**comparison\_count**)
 if **Ai** pivot then append **Ai** to **less** else if **Ai** > **pivot** append **Ai** to **greater**
 end if
 end for
 return concatenate(Sort(**less**), **pivot**, Sort(**greater**) )

And now we are interested in the number of comparisons that will be made during the sorting of the given permutation of integers **A** with the provided code. So, we ask you to find the value of the variable **comparison\_count** after such a sorting.

### Input

The first line of input consists of a single integer **N**. The second line of input contains a permutation of **N** numbers.

### Output

Output the number of comparisons on the first and only line of the output.

### Example

<pre><b>Input:</b>
5
4 3 5 1 2

<b>Output:</b>
11
</pre>### Scoring

Subtask 1 (32 points): 1 N Subtask 2 (9 points): 1 N 5, the permutation is generated randomly.
Subtask 3 (45 points): 1 N Subtask 4 (14 points): 1 N 5.
