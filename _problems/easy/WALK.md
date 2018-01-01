---
category_name: easy
problem_code: WALK
problem_name: Walk
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
problem_author: berezin
problem_tester: whiteking
date_added: 21-01-2014
tags:
    - berezin
    - cakewalk
    - march14
    - programming
editorial_url: 'http://discuss.codechef.com/problems/WALK'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH14/mandarin/WALK.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/WALK.pdf).

Chef and his girlfriend are going to have a promenade. They are walking along the straight road which consists of segments placed one by one. Before walking Chef and his girlfriend stay at the beginning of the first segment, they want to achieve the end of the last segment.

There are few problems:

- At the beginning Chef should choose constant integer - the velocity of mooving. It can't be changed inside one segment.
- The velocity should be decreased by at least 1 after achieving the end of some segment.
- There is exactly one shop on each segment. Each shop has an attractiveness. If it's attractiveness is **W** and Chef and his girlfriend move with velocity **V** then if **V** < **W** girlfriend will run away into the shop and the promenade will become ruined.

 Chef doesn't want to lose her girl in such a way, but he is an old one, so you should find the minimal possible velocity at the first segment to satisfy all conditions.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of segments. The second line contains **N** space-separated integers **W1**, **W2**, ..., **WN** denoting the attractiveness of shops.

### Output

- For each test case, output a single line containing the minimal possible velocity at the beginning.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **10^5**
- **1** ≤ **Wi** ≤ **10^6**

### Example

<pre><b>Input:</b>

2
5
6 5 4 3 2
5
3 4 3 1 1

<b>Output:</b>

6
5

</pre>### Explanation
**Example case 1.**

 If we choose velocity 6, on the first step we have 6 >= 6 everything is OK, then we should decrease the velocity to 5 and on the 2nd segment we'll receive 5 >= 5, again OK, and so on.

**Example case 2.**

 If we choose velocity 4, the promanade will be ruined on the 2nd step (we sould decrease our velocity, so the maximal possible will be 3 which is less than 4).
