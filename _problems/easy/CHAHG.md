---
category_name: easy
problem_code: CHAHG
problem_name: 'Chef and His Garden'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: xcwgf666
date_added: 23-02-2015
tags:
    - aug16
    - easy
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/CHAHG'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/CHAHG.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/CHAHG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/CHAHG.pdf) as well.

Chef is an advocate for Go Green Initiative. Today he had **n** trees planted in a row outside his his restaurant. Today, the height of **i**-th tree is **hi** feet. The trees grow at a rate of **mi** feet per day.

Chef knows that trees will look beautiful if they form a *zig-zag* sequence. The trees will be said to be in *Zig-zag* sequence if the heights of tree first increases or decreases, then alternates between decreasing/increasing respectively. Formally, the trees will be said to in *Zig-zag* sequence if one of the following two conditions holds.

- **h1 2 &gt; h3 4** and so on..
- **h1 &gt; h2 3 &gt; h4** and so on..

Chef wants to know intervals of time when the heights of the trees will form a *zig-zag* sequence.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **n**, denoting the number of trees.

The **ith** of following **N** lines contains two space separated integers **hi** and **mi**, denoting the initial height and the growth speed for **i**th tree.

### Output

For each test case, output an integer **Q** - the amount of the periods of consecutive moments of time, when the trees for a zig-zag sequence.

On the following **Q** lines, output the intervals of time when the trees' heights form a zig-zag sequence. For each intervals, output its' smallest and the largest instants of time. If the range is infinite, output Inf as the right bound.

The test cases are designed in such a way that the total output won't exceed 2 MB.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **n** ≤ **10**
- Subtask 1 (23 points): 0 ≤ ****hi**, **mi**** ≤ **10**
- Subtask 2 (77 points): 0 ≤ ****hi**, **mi**** ≤ **109**
- **1** ≤ sum of **n** over a test cases in a single test file ≤ **5 × 105**

### Example

<pre><b>Input:</b>
<tt>3
3
0 1
2 2
0 3
2
2 1
1 2
3
1 1
2 2
3 3</tt>

<b>Output:</b>
<tt>1
0 1
2
0 0
2 Inf
0</tt>
</pre>
### Explanation

**Example case 1.** In the first case **0 2 0** is already a *zig-zag* sequence, but on the 2nd second it will become **2 6 6** and will never turn back into *zig-zag*
