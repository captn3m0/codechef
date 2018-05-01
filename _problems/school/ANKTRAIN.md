---
category_name: school
problem_code: ANKTRAIN
problem_name: 'Train Partner'
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
problem_author: code_master01
problem_tester: kevinsogo
date_added: 20-05-2015
tags:
    - code_master01
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1492506721
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/ANKTRAIN.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/ANKTRAIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/ANKTRAIN.pdf) as well.

Rahul and Rashi are off to the wedding of a close relative. This time they have to travel without their guardians. Rahul got very interested in the arrangement of seats inside the train coach.

The entire coach could be viewed as an arrangement of consecutive blocks of size 8.

<pre>
Berth Number   	Compartment

 1 -  8               1  
 9 - 16               2  
17 - 24               3  
... and so on

</pre>Each of these size-8 blocks are further arranged as:
<pre>
 1LB,  2MB,  3UB,  4LB,  5MB,  6UB,  7SL,  8SU  
 9LB, 10MB, ...
 ...   
 ...

</pre>Here `LB` denotes lower berth, `MB` middle berth and `UB` upper berth. The following berths are called **Train-Partners**:
<pre>
3UB   |  6UB  
2MB   |  5MB  
1LB   |  4LB  
7SL   |  8SU  

</pre>and the pattern is repeated for every set of 8 berths.
Rahul and Rashi are playing this game of finding the train partner of each berth. Can you write a program to do the same?

### Input

The first line of input contains a single integer **T**, denoting the number of test cases to follow.

Each of the next **T** lines contain a single integer **N**, the berth number whose neighbor is to be found out.

### Output

The output should contain exactly **T** lines each containing the berth of the neighbor of the corresponding seat.

### Constraints

### Subtasks

**Subtask #1 (50 points):**

- **1** ≤ **T** ≤ **8**
- **1** ≤ **N** ≤ **8**

**Subtask #2 (50 points):**

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **500**

### Example

<pre><b>Input:</b>
<tt>3
1
5
3</tt>

<b>Output:</b>
<tt>4LB
2MB
6UB</tt>
</pre>