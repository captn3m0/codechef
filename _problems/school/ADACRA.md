---
category_name: school
problem_code: ADACRA
problem_name: 'Ada and crayons'
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
problem_author: alei
problem_tester: deadwing97
date_added: 25-02-2016
tags:
    - alei
    - cakewalk
    - cook83
editorial_url: 'https://discuss.codechef.com/problems/ADACRA'
time:
    view_start_date: 1497812400
    submit_start_date: 1497812400
    visible_start_date: 1497812400
    end_date: 1735669800
    current: 1514815982
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK83/mandarin/ADACRA.pdf), [russian](http://www.codechef.com/download/translated/COOK83/russian/ADACRA.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK83/vietnamese/ADACRA.pdf) as well.

Ada has an array of **N** crayons, some crayons are pointing upwards and some downwards. Ada thinks that an array of crayons is beautiful if all the crayons are pointing in the same direction.

In one step you can flip any segment of consecutive crayons. After flipping a segment, all crayons pointing downwards will point upwards and visceversa

What is the minimum number of steps to make the array of crayons beautiful?

### Input

The first line of the input contains **T** the number of test cases. Each test case is described in one line containing a string **S** of **N** characters, the i-th character is 'U' if the i-th crayon is pointing upwards and 'D' if it is pointing downwards.

### Output

For each test case, output a single line containing the minimum number of flips needed to make all crayons point to the same direction.

### Constraints

- 1 ≤ **T** ≤ 3000
- 1 ≤ **N** ≤ 50

### Example

<pre><b>Input:</b>
1
UUDDDUUU

<b>Output:</b>
1
</pre>### Explanation

**Example case 1.** In one step we can flip all the crayons pointing downwards
