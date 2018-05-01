---
category_name: hard
problem_code: MGCHGYM
problem_name: 'Misha and Gym'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 26-08-2015
tags:
    - bitset
    - dynamic
    - medium
    - mgch
    - oct15
    - treap
editorial_url: 'http://discuss.codechef.com/problems/MGCHGYM'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493556772
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/MGCHGYM.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/MGCHGYM.pdf) 

When Misha hits his favorite gym, he comes across an interesting problem with the [barbell](https://en.wikipedia.org/wiki/Barbell). In the gym, someone always leaves the weight plates in the strangest places you can imagine and sometime it's difficult to equip the barbell the way you want. Let's imagine that you have **N** weight plates placed in any order (remember that any gym has no more than **K** different types of weight plates and all weights are [square-free](https://en.wikipedia.org/wiki/Square-free_integer)). As a preliminary step towards solving this problem, Misha wants to simulate a simple gym, and for this purpose you have to deal with some queries:

- \[**1 I X**\] Set the weight of the **ith** weight plate to value **X**.
- \[**2 L R**\] Reverse the sequence of weight plates in the interval from **L** to **R**, where **1** ≤ **L** ≤ **R** ≤ **N**.
- \[**3 L R W**\] Check the interval from **L** to **R** to find out if you can make the weight **W** using only weight plates on this interval. (**Note**: this type of query will appear no more than **P** times)

Please help Misha in solving this problem.

### Input

First line of input contains the number of weight plates **N**, and number of queries **Q**. Next line contains **N** integers **w1**, **w2**, ..., **wN**, where **wi** is the weight of the **ith** weight plate. Next **Q** lines contain some queries described above.

### Output

For all queries of the third type: print "**Yes**" if your check returns a positive outcome, and "**No**" otherwise.

### Constraints

- 1 ≤ **N**, **W**, **Q** ≤ 105
- **K** ≤ 10
- **P** ≤ 1000
- All numbers in the input are positive integers and ≤ **105**.
- All the weights are square-free.

### Subtasks

- **Subtask 1:** 1 ≤ **N** ≤ 103, 1 ≤ **W** ≤ 103, **Q** = 1 - **10 pts**.
- **Subtask 2:** 1 ≤ **N** ≤ 103, 1 ≤ **W** ≤ 103, 1 ≤ **Q** ≤ 103, **P** ≤ 100 - **15 pts**
- **Subtask 3:** 1 ≤ **N** ≤ 104, 1 ≤ **W** ≤ 104, 1 ≤ **Q** ≤ 104, **P** ≤ 300 - **25 pts**.
- **Subtask 4:** 1 ≤ **N** ≤ 105, 1 ≤ **W** ≤ 105, 1 ≤ **Q** ≤ 105, **K** ≤ 2 - **20 pts**.
- **Subtask 5:** Original constraints - **30 pts**.

### Example

#### First

<pre>
<b>Input:</b>
<tt>5 10
1 2 3 5 6
3 2 3 3
3 2 3 4
3 2 3 5
2 2 5
3 2 4 8
1 2 1
3 2 4 8
2 1 4 
3 2 4 3 
3 1 5 7 </tt>

<b>Output:</b>
<tt>Yes
No
Yes
Yes
Yes
No
Yes</tt>
</pre>#### Second

<pre>
<b>Input:</b>
<tt>3 4
2013 2015 2017
3 1 3 4030
1 1 111
3 1 3 4030
3 1 2 111</tt>

<b>Output:</b>
<tt>Yes
No
Yes</tt>
</pre>### Explanation:

##### First test explanation (step by step)

<pre>
1 2 3 5 6
3 2 3 3 (<b>[2, 3]</b> 3=3 => <b>Yes</b>)
3 2 3 4 (<b>[2, 3]</b> can't make 4 => <b>No</b>)
3 2 3 5 (<b>[2, 3]</b> 2+3=5 => <b>Yes</b>)
2 2 5 (<b>Reverse</b>: [1,<b> 6, 5, 3, 2</b>])
3 2 4 8 (<b>[6, 5, 3]</b> 5+3=8 => <b>Yes</b>)
1 2 1 (<b>Set</b>: [1,<b> 1,</b> 5, 3, 2])
3 2 4 8 (<b>[1, 5, 3]</b> 5+3=8 => <b>Yes</b>)
2 1 4  (<b>Reverse</b>: [<b>3, 5, 1, 1</b>, 2])
3 2 4 3 (<b>[5, 1, 1]</b> can't make 3 => <b>No</b>)
3 1 5 7 (<b>[3, 5, 1, 1, 2]</b> 2+1+1+3=7 => <b>Yes</b>)
</pre>