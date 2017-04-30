---
category_name: easy
problem_code: CHEFTOWN
problem_name: 'ChefTown Parade'
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
problem_author: Rubanenko
problem_tester: laycurse
date_added: 3-08-2012
tags:
    - Rubanenko
    - data
    - deque
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/CHEFTOWN'
time:
    view_start_date: 1347356012
    submit_start_date: 1347356012
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493558125
layout: problem
---
All submissions for this problem are available.ChefTown is the biggest city and the capital of ChefLand. There are N beautiful buildings: restaurants, museums, living houses with large kitchens and so on. Every building has its height. For every i (1

3. Imagine, that we have a segment \[L,R\].
4. Let K=R-L+1 be the length of this segment, and B be a list of heights of the buildings that belong to this segment.
5. Let's sort B in non-decreasing order.
6. Segment \[L,R\] is interesting if B\[i\]-B\[i-1\]=1 for every i (2 Now the Mayor of ChefTown is interested how many ways to organize an interesting parade of length W for ChefTown citizens. Help him and find out the number of different parades of length W, which can be hold in the city. Two parades (\[L1,R1\] and \[L2,R2\]) are considered to be different, if L1≠L2 or R1≠R2.
  
  ### Input
  
   Each input file consists of two lines, the first one contains two integers N and W (1Output
  
  For each test case output a single integer - the number of interesting segments of buildings of length W.
  
  ### Example
  
  ```
  
  <b>Input 1:</b>
  2 1
  2 1
  <b>Input 2:</b>
  4 2
  1 2 3 4
  
  <b>Output for Input 1:</b>
  2
  <b>Output for Input 2:</b>
  3
  
  ```