---
category_name: hard
problem_code: ADADET
problem_name: 'A Study in Bake Street'
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
date_added: 30-05-2017
tags:
    - alei
    - convex
    - cook83
    - geometry
    - hull
    - medium
    - stack
editorial_url: 'https://discuss.codechef.com/problems/ADADET'
time:
    view_start_date: 1497812400
    submit_start_date: 1497812400
    visible_start_date: 1497812400
    end_date: 1735669800
    current: 1514816598
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK83/mandarin/ADADET.pdf), [russian](http://www.codechef.com/download/translated/COOK83/russian/ADADET.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK83/vietnamese/ADADET.pdf) as well.

Chef Ada is not just a Chef but also a detective. Currently she is investigating a massive murdering case in Bake Street.

Bake Street is composed of **n** buildings in a straight line. They are numbered from 1 to **n**, as you move from left to right. The i-th building is at position  **xi**  and has height **hi**. The buildings are so thin that we can consider them as vertical segments. The murderer climbed to the top of one of the buildings and shot at all the buildings to the right, which had a lesser height than the building on which he was, and which were in his line of sight.

Ada is interested in the rightmost building that was shot by the murderer. Since we don't know the building from which the murderer was shooting, your task is to calculate it for every possible initial position.

### Input

The first line of input contains one number **T**, the number of test cases. **T** test cases follows. The first line of each test case contains an integer **n**, the number of buildings. The next **n** lines contains two integers **xi**, **hi**. the position and height of the i-th building.

### Output

For each testcase print **n** integers: **ai**, the rightmost building shot at, if the murderer started at building **i**. If the murderer didn't shoot to any building, print -1.

### Constraints

11. 1 ≤ **n** ≤ 105
12. 1 ≤ **xi, hi** ≤ 106
13. **xi** < **xi+1**, for all 1 ≤ **i** < n
14. No two different buildings are of the same height
15. The sum of **n** over all test cases is at most 5 \* 105
### Example

<pre>
<b>Input:</b>
1
7
1 130
65 110
120 40
160 60
240 100
280 65
320 30

<b>Output:</b>
5 5 -1 -1 7 7 -1

</pre>### Explanation
![](https://codechef_shared.s3.amazonaws.com/download/upload/COOK83/detective.png)The lines of shooting are shown in the figure above.

From building 1, buildings 2 and 5 are shot. As the rightmost is building 5, that is the answer for building 1. Note that from building 1 is not possible to shoot at building 4 (dotted line) because building 2 obstructs the line of sight.

From building 2, buildings 3, 4 and 5 are shot. From building 3 and 4, no building is shot at. Hence the third and fourth outputs are -1.
