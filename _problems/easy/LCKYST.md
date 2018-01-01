---
category_name: easy
problem_code: LCKYST
problem_name: 'Na2a and lucky stone'
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
problem_author: na2a
problem_tester: mugurelionut
date_added: 8-04-2015
tags:
    - july15
    - maths
    - na2a
    - simple
editorial_url: 'http://discuss.codechef.com/problems/LCKYST'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493558159
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/JULY15/mandarin/LCKYST.pdf) and [Russian](/download/translated/JULY15/russian/LCKYST.pdf).

A number is called as a lucky number if its decimal representation contains only the lucky digits, 4 and 7. e.g. 47, 744, 4 are lucky numbers, whereas 5, 17, 467 are not.

Recently, Na2a found a magic stone. With the help of this stone, he can multiply a number by any lucky number. Also, the magic stone can be used any number of times (possibly zero or infinite number of times).
 For example, if initially he has the number 1, then he can get numbers like 28 (formed by 1\*4\*7), 14476 (formed as 1\*47\*77\*4) etc.

Na2a has **N** numbers in his bag which are denoted by array **A**. For each number **A**i in his bag, he asks you to transform it to a number with maximum possible number of trailing zeroes by using Magic Stone. You have to find the smallest of such numbers, since there can be multiple numbers with the maximum possible number of trailing zeros.

### Input

- There is a single test case.
- First line contains a single integer **N** as stated in the problem.
- The second line contains **N** space-separated integers **A**1, **A**2, ... , **A****N** where **A**i denotes the **i**th number in the bag.
 
### Output

- Output **N** lines, in which **i**th line contains the answer corresponding to the number **A**i.
 
### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ **A**i ≤ 109
 
### Subtasks

 **Subtask 1(8 points)**

- 1 ≤ **N** ≤ 10
- 1 ≤ **A**i ≤ 10
 

  **Subtask 2(22 points)**

- 1 ≤ **N** ≤ 102
- 1 ≤ **A**i ≤ 103
 

  **Subtask 3(70 points)**

- Original constraints
 
### Example

 ```
<b>Input:</b>
2
2 15

<b>Output:</b>
2
60

<pre>### Explanation
**Example case 1.** You can't get any number having zeros at the end multiplying 2 by lucky numbers.

**Example case 2.** You can multiply 15 by 4 and get 60, which has one trailing zero.
