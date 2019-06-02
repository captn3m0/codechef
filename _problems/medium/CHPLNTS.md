---
category_name: medium
problem_code: CHPLNTS
problem_name: 'Chef And Plants'
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
problem_author: abbas
problem_tester: null
date_added: 6-09-2015
tags:
    - abbas
time:
    view_start_date: 1441555600
    submit_start_date: 1441555600
    visible_start_date: 1420050600
    end_date: 1735669800
    current: 1493557565
layout: problem
---
All submissions for this problem are available.Chef is the richest person in his town Chefinia. Chef has a big garden along with greenhouse. 

Garden has N plants, each with a height hi (0 ≤ i ≤ N-1). 
/>/>

Now chef wants to trim some of the plants to make all the plants of the same height.
In one move, chef can select a range L,R (0 ≤ L ≤ R ≤ N-1) and reduce the height of all plants in the range by 1. 



Chef is feeling lazy and wants to know what is the minimum number of moves needed for chef to make all plants of equal length. Please help him find the answer. />/>

### Input

5. First line consists of integer **T**, the no. of test cases. **T** test cases follow.
6. Each test case consists of 2 line. First line contains integer **N**, the no. of plants.
7. The next line contains **N** space separated integers, representing height hi of each plant.
### Output

For each test case, output a single integer – the minimum no. of moves required.

### Constraints

11. 1 ≤ **T** ≤ 50
12. 1 ≤ **N** ≤ 105
13. 1 ≤ **hi** ≤ 109
### Example

<pre><b>Input:</b>
2
3
1 2 3
5
12 18 21 10 9

<b>Output:</b>
2
12
</pre>
### Explanation

**Example case 1.**
In first case, we can first choose (2,2) and then (1,2)


1 2 3 -> 1 2 2 -> 1 1 1 />
