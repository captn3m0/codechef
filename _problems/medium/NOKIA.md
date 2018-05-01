---
category_name: medium
problem_code: NOKIA
problem_name: 'Connecting Soldiers'
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
problem_author: flying_ant
problem_tester: laycurse
date_added: 7-06-2012
tags:
    - cook23
    - flying_ant
    - recursion
    - simple
editorial_url: 'http://discuss.codechef.com/problems/NOKIA'
time:
    view_start_date: 1339959713
    submit_start_date: 1339959713
    visible_start_date: 1339959300
    end_date: 1735669800
    current: 1493557822
layout: problem
---
All submissions for this problem are available.To protect people from evil, a long and tall wall was constructed a few years ago. But just a wall is not safe, there should also be soldiers on it, always keeping vigil. The wall is very long and connects the left and the right towers. There are exactly **N** spots (numbered 1 to **N**) on the wall for soldiers. The _K_th spot is _K_ miles far from the left tower and (**N**+1-_K_) miles from the right tower.

Given a permutation of spots _P_ of {1, 2, ..., **N**}, soldiers occupy the **N** spots in that order. The _P_\[_i_\]th spot is occupied before the _P_\[_i_+1\]th spot. When a soldier occupies a spot, he is connected to his nearest soldier already placed to his left. If there is no soldier to his left, he is connected to the left tower. The same is the case with right side. A connection between two spots requires a wire of length equal to the distance between the two.

The realm has already purchased a wire of **M** miles long from Nokia, possibly the wire will be cut into smaller length wires. As we can observe, the total length of the used wire depends on the permutation of the spots _P_. Help the realm in minimizing the length of the unused wire. If there is not enough wire, output -1.

### Input

First line contains an integer **T** (number of test cases, 1 ≤ **T** ≤ 10 ). Each of the next **T** lines contains two integers **N M**, as explained in the problem statement (1 ≤ **N** ≤ 30 , 1 ≤ **M** ≤ 1000).

### Output

For each test case, output the minimum length of the unused wire, or -1 if the the wire is not sufficient.

### Example

<pre>
<b>Input:</b>
4
3 8
3 9
2 4
5 25

<b>Output:</b>
0
0
-1
5
</pre>

**Explanation:**
In the 1st case, for example, the permutation _P_ = {2, 1, 3} will use the exact 8 miles wires in total.

In the 2nd case, for example, the permutation _P_ = {1, 3, 2} will use the exact 9 miles wires in total.

To understand the first two cases, you can see the following figures:
![](http://www.codechef.com/download/NOKIA1.png)


![](http://www.codechef.com/download/NOKIA2.png)


In the 3rd case, the minimum length of wire required is 5, for any of the permutations {1,2} or {2,1}, so length 4 is not sufficient.

In the 4th case, for the permutation {1, 2, 3, 4, 5} we need the maximum length of the wire = 20. So minimum possible unused wire length = 25 - 20 = 5.
